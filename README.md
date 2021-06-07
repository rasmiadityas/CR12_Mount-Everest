# Portfolio: Mount Everest
210508 Code Review 12 - Rasmiaditya Silasari

[Mount Everest Site](https://rasmi.codefactory.live/mounteverest)

# Explanation of the project
Mount Everest is a website where admin can do CRUD actions on travel package offers. These can be done via Dashboard, where the data is listed in a table for easy viewing, or via Details, which can be accessed bc clicking the 'View' button. Data can also be added from the Homepage by clicking 'Add Data' on navbar. Mount Everest also provides API called 'GetTravel' where guests can access all travel package data in JSON format, which can be accessed bc clicking 'API: GetTravel' (api/index_api.php) on navbar and Dashboard. 

# File organization
- The scripts in the main folder are index, dashboard, details and error
- The 'database' folder has the database (sql file) in it
- The 'crud' folder has the CRUD scripts (create, a_create, update, a_update, delete, a_delete)
- The 'api' folder has the scripts which deal with 'GetTravel' API (db_check, RESTful, index_api, gettravel as webservice)
- The 'components' folder has other required scripts (db_connect, style, navbar, api_serri to get Serri's jokes)

# The criteria for grading
1. (40) make a CRUD (create/read/update/delete) for the offers
- Admin can do CRUD via the Dashboard page (dashboard.php), Details page (details.php), or Homepage (index.php - create data only)

2. (20) create a details file, when you click on any offer it will lead you to a page that will show more info about the offer that you clicked on.
- The Details page can be accessed by clicking the 'View' button on both the Dashboard and Homepage.

3. (20) in the details page, you need to use google map API to locate the location of the offer (remember that your database should have the columns longitude and latitude)
- The Details page contains a google map at the bottom of the page which pinpoints the location og the offer.

4. (20) use Serri’s jokes API to show a joke in the navbar every time the page is loaded. There should be a button that when clicked will show another joke (AJAX must be used for this task)
- Serri's joke is shown on navbar on Homepage and Details page. When you click 'Get a Joke' the joke will change without refreshing the page.

# Bonus points
5. (20) From the database that was built, create an API that will return details (i.e.: location name and price ) from all offers from your agency.
- The API 'GetTravel' for this database, which can be accessed bc clicking 'API: GetTravel' on navbar and Dashboard will provide all available data in JSON format.

# Future improvements
- validator to search through the data
- contact page
- using geogle map API to provide an instant lat-lng calculator based on the location name on the create and update form
