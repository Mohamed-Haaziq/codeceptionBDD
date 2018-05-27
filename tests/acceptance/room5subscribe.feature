Feature: Subscribe to the Newsletter

  Scenario: 01 - Subscribe to the Newsletter

    Given user visits room5
    Then verify the availability of the application
    When user tick checkbox
    And user input email id "haaziq.hamza@trivago.com"
    And user click on inspire me button
    Then notification should be visible saying user has subscribed
