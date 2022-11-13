

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First php project</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow" >
    <div class="container">
        <a href="" class="navbar-brand" style="color: yellow">My PHP Project</a>
        <ul class="navbar-nav ">
            <li><a href="action.php?page=home" class="nav-link my-nav-link active " >Home</a></li>
            <?php if (isset($_SESSION['id'])) { ?>
                <li><a href="action.php?page=logout" class="nav-link my-nav-link active " >Logout</a></li>
                <li><a href="action.php?page=add-blog" class="nav-link my-nav-link active">Add Blog</a></li>
                <li><a href="action.php?page=manage-blog" class="nav-link my-nav-link active">Manage Blog</a></li>

            <?php } else { ?>

                <li><a href="action.php?page=login" class="nav-link my-nav-link active " >Login</a></li>

            <?php } ?>


        </ul>
    </div>
</nav>
