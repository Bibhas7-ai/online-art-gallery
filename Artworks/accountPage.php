<?php include('connect.php');?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="accountpage.css">
    <script src="https://kit.fontawesome.com/98d2dd6dda.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="background-container">
        <div class="bar">
            <div class="logos">
                <img src="https://i.ibb.co/7JPDqGp/Group-3-1.png" alt="Art Gallery Logo">
                <div class="rectangless"></div>
                <p class="Text">ArtScape</p>
            </div>
        </div>
        <div class="main-container">
            <div class="account-page">
                <div class="container">
                    <div class="col-2">
                        <div class="form-container">
                        <div class="form-btn">
                            <span onclick="showForm('login')" class="active" data-form-number="1"><a href="accountPage2.php">Login</a></span>
                            <span onclick="showForm('signup')" data-form-number="2">Signup</span>
                            <hr id="Indicator">
                        </div>
                            <form action="" method="post" id="signupForm" data-form-number="2">
                                <input type="text" placeholder="Username" id="signupUsername" class="form-control" required="required" name="user_username">
                                <input type="password" placeholder="Password" id="signupPassword" class="form-control" required="required" name="password">
                                <select name="accountType">
                                    <option value="user">User</option>
                                    <option value="artist">Artist</option>
                                </select>
                                <button type="submit" class="btn"  name="user_register">Register</button>
                                <p class="option">Already have an account?
                                    <br>
                                    <span onclick="showForm('login')"><a href="accountPage2.php">Login</a></span>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showForm(formType) {
            var signupForm = document.getElementById("signupForm");
            var indicator = document.getElementById("Indicator");
            var slider = document.getElementById("slider");

            if (formType === 'signup') {
                signupForm.classList.add('active');
                indicator.style.transform = "translateX(128px)";
                slider.style.transform = "translateX(100%)";
            }
        }

        showForm('signup');
    </script>
</body>
</html>

<!--php code-->
<?php
if(isset($_POST['user_register'])){
    $signupUsername = $_POST['user_username'];
    $signupPassword = $_POST['password'];
    $hash_password = password_hash($signupPassword, PASSWORD_DEFAULT);
    $UserType = $_POST['accountType'];

    //selecrt query
    $select_query = "SELECT * FROM user_table WHERE username='$signupUsername'";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);
    
    if ($rows_count > 0) {
        echo "<script>alert('Username already exists')</script>";
    } else {
        //insert query
        $insert_query = "INSERT INTO user_table (username, user_password, user_type) VALUES ('$signupUsername', '$hash_password', '$UserType')";
        $sql_execute = mysqli_query($con, $insert_query);
        if ($sql_execute) {
            echo "<script>alert('User Registered')</script>";
        } else {
            die(mysqli_error($con));
        }
    }
}
?>