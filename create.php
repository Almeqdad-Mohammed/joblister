<?php include_once 'config/init.php';?>

<?php
  $job = new Job(); //   Create New Obejct From JOb Class

  // check if creating list  name came from post method
  if (isset($_POST['submit'])) {
    // Create The array Then Store All info in it
    $Error1 = array();
    $data  = array();
    $data['job_title']      = $_POST['job_title'];
    $data['company']        = $_POST['company'];
    $data['category_id']    = $_POST['category'];
    $data['description']    = $_POST['description'];
    $data['location']       = $_POST['location'];
    $data['salary']         = $_POST['salary'];
    $data['contact_user']   = $_POST['contact_user'];
    $data['contact_email']  = $_POST['contact_email'];

    // check if the info  not Empty
    if (strlen($_POST['job_title']) < 5) {
        echo "<div class='container'>";
        echo   $Error1[] = "<div class='alert alert-danger'> The Job Title Can't Be Less Than 5 Character </div>";
        echo "</div>";
    }


    // check if the data has been  listed
    if (empty($Error1)) {
      if ($job->create($data)) {
        redirect('index.php', 'Your Job Has Been listed', 'success');
      }else {
        redirect('index', 'something went Wrong ', 'error');
      } //
    }
  }
  $tamplate = new Tamplate('tamplate/job-create.php');

  $tamplate->categories = $job->getCategories(); // get all categories from job class




  echo $tamplate;
 ?>
