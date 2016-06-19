<!DOCTYPE html>
<html>
    <head>
        <title>CentraNet - Hours Worked</title>
        <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/style.css">
    </head>

    <body>
        <div class="container">
            <h1>Hours Worked</h1>
            <a href="home">Home</a>
            <hr/>
            <?php
            foreach($query as $row) {
                echo "Date: " . $row->date;
                echo "<br />";
                echo "Time In: " . $row->time_in;
                echo "<br />";
                echo "Lunch: " . $row->lunch;
                echo "<br />";
                echo "Time Out: " . $row->time_out;
                echo "<br />";
                echo "Activities: " . $row->activities;
                echo "<br />";
                echo "<br />";
            }
            ?>
        </div>
    </body>
</html>
