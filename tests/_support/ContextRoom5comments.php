<?php

class ContextRoom5comments extends \AcceptanceTester
{
    /**
     * This method is to give input into comment section
     * @When user type following in comment section
     */
    public function typeInCommentSection(\Behat\Gherkin\Node\TableNode $table)
    {
        $value= $table->getHash();

        foreach ($value as $row)
        {

            if($row['Field']=='Message area')
            {
                $this->fillField(objectMap::$commentFormMessageArea,$row['Value']);
            }
            elseif ($row['Field']=='Email')
            {
                $this->fillField(objectMap::$commentFormName,$row['Value']);
            }
            elseif ($row['Field']=='Full name')
            {
                $this->fillField(objectMap::$commenttFormEmail,$row['Value']);
            }
        }
    }

    /**
     * This method is to submit the comment
     * @When user submit the comment
     */
    public function submitComment()
    {
        $this->wait(2);
        $this->scrollTo(objectMap::$submitComment);
        $this->click(objectMap::$submitComment);
    }

    /**
     * This method is to validate the successful submission of the comment
     * @Then comment should be successfully added
     */
    public function validateAddingComment()
    {
        $this->waitForElementVisible(objectMap::$commentValidationMessage,30);
    }
}

?>