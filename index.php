<?php
if(!isset($_SESSION)) { session_start();} 
/* Start session, this is necessary, you should place this into your header right after <?php syntax ! */ 

/* Secure PHP user registration script
 * PHP user registration script that includes proper password salting and hashing,
 * MySQLi injection protection and simple and beautiful design.
 * 
 * @author MartinoEst
 * @link https://github.com/martinoest/php-user-registration/
 * @license http://opensource.org/licenses/MIT MIT License
 * 
 * Minimum 5.6 PHP version required!
 */
   

/* Require registration.php to call registration class */
require_once("functions/registration.php");

/* Call for registration class */
$registration = new Registration();

include("views/registrationform.php");