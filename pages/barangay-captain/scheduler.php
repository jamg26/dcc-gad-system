<?php
include '../../styles.php';
include '../../navigation.php';
?>

<html>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
        <form action="/requests/schedule/add.php" method="post">
            <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" name="" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label>Deadline</label>
                <input name="deadline" type="date" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label>Assigned Staff</label>
                <select name="staff" id="" class="form-control">
                    <option></option>
                    <option>Juan Dela Cruz</option>
                    <option>John Cena</option>
                    <option>Misty Kris</option>
                    <option>Tipsy Bitsy</option>
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