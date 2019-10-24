<?php
include '../../../styles.php';
include '../../../navigation.php';
?>

<html>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <form action="/requests/schedule/update.php" method="post">
                <div class="form-group">
                    <label>Title</label>
                    <input name="title" type="text" class="form-control" value="<?php echo $_GET['title']?>" placeholder="Title" disabled>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" name="" cols="30" rows="5" disabled><?php echo $_GET['description']?></textarea>
                </div>
                <div class="form-group">
                    <label>Deadline</label>
                    <input name="deadline" type="date" class="form-control" value="<?php echo $_GET['deadline']?>" placeholder="Title" disabled>
                </div>
                <div class="form-group">
                    <label>Assigned Staff</label>
                    <select name="staff" id="" class="form-control" disabled>
                        <option></option>
                        <option>Juan Dela Cruz</option>
                        <option>John Cena</option>
                        <option>Misty Kris</option>
                        <option>Tipsy Bitsy</option>
                    </select>
                </div>
                <input type="text" name="id" value="<?php echo $_GET['id']?>" hidden>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                <form action="/requests/schedule/delete.php" method="post">
                    <input type="text" name="id" value="<?php echo $_GET['id'] ?>" hidden>
                    <button type="button" onclick="input()" class="btn btn-success">Edit</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
<script>
    function input() {
        $('input,textarea,select').prop('disabled', false);
    }
</script>
</body>
</html>