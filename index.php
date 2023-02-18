<?php include_once 'header.php'; ?>
<style>
    body {

        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url(bg.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;

    }
</style>
<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ism";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle user login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the login form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // SQL query to validate the user's input
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    // Execute the query and get the result
    $result = mysqli_query($conn, $sql);

    // Check if the query returned a valid result
    if (mysqli_num_rows($result) == 1) {
        // Successful login, redirect to the dashboard or homepage
        header("location: index.php");
    } else {
        // Invalid login, display an error message
        $login_error = "Invalid username or password";
    }
}

// Close the database connection
mysqli_close($conn);
?>
<link rel="stylesheet" href="form.css">
<main>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="bg-light form-out col-md-6">
                <br><br><br>
                <h1 class="text-secondary text-center">LOGIN FORM</h1>

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-row">
                        <div class="col-1 p-0 mr-1">
                            <i class="fa fa-user text-secondary" style="float: right;margin-top:35px;"></i>
                        </div>
                        <div class="col-10 mb-2">
                            <div class="input-group">
                                <input type="text" name="username" id="username" placeholder="Username" />
                                <!-- <span id="username_error" class="password_danger" style="color:red;">Username is Required<span> -->
                            </div>
                        </div>
                        <div class="col-1 p-0 mr-1">
                            <i class="fa fa-envelope text-secondary" style="float: right;margin-top:35px;"></i>
                        </div>
                        <div class="col-10 mb-2">
                            <div class="input-group">
                                <input type="text" name="email_id" id="email_id" placeholder="EmailId">
                                <!-- <span id="email_error" class="password_danger" style="color:red;">Email is Required<span> -->
                            </div>
                        </div>
                        <div class="col-1 p-0 mr-1">
                            <i class="fa fa-lock text-secondary" style="float: right;margin-top:35px;"></i>
                        </div>
                        <div class="col-10">
                            <div class="input-group">
                                <input type="password" name="password" id="password" title="Must contain at least one number and one uppercase and lowercase letter,
                                and at least 8 or more characters" placeholder="Password" />
                                <!-- <span id="password_error" class="password_danger" style="color:red;">Password is Required<span> -->
                            </div>
                        </div>

                        <!-- <div class="col-1 p-0 mr-1">
                            <i class="fa fa-lock text-secondary" style="float: right;margin-top:35px;"></i>
                        </div>
                        <div class="col-10">
                            <div class="input-group">
                                <input type="password" name="password_repeat" id="password_repeat" placeholder="Confirm password">
                            </div>
                        </div> -->

                    </div>

                    <div class="row mt-3" style="justify-content: center">
                        <button name="signup_submit" type="submit" class="btn btn-success mt-3" id="contact">
                            <div style="font-size: 1.5rem;"> Login
                            </div>

                        </button>


                    </div>
                    <br><br><br>

                </form>
                <?php if (isset($login_error)) {
                    echo $login_error;
                } ?>




            </div>

            <div class="col-md-3"></div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

    </html>