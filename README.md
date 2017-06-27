## Table of content

- Screenshots
- Description
- Set-up

## Screenshots

Home page
![Homepage](https://github.com/gracechanggao/Programmatic-Control-of-Content-Delivery/blob/master/image/home.png)

Add Question
![AddQuestion](https://github.com/gracechanggao/Programmatic-Control-of-Content-Delivery/blob/master/image/createpage.png.png)


## Description

The system is written by PHP and the working environment is called Laravel. The database use MySQL. I recommend using NetBeans as the software development platform.
Python/Java can be used during process the row data.
PHP, Composer and MySQL are the primary software that need to be setup before you start the project.

- Current Progress  
1 Login and Register
After the page jumping from Wattle page. The Login and Register buttons are showing at the right of Home page.  They are allowing people register or sign in to the system. ( currently I am using these functions to test database)

2 Modify Question/Show Question
I am trying to make a visualized interface for administer working with database.
“Modify question” button supports administer add/ delete/ edit questions from database.
“Show Question” button let users and administer check the question list from the database.

3 Train Network
The first idea was using the ANN PHP library that building the neural network with php. The library is working well with the sample network in the system. 
The second idea was written the network by python and call the training function by the system. 


## Set-up

There are existing three ways to open the software. 
1. Using the own server inside the PHP. 1)Go to the file which contains the project, input     php -S localhost:8999 -t public   2) visit localhost:8999 in the browser.
2. Using artisan. 1) Go to the file which contains the project, input      php artisan serve   2) visit localhost :8000 in the browser. (Using now)
3) Using homestead. It requests download VirtualBox and Vagrant.

