<?php include 'inc/header.php' ?>

<h2 class="page-header">Update A Job Listing</h2>

<form class="" action="edit.php?id=<?php echo $job->id ?>" method="post">
  <!-- send the hide id form thr form -->
  <!-- send the hide id form thr form -->
  <!-- start company field  -->
  <div class="form-group">
    <label > Company :</label>
    <input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
  </div>
  <!-- end company field -->
  <!-- start Categories field  -->
  <div class="form-group">
    <label > Category :</label>
    <select  class="form-control" name="category" >
      <option value="0">Choose Category</option>
      <?php foreach ($categories as $category): ?>
        <?php if ($job->category_id == $category->id): ?>

          <option value="<?php echo $category->id ?>" selected><?php echo $category->name ?></option>
        <?php else: ?>
          <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
  </div>
  <!-- end Categories field -->
  <!-- start  Job Title field  -->
  <div class="form-group">
    <label > Job Title :</label>
    <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>">
  </div>
  <!-- end  Job Title  field -->
  <!-- start description field  -->
  <div class="form-group">
    <label > Description :</label>
    <textarea class="form-control" name="description" ><?php echo $job->description; ?></textarea>
  </div>
  <!-- end description field -->
  <!-- start location field  -->
  <div class="form-group">
    <label > Location :</label>
    <input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
  </div>
  <!-- end location field -->
  <!-- start Salary field  -->
  <div class="form-group">
    <label > Salary :</label>
    <input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
  </div>
  <!-- end Salary field -->
  <!-- start  Contact User field  -->
  <div class="form-group">
    <label > Contact User :</label>
    <input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>">
  </div>
  <!-- end  Contact User field -->
  <!-- start  Contact User field  -->
  <div class="form-group">
    <label > Contact Email :</label>
    <input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>">
  </div>
  <!-- end  Contact User field -->
  <input type="submit" class="btn btn-lg btn-success" name="submit" value="Update">
</form>
<br>
<hr>
<?php include 'inc/footer.php'; ?>
