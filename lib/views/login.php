<?php include_once("../layouts/header.php"); ?>
<?php include_once("../layouts/nav_login.php"); ?>

<div class="login">
    <div class="login-content">
        <div class="login-box">
            <div class="login-box-content">
                <div class="content-title">
                    Login Here
                    <hr class="hr">
                </div>
                <div class="content-body">
                    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                        <p class="label">Username </p>
                        <input type="text" name="username" id="username" placeholder="Username" class="input-login">
                        <p class="label">Password </p>
                        <input type="password" name="password" id="password" placeholder="Password" class="input-login"><br>
                        <input type="submit" value="Login" name="login_user" class="login-btn">
                    </form>
                    <p class="no-account">Don't have an Account ? <a href="reg.php">Create One</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("../layouts/footer_small.php"); ?>
