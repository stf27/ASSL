<!DOCTYPE html>
<html>
    <head>
        <title>Centra Net - Home</title>
        <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/style.css">
    </head>
    <body>
    <div id="home_container" class="container">
        <h1 class="inline">Home</h1>
        <h2 class="inline">Welcome <?php echo $username; ?>!</h2>
        <hr/>
        <a href="work_hours">Submit Work Hours</a>
        <a href="get_work_hours">View Work Hours</a>
        <a href="login">Logout</a>
    </div>
    </body>
</html>