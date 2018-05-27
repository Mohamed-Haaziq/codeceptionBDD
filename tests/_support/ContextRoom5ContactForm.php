<?php

class ContextRoom5ContactForm extends \AcceptanceTester
{
    /**
     * This method is to invoke contact page
     * @When user click on contact form link
     */
    public function clickOnContactForm()
    {
        $this->scrollTo(objectMap::$linkToContactForm);
        $this->click(objectMap::$linkToContactForm);
    }

    /**
     * This method is to fill contact form
     * @When user fills contact form with following details
     */
    public function fillContactForm(\Behat\Gherkin\Node\TableNode $table)
    {
        $this->switchToNextTab();
        $this->wait(5);
        $value= $table->getHash();

        foreach ($value as $row)
        {

            if($row['Field']=='Message area')
            {
                $this->fillField(objectMap::$contactFormMessageArea,$row['Value']);
            }
            elseif ($row['Field']=='Full name')
            {
                $this->fillField(objectMap::$contactFormName,$row['Value']);
            }
            elseif ($row['Field']=='Email')
            {
                $this->fillField(objectMap::$contactFormEmail,$row['Value']);
            }
        }
    }

    /**
     * This method is to tick checkbox in contact page
     * @When user tick the checkbox
     */
    public function clickOncheckBox()
    {
        $this->click(objectMap::$checkBoxContactForm);
    }

    /**
     * This method is to submit contact form
     * @When user submit the contact form
     */
    public function submitForm()
    {
        $this->scrollTo(objectMap::$submitButton);
        $this->wait(2);
        $this->waitForElementVisible(objectMap::$submitButton,30);
        $this->click(objectMap::$submitButton);
    }

    /**
     * This method is to validate successful contact form submission
     * @Then user receives successful submission notification
     */
    public function recieveNotification()
    {
        $this->waitForElementVisible(objectMap::$notificationForm,30);
    }
}

?>