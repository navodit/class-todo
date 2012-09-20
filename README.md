class-todo
==========

A sample project to practice codeigniter and git with my team

Project Structure
------------------
1. Add codeigniter framework outside application project
`
	xampp <br>
		-->htdocs <br>
			|->codeigniter <br>
				|->system <br>
				|->apps <br>
					|->class-todo <br>
`
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
	- controller for route /todo
	- controller for route /createtodo
	- controller for route /deletetodo
	- controller for route /donetodo
3. Create database/Model
	- create a table todos inside the mysql database
	- mention the database lib in autoload file
	- Mention the username/password for database config
	- create a model with name Todo

Functionalities
----------------
Need to list down the functionalities


