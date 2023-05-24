1. Introduction 
  Our goal is to create a simple aesthetic website with login & logout & register functions.

2. System Overview
  We use HTML, CSS, and JavaScript to write the frontend tier, then connect the HTML form to the MySQL database with PHP and host the website on Localhost using Apache.

3. Design Consideration
  General Constraints: Due to limited time and resources, we might be unable to create a full-fledged web application; it might not be able to manage high-traffic flow.  The website would only work on Localhost.

  Goals: Create a fully functional aesthetic webpage that's easy to use, with an excellent user interface and straightforward navigation.

4. System Architecture 
  Frontend: Create forms for both the registration & login page. Three inputs for registration: username, email address, and password. Two inputs for login: email and password. Both forms have a button for submission—a dashboard after login, with a logout button that would redirect users to the home page.

  Middle tier: When hitting the submission button, it will trigger the login or register.php, which will connect to the database—the register.php will send the form data to the database, and login.php will fetch the user data stored in the database so the users can log in to the dashboard. It will also check if the information is correct; if it's not, an error message will show up.

  Backend: Use an application called XAMPP which provides Apache and MySQL. We host our website and store the user data on Localhost. We can access and modify the data by using phpMyAdmin. We set a few variables: id(int), name(varchar), email(varchar), and password(varchar).
