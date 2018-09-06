# P5_OC

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/b6d686bdd6904eaeb4d198c7a6609354)](https://app.codacy.com/app/AureleSarrail/P5_OC?utm_source=github.com&utm_medium=referral&utm_content=AureleSarrail/P5_OC&utm_campaign=Badge_Grade_Dashboard)

To install the application, first of all, you have to download the code on the github page :
https://github.com/AureleSarrail/P5_OC.

You can clone using git executing the command 'git clone https://github.com/AureleSarrail/P5_OC.git'.
or you can download directly on the github page (same link).
 
To create the database, you can use the file 'blog_asdev.sql'.
It will create 3 tables : post,user and comments.
The database freshly created will contain a few data that you can delete.
In order to create the Admin, you will have to create it manually.
Inject a row in user and be cautious on two things
  - the rights must be at 1.
  - the password must be the result of password_hash.

You also have to modify your access to database in the file Model/Manager/Model.php.
This file contain only one method for dbConnect.
All you have to do is to edit it and replace <host>, <dbname>, <user> and <password> with your own.
  
if you want to see it running, you can go to www.as-dev.fr.
  
To launch the application, load in your browser the file index.php and you are good to go.

Note that the application is going to evolve in the next days/months so stay tune to that page if you want to know about the modifications.

Thank you.
