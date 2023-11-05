# Crack Jokes

Crack Jokes is a personal project that I am working on to improve my development using Laravel (PHP) Framework.

This simple project consists of taking in jokes from a remote host API (https://icanhazdadjoke.com/api, specifically the "Search for Jokes API"), storing them in a database, and then allowing  signed up users to search for a joke as well as rate and comment on any joke. 

Project Info: CrackJokes Version:1.0.0 (This is still the first version so far)

Installation requirements:
 
    • PHP 8.1 >
    • Composer
    • Laravel (PHP MVC Framework) https://laravel.com/docs/10.x
    • Laravel Sail (MySQL, Redis) (required for this project)
      
Technology Languages (Used so far):
      
    • PHP8+
    • PHPUnit
    • JavaScript/jQuery
    • Docker
    • MySQL
    • Jenkins (CI tool for automation test and vulnerability scan)
    • JSON
    • HTML5
    • CSS3
    • GIT


How to run CrackJokes((Version 1.0.0)):

    • Once everything is setup and installed, all you have to do is clone or copy the project flles into your localhost server web repository(It depends on each user)
    • I included an sql file(Jokes_db.sql) which you can manually run on your MYSQL server once installed.It should immediately create all required tables for this project into your defined database. 
    • Once your database is all setup, you then have to restart the localhost web server and go to "http://localhost/CrackJokes/" which will redirect you to the home/login page for any user.

CrackJokes Project Specifications:
 
    • Initially my Jokes_db.sql file when run should create a general user for you to log in. (Note: you can obviously modify the user credentials in the database table 'User' that was initially created for you before manually running the sql file) 
      
    • So far the user can only create a new account and login after successful registration. (Note: Reset password functionality not yet implemented. 
      
    • After successful login, you will be redirected to the current user page where you will be able to view all possible fetched jokes from the HOST API. (Note: So far this particular version fetches all the jokes from the HOST API that only have  "hey" term.
    • -Keep in mind that new jokes may be added to the HOST API at any time, so in order to get new jokes all you have to do is refresh your current page and the jokes will both be updated in the database and on your view page. 
      
    • The CrackJokes current version has three main functionalities so far:

       1. The JOKE SEARCH functionality, which enables the current user to search for any joke based on its Id, keyword, rating and average rating of the joke (defined as taking the total rating value /# of
       ratings). 
       2. The VIEW/RATE JOKE  functionality,which enables the user to view a particular joke and also rate the joke from 1 to 5.
       3. The JOKE COMMENT functionality, which enables any logged-in user to make a comment on a particular joke. The current user will have the possibility to view other user's comments as well.

I hope you have fun with the jokes. :)

MS




