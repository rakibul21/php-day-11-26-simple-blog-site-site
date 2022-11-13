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
            <div class="col-md-12">
                <h1 class="bg-light text-center" style="color: lime">Welcome to Dashboard</h1>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>
