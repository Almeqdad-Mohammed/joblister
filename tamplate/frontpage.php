<?php include 'inc/header.php' ?>

  <main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-2 text-center">Find, A Job!..</h1>
      <form class="form-horizontal main-form" action="index.php" method="get">
        <div class="col-md-8">
          <select class="form-control" name="category">
            <option value="0"> Choose Category</option>
            <?php foreach ($categories as $category): ?>
              <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <input type="submit" class="btn btn-lg btn-success" value="FIND">
      </form>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <h3><?php echo $title; ?></h3>
    <?php foreach($jobs as $job): ?>
      <div class="row marketing">
          <div class="col-sm-10">
            <h2><?php echo $job->job_title; ?></h2>
            <p><?php echo $job->description;  ?></p>
          </div>
          <div class="col-sm-2">
            <a class="btn btn-secondary" href="job.php?id=<?php echo $job->id ?>" >View details &raquo;</a>
          </div>
      </div>
    <?php endforeach; ?>
    <hr>

<?php include 'inc/footer.php' ?>
