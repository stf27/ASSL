<!DOCTYPE html>
<html>
    <head>
        <title>CentraNet - Login</title>
        <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/style.css">
    </head>
    <body>
        <div class="head_container">
            <h1>Login</h1>
            <?php echo validation_errors(); ?>
            <?php echo form_open('verify_login'); ?>
        </div>
        <div class="container">
            <form>
                <label for="username">Username:</label>
                <input type="text" size="20" id="username" name="username"/>
                <br/>
                <label for="password">Password:</label>
                <input type="password" size="16" id="password" name="password"/>
                <br/>
                <input type="submit" value="Login"/>
            </form>
        </div>
    </body>
</html>