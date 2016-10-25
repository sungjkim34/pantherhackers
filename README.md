# PantherHackers Dev Environment

A development environment for the old PantherHackers Wordpress website.

## Installation

This installation is written for Windows based systems.
The instructions should be very similar for Linux and MacOS based systems.

1.) Install appropriate version of XAMPP (or any stack consisting of Apache, MySQL/MariaDB, and PHP)
If using XAMPP the link is: https://www.apachefriends.org/

2.) Move the "PantherHackers" folder into the "htdocs" folder (default: C:\xampp\htdocs)

3.) Move the "wordpress" database into the myql data folder (default: C:\xampp\mysql\data)

4.) Open XAMPP control panel, start MySQL, and open MySQL Admin panel (or direct web browser address to localhost/phpmyadmin)

5.) On the listing of databases on the left, click on "wordpress" and then "privileges" on the top menu.

6.) Create a new user account named "wordpress" with the host name "localhost" password of "wordpresspass", and check the "Check all" under Global Privileges. Press the "Go" button at the bottom to create this account.

4.) Re-run Apache and MySQL (stop and then start both services)

5.) Point web browser to address (in this case "localhost/pantherhackers")
