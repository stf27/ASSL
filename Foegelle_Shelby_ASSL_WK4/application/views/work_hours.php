<!DOCTYPE html>
<html>
    <head>
        <title>CentraNet - Work Hours</title>
        <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/style.css">
    </head>
    <body>
        <div class="head_container">
            <?php echo validation_errors(); ?>
            <?php echo form_open('work_hours'); ?>
            <h1>Add Work Hours</h1>
            <a href="home">Home</a>
        </div>
        <div class="container">
            <form class="work_form" method="post">
                <label>Employee ID<?php echo form_error('employeeID'); ?><br />
                <input type="number" name="employeeID"><br /></label>

                <label>Date<?php echo form_error('date'); ?><br />
                <input type="date" name="date"><br /></label>

                <label>Time In<?php echo form_error('time_in'); ?><br />
                <input type="time" name="time_in"><br /></label>

                <label>Lunch<?php echo form_error('lunch'); ?><br />
                <input type="time" name="lunch" min="0:00" max="5:59"><br /></label>

                <label>Time Out<?php echo form_error('time_out'); ?><br />
                <input type="time" name="time_out"><br /></label>

                <label>Activities<?php echo form_error('activities'); ?><br />
                <textarea rows="4" cols="50" name="activities"></textarea><br /><label>

                <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </body>
</html>