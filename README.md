# php-user-registration
PHP user registration script. Includes proper password salting and hashing.
## Who is this script for ?
If you are looking for a simple registration script then this is for you. A lot of beginners try to build registration scripts from scratch and end up using outdated salting and hashing. This script comes with a fully implemented user registration system covering most of security issues.
## Requirements
1. PHP 5.6
2. mySQLi activated

## Installation
Create a database called "login" with table called "users", at minimal add columns 'id','username','password' & 'email'.
Change database server, user, password in config/dbconnect.php.
Insert these 2 lines anywhere you want the login form to show up:
```
/* Require registration.php to call registration class */
require_once("functions/registration.php");
/* Call for registration class */
$registration = new Registration();
```
## License
Licensed under MIT. You can use this script for free for any private or commercial projects.
## Contribute
Please create a feature-branch if possible when committing to the project, if not then simply commit to master branch.
