<?php
Class Controller_Agrobaza Extends Controller_Base 
{
  protected function _initTemplate($title)
  {
    $this->_baseTemplate->addCss('styles/main.css');
		//єто файл templates/index.phtml
    return parent::_initTemplate($title);

  }

  public function index() 
  {

    $template = $this->_initTemplate('Agro Baza');

    $template->setFile('templates/agrobaza.phtml');

    $this->_renderLayout($template);
  }
}