                                                                  ******ONLINE VEHICLE SERVICE MANAGEMENT SYSTEM*******

----------Introduction----------

Online Vehicle service management system is a web application which provides functionality to both customers and the company. In the current scenario most of the car service companies 
have switched over to online service booking where customers can book a service by filling necessary service details and choose a particular time slot. While the customer chooses a slot, 
he/she needs to get a confirmation from the admin whether their slot is booked at that time chosen by the customer via email or a call. 
A better approach is possible. We can develop a live slot availability checking system. Also, we can provide live service status availability to the customers so that they can keep a 
track of their service progress and provide them a good user interface to give their feedback.
Data Visualization solves the problem of time taken to make decision for the company instead of depending on descriptive reports.
Online Vehicle Service Management System is a web application which provides live slot availability feature, check service status, 
improved feedback user interface. Also provides the company to view them service details, view graphs and update customer service status.


***important***

----------SYSTEM REQUIREMENTS------------- 

1) XAMPP software :- XAMPP is the most popular PHP development environment. It is free and open-source cross-platform web server.
                     We need to use xammp to run our web application by hosting a local server in our own system to run our web application on this local server.
2) Text Editor such as (notepad++,sublimetext etc) to change/manipulate code.
3) A good internet connection to run certain CDN plugins(CONTENT DELIEVERY NETWORK FILES) which is present in the source code.
4) Latest version of Google Chrome / Microsoft edge .

***note***
- To install xampp click on the following link given below.
   https://www.apachefriends.org/index.html

- Choose which operating system you are using and download the software

- To install code editors like notepad++ ,sublimetext visit the following link given below
   1) notepad++   :- https://notepad-plus-plus.org/downloads/
   2) sublimetext :-https://www.sublimetext.com/
    
- Even if you are running this application on local server make sure your device is connected to internet or else the website wont load properly.


------PROJECT ENVIORNMENT SETUP ( CODE SETUP or HOW TO RUN THE PROJECT)--------

1) The folder webminiproject has all the necessary source codes to run the web application.

2) The folder webminiproject needs to be copied and paste it in htdocs folder.

3) The htdocs folder is availabe after you install the xampp application in your system. This folder is needed as all the php files runs on this folder and also php is a server side
   scripting language. 

4) To access/get XAMPP htdocs folder you can search by typing XAMPP htdocs folder or  localdisk c - xampp - htdocs 
   note:- it depends on which downloadpath you select when you install the xampp software. Here we have chosen localdisk c .

5) Copy the folder named webminiproject and paste it in htdocs folder.

*** IMPORTANT *** 

6) As this is a dynamic web application system it would have a database.

7) In the webminiproject folder search for file name autodoc.sql.

8) To start running your xampp application open the xampp control panel and click only on the Apache and MYSQL module .

9) Now open the browser (Chrome or edge) and type in the URL http://localhost:80/phpmyadmin or http://localhost:8080/phpmyadmin . A phpMyadmin dashboard will be opened.

10)You can use phpMyAdmin to perform most administration tasks, including creating a database, running queries, and adding user accounts.

11)Now in the phpMyAdmin create a new database named "autodoc".

12)After creating the database select the autodoc database you created and click on import button option.

13)Now click on 'choose file' button and select the file named "autodoc.sql" which is available in webminiproject folder only. After choosing the files press "go".

14)You are now ready to run the web application.

15)To run the web application type in the URL localhost/webminiproject and you are ready to use the web application.

Remainder:-Please make sure your device is connected to internet.

*********************ALTERNATE METHOD TO GET SOURCE CODE ********************************
Using github

- Click on the following link as mentioned below.
     https://github.com/SAMIT-D-MANVAR/webminiproject
- Now click on code button and download the zip file to get the source code.
- Extract the zip files and copy the unzipped files to htdocs folders.

Note:- This method can be used as a backup if incase you lose your source code  from the system


----source code file names----

- index.html :- home page
- newsletter.php :- newsletter section

- login.php :- login page
- signup1.php :- signup page
- home.php :- customer portal
- formprocess.php :- service application form
- slotstatus.php :- check booked slots by date section
- fetch.php :- service status/updates section
- feedback.php :-feedback section

- admin.php:- admin page
- adminwelcome.php :- admin portal
- customerdetail.php , servicedetail.php :- customer service details section
- iframe.html :- graphical data visualization
- adminupdate.php :- update service status section
 
How to use the Web application

- On running the web application or project you will get the index page or the home screen which contains details such as about the company, services provided by the company,
  contact details etc.

- Customers can apply for online vehicle service only after login/sign up. For sign/up you need to provide username, email and password and for login username and password. 

- On login customer gets to access customer portal which has book service, feedback form , view status.

- Customers can book a service by filling the necessary details and selecting the available time slot for service . On successfull booking the customer can also check his vehicle 
  service status

- Customer can also provide feedback .

- Admin needs to login to access admin portal.

****Note*****:-In admin login the username is "admin" and password is "pass"

- Admin portal has 3 options booked service details , update service details , view graphs

- Admin can change the service status, get a tabular view of customers service details and also view different graphs generated such as bar graphs , pie charts . 



