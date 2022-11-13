<?php include 'header.php' ?>

<section class="py-5 manage-bg" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color: lightcyan">
                    <div class="card-header">Add Blog Info</div>
                    <div class="card-body">
                        <h4 class="text-center text-success"><?php echo $result ?></h4>


                        <table class="table table-bordered table-hover ">
                            <thead>
                            <tr>
                                <th>Blog Title</th>
                                <th>Anthor Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($blogs as $blog) { ?>
                            <tr>
                                <td><?php echo $blog['title'] ?></td>
                                <td><?php echo $blog['author'] ?></td>
                                <td><?php echo $blog['description'] ?></td>
                                <td><img src="<?php echo $blog['image'] ?>" alt="" height="60" width="80"/></td>
                                <td>
                                    <a href="action.php?page=edit&&id=<?php echo $blog['id']; ?>" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="action.php?page=deleted&&id=<?php echo $blog['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to deleted this..')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'?>


