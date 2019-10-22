<?php
include '../../styles.php';
include '../../navigation.php';
?>

<html>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
        <form action="./requests/add-schedule.php" method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label>Deadline</label>
                <input type="month" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label>Assigned Staff</label>
                <select name="" id="" class="form-control">
                    <option value=""></option>
                    <option value="">Juan Dela Cruz</option>
                    <option value="">John Cena</option>
                    <option value="">Misty Kris</option>
                    <option value="">Tipsy Bitsy</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-sm">
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
</body>
</html>