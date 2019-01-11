<?php
declare(strict_types=1);

//import classes
require __DIR__ . "/../src/Smarty/SmartyPorfolio/SmartyPorfolio.php";
use Smarty\SmartyPortfolio\SmartyPortfolio;
use PHPUnit\Framework\TestCase;

class SmartyPortfolioTest extends TestCase 
{
    public function testTemplateDirectorySet() {
        $smarty = new SmartyPortfolio;
        $this->assertDirectoryExists($smarty->template_dir[0]);
    }

    public function testCompileDirectorySet() {
        $smarty = new SmartyPortfolio;
        $this->assertDirectoryExists($smarty->compile_dir[0]);
    }

    public function testConfigDirectorySet() {
        $smarty = new SmartyPortfolio;
        $this->assertDirectoryExists($smarty->config_dir[0]);
    }

    public function testCacheDirectorySet() {
        $smarty = new SmartyPortfolio;
        $this->assertDirectoryExists($smarty->cache_dir[0]);
    }

    public function testIndexTemplateFound() {
        $smarty = new SmartyPortfolio;
        $this->assertEquals('index.tpl', $smarty::TEMPLATES[INDEX]);
    }
}

?>