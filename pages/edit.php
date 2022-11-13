<?php include 'header.php' ?>

<section class="py-5" style="background-color: lightgray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card" style="background-color: lightcyan">
                    <div class="card-header">Edit Blog From</div>
                    <div class="card-body">
                        <h4 class="text-center text-success"><?php echo $result ?></h4>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Title</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $singleBlog['title']?>" class="form-control" name="title"/>
                                    <input type="text" name="id" value="<?php echo $singleBlog['id']?>"  hidden/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Author Info</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $singleBlog['author']?>"value="<?php echo $singleBlog['title']?>" class="form-control" name="author"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Description</label>
                                <div class="col-md-9">
                                    <textarea  class="form-control" name="description"> value="<?php echo $singleBlog['description']?>"</textarea>
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
                                    <input type="submit" class="btn btn-outline-success" name="update_btn" value="Update Blog Info"/>
                                    <img src="<?php echo $singleBlog['image']?>" alt="" height="100" width="130">
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



