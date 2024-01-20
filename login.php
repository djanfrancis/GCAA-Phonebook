<?php include('partials/_head.php') ?>
<link href="assets/css/loginstyle.css" rel="stylesheet">
<section class="Getstarted">
    <div class="section pb0 card-body">
        <h2 class="text-center mt-5"> ADMIN LOGIN</h2>
        <p class="text-center text-muted mb-4">Kindly enter your credentials</p>
    </div>

    <div class="container">
        <div class="grid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                //posted something
                                $user_name = $_POST['user_name'];
                                $password = $_POST['password'];

                                if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

                                    //read phonebook data from phonebook1/users
                                    $query = "select * from users where user_name = '$user_name' limit 1";
                                    $result = mysqli_query($con, $query);

                                    if ($result) {
                                        if ($result && mysqli_num_rows($result) > 0) {

                                            $user_data = mysqli_fetch_assoc($result);

                                            if ($user_data['password'] === $password) {

                                                $_SESSION['user_id'] = $user_data['user_id'];
                                                header("Location: admindex.php");
                                                die;
                                            }
                                        }
                                    }

                                    echo "Username or password incorrect";
                                } else {
                                    echo "Username or password incorrect!";
                                }
                            }

                            ?>

                            <div class="container">
                                <div class="row mx-auto">
                                    <div class="col-md-6 box">
                                        <div class="text-center">
                                            <h4 class="text-white"> Welcome to the </h4>
                                            <h4 class="text-white"> Admin Login Page </h4>
                                            <div> <img src="assets/img/app.png" height="195" /> </div>
                                        </div>
                                    </div>
                                </div>
                            
                                    <div class="col-md-6 box mx-auto">
                                        <form method="post">
                                            <h3 class="text-white">Login</h3>
                                            <div class="mb-3">
                                                <label for="username" class="form-label text-white">Username</label>
                                                <input type="text" class="form-control" id="username" name="user_name">
                                            </div>

                                            <div class="mb-3">
                                                <label for="myInput" class="form-label text-white">Password</label>
                                                <input type="password" name="password" class="form-control" id="myInput">
                                            </div>
                                            <input type="checkbox" onclick="myFunction()">
                                            <span class="text-white">Show Password</span> <br><br>

                                            <input id="button" type="submit" value="Login" class="btn btn-primary">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            

            
            <?php include('partials/_footer.php') ?>
            <script src="assets/js/loginscript.js"></script>
           
