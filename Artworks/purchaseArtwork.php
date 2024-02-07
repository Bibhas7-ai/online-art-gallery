<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="purchaseArtwork.css">
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
            <i class="fa-solid fa-house" style="color: #593255;font-size: 18px; "></i>
        </a>
    </div>
    <br><br><br><br>
    <div class="total-container">
        <div class="left-text">Artwork Cart
        </div>
    </div>
    
    <br><br>
    <div class="items">
        <div class="first-item">
            <label class="checkbox-container">
                <input type="checkbox" class="checkbox">
                <span class="checkmark"></span>
            </label>
            <div class="left-item">
                <img src="https://widowcranky.files.wordpress.com/2018/08/img_0998.jpg?w=700">
                <div class="details">
                   <h2 class="title"><u>The Lovers</u></h2>
                   <p>NPRS 1,50,000</p>
                </div>
            </div>
            <div class="right-item">
                <div class="quantity-container">
                    <div class="minus round-button">-</div>
                    <input type="number" value="1" class="quantity-input" min="0">
                    <div class="plus round-button">+</div>
                </div>
                <br>
                <div class="del">
                    <i class="fa-solid fa-trash" style="color: #593255; font-size: 24px;"onclick="deleteItem(this)"></i>
                </div>
            </div>
        </div>
        <br><br>
        <div class="line"></div>
        <br><br>
        <div class="second-item">
            <label class="checkbox-container">
                <input type="checkbox" class="checkbox">
                <span class="checkmark"></span>
            </label>
            <div class="left-item">
                <img src="https://images.saatchiart.com/saatchi/1401577/art/6865571/5934923-HSC00001-7.jpg?fbclid=IwAR13OpINfHocfbjzQ6NTLvQ7H-o9IoonHt-i9VVoGQiSJYrUamKnhljaD2s">
                <div class="details">
                   <h2 class="title"><u>SADNESS</u></h2>
                   <p>NPRS 20,000</p>
                </div>
            </div>
            <div class="right-item">
                <div class="quantity-container">
                    <div class="minus round-button">-</div>
                    <input type="number" value="1" class="quantity-input" min="0">
                    <div class="plus round-button">+</div>
                </div>
                <br>
                <div class="del">
                    <i class="fa-solid fa-trash" style="color: #593255; font-size: 24px;" onclick="deleteItem(this)"></i>
                </div>
            </div>
        </div>
        <br><br>
        <div class="line"></div>
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
    <script>
        // Wait for the page to load
        document.addEventListener("DOMContentLoaded", function () {
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
            });

            function deleteItem(deleteButton) {
            const itemContainer = deleteButton.closest('.first-item'); // Get the parent container of the item
            itemContainer.remove(); // Remove the item from the DOM
        }
        
        

   
    // Get all delete buttons
    const deleteButtons = document.querySelectorAll('.delete-button');

    // Function to handle delete button click
    function handleDeleteButtonClick(event) {
        const itemContainer = event.target.closest('.first-item'); // Get the parent container of the item
        itemContainer.remove(); // Remove the item from the DOM
    }

    // Attach click event listener to each delete button
    deleteButtons.forEach(button => {
        button.addEventListener('click', handleDeleteButtonClick);
    });

    
          

    </script>
</body>
</html>
