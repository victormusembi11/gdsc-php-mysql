<?php

$username_error = $_GET["username_error"] ?? null;
$email_error = $_GET["email_error"] ?? null;

$username = $_GET["username"] ?? null;
$email = $_GET["email"] ?? null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <form action="proc.php" method="post" novalidate>
            <!-- Username Input -->
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username ?>">
            </div>
            <!-- Username Error -->
            <?php if ($username_error) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $username_error ?>
                </div>
            <?php } ?>
            <!-- Email Input -->
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email ?>">
            </div>
            <!-- Email Error -->
            <?php if ($email_error) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $email_error ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>