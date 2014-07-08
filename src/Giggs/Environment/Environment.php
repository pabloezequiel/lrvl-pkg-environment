<?php namespace Giggs\Environment;

use App, View, Config;

class Environment {

	/**
	 * Environment list
	 *
	 * @var array
	 */
	private $_environments;

	/**
	 * Initialize the environment flag
	 *
	 * @param array $environments List of environments to be flaged
	 */
	public function __construct(array $environments = array())
	{
		$this->_environments = $environments;
	}

	/**
	 * Render the environment flag
	 *
	 * @return void
	 */
	public function renderFlag()
	{
		foreach ($this->_environments as $name => $group)
		{
			if (is_array($group))
			{
				foreach ($group as $environment)
				{
					if (App::Environment() === $environment)
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
										"\n".View::make(Config::get('environment::config.template'),
										array('environment' => $name))."\n</body>",
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
