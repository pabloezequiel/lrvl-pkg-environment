<?php namespace Pabloezequiel\Flag;

use App, View, Config;

class Flag {

    /**
     * Flag list
     *
     * @var array
     */
    private $_environments;

    /**
     * Initialize the flag flag
     *
     * @param array $environments List of environments to be flagged
     */
    public function __construct(array $environments = array())
    {
        $this->_environments = $environments;
    }

    /**
     * Render the flag
     *
     * @return void
     */
    public function render()
    {
        foreach ($this->_environments as $name => $group)
        {
            if (is_array($group))
            {
                foreach ($group as $flag)
                {
                    if (App::environment() === $flag)
                    {
                        App::after(function($request, $response) use ($name)
                        {
                            if($response instanceof \Illuminate\Http\Response)
                            {
                                $content = $response->getOriginalContent();

                                // Append the flag just before the closing body tag
                                if(strpos($content, '</body>') !== FALSE)
                                {
                                    $content = str_replace(
                                        '</body>',
                                        "\n".View::make(Config::get('flag::template'),
                                        array('flag' => $name))."\n</body>",
                                        $content
                                    );
                                }

                                $response->setContent($content);
                            }
                        });
                    }
                }
            }
        }
    }

}
