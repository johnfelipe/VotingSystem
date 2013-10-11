VOTING APPLICATION DEMO INSTALLATION PROCESS.

This application requires laravel 4,
apache, mysql, and PHP with the Mcrypt extension installed.

1.	Unzip the applications content to folder of your choice;
	or you can run git clone git@github.com:dotthis/VotingSystem.git foldername
	
2.	you may need to create a mysql user with database and user creation permissions and 
	the abilty to grant permissions for this next bit, you also need to make sure you run
	the following commands from the root of the application.

3.	Run the 'createdatabase.sql' file located in the root of the applications file tree, 	
	either by:
	
		a) using the source command within MySql:
			
			source path/to/file/createdatabase.sql
			
		b) or by using the terminal:
			
			cat createdatabase.sql | mysql -u{your username} -p{your password}
		
4.	Once this has been run you need to build the tables and populate them with data so
	from the terminal run:
		
		php artisan migrate (this command will create the tables)
		
	and when that has completed run:
		
		php artisan db:seed (this command will populate the tables with mock data)
		
5.	Assuming all went well you should have managed to set up the application and its mock 
	data. 
	
	Now we need to configure the server
	
6. in your server configuration file you may need to add something similar to the following block to get the server to run the site locally.

<Directory "/path/to/applications/base/directory">
	Options All
	AllowOverride All
	Order allow,deny
	Allow from all
</Directory>

NameVirtualHost *:80
<VirtualHost *:80>
	ServerName www.votingapp.co.uk
	DocumentRoot /path/to/application/root/public
</VirtualHost>

You'll notice that the DocumentRoot is set to the 'public' folder and not the applications root directory.

Once the above steps are complete, resart apache (sudo apachectl restart)

In your browser, go to, www.votingapp.co.uk and you should be greeted with my application

 