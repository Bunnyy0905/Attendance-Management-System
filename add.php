<?php
include("header.php");
include("db.php");
    $flag=0;
    if(isset($_POST['submit']))
    {
    $result=
    mysqli_query($con, "insert into attendence(student_name, roll_number)values('$_POST[name]', '$_POST[roll]')");

    if($result)
    {
        $flag=1;
    }

    }
?>

<div class="panel panel-default">
    <?php if($flag){ ?>
    <div class="alert alert-success">
        Data Successfully Inserted
    </div>
     <?php } ?>

    <div class="panel-heading">
        <h2>
            <a class="btn btn-success" href="add.php">Add Student</a>
            <a class="btn btn-info pull-right" href="index.php">Back</a>

        </h2>
    </div>

    <div class="panel-body">
        <form action="add.php" method="post">
           
       

        <div class="form-group">
            <label for="name">Student Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
            <label for="roll">Roll Number</label>
            <input type="text" name="roll" id="roll" class="form-control" required>
            </div>
            

            <div class="form-group">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary" required>
            </div>
        </form>
    </div>
</div>