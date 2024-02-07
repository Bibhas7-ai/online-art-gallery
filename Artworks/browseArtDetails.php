<?php
include('connect.php');

// Check if product_id or product_name is provided in the URL
if (isset($_GET['product_id']) || isset($_GET['product_name'])) {
    // Initialize variables to store product_id and product_name
    $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
    $product_name = isset($_GET['product_name']) ? urldecode($_GET['product_name']) : null;

    // Define SQL query to fetch product details based on product_id or product_name
    if (!is_null($product_id)) {
        $sql = "SELECT * FROM insert_table WHERE product_id = '$product_id'";
    } elseif (!is_null($product_name)) {
        $sql = "SELECT * FROM insert_table WHERE product_name = '$product_name'";
    } else {
        echo "Product ID or Product Name is not provided.";
        exit();
    }

    // Execute the SQL query
    $result = mysqli_query($con, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Check if a matching product is found
        if ($row) {
            ?>
            <!DOCTYPE html>
            <html>
            <head>
                <link rel="stylesheet" type="text/css" href="browseArtDetails.css">
                <script src="https://kit.fontawesome.com/98d2dd6dda.js" crossorigin="anonymous"></script>
                <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
                </style>
            </head>
            <body>
                <nav class="navbar">
                    <a href="homePageUser.php">
                        <img src="https://i.ibb.co/7JPDqGp/Group-3-1.png" alt="Art Gallery Logo">
                    </a>
                    <form class="search-form">
                        <input type="text" placeholder="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <button type="submit">Search</button>
                    </form>
                </nav>
                <div class="main-container">
                    <a href="homePageUser.php" class="home-icon">
                        <i class="fa-solid fa-house" style="color:  #593255;font-size: 18px; "></i>
                    </a>
                </div>
                <div class="container">
                    <div class="left-container">
                        <div class="image-container">
                            <?php
                            if (isset($row['image_filename'])) {
                                $imageFilename = $row['image_filename'];
                                $imageDirectory = 'C:/xampp/htdocs/Artworks/images/';
                                $imagePath = $imageDirectory . $imageFilename;

                                if (file_exists($imagePath)) {
                                    echo 'Image found at: ' . $imagePath;
                                    echo '<img src="' . $imagePath . '" alt="Artwork" width="600px" height="928px">';
                                } else {
                                    echo 'Image not found at: ' . $imagePath;
                                }
                            } else {
                                echo "Image filename not set in the data.";
                            }
                            ?>
                        </div>
                    </div>

                    <div class="right-container">
                        <h1 class="genre-heading"><?php echo $row['product_name']; ?></h1>
                        <?php if (isset($row['artist_name'])) { ?>
                            <p class="author">BY <?php echo $row['artist_name']; ?></p>
                        <?php } else { ?>
                            <p class="author">Artist information not available</p>
                        <?php } ?>
                        <div class="line"></div>
                        <br>
                        <div class="description">
                            <p><?php echo $row['description']; ?></p>
                            <br>
                            <div class="title-container">
                                <p class="title">Dimensions :</p>&nbsp;<p><u><?php echo isset($row['dimensions']) ? $row['dimensions'] : 'N/A'; ?></u></p>
                            </div>
                            <div class="title-container">
                                <p class="title">Period :</p>&nbsp;<p><u><?php echo isset($row['period']) ? $row['period'] : 'N/A'; ?></u></p>
                            </div>
                            <div class="title-container">
                                <p class="title">Mediums :</p>&nbsp;<p><u><?php echo isset($row['mediums']) ? $row['mediums'] : 'N/A'; ?></u></p>
                            </div>
                            <br>  <br>
                            <div class="title-container">
                                <p class="title">Offer Price :</p>&nbsp;&nbsp;<p class="price"><u><?php echo isset($row['offer_price']) ? $row['offer_price'] : 'N/A'; ?></u></p>
                            </div>
                        </div>
                        <br>
                        <div class="offer">
                            <img src="https://i.ibb.co/K2gggZW/Subtract.png">
                            <p>FLAT 9% OFF</p>
                        </div>
                        <p class="description">Price inclusive of all taxes</p>
                        <p style="color: #593255; font-size: 15px; font-family: Poppins; 
                        margin-left: 65px; font-weight: 550; margin-top: 35px">Qty</p>

                        <div class="quantity-container">
                            <div class="minus round-button">-</div>
                            <input type="number" value="1" class="quantity-input" min="0">
                            <div class="plus round-button">+</div>
                        </div>
                        <div class="container007"> 
                            <br>
                            <br> 
                            <div class="buttons"> 
                                <a href="#" class="rectangular-button">Add to Cart</a>
                                <a href="#" class="rectangular-button">Buy Now</a>    
                            </div> 
                            <br><br>
                            <div class="line"></div>
                            <br><br>
                            <div class="buttons">
                                <div class="dropdown-menu">
                                    <select id="country" name="country" class="rectangular-dropdown">
                                        <option value="country1">Nepal</option>
                                        <option value="country2">Japan</option>
                                        <option value="country3">Germany</option>
                                        <option value="country4">Turkey</option>
                                        <!-- Add more countries as needed -->
                                    </select>
                                </div>
                                <input class="pin-code" type="text" placeholder="Enter Pin Code">
                                <button onclick="processCountrySelection()">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

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
                                <iconify-icon icon="skill-icons:instagram"></iconify-icon>
                            </a>
                            <a href="https://www.linkedIn.com/ArtScape" target="_blank">
                                <img src="https://www.freeiconspng.com/thumbs/linkedin-logo-png/linkedin-logo-3.png" alt="linkedIn">
                            </a>
                        </div>
                    </div>              
                </footer>

                <script>
                    function processCountrySelection() {
                        var selectedCountry = document.getElementById("country").value;
                        // You can send 'selectedCountry' to the server via AJAX or use it for further actions.
                        alert("Selected country: " + selectedCountry);
                    }
                </script>
            </body>
            </html>
            <?php
        } else {
            echo "Product not found.";
        }
    } else {
        echo "Error fetching product details: " . mysqli_error($con);
    }

    // Close the database connection (you should do this when you're done with database operations)
    mysqli_close($con);
} else {
    echo "Product ID or Product Name is not provided.";
}
?>
