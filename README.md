# webpage-get-the-Value-of-sensor-and-store-in-database
The main idea of this project is to enter sensor value and the  it will be stored in the database.
The languages used are:
1.php 
2.html
and for database i use the xampp to install it follow the link (https://youtu.be/dqbsmXvYBXE)
first build a database:
![Screenshot (1088)](https://user-images.githubusercontent.com/108452991/182492941-6ace293f-3eb2-48d4-8521-cac6af2a8b05.png)
![Screenshot (1089)](https://user-images.githubusercontent.com/108452991/182493074-e912c9a0-7a5a-4527-bd2e-967aab36211c.png)
![Screenshot (1090)](https://user-images.githubusercontent.com/108452991/182493227-ed75fab3-59e5-495d-9d2e-81a4e381febe.png)


code explainer
--------------
this part of code is a form that use get method have two inputs which are one to enter the sensor value and a button to submit.
![Screenshot (1085)](https://user-images.githubusercontent.com/108452991/182484110-5470782b-6fce-4ee5-8208-fffad40cf646.png)

GET method is used to appends form data to the URL in name or value pair.GET is better for the data which does not require any security or having images or word documents.

![Screenshot (1087)](https://user-images.githubusercontent.com/108452991/182490847-35e2cb89-7e8a-4652-811e-61d59e0e12a7.png)
and this part of code is responsible for make a connection to the database and insert the sensor value to the database.
in this block of code A database connection is always required to interact with the database. that is why we use the identifier to access database,such aslocation of the database, database name, username, and password,as you see there is( try) if the connection is success or (catch )if the connection is fail PDOException object will be thrown if there is any connection error.
then the insert query to insert data into the table in the database.
