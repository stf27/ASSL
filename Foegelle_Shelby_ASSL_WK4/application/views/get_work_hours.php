<!DOCTYPE html>
<html>
    <head>
        <title>CentraNet - Hours Worked</title>
        <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/style.css">
    </head>

    <body>
        <div class="head_container">
            <h1>Hours Worked</h1>
            <a href="http://localhost:8888/index.php/home">Home</a>
        </div>
        <div class="container">
            <?php
            foreach($query as $row) {
                echo "<div id='work_border'>";
                echo "Date:          " . $row->date;
                echo "<br />";
                echo "Time In:       " . $row->time_in;
                echo "<br />";
                echo "Lunch:         " . $row->lunch;
                echo "<br />";
                echo "Time Out:      " . $row->time_out;
                echo "<br />";
                echo "Activities:    " . $row->activities;
                echo "<br />";
                echo "<br />";
                echo '<a class="upDel" href="http://localhost:8888/index.php/work/update/' . $row->id . '">Update</a>';
                echo '<a class="upDel" href="http://localhost:8888/index.php/work/delete/' . $row->id . '">Delete</a>';
                echo "<br />";
                echo "<br />";
                echo "</div>";
                echo "<br />";
                echo "<br />";
            }
            ?>
        </div>
    </body>
</html>
