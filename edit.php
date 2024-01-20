<?php
$title = "Edit Phonebook";
include('partials/_head.php')
?>
<section class="Getstarted mt-5">
    <div class="container">
        <?php include('message.php'); ?>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header" style="background-color: #37517e;">
                        <h4 class="text-white">EDIT
                            <a href="admindex.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $phonebook_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM phonebook1 WHERE id='$phonebook_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $phonebook = mysqli_fetch_array($query_run);
                        ?>
                                <form action="editcode.php" method="POST">
                                    <input type="hidden" name="phonebook_id" value="<?= $phonebook['id']; ?>">
                                    <div class="mb-3">
                                        <label>JOBTITLE</label>
                                        <input type="varchar" name="JOBTITLE" value="<?= $phonebook['JOBTITLE']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>EXTENSION</label>
                                        <input type="number" name="EXTENSION" value="<?= $phonebook['EXTENSION']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>NAMES</label>
                                        <input type="varchar" name="NAMES" value="<?= $phonebook['NAMES']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>FLOOR</label>
                                        <input type="varchar" name="FLOOR" value="<?= $phonebook['FLOOR']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_phonebook" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>
                                </form>
                        <?php
                            } else {
                                echo "<h4>Not found in directory </h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <?php include('partials/_footer.php')  ?>