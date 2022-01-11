<?php include_once 'config/init.php';?>

<?php
  $job = new Job(); //   Create New Obejct From JOb Class
  $tamplate = new Tamplate('tamplate/frontpage.php');

  // check if category name came from get method

  $category = isset($_GET['category']) ? $_GET['category'] : null;
  if ($category) {
    $tamplate->jobs = $job->getByCategory($category);
    $tamplate->title = 'Job In => ' . $job->getCategory($category)->name;
  }else {
    $tamplate->title = 'Latest Jobs';
    $tamplate->jobs = $job->getAllJobs(); // get all jobs from job Class
  }
    // .
  $tamplate->categories = $job->getCategories(); // get all categories from job class




  echo $tamplate;
 ?>
