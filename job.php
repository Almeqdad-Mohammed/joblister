<?php include_once 'config/init.php';?>

<?php
  $job = new Job(); //   Create New Obejct From JOb Class
  if (isset($_POST['del_id'])) {
    $del_id = $_POST['del_id'];
    if ($job->delete($del_id)) {
      redirect("index.php", " Job Deleted" , "success");
    }else {
      redirect("index.php" , "Job Not deleted " , "error");
    }
  }
  $tamplate = new Tamplate('tamplate/job-single.php');

  // check if category name came from get method

  $job_id = isset($_GET['id']) ? $_GET['id'] : null;

    // do something to Fetch All Jobs From Job Class
  $tamplate->job = $job->getJob($job_id); // get all job from job class




  echo $tamplate;
 ?>
