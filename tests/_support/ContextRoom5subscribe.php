<?php

class ContextRoom5subscribe extends \AcceptanceTester
{
    /**
     * This method is to tick checkbox in subscribe section
     * @When user tick checkbox
     */
    public function clickOnContactForm()
    {
        $this->waitForElementVisible(objectMap::$subscribeCheckBox,30);
        $this->scrollTo(objectMap::$subscribeCheckBox);
        $this->wait(2);
        $this->click(objectMap::$subscribeCheckBox);
    }

    /**
     * This method is to provide email in subscribe section
     * @When user input email id :email
     */
    public function inputEmail($email)
    {
        $this->fillField(objectMap::$subscribeEmailBox,$email);
    }

    /**
     * This method is to click on subscribe button
     * @When user click on inspire me button
     */
    public function submitSubscribe()
    {
        $this->click(objectMap::$subscribeSubmitButton);
    }

    /**
     * This method is to validate correct subscription
     * @Then notification should be visible saying user has subscribed
     */
    public function checkSubscribeNotification()
    {
        $this->waitForElementVisible(objectMap::$subscribeNotification,30);
    }
}

?>