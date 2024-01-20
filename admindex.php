<?php include('partials/_head.php') ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<section class="Getstarted">
    <div class="section pb0 card-body ">
      <h2 class="text-center mt-5">Welcome, Admin</h2>
        <p class="text-center text-muted mb-4">Perform your CRUD operations below</p>
    </div>
</section>

<div class="container ">
    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #37517e;">
                    <h4 class="text-white">GCAA PHONEBOOK
                        <a href="addnew.php" class="btn btn-primary float-end">Add New</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped" id="phoneboooklist">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>JOB TTTLE</th>
                                <th>EXTENSION</th>
                                <th>NAMES</th>
                                <th>FLOOR</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM phonebook1";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $phonebook) {
                            ?>
                                    <tr>
                                        <td><?= $phonebook['id']; ?></td>
                                        <td><?= $phonebook['JOBTITLE']; ?></td>
                                        <td><?= $phonebook['EXTENSION']; ?></td>
                                        <td><?= $phonebook['NAMES']; ?></td>
                                        <td><?= $phonebook['FLOOR']; ?></td>
                                        <td>
                                            <a href="edit.php?id=<?= $phonebook['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="editcode.php" method="POST" class="d-inline">
                                           <?php include('partials/_modal.php') ?>
        
                                                
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<h5> No Record Found </h5>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="mt-5">
</div>
<?php include('partials/_footer.php') ?>