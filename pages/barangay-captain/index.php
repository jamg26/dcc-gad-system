<?php
include '../../styles.php';
include '../../navigation.php';
include '../../db.php';
?>

<html>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">

      
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
        <?php
          $sql = "select * from schedule";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  ?>
                <tr>
                  <th scope="row"><?php echo $row['id'] ?></th>
                  <td><?php echo $row['title'] ?></td>
                  <td><?php echo $row['deadline'] ?></td>
                  <td><?php echo $row['assigned_staff'] ?></td>
                  <form action="./viewer/schedule.php" method="get">
                    <input type="text" name="id" value="<?php echo $row['id'] ?>" hidden>
                    <input type="text" name="title" value="<?php echo $row['title'] ?>" hidden>
                    <input type="text" name="description" value="<?php echo $row['description'] ?>" hidden>
                    <input type="text" name="deadline" value="<?php echo $row['deadline'] ?>" hidden>
                    <input type="text" name="assigned_staff" value="<?php echo $row['assigned_staff'] ?>" hidden>
                    <td><button class="btn btn-success btn-sm">View</button></td>
                  </form>
                </tr>
            <?php } }?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>