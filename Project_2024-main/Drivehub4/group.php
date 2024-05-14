<!-- 





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Group</title>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Create a New Group</h2>
    <form>
        <div class="form-group">
            <label for="groupName">Group Name:</label>
            <input type="text" class="form-control" id="groupName"name="gname" placeholder="Enter group name" required>
        </div>
        <div class="form-group">
            <label for="adminName">Group Admin Name:</label>
            <input type="text" class="form-control" id="adminName" name="aname"placeholder="Enter admin name" required>
        </div>
      
        <button type="submit" name='save' class="btn btn-primary">submit</button>
        <button type="submit" name='create' class="btn btn-primary"><a href ="group_member.php">submit</a></button>
    </form>
</div>

<!-- Bootstrap JS and dependencies (optional) -->
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


<?php
require_once "connection_db.php";

if(isset($_SERVER['save'])) {
    if(isset($_POST['gname']) && isset($_POST['aname'])) {
        $gname = $_POST['gname'];
        $adminname = $_POST['aname'];

        $query = "INSERT INTO `groups`(`G_ID`, `U_ADMIN_ID`,`GROUP_NAME`, `admin_name`) VALUES ('NULL','NULL','$gname','$adminname')";

        $result = mysqli_query($conn, $query);

        if($result) {
            echo "Record inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Group name and admin name must be provided.";
    }
}
?>




?> --> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Group</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Create a New Group</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="groupName">Group Name:</label>
            <input type="text" class="form-control" id="groupName" name="gname" placeholder="Enter group name" required>
        </div>
        <div class="form-group">
            <label for="adminName">Group Admin Name:</label>
            <input type="text" class="form-control" id="adminName" name="aname" placeholder="Enter admin name" required>
        </div>
      
        <button type="submit" name='save' class="btn btn-primary">Submit</button>
        <a href="group_member.php" class="btn btn-primary">Cancel</a>
    </form>
</div>

<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php
require_once "connection_db.php";

if(isset($_POST['save'])) {
    if(isset($_POST['gname']) && isset($_POST['aname'])) {
        $gname = $_POST['gname'];
        $adminname = $_POST['aname'];
        $adminid=1;
       
        $query = "INSERT INTO `groups`(`GROUP_NAME`, `admin_name`) VALUES ('$gname','$adminname')";

        $result = mysqli_query($conn, $query);

        if($result) {
            echo "Record inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Group name and admin name must be provided.";
    }
}
?>

