<?php

include __DIR__ . "/../db_conn.php";


// Fetch the user to render the default values in the form
$sql = "SELECT * FROM Users WHERE EmailAddress = 'johndoe@example.com'";
$result = $conn->query($sql);

$FirstName = "";
$LastName = "";
$EmailAddress = "";

while ($row = $result->fetch_assoc()) {
    $FirstName = $row["FirstName"];
    $LastName = $row["LastName"];
    $EmailAddress = $row["EmailAddress"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="container">
            <form action="update/proc.php" method="post">
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" value="<?php echo $FirstName ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="<?php echo $LastName ?>">
                </div>
                <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $EmailAddress ?>">
                </div> -->
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</body>

</html>