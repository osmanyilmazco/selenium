<?php

/**
 * Class BotTest
 */
class BotTest extends PHPUnit_Framework_TestCase
{
    /**
     * @terminal: ./vendor/bin/phpunit -c test
     *
     * testBot()
     */
    public function testBot()
    {
        $host   = 'http://localhost:4444/wd/hub';
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
        $driver->get('http://www.google.com.tr');
        $searchField = $driver->findElement(WebDriverBy::name('q'));
        $searchField->sendKeys('zerg rush');
        $searchField->sendKeys(WebDriverKeys::ENTER);

        while (true) {
            $zerLings = $driver->findElements(WebDriverBy::className('zr_zergling_container'));

            foreach ($zerLings as $zerLing) {
                $zerLing->click();
            }

            sleep(0.2);
        }
    }
}