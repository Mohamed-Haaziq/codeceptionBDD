<?php

class ContextRoom5subscribe extends \AcceptanceTester
{
    /**
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
     * @When user input email id :email
     */
    public function inputEmail($email)
    {
        $this->fillField(objectMap::$subscribeEmailBox,$email);
    }

    /**
     * @When user click on inspire me button
     */
    public function submitSubscribe()
    {
        $this->click(objectMap::$subscribeSubmitButton);
    }

    /**
     * @Then notification should be visible saying user has subscribed
     */
    public function checkSubscribeNotification()
    {
        $this->waitForElementVisible(objectMap::$subscribeNotification,30);
    }
}

?>