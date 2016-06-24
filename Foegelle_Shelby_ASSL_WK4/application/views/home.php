<!DOCTYPE html>
<html>
    <head>
        <title>CentraNet - Home</title>
        <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/style.css">
    </head>
    <body>
    <div class="head_container">
        <h1 class="inline">CentraNet</h1>
        <h2 class="inline">Welcome <?php echo $username; ?>!</h2>
        <a class="inline" id="logout" href="login">Logout</a>
    </div>
    <div id="home_container" class="container">
        <a href="work_hours">Submit Work Hours</a>
        <a href="get_work_hours">View Work Hours</a>
    </div>
    </body>
</html>