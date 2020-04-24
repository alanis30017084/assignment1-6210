<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SCP Foundation</title>
  </head>
  <body class="container" style="background-color:#333; color:white;">
  <?php include "site/connection.php"; ?>
    <br><h1 class="text-danger">SCP Foundation</h1>
    <h3 class="text-danger">Secure, Contain, Protect</h3>

    <!-- Site menu -->
    <div>
      <ul class="nav navbar-expand-lg justify-content-between navbar-light bg-light"  style="color:white;">
          
        <?php foreach($result as $item): ?>
          <li class="nav-item">
            <a href="index.php?subjects='<?php echo $item['item_no']; ?>'" class="nav-link" style="color:black">
            <?php echo $item['item_no']; ?>
            </a>
          </li>
        <?php endforeach; ?>

        <li class="nav-item">
          <a href="form.php" class="nav-link btn-danger">ADD SCP</a>
        </li>
      </ul>
    </div>
    <hr style="border: 1px solid white;">
    
    <!-- Database content -->
    <div>
      <?php
        if(isset($_GET['subjects']))
        {
          $item_no = trim($_GET['subjects'], "'");
          $record = $connection->query("select * from subjects where item_no='$item_no'") or die($connection->error());
          $row = $record->fetch_assoc();

          $item_no = $row['item_no'];
          $class = $row['class'];
          $img = $row['img'];
          $procedures = $row['procedures'];
          $descriptions = $row['descriptions'];
          $extra_1 = $row['extra_1'];
          $extra_2 = $row['extra_2'];
          $appendix = $row['appendix'];

          $procedures = str_replace('\n', '<br><br>', $procedures);
          $descriptions = str_replace('\n', '<br><br>', $descriptions);
          $extra_1 = str_replace('\n', '<br><br>', $extra_1);
          $extra_2 = str_replace('\n', '<br><br>', $extra_2);
          $appendix = str_replace('\n', '<br><br>', $appendix);

          echo "
            <h3><b>Item #:</b> {$item_no}</h3>
            <h3><b>Object Class:</b> {$class}</h3>
            <p><img src='{$img}'</p>
            <h3>Special Containment Procedures:</h3> <p>{$procedures}</p>
            <h3>Descriptions:</h3> <p>{$descriptions}</p>
            <hr style='border: 1px solid white;'><br>
            <p>{$extra_1}</p>
            <p>{$extra_2}</p>
            <p>{$appendix}</p>
          ";
        }
        else
        {
          echo "
            <h1>WARNING: ACCESS TO THIS DATABASE IS FOR AUTHORIZED PERSONNEL ONLY.</h1>
            <p>To continue, select an SCP to view or create a new entry.</p>
          ";
        }
      ?>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>