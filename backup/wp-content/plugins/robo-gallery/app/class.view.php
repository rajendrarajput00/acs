<?php

/* 
*      Robo Gallery     
*      Version: 2.8.18 - 73747
*      By Robosoft
*
*      Contact: https://robosoft.co/robogallery/ 
*      Created: 2015
*      Licensed under the GPLv2 license - http://opensource.org/licenses/gpl-2.0.php

 */

class rbsGalleryClassView{

	private $templatePath = '';

	public function __construct( $templatePath ){
		
		if (!file_exists($templatePath)) {
			throw new Exception( "Could not find template path. Template: {$templatePath}");
		} else {
			$this->templatePath =$templatePath;
		}
		
	}

	public function render($template, array $vars = array())
	{
		$templatePath = $this->templatePath . $template . '.tpl.php';

		if (!file_exists($templatePath)) {
			throw new Exception( "Could not find template. Template: {$template}");
		}
		extract($vars);
		require $templatePath;
	}

	/**
	 * @param string $template
	 * @param array $vars
	 * @return string
	 */
	public function content($template, array $vars = array())
	{
		ob_start();
		$this->render($template, $vars);
		$content =  ob_get_clean();
		//ob_clean();

		return $content;
	}
}
