<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="homepage.css"> 
    <script src="https://kit.fontawesome.com/98d2dd6dda.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>
<body>
    
    <nav class="navbar">   
        <a href="homePageUser.php" class="home-icon">
            <!-- <img src="https://i.ibb.co/JdGHXdC/Group-3.png" alt="Art Gallery Logo"> -->
            <!-- <img src="https://i.ibb.co/qgrZ20G/Group-3.png" alt="Art Gallery Logo"> -->
            <img src="https://i.ibb.co/7JPDqGp/Group-3-1.png">
        </a>
        <form class="search-form">
            <input type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <button type="submit">Search</button>
        </form>
        <div id="searchResults">
            <!-- Search results will be displayed here -->
        </div>

        <a href="accountPage.php" class="account-link">
            <span class="logout-button"><i class="fa-solid fa-sign-out"></i></span>
          </a>
    </nav>
    <div class="downbar">
        <a href="browseArtworkUser.php">Browse Artwork</a>
        <a href="virtualExhibitionTimeUser.php">Virtual Exhibition</a>
        <a href="purchaseArtwork.php">Purchase Cart</a>
    </div>
    <div class="image-container">
        <!-- <img id="image" src="https://www.singulart.com/images/artworks/v2/cropped/20053/alts/zoom/alt_1581946_85bb9bc68000777bc38b3eb99e03a9af.jpeg" alt="Art symbolizing love"> -->
        <img id="image" src="https://images.unsplash.com/photo-1500964757637-c85e8a162699?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1203&q=80">
        <a href="5ViewNow.php" class="view-now-button"><b>View Now</b></a>
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
                    <iconify-icon icon="skill-icons:instagram"></iconify-icon>                </a>
                <a href="https://www.linkedIn.com/ArtScape" target="_blank">
                    <img src="https://www.freeiconspng.com/thumbs/linkedin-logo-png/linkedin-logo-3.png" alt="linkedIn">
                </a>
            </div>
        </div>
    </footer>
    <script>
        const searchButton = document.getElementById("searchButton");
        const searchInput = document.getElementById("searchInput");
        const searchResultsContainer = document.getElementById("searchResults");
    
        // Simulated search results data
        const searchResultsData = ["Result 1", "Result 2", "Result 3"];
    
        searchButton.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent the form from submitting
    
            const searchTerm = searchInput.value.trim().toLowerCase();
    
            // Clear previous search results
            searchResultsContainer.innerHTML = "";
    
            if (searchTerm === "") {
                // Show message when the search input is empty
                const noResultsMessage = document.createElement("p");
                noResultsMessage.textContent = "Please enter a search term.";
                searchResultsContainer.appendChild(noResultsMessage);
            } else {
                // Filter search results based on the search term
                const filteredResults = searchResultsData.filter(result =>
                    result.toLowerCase().includes(searchTerm)
                );
    
                if (filteredResults.length === 0) {
                    // Show message when no results are found
                    const noResultsMessage = document.createElement("p");
                    noResultsMessage.textContent = "No results available.";
                    searchResultsContainer.appendChild(noResultsMessage);
                } else {
                    // Display the search results
                    filteredResults.forEach(result => {
                        const resultItem = document.createElement("p");
                        resultItem.textContent = result;
                        searchResultsContainer.appendChild(resultItem);
                    });
                }
            }
        });
    </script>
    


</body>
</html>

