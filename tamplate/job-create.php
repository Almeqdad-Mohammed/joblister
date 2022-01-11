<?php include 'inc/header.php' ?>

<h2 class="page-header">Create A Job Listing</h2>

<form class="" action="create.php" method="post">
  <!-- start company field  -->
  <div class="form-group">
    <label > Company :</label>
    <input type="text" class="form-control" name="company" value="">
  </div>
  <!-- end company field -->
  <!-- start Categories field  -->
  <div class="form-group">
    <label > Category :</label>
    <select  class="form-control" name="category" >
      <option value="0">Choose Category</option>
      <?php foreach ($categories as $category): ?>
          <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <!-- end Categories field -->
  <!-- start  Job Title field  -->
  <div class="form-group">
    <label > Job Title :</label>
    <input type="text" class="form-control" name="job_title" value="">
  </div>
  <!-- end  Job Title  field -->
  <!-- start description field  -->
  <div class="form-group">
    <label > Description :</label>
    <textarea class="form-control" name="description" ></textarea>
  </div>
  <!-- end description field -->
  <!-- start location field  -->
  <div class="form-group">
    <label > Location :</label>
    <input type="text" class="form-control" name="location" value="">
  </div>
  <!-- end location field -->
  <!-- start Salary field  -->
  <div class="form-group">
    <label > Salary :</label>
    <input type="text" class="form-control" name="salary" value="">
  </div>
  <!-- end Salary field -->
  <!-- start  Contact User field  -->
  <div class="form-group">
    <label > Contact User :</label>
    <input type="text" class="form-control" name="contact_user" value="">
  </div>
  <!-- end  Contact User field -->
  <!-- start  Contact User field  -->
  <div class="form-group">
    <label > Contact Email :</label>
    <input type="text" class="form-control" name="contact_email" value="">
  </div>
  <!-- end  Contact User field -->
  <input type="submit" class="btn btn-lg btn-secondary" name="submit" value="Create">
</form>
<br>
<hr>
<?php include 'inc/footer.php'; ?>
