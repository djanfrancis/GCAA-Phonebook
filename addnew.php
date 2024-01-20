<?php
$title = "Add New";
include('partials/_head.php')
?>
<section class="Getstarted mt-5">
    <div class="container mt-5">
        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #37517e;">
                        <h4 class="text-white">ADD NEW
                            <a href="admindex.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="editcode.php" method="POST">

                            <div class="mb-3">
                                <label>JOBTITLE</label>
                                <input type="varchar" name="JOBTITLE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>EXTENSION</label>
                                <input type="number" name="EXTENSION" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>NAMES</label>
                                <input type="varchar" name="NAMES" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>FLOOR</label>
                                <input type="varchar" name="FLOOR" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_phonebook" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('partials/_footer.php') ?>