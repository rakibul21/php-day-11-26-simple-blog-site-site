<?php
    if (!isset($_SESSION['id']))
    {
        header('Location: action.php?page=login');
    }
?>

<?php include 'header.php' ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color: blue">
                <div class="card" style="background-color: skyblue">
                    <div class="py-5 px-5 mt-5 mb-5 " style="background-color: blueviolet">
                        <h1 class="bg-light text-center" style="color: red">Welcome to Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>
