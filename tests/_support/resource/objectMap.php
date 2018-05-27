<?php

//namespace data;

class objectMap
{
    //locators in ContextRoom5Search.php
    public static $editorsPickSectionHeader = '//h2[contains(.,"Editor\'s Pick")]';
    public static $searchIcon=".search-icon";
    public static $searchBar="input.input";
    public static $articleExists ="h1.section-title";
    public static $articleNotExists ="div.container-wide:nth-child(3) > h3:nth-child(1)";
    public static $articleNames="//article[@data-index=";

    //locators in ContextRoom5ContactForm.php
    public static $linkToContactForm="//*[contains(@href,'contact')]";
    public static $contactFormMessageArea="//textarea[@class='contact-msg']";
    public static $contactFormName="//input[@class='contact-input']";
    public static $contactFormEmail="//input[@id='contact-email']";
    public static $submitButton="//button[@class='contact-submit']";
    public static $checkBoxContactForm="//input[@id='confirm']";
    public static $notificationForm="//p[@class='feedback']";

    //locators in ContextRoom5subscribe.php
    public static $subscribeCheckBox="//input[@id='confirm']";
    public static $subscribeEmailBox="//input[@name='email']";
    public static $subscribeSubmitButton="//button[@class='submit']";
    public static $subscribeNotification="//p[@class='submitted'][contains(.,'You are now checked-in!')]";

    //locators in ContextRoom5Navigation.php
    public static $homePageMenuIcon="//div[@id='app']/div/header/div/div/div";
    public static $homePageMenu="//a[contains(.,'Destination')]";

    //locators in ContextRoom5redirectToTrivago.php
    public static $mainArticleInEditorPick="//article[@class='post row' and @data-index='1']/div/p/a";
    public static $mainArticleNamePath="//h1";
    public static $firstHotelNameInArticle="//div[@class='left']/h2";
    public static $viewResort="//a[contains(.,'View Resort')]";
    public static $path="html body div#app.between-xs.col.col-xs-12 div.content-wrapper article.single-posts-wrapper div#best-all-inclusive-family-resorts.article.single-post div.container.article-body div.center div.btn-wrap a.cip-s.btn.btn-primary.btn-lg.room5-button.cip__attached";
    public static $hotelNameInTrivago="//h3[@class='name__copytext m-0 item__slideout-toggle']";

    //locators in ContextRoom5comments.php
    public static $commentFormMessageArea="//textarea[@class='comment-text']";
    public static $commentFormName="//input[@class='commenter-email']";
    public static $commenttFormEmail="//input[@class='commenter-name']";
    public static $submitComment="//button[@class='submit-comment']";
    public static $commentValidationMessage="//div[@class='feedback-ok']";
}

?>