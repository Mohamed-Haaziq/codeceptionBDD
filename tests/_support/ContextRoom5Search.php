<?php

require ("resource/objectMap.php");
require ("resource/dataDictionary.php");

class ContextRoom5Search extends \AcceptanceTester
{
    protected static $searchString;

    /**
     * @Given user view room5
     */
    public function viewRoom5()
    {

        $URL = '';
        $this->amOnPage($URL);
        $this->wait(5);
    }

    /**
     * @Then verify the availability of the application
     */
    public function verifyRedirectionToMainPage()
    {
       $this->waitForElementVisible(objectMap::$editorsPickSectionHeader,30);
    }

    /**
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
     * @When user type :searchString in the search bar
     */
    public function typeStringInSearchBar($searchString)
    {
        self::$searchString = $searchString;
        $this->fillField(objectMap::$searchBar,$searchString);
    }


    /**
     * @When press enter
     */
    public function pressEnter()
    {
        $this->pressKey(objectMap::$searchBar,WebDriverKeys::ENTER);
    }

    /**
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
                $_articleNames="//article[@data-index='$i']/a";
                $articleTitle=$this->grabAttributeFrom($_articleNames,'href');
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