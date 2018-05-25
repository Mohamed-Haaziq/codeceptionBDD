Feature: room5 contact form

  Scenario: 01 - Fill contact form

    Given user view room5
    Then verify the availability of the application
    When user click on contact form link
    And user fills contact form with following details
      |Field        |Value                    |
      |Message area |Test meesage            |
      |Full name    |Haaziq Hamza            |
      |Email        |haaziq.hamza@trivago.com|
    Then user submit the form

