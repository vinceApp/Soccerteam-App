# Soccerteam-App

Put the folder GitHub in your space www in wamp.

Create a new database named soccerapp
Import the file Soccerteam_App_DataBase in your soccerapp database.


Open the file .env , there is at the project's root.
And modify this following part with your own configure database:
----------------------------------------------------------------------
DB_HOST=localhost
DB_DATABASE=soccerapp
DB_USERNAME=root
DB_PASSWORD=
------------------------------------------------------------------------

Open the project in you IDE.
Go in Ressources/view/template.blade.php
Change the path of every href by your path. For example mine is yout main folder is Soccerteam-App replace /GitHub/Soccerteam-App/public/ by /Soccerteam-App/public/ 
in all href of the file template.blade.php

Now you can launch the application with http://localhost/yourpath/public/

To use it you have to register one team first