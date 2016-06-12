<!DOCTYPE html>
<html>
    <head>
        <title>CentraNet - Work Hours</title>
    </head>

    <body>
    <?php echo validation_errors(); ?>
    <?php echo form_open('work_hours'); ?>
    <h3>Add work time</h3>
    <form>
        <label for="title">Date</label>
        <input type="date" name="date" /><br />

        <label for="text">Start</label>
        <input type="time" name="start" /><br />

        <label for="text">End</label>
        <input type="time" name="end" /><br />

        <input type="submit" name="submit" value="Submit time" />
    </form>

    <h1>Hours Worked</h1>
    Table with employee hours would appear here.
    </body>
</html>