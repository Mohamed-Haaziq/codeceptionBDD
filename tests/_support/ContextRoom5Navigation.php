<?php

class ContextRoom5Navigation extends \AcceptanceTester
{
    public static $destination;

    /**
     * This method is to click on Menu icon in header
     * @When user click menu
     */
    public function clickOnMenu()
    {
        $this->click(objectMap::$homePageMenuIcon);
    }

    /**
     * This method is to validate the availability of the menu
     * @Then menu should be displayed
     */
    public function checkAvailabilityOfMenu()
    {
        $this->waitForElementVisible(objectMap::$homePageMenu,30);
    }

    /**
     * This method is to click on destination in menu
     * @When user click on :destination
     */
    public function clickOnDestination($destination)
    {
        self::$destination=$destination;
        $_destinationName="//a[contains(.,'".self::$destination."')]";
        $this->click($_destinationName);
    }

    /**
     * This method is to redirect user to correct destination articles
     * @Then user should be redirected to correct destination
     */
    public function redirectToDestination()
    {
        $_destinationLandingPage="//h1[contains(.,'".self::$destination."')]";
        $this->waitForElementVisible($_destinationLandingPage,30);
    }


}

?>