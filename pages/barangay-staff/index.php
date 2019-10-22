<?php
include '../../styles.php';
include '../../navigation.php';
?>

<html>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
    <h2>Project Plan Activity</h2>
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
            <td><button class="btn btn-success btn-sm">Accept</button></td>
            <td><button class="btn btn-danger btn-sm">Declined</button></td>
            <td><button class="btn btn-info btn-sm">Report</button></td>
          </tr>
        </tbody>
      </table>

      
    </div>
    <div class="col-sm">
    <h2>Log Sheet</h2>
    <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Sitio</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Regala</td>
            <td>Sta Marina</td>
            <td>10/19/19</td>
            <td><button class="btn btn-success btn-sm">Attended</button></td>
            <td><button class="btn btn-danger btn-sm">Not Attended</button></td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Arreza</td>
            <td>Sto Nino</td>
            <td>10/19/19</td>
            <td><button class="btn btn-success btn-sm">Attended</button></td>
            <td><button class="btn btn-danger btn-sm">Not Attended</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>