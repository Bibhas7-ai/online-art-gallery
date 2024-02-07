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
        <a href="homePageUser.php" >
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
                    <img src="https://images.unsplash.com/photo-1500964757637-c85e8a162699?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1203&q=80" alt="Photo" width="600px" height="928px">
                </div>
            </div>
        <div class="right-container">
        <p class="genre-heading">Rainbow Mountains</p>
        <p class="author">BY Wallaso</p>
        <div class="line"></div>
        <br>
            <div class="description">
                <p>A captivating artwork that seamlessly blends vibrant hues across a majestic mountain landscape.</p>
                <br>
                <div class="title-container">
                    <p class="title">Dimensions :</p>&nbsp;<p><u>48 cm x 30 cm</u></p>
                </div>
                <div class="title-container">
                    <p class="title">Period :</p>&nbsp;<p><u>Not Available</u></p>
                </div>
                <div class="title-container">
                    <p class="title">Mediums :</p>&nbsp;<p><u>Not Available</u></p>
                </div>
                <br>  <br>
                <div class="title-container">
                    <p class="title">Offer Price :</p>&nbsp;&nbsp;<p class="price"><u>NPRS 11,600</u></p>
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
        <div class="container007"> 
            <br>
            <br> 
            <div class="buttons"> 
            <a href="purchaseArtworkscam.php" class="rectangular-button">Add to Cart</a>
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
</div>
            </div>

          </div>
          </div>

    <br>
    <br>
    <br>


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