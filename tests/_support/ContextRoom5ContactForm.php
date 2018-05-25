<?php

class ContextRoom5ContactForm extends \AcceptanceTester
{
    /**
     * @When user click on contact form link
     */
    public function clickOnContactForm()
    {
        $this->scrollTo(objectMap::$linkToContactForm);
        $this->click(objectMap::$linkToContactForm);
    }

    /**
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
     * @Then user submit the form
     */
    public function submitForm()
    {
        $this->click(objectMap::$submitButton);
    }


}

?>