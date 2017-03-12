<html>
<head>
    <title>Registration</title>
</head>
<body>
<div class = "container">
    <?php echo form_open('registration'); ?>

    <h5>Username</h5>
    <input type="text" id = "username" name="username" value="" size="50" required />

    <h5>Password</h5>
    <input type="password" id = "password" name="password" value="" size="50" required />

    <h5>Password Confirm</h5>
    <input type="password" id = "password-2" name="password-2" value="" size="50" required />
    <p id = "error-password"></p>
    <h5>Email Address</h5>
    <input type="email" id = "email" name="email" value="" size="50" required />
    <p id = "error-email"></p>
    <div class="g-recaptcha" data-sitekey="6Levgg0UAAAAAL4ZXoHmeNqYIE-8FK9fi4BDXECB"></div>
    <div><input id = "registration" type="button" class = "btn btn-warning" value="Submit" /></div>
    </form>
</div>
</body>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/registration.js"></script>
</html>