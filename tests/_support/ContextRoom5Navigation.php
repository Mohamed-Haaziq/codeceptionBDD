<?php

class ContextRoom5Navigation extends \AcceptanceTester
{
    public static $destination;

    /**
     * @When user click menu
     */
    public function clickOnMenu()
    {
        $this->click(objectMap::$homePageMenuIcon);
    }

    /**
     * @Then menu should be displayed
     */
    public function checkAvailabilityOfMenu()
    {
        $this->waitForElementVisible(objectMap::$homePageMenu,30);
    }

    /**
     * @When user click on :destination
     */
    public function clickOnDestination($destination)
    {
        self::$destination=$destination;
        $_destinationName="//a[contains(.,'".self::$destination."')]";
        $this->click($_destinationName);
    }

    /**
     * @Then user should be redirected to correct destination
     */
    public function redirectToDestination()
    {
        $_destinationLandingPage="//h1[contains(.,'".self::$destination."')]";
        $this->waitForElementVisible($_destinationLandingPage,30);
    }


}

?>