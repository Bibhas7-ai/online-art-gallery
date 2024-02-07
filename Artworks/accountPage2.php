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
                            <span onclick="showForm('login')" class="active" data-form-number="1">Login</span>
                            <span onclick="showForm('signup')" data-form-number="2"><a href="accountPage.php">Signup</a></span>
                            <hr id="Indicator">
                        </div>
                        <form action="" method="post" id="loginForm" class="active" data-form-number="1">
                            <input type="text" placeholder="Username" id="loginUsername" required="required" name="user_username">
                            <input type="password" placeholder="Password" id="loginPassword" required="required" name="password">
                            <select name="accountType">
                                <option value="user">User</option>
                                <option value="artist">Artist</option>
                            </select>
                            <button type="submit" class="btn" name="user_login">Login</button>
                            <p class="option">Don't have an account?
                                <br>
                                <a href="accountPage.php">Signup</a>
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
            var loginForm = document.getElementById("loginForm");
            var signupForm = document.getElementById("signupForm");
            var indicator = document.getElementById("Indicator");
            var slider = document.getElementById("slider");

            if (formType === 'login') {
                loginForm.classList.add('active');
                signupForm.classList.remove('active');
                indicator.style.transform = "translateX(0)";
                slider.style.transform = "translateX(0)";
            } else if (formType === 'signup') {
                signupForm.classList.add('active');
                loginForm.classList.remove('active');
                indicator.style.transform = "translateX(128px)";
                slider.style.transform = "translateX(100%)";
            }

            // Update the form number in the parameter
            var formNumber = document.querySelector(`[data-form-number="${formType === 'login' ? 1 : 2}"]`);
            var otherFormNumber = document.querySelector(`[data-form-number="${formType === 'login' ? 2 : 1}"]`);
            formNumber.dataset.formNumber = formType === 'login' ? 2 : 1;
            otherFormNumber.dataset.formNumber = formType === 'login' ? 1 : 2;
        }

        showForm('login');
    </script>
</body>
</html>

<!-- php code for login Logic -->
<?php
if(isset($_POST['user_login'])){
    $user_username = $_POST['user_username'];
    $user_password = $_POST['password'];
    $UserType = $_POST['accountType'];
    
    // 1. Use prepared statements to prevent SQL injection
    $select_query = "SELECT * FROM user_table WHERE username=? AND user_type=?";
    $stmt = mysqli_prepare($con, $select_query);
    mysqli_stmt_bind_param($stmt, "ss", $user_username, $UserType);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($row_data = mysqli_fetch_assoc($result)) {
        if (password_verify($user_password, $row_data['user_password'])) {
            if ($row_data['user_type'] == 'user') {
                echo "<script>alert('Login Successful')</script>";
                echo "<script>window.open('homePageUser.php','_self')</script>";
            } else if ($row_data['user_type'] == 'artist') {
                echo "<script>alert('Login Successful')</script>";
                echo "<script>window.open('homePageArtists.php','_self')</script>";
            }
        } else {
            echo "<script>alert('Invalid Credentials')</script>";
        }
    } else {
        echo "<script>alert('Invalid Credentials')</script>";
    }
}
?>

