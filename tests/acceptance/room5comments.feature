Feature: room5 redirect comments

  Scenario: 01 - room5 test adding comments functionality

    Given user visits room5
    When user click on main article in editors pick
    Then user should be redirected to correct article
    When user type following in comment section
      |Field        |Value                   |
      |Message area |Test comment            |
      |Email        |haaziq.hamza@trivago.com|
      |Full name    |Haaziq Hamza            |
    And user submit the comment
    Then comment should be succesully added