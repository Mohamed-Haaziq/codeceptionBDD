Feature: room5 redirect to trivago

  Scenario: 01 - room5 redirect to trivago from first article in editor's pick

    Given user visits room5
    When user click on main article in editors pick
    Then user should be redirected to correct article
    When user click on first View Resort button in the article
    Then user should be redirected to correct hotel in trivago search page