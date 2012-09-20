class-todo
==========

A sample project to practice codeigniter and git with my team

Project Structure
------------------
1. Add codeigniter framework outside application project
<!-- language-all: bash -->
	xampp
		-->htdocs
			|->codeigniter
				|->system
				|->apps
					|->class-todo

Keep the above structure so that you can work on multiple applications
without the need of copying codeigniter files for a new application
. Modify the index.php in codeigniter as below 

<!-- language-all: lang-or-tag-here -->	
	$application_folder = 'apps/class-todo';

2. Add the twiter bootstrap assets inside the application directory

Application Todo (Skeleton)
---------------------------
1. create a view called todo (default view)
2. create controllers for:
	1.	controller for route /todo
	2.	controller for route /createtodo
	3.	controller for route /deletetodo
	4.	controller for route /donetodo
3. Create database/Model
	1.	create a table todos inside the mysql database
	2.	mention the database lib in autoload file
	3.	Mention the username/password for database config
	3.	create a model with name Todo

Functionalities
----------------
Need to list down the functionalities


