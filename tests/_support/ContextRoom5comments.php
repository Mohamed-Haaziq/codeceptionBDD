<?php

class ContextRoom5comments extends \AcceptanceTester
{
    /**
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
     * @When user submit the comment
     */
    public function submitComment()
    {
        $this->wait(2);
        $this->scrollTo(objectMap::$submitComment);
        $this->click(objectMap::$submitComment);
    }

    /**
     * @Then comment should be succesully added
     */
    public function validateAddingComment()
    {
        $this->waitForElementVisible(objectMap::$commentValidationMessage,30);
    }
}

?>