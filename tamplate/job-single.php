<?php include 'inc/header.php'; ?>
<h2><?php echo $job->job_title;?>( <?php echo $job->location ?> )</h2>
<small>Posted By : <?php echo $job->contact_user; ?> &nbsp;&nbsp;&nbsp;On : <?php echo $job->post_date; ?></small>
<hr>
  <h5>Description  Of  A Job</h5>
  <p style="border: 1px solid #ddd; padding:10px"><?php echo $job->description ?></p>
<ul class="list-group">
  <li class="list-group-item">
    <strong>Company : </strong>
    <?php echo $job->company; ?></li>
    <li class="list-group-item">
      <strong>Salary : </strong>
      <?php echo $job->salary; ?></li>
      <li class="list-group-item">
        <strong>Contact Email : </strong>
        <?php echo $job->contact_email; ?></li>
</ul>
<br><br>
<a class="btn btn-secondary" href="index.php">Home Page</a>
<br><br>
<div class="well">
  <a href="edit.php?id=<?php echo $job->id ?>" class="btn btn-success">Edit Job</a>

  <form style="display:inline" action="job.php" method="post">
    <input type="hidden" name="del_id" value="<?php echo $job->id ?>">
    <input type="submit" class="btn btn-danger" value="Delete">
  </form>
</div>
<?php include 'inc/footer.php'; ?>
