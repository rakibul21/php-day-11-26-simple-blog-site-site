<?php include 'header.php';?>
    <section class=" py-5" style="background-color: skyblue">
        <div class="container">
            <div class="row">
                <?php foreach  ($blogs as $blog) { ?>
                    <div class="col-md-3 mb-3">
                        <div class="card bg-light">
                            <div class="card-header">
                                <img src="<?php echo $blog['image'];?>" alt="" class="card-img-top" height="250px"/>
                            </div>

                            <div class="card-body bg-danger text-white">
                                <h3><?php echo $blog['title'];?></h3>
                                <h5><?php echo $blog['author'];?></h5>
                                <hr/>
                                <a href="action.php?page=detail&&id=<?php echo $blog['id'];?>" class="btn btn-outline-warning px-5">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include 'footer.php';?>