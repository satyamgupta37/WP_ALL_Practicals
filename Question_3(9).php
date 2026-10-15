#Steps
1. Open phpMyAdmin.
2. Select the TechnologyPortal database from the left navigation panel.
3. Click the SQL tab.
4. Execute the following SQL commands one by one.
5. Observe the output displayed in phpMyAdmin.

#SQL Commands
1. Display all Databases
SHOW DATABASES;
2. Display all Tables in the TechnologyPortal Database
USE TechnologyPortal;
SHOW TABLES;
3. Display the Structure of the Technology Table
DESCRIBE Technology;
or
DESC Technology;
Expected Output
Output of SHOW DATABASES
A list of all databases available in the MySQL server, including:
• information_schema
• mysql
• performance_schema
• phpmyadmin
• TechnologyPortal Output of SHOW TABLES
The TechnologyPortal database should contain the following table:
Tables_in_TechnologyPortal
Technology
Output of DESCRIBE Technology