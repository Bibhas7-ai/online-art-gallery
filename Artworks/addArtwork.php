<?php include('connect.php');?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="addArtwork.css">
    <script src="https://kit.fontawesome.com/98d2dd6dda.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/98d2dd6dda.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>
<body>
    
    <nav class="navbar">   
        <a href="homePageArtists.php" >
            <img src="https://i.ibb.co/7JPDqGp/Group-3-1.png" alt="Art Gallery Logo">
        </a>
        <form class="search-form">
            <input type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <button type="submit">Search</button>
        </form>
    </nav>
    <div class="main-container">
        <br>
        <a href="homePageArtists.php">
            <i class="fa-solid fa-house" style="color: #593255;font-size: 18px; "></i>
        </a>
    </div>
        <div class="container">
            <div class="left-container">
                <div class="image-container">
                  
                    <!-- <img class="imgg" src="https://static.thenounproject.com/png/3322766-200.png" alt="Photo" style="width: 100px; height: 100px;"> -->
                    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" id="image" required="required" name="image" onchange="previewImage(event)">
        <div class="image-preview">
            <img id="preview" src="#" alt="Preview">
        </div>

        
                </div>
        
            </div>
        <div class="right-container">

        
        <p class="genre-heading">add name <br>
       
            <input type="text" placeholder="Add a heading" required="required" name="product_name">
        
        </p>
        <p class="author">BY add name
        
            <input type="text" placeholder="Add author name" required="required" name="author_name">
           
      </p>
        </p>
        <div class="line"></div>
        <br>
            <div class="description">
                <p>add description thet best suits your work and entices the users to buy your artwork.<form>
            <input type="text" placeholder="Description" required="required" name="description">
           
       </p>
                <br>
                <div class="title-container">
                    <p class="title">Dimensions :</p>&nbsp;<p>
            <input type="text" placeholder="add dimensions" required="required" name="dimensions">
           
        </p>
                </div>
                <div class="title-container">
                    <p class="title">Period :</p>&nbsp;<p>
            <input type="text" placeholder="add Period" required="required" name="period">
           
        </p>
                </div>
                <div class="title-container">
                    <p class="title">Mediums :</p>&nbsp;<p>
            <input type="text" placeholder="add mediums" required="required" name="medium">
           
       </p>
                </div>
                <br>  <br>
                <div class="title-container">
                    <p class="title">Offer Price :</p>&nbsp;&nbsp;<p class="price">
            <input type="text" placeholder="add price" required="required" name="price">
           
        </p>
        
                </div>
            </div>
            <br>
          
            <div class="offer">
            <img src="https://i.ibb.co/K2gggZW/Subtract.png" >
            <p style="top: 890px; left: 710px;"> Add any offers </p>
            </div>
            <p class ="description">Price inclusive of all taxes</p>
            <p style="color: #593255; font-size: 15px; font-family: Poppins; 
            margin-left: 65px; font-weight: 550; margin-top: 35px">Qty</p>
        
        <div class="quantity-container">
            <div class="minus round-button">-</div>
            <input type="number" value="1" class="quantity-input" min="0">
            <div class="plus round-button">+</div>
        </div>
        <br><br>
        <div class="line"></div>
        <br>
        <br>
        <div class="buttons">
        <button type="submit" class="rectangular-button" name="Add_btn">Add Artwork</button>
        </div>
     
          </div>
          </div>
          </form>
          <br><br>
          <footer>
            <div class="footer-section"> 
                <div class="support-links">
                    <b>Support</b><br><br>
                    <a href="shippingAndReturn.php">Shipping and Return Policy</a><br>
                    <a href="helpCenter.php">Help Center</a><br>
                    <a href="termsAndConditions.php">Terms and Conditions</a>
                </div>
            </div>
            <div class="footer-section"> 

                <div class="social-media-links">
                    <b>Stay Connected</b><br><br>
                    <a href="https://www.facebook.com/ArtScape" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1024px-Facebook_Logo_%282019%29.png" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/ArtScape" target="_blank">
                        <iconify-icon icon="skill-icons:instagram"></iconify-icon>                </a>
                    <a href="https://www.linkedIn.com/ArtScape" target="_blank">
                        <img src="https://www.freeiconspng.com/thumbs/linkedin-logo-png/linkedin-logo-3.png" alt="linkedIn">
                    </a>
                </div>
            </div>
        </footer>
    <!-- Add this script tag at the end of the body or in the head section after the HTML content -->
<script>
    // Get the input field and plus/minus buttons
    const input = document.querySelector(".quantity-input");
    const plusButton = document.querySelector(".plus");
    const minusButton = document.querySelector(".minus");

    // Add click event listeners to the buttons
    plusButton.addEventListener("click", () => {
        // Increase the quantity when plus button is clicked
        input.value = parseInt(input.value) + 1;
    });

    minusButton.addEventListener("click", () => {
        // Decrease the quantity, but ensure it does not go below 0
        input.value = Math.max(parseInt(input.value) - 1, 0);
    });
    
</script>


<script>
        function previewImage(event) {
            var reader = new FileReader();
            var preview = document.getElementById('preview');

            reader.onload = function () {
                preview.src = reader.result;
            };

            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    </body>
</html>

<!-- php code for Add artwork -->
<?php
if(isset($_POST['Add_btn'])){         
    $product_name = $_POST['product_name'];
    $author_name = $_POST['author_name'];
    $description = $_POST['description'];
    $dimensions = $_POST['dimensions'];
    $period = $_POST['period'];
    $medium = $_POST['medium'];
    $price = $_POST['price'];
    
    // Accessing image
    $image = $_FILES['image']['name'];

    // Accessing image temp name    
    $temp_image = $_FILES['image']['tmp_name'];

    // Checking empty condition
    if($product_name=='' or $author_name=='' or $description=='' or $dimensions=='' or $period=='' or $medium=='' or $price=='' or $image=='' ){
        echo "<script>alert('Please fill all the fields')</script>";
        exit();
    } else {
        move_uploaded_file($temp_image, "./images/$image");

        // Insert query
        $insert_products = "INSERT INTO insert_table (product_name, author_name,description, dimensions,period,medium,price, image) VALUES ('$product_name','$author_name','$description','$dimensions','$period','$medium','$price','$image')";
        
        $result_query = mysqli_query($con, $insert_products);
        if($result_query){
            echo "<script>alert('Product added successfully')</script>";
        }
    }
}
?>










