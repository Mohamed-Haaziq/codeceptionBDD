<?php

require ("resource/objectMap.php");

class ContextRoom5Search extends \AcceptanceTester
{
    protected static $searchString;

    /**
     * This method is to view room5
     * @Given user visits room5
     */
    public function viewRoom5()
    {

        $URL = '';
        $this->amOnPage($URL);
        $this->wait(5);
    }

    /**
     * This method is to verify the availability of room5
     * @Then verify the availability of the application
     */
    public function verifyRedirectionToMainPage()
    {
       $this->waitForElementVisible(objectMap::$editorsPickSectionHeader,30);
    }

    /**
     * This method is to click on search icon
     * @When user click on search icon
     */
    public function userClickSearchIcon()
    {
        $this->waitForElementVisible(objectMap::$searchIcon,30);
        $this->click(objectMap::$searchIcon);

        //Then wait for search bar to appear
        $this->waitForElementVisible(objectMap::$searchBar,30);
    }

    /**
     * This method is to search articles
     * @When user type :searchString in the search bar
     */
    public function typeStringInSearchBar($searchString)
    {
        self::$searchString = $searchString;
        $this->fillField(objectMap::$searchBar,$searchString);
    }


    /**
     * This method is to press enter in article search
     * @When press enter
     */
    public function pressEnter()
    {
        $this->pressKey(objectMap::$searchBar,WebDriverKeys::ENTER);
    }

    /**
     * This method is to validate search results
     * @Then user should be able to see related articles
     */
    public function seeArticles()
    {
        $this->wait(5);
        try
        {
            $_availabilityOfArticle=$this->grabTextFrom(objectMap::$articleExists);
            if($_availabilityOfArticle=="NO RESULTS")
            {
                $output = new \Codeception\Lib\Console\Output([]);
                $output->writeln("There isn't any article availble for search string");
                codecept_debug("There isn't any article availble for search string");
            }
        }
        catch (Exception $e)
        {
            $_availabilityOfArticle=$this->grabTextFrom(objectMap::$articleNotExists);
            $output = new \Codeception\Lib\Console\Output([]);
            $output->writeln("Articles are availble");

            for($i=1; $i<= 3; $i++)
            {
                $articleTitle=$this->grabAttributeFrom(objectMap::$articleNames."'".$i."']/a",'href');
                codecept_debug($articleTitle);

                if (stripos($articleTitle,self::$searchString))
                {
                    $output->writeln("There is article availble for search string");
                    codecept_debug("There is article availble for search string");
                }
            }
        }
    }

}