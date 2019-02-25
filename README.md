# Personal-Homepage
Custom Homepage / New Tab featuring several APIs to create a highly informative dashboard.

This is a simple HTML / CSS / JavasScript project made by Neptuniam in order to properly practice many web development techniques.
The 134 Homepage can be seen at: https://ljones.ca/Personal-Homepage/.

------
### The Homepage integrates several APIs and technqiues to include several useful features:
#### The Browser Card Features Include:
 * Real-time Clock and Date
 * Google Search
 * Favourites Pages Icon Links
 
#### The Dashboard Card Features Include:
 * Location Services
 * Current Location Weather Information
 * Weekly Forecast Information
 * Search Cities for Updated Weather Information
 * Google Maps Transit times to and from my Universities campus
 * Transit type icon is a link to a Google Maps page displaying all travel information
 * Calendar information outlining due dates for assignments

------
### The APIs used to make this webpage happen include:
 * Google Maps: https://cloud.google.com/maps-platform/routes/
 * Yahoo Weathers: https://developer.yahoo.com/weather/documentation.html
    <br>Retired and was eventually replaced by APIXU
 * APIXU Weather: https://www.apixu.com/api.aspx
 * Soon: Outlook Calendar.
------
### Commands:
#### The Homepage allows for certain commands to be entered in the current location text box. <br>
These commands include the following: 

| Input             | Result  |
|:----------------- | :----|
| Any City name     | Updated Weather Information for that location. |
| /home             | Set your current location to home for transit information. |
| /school           | Set your current location to school for transit information. |
| /location         | Updates weather and transit information for the current location |
| /refresh          | Refreshes and recalls all APIs for all the widgets. |
| /refresh "widget" | Refresh specific widgets such as: "weather"/"maps" |
------
### Future Plans for the Homepage
 Soon the Homepage will be rewritten in REACT in order to take it much further, including user settings and customization.<br>
 Integrating the Outlook Calendar API to dynamically pull event information.
