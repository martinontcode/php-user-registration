<!-- Include Bootstrap .css ; You can copy this to your header file instead. I've added custom code at the end. -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Custom -->
<link rel="stylesheet" href="css/custom.css">

<div class="container">
    
<!-- Registration Form -->
<form method="post" action="index.php" name="registrationform" class="form-registration">

<div class="form-group">
    <div class="cnt"><h3>User registration</h3></div>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" placeholder="Username" class="input form-control" autocomplete="off" required autofocus><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="Password" class="input form-control" autocomplete="off" required autofocus><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Email" class="input form-control" autocomplete="off" required autofocus><br>
    <input type="submit"  name="registration" value="Sign Up" class="btn btn-lg btn-success btn-block submit" />
</div>

<!-- These will be shown according to status, registration false is red error, registration taken is yellow, registration successful is green -->
<?php if(@$_GET['usercreated'] == 'false'): ?>
    <div class="alert alert-danger">
        <strong><center>Please fill all fields!</center></strong>
    </div>
<?php elseif(@$_GET['usercreated'] == 'taken'): ?>
    <div class="alert alert-warning">
            <strong><center>Username or email is taken!</center></strong>
    </div>
<?php elseif(@$_GET['usercreated'] == 'true'): ?>
    <div class="alert alert-success">
            <strong><center>User has been created!</center></strong>
    </div>
<?php endif; ?>

<!-- URL to registration form -->
<div class="cnt"><a href="#">Already signed up? Log in here</a></div>

</form>
<!-- End Registration Form -->

<!-- Remove this to remove the GitHub URL link -->
<div class="cnt gray"><a href="https://github.com/MartinoEst/php-user-registration">Check out this code at GitHub</a></div>

</div>
<!-- End div -->

