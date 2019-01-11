<?php namespace Smarty\SmartyPortfolio;

class SmartyPortfolio extends \Smarty
{
    //static properties
    const TEMPLATES = array(INDEX => 'index.tpl');

    //constructor
    function __construct()
    {
        //setup parent
        parent::__construct();

        //set template directories
        $this->setTemplateDir(__DIR__ . "/../../../templates/portfolio/templates");
        $this->setCompileDir(__DIR__ . "/../../../templates/portfolio/templates_c");
        $this->setConfigDir(__DIR__ . "/../../../templates/portfolio/configs");
        $this->setCacheDir(__DIR__ . "/../../../templates/portfolio/cache");

        //set other attributes
        $this->assign("Vulpine Interactive Porfolio");
    }
}

?>