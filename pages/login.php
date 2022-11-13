<?php include 'header.php' ?>

<section class="py-5" style="background-color: skyblue">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card" >
                    <div class="card-header text-center bg-primary text-white fw-bold">Login From</div>
                    <div class="card-body bg-color text-white">
                        <h4 class="text-center text-success"><?php echo $result ?></h4>
                        <form action="action.php" method="POST" >
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Email Adress</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password"/>
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-primary" name="login_btn" value="Login"/>
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



