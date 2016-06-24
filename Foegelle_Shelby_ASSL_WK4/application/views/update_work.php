<!DOCTYPE html>
<html>
<head>
    <title>CentraNet - Update Work Hours</title>
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/style.css">
</head>
<body>
    <div class="head_container">
        <h1>Update Work Hours</h1>
        <a href='http://localhost:8888/index.php/get_work_hours/'>Go Back</a>
    </div>
    <div class="container">
        <?php foreach ($work_entry as $work): ?>
            <form class="work_form" method="post" action="http://localhost:8888/index.php/work/update_entry/">
                <input type="hidden" name="work_id" value="<?php echo $work->id; ?>"><br />

                <label>Employee ID<?php echo form_error('employeeID'); ?><br />
                    <input type="number" name="employeeID" value="<?php echo $work->employeeID; ?>"><br /></label>

                <label>Date<?php echo form_error('date'); ?><br />
                    <input type="date" name="date" value="<?php echo $work->date; ?>"><br /></label>

                <label>Time In<?php echo form_error('time_in'); ?><br />
                    <input type="time" name="time_in" value="<?php echo $work->time_in; ?>"><br /></label>

                <label>Lunch<?php echo form_error('lunch'); ?><br />
                    <input type="time" name="lunch" min="0:00" max="5:59" value="<?php echo $work->lunch; ?>"><br /></label>

                <label>Time Out<?php echo form_error('time_out'); ?><br />
                    <input type="time" name="time_out" value="<?php echo $work->time_out; ?>"><br /></label>

                <label>Activities<?php echo form_error('activities'); ?><br />
                    <textarea rows="4" cols="50" name="activities"><?php echo $work->activities; ?></textarea><br /><label>

                <input type="submit" name="update_submit" value="submit">
            </form>
        <?php endforeach; ?>
    </div>
</body>
</html>