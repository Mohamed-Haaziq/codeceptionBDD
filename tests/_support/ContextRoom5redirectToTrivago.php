<?php

class ContextRoom5redirectToTrivago extends \AcceptanceTester
{

    public static $mainArticle;
    public static $firstHotelNameInArticle;

    /**
     * @When user click on main article in editors pick
     */
    public function clickOnMainArticleInEditorPick()
    {
        $mainArticleTitle=$this->grabTextFrom(objectMap::$mainArticleInEditorPick);
        self::$mainArticle=$mainArticleTitle;
        $this->click(objectMap::$mainArticleInEditorPick);
    }

    /**
     * @Then user should be redirected to correct article
     */
    public function validateRedirectionToMainArticle()
    {
        $this->waitForElementVisible(objectMap::$mainArticleNamePath,30);
        $mainArticleNameInArticle=$this->grabTextFrom(objectMap::$mainArticleNamePath);

        if ($mainArticleNameInArticle == self::$mainArticle)
        {
            $output = new \Codeception\Lib\Console\Output([]);
            $output->writeln("Article validation passed");
            codecept_debug("Article validation passed");
        }
        else
        {
            throw new Exception("Article validation failed");
        }

    }

    /**
     * @When user click on first View Resort button in the article
     */
    public function clickOnViewResort()
    {
        $firstHotelName=$this->grabTextFrom(objectMap::$firstHotelNameInArticle);
        self::$firstHotelNameInArticle = $firstHotelName;
        $this->wait(5);
        $this->executeJS('return $("' . objectMap::$path . '").get(0).click()');
    }

    /**
     * @Then user should be redirected to correct hotel in trivago search page
     */
    public function redirectionToTrivago()
    {
        codecept_debug(self::$firstHotelNameInArticle);
        $this->switchToNextTab();
        $this->wait(15);
        $this->waitForElementVisible(objectMap::$hotelNameInTrivago);
        $hotelNameInsearchBar=$this->grabTextFrom(objectMap::$hotelNameInTrivago);

        if ($hotelNameInsearchBar == self::$firstHotelNameInArticle)
        {
            $output = new \Codeception\Lib\Console\Output([]);
            $output->writeln("Hotel name validation passed");
            codecept_debug("Hotel name validation passed");
        }
        else
        {
            throw new Exception("Hotel name validation failed");
        }
    }
}

?>