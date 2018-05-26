Feature: room5 search

  Scenario: 01 - Search for any location on Room5 by using the search bar

      Given user view room5
      Then verify the availability of the application
      When user click on search icon
      And user type "Sri Lanka" in the search bar
      And press enter
      Then user should be able to see related articles

