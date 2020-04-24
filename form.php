<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SCP Foundation</title>
  </head>
  <body class="container" style="background-color:#333; color:#fff;">
    <br><h1 class="text-danger">SCP Foundation</h1>
    <h3 class="text-danger">Secure, Contain, Protect</h3>

    <!-- Site menu -->
    <div>
      <ul class="nav navbar-expand-lg justify-content-between navbar-light bg-light"  style="color:white;"> 
        <li class="nav-item">
          <a href="index.php" class="nav-link btn-danger">BACK TO MAIN</a>
        </li>
      </ul>
    </div>
    <hr style="border: 1px solid white;">

    <h1>ADD NEW SCP RECORD</h1>
    <h3>Use the following fields to enter information of a new SCP to the database.<br>Use \n to separate paragraphs.</h3>
    <hr style="border: 1px solid white;">

    <!-- Form to add content to database -->
    <form class="form-group" method="post" action="site/connection.php">

    <label>Item Number</label><br>
    <input type="text" class="form-control" name="item_no" placeholder="SCP-####" required>
    <br>
    <label>Class</label><br>
    <input type="text" class="form-control" name="class" placeholder="Safe/Euclid/Keter/Thaumiel/Neutralized" required>
    <br>
    <label>Image</label>
    <input type="text" class="form-control" name="img" placeholder="Submit image link">
    <br>
    <label>Containment Procedures</label><br>
    <textarea class="form-control" rows="5" name="procedures" required></textarea>
    <br>
    <label>Description</label><br>
    <textarea class="form-control" rows="5" name="descriptions" required></textarea>
    <br>
    <label>Additional Material</label><br>
    <textarea class="form-control" rows="5" name="extra_1"></textarea>
    <br>
    <label>Additional Material</label><br>
    <textarea class="form-control" rows="5" name="extra_2"></textarea>
    <br>
    <label>References/Appendices</label><br>
    <textarea class="form-control" rows="5" name="appendix"></textarea>
    <br>
    <input type="submit" class="btn btn-danger" name="submit" value="Add SCP to database">
    </form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>