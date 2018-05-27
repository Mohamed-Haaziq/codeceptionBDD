Feature: room5 contact form

  Scenario: 01 - Fill contact form

    Given user visits room5
    When user click on contact form link
    And user fills contact form with following details
      |Field        |Value                    |
      |Message area |Test meesage            |
      |Full name    |Haaziq Hamza            |
      |Email        |haaziq.hamza@trivago.com|
    And user tick the checkbox
    And user submit the contact form
    Then user receives successful submission notification

