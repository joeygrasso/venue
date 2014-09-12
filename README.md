venue
=====

Event Reservation System


Installation
=====

To install first go into the ./includes/SQL/ folder. Using whatever method you cchoose run the createDB.sql file to import the database structure for the website.

To ensure everything runs properly, you are going to have to change the database connection settings in every file that requires data from the database.

This code was virtually thrown together in less than 6 hours. I should have written a database connection object (as seen in my php repo) to reduce the amount of code. Also if any of this information changes it requires someone to go through and change every instance of that variable.

Another change that should have been made was to use mysql improved (mysqli) over the older version of mysql. The reason why mysql was used instead of the more secure reason was because the student server that this app resided on did not have mysqli support. 

If you have any questions regarding this code please contact me@joeygrasso.com
