<?php
    $user = "a3001708_user";
    $pw = "Toiohomai1234";
    $db = "a3001708_foundation";

    $connection = new mysqli('localhost', $user, $pw, $db) or die(mysqli_error($connection));
    $result = $connection->query("select * from subjects") or die($connection->error);

    if(isset($_POST['item_no']))
    {
        // Assign variables and insert into database
        $item_no = $_POST['item_no'];
        $class = $_POST['class'];
        $img = $_POST['img'];
        $procedures = $_POST['procedures'];

        $descriptions = $_POST['descriptions'];
        $extra_1 = $_POST['extra_1'];
        $extra_2 = $_POST['extra_2'];
        $appendix = $_POST['appendix'];

        $sql = "insert into subjects(item_no, class, img, procedures, descriptions, extra_1, extra_2, appendix)
        values('$item_no', '$class', '$img', '$procedures', '$descriptions', '$extra_1', '$extra_2', '$appendix')";
    
        // Add relevent error/success messages
        if($connection->query($sql) === TRUE)
        {
            echo "<h2>SCP Added</h2>
            <p><a href='../index.php'>Back to index</a></p>";
        }
        else
        {
            echo "<h2>Error submitting data</h2>
            <p>{$connection->error}</p>
            <p><a href='../index.php'>Back to index</a></p>";
        }
    }
?>