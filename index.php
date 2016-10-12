<?php

/* php-user-registration
 * PHP user registration script, kept as minimal as possible.
 * Proper security againts SQL injections.
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

?>