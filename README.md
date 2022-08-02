# webpage-get-the-Value-of-sensor-and-store-in-database
The main idea of this project is to enter sensor value and the  it will be stored in the database.
The languages used are:
1.php 
2.html
and for database i use the xampp to install it follow the link (https://youtu.be/dqbsmXvYBXE)

code explainer
--------------
this part of code is a form that use get method have two inputs which are one to enter the sensor value and a button to submit.
![Screenshot (1085)](https://user-images.githubusercontent.com/108452991/182484110-5470782b-6fce-4ee5-8208-fffad40cf646.png)

GET method is used to appends form data to the URL in name or value pair.GET is better for the data which does not require any security or having images or word documents.

![Screenshot (1086)](https://user-images.githubusercontent.com/108452991/182485849-18da5d8a-df56-433e-83a1-f1c61d964c0f.png)
and this part of code is responsible for make a connection to the database and insert the sensor value to the database.
in this block of code A database connection is always required to interact with the database. that is why we use the identifier to access database,such aslocation of the database, database name, username, and password,as you see there is try and catch ,A PDOException object will be thrown if there is any connection error.


