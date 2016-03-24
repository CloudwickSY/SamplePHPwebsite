# MariaDB installation
	sudo yum install httpd  mariadb-server mariadb php php-mysql	

# Start the Web Server

# We can start by turning on our web server. The following command will start Apache:
    sudo service httpd start

# Configure MySQL
# Next, we can configure MySQL, our database. Start the service by typing:

    sudo service mysqld start

# The first thing we should do is run a simple security script, which will lock down some dangerous defaults. It will also allow us to set a database password for the root administrative user:
    # start mysql service
	systemctl start mariadb.service
	#secure mysql
	sudo mysql_secure_installation

# Install phpmadmin

    sudo yum install epel-release
    sudo yum install phpmyadmin

# Restart the server

	sudo service httpd restart


# Start working in mysql
mysql -u root -p
	
# Create DB
CREATE DATABASE Cloudwick;

# Select table
	use Cloudwick;

# Create table
CREATE TABLE People
(
    PersonID int NOT NULL AUTO_INCREMENT,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255),
    PRIMARY KEY (PersonID)
);

# Populate table
INSERT INTO People (PersonID, Address, City, FirstName, LastName)
VALUES (1, 'Ahmedabad', 'Houston', 'Ramesh', 'Ramesh'  ),
       (2, 'Delhi',  'Houston', 'Khilan', 'Khilan'  ),
       (3, 'Kota',   'Houston', 'kaushik', 'kaushik'),
       (4, 'Mumbai',   'Houston', 'Chaitali', 'Chaitali'),
       (5, 'Bhopal',  'Houston', 'Hardik', 'Hardik'  ),
       (6, 'MP',   'Houston', 'Komal',  'Komal'   );
# User access
	CREATE USER 'cloudwick'@'localhost' IDENTIFIED BY 'mypass';
	GRANT ALL ON Cloudwick.* TO 'cloudwick'@'localhost';

# Exit mysql
	quit;

