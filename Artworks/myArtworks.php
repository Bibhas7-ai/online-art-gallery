<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="myArtworks.css">
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
        <a href="homePageArtists.php" class="home-icon">
            <i class="fa-solid fa-house" style="color: #593255;font-size: 18px; "></i>
        </a>
    </div>
    <br><br><br><br>
    <div class="total-container">
        <div class="left-text">My Artworks</div>
    </div>
    <br>
    <br>
    <br>
    <div class="items">
        <div class="first-item">
            <div class="left-item">
                <img src="https://widowcranky.files.wordpress.com/2018/08/img_0998.jpg?w=700">
                <div class="details">
                    <h2 class="title"><u>The Lovers</u></h2>
                    <a href="manageArtwork.php" class="manage-button"><b>Manage Artwork</b></a>
                </div>
            </div>
            <div class="right-item">
                <div class="del">
                    <i class="fa-solid fa-trash" style="color: #593255; font-size: 24px;" onclick="deleteItem(this)"></i>
                </div>
            </div>
        </div>  
    </div>
    <br><br>
    <div class="line"></div>
    <br>
    <div class="buttons">
        <a href="addArtwork.php" class="rectangular-button">Add Artwork</a>
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
