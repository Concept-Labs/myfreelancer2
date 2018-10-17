<?php
Class Controller_Hurtovabaza Extends Controller_Base 
{
  protected function _initTemplate($title)
  {
    $this->_baseTemplate->addCss('styles/main.css');
		//єто файл templates/index.phtml
    return parent::_initTemplate($title);

  }

  public function index() 
  {

    $template = $this->_initTemplate('Hurtova Baza');

    $template->setFile('templates/hurtovabaza.phtml');

    $this->_renderLayout($template);
  }
}