<?php
include '../../styles.php';
include '../../navigation.php';
?>

<html>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <a href="scheduler.php">SCHEDULER</a>

      
      <h2>GAD Plan and Budget</h2>
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Year</th>
            <th scope="col">Chairperson</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">December 31</td>
            <td>2019</td>
            <td>Juan Dela Cruz</td>
            <td><button class="btn btn-success btn-sm" onclick="window.location.href='annual-gad.php'">View</button></td>
          </tr>
        </tbody>
      </table>

      <h2>Accomplishment Report</h2>
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Year</th>
            <th scope="col">Chairperson</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">December 31</td>
            <td>2019</td>
            <td>Juan Dela Cruz</td>
            <td><button class="btn btn-success btn-sm" onclick="window.location.href='accomplishment-report.php'">View</button></td>
          </tr>
        </tbody>
      </table>



    </div>
    <div class="col-sm">
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">Schedule #</th>
            <th scope="col">Title</th>
            <th scope="col">Deadline</th>
            <th scope="col">Assigned Staff</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">2293</th>
            <td>Mark</td>
            <td>October 22 2019</td>
            <td>Juan Dela Cruz</td>
            <td><button class="btn btn-success btn-sm">View</button></td>
          </tr>
          <tr>
            <th scope="row">2294</th>
            <td>Mark</td>
            <td>October 22 2019</td>
            <td>Juan Dela Cruz</td>
            <td><button class="btn btn-success btn-sm">View</button></td>
          </tr>
          <tr>
            <th scope="row">2295</th>
            <td>Mark</td>
            <td>October 22 2019</td>
            <td>Juan Dela Cruz</td>
            <td><button class="btn btn-success btn-sm">View</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>