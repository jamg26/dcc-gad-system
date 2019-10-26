<?php 
session_start();
include 'styles.php';


?>

<html>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">
  <img src="/logo.png" width="30" height="30" alt="">Gender and Development</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <!-- captains nav -->
    <?php 
      if(@$_SESSION['user']['role'] == 'captain') {
    ?>
      <li class="nav-item">
        <a class="nav-link" href="/pages/barangay-captain/scheduler.php">Scheduler</a>
      </li>
      <?php } ?>
      <!-- chairpersons nav -->
      <?php 
      if(@$_SESSION['user']['role'] == 'chairperson') {
    ?>
      <li class="nav-item">
        <a class="nav-link" href="/pages/chairperson/input-annual-gad.php">Annual GAD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/chairperson/accomplishment-report.php">Accomplishment Report</a>
      </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link" href="/signout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
</html>