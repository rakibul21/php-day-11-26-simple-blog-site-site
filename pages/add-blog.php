<?php
if (!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}
?>
<?php include 'header.php' ?>



<section class="py-5" style="background-color: skyblue">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card" >
                    <div class="card-header text-center bg-primary text-white fw-bold">Add Blog From</div>
                    <div class="card-body bg-color text-white">
                        <h4 class="text-center text-success"><?php echo $result ?></h4>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Author Info</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="author"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Description</label>
                                <div class="col-md-9">
                                    <textarea  class="form-control" name="description"> </textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image"/>
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-primary" name="btn" value="Add Blog From"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'?>


