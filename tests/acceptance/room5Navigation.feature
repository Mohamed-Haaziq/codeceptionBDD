Feature: Navigation through menu

 Scenario: 01 - Navigate to a destination through the menu on the top left

  Given user view room5
  Then verify the availability of the application
  When user click menu
  Then menu should be displayed
  When user click on "Midwest"
  Then user should be redirected to correct destination
