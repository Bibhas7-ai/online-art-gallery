<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="manageArtwork.css">
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
                    <img src="https://widowcranky.files.wordpress.com/2018/08/img_0998.jpg?w=700" alt="Photo" width="600px" height="830px">
                </div>
            </div>
        <div class="right-container">
        <p class="genre-heading">The Lovers</p>
        <p class="author">BY René Magritte</p>
        <div class="line"></div>
        <br>
            <div class="description">
                <p>A depiction of the inability to fully unveil the true nature of even our most intimate companions.</p>
                <br>
                <div class="title-container">
                    <p class="title">Dimensions :</p>&nbsp;<p><u>54 cm x 73 cm</u></p>
                </div>
                <div class="title-container">
                    <p class="title">Period :</p>&nbsp;<p><u>Surrealism</u></p>
                </div>
                <div class="title-container">
                    <p class="title">Mediums :</p>&nbsp;<p><u>Oil Paint</u></p>
                </div>
                <br>  <br>
                <div class="title-container">
                    <p class="title">Offer Price :</p>&nbsp;&nbsp;<p class="price"><u>NPRS 15,000</u></p>
                </div>
            </div>
            <br>
          
            <div class="offer">
            <img src="https://i.ibb.co/K2gggZW/Subtract.png">
            <p>FLAT 9% OFF</p>
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
            <a href="#" class="rectangular-button">Modify</a>
        </div>
          </div>
          </div>
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
    </body>
</html>