<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<div >
  <div>

<?php
   if($_GET["slackname"] || $_GET["track"] ) {
    echo "<h4> Information <br/></h4>";
    //   echo "Welcome ". $_GET['slackname']. "<br/>";
    //   echo "You are ". $_GET['trackname']. " track.<br/>";
      

      class Emp {
        public $slackname  = "";
         public $track = "";
         public $utc_time  = "";
         public $current_day = "";
         
         public $github_file_url = "";
         public $github_repo_url = "";
         public $status_code = "";
                 
      }
       
      $e = new Emp();
      $e->slackname = "stage one";
      $e->Track = "Backend";
      
      $e->current_time = "sports";
      $e->github_file_url = "sachin";
      $e->github_repo_url  = "sports";
      $e->status_code  = "sports";
         
      echo json_encode($e);
  
      exit();
   }
?>
</div>
</div>
 <body>
<div class="container">
<h1 style="text-align:center">WELCOME TASK ONE(1) OF HNG</h1>


<form action = "<?php $_PHP_SELF ?>" method = "GET" style="align: center" class="form-group">

<div class="form-group">

<label for="txt">Slack name:</label>

<input type="text" class="form-control" placeholder="Enter Slack name" name="slackname">

</div>
  

<div class="form-group">

<label for="txt">Track</label>

<input type="text" class="form-control" placeholder="Enter track name" name="trackname">

</div>

  <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
   
</body>
</html>
