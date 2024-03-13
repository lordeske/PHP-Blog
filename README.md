PHP, AJAX, JS , MYSQL

login.html: This HTML page contains forms for user login. Users input their email and password to access the system.

login.php: This PHP script processes the data entered by the user on the login page. First, it checks if all required data is provided. Then it verifies if the email and password match the data in the database. If the data is correct, the script creates a session for the user, granting them access to the system. If the data is incorrect, the user is notified of the error.

postovi.php: This PHP script enables users to manage their posts. It reads posts from the database and displays them on the user interface. Users can add new posts via a form on the page or delete existing posts by clicking on the appropriate button. This script communicates with the database to save and remove posts.

logovi.php: This PHP script allows administrators to view system activities. When users log in or perform certain actions, these activities are logged in log files. This script reads those log files and presents them to the administrator in a readable format.

script.js: This is a JavaScript file that handles the interactivity of the user interface. Events such as clicks on the login button or deleting a post are defined here. JavaScript communicates with the server via AJAX to update data on the page without reloading the entire page.

ajax_index.php: This PHP script processes login data sent by JavaScript from the user interface. The script verifies login data and returns a response to the user interface.

ajax_post.php: This PHP script handles requests related to posts sent by JavaScript from the user interface. The script adds new posts to the database or deletes existing posts, depending on the request.

ajax_admin.php: This PHP script processes requests related to viewing administrator logs sent by JavaScript from the user interface. The script reads log files and returns a response to the user interface for display.
