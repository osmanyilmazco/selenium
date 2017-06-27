<?php

/**
 * Class SearchTermTest
 */
class SearchTermTest extends PHPUnit_Framework_TestCase
{
    /**
     * testSearch
     */
    public function testSearch()
    {
        $host   = 'http://localhost:4444/wd/hub';
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
        $driver->get('http://www.google.com.tr');

        $driver->findElement(WebDriverBy::name('q'))
            ->sendKeys('veteriner sitesi')
            ->sendKeys(WebDriverKeys::ENTER);
    }
}