<?php include('connect.php');?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="browseArtwork.css">
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
        <form class="search-form" action="search_product.php" method="get">
            <input type="text" placeholder="Search" name="search_data">
            <i class="fa-solid fa-magnifying-glass"></i>
            <!-- <button type="submit">Search</button> -->
            <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
        </form>
    </nav>
    <div class="main-container">
        <a href="homePageUser.php" class="home-icon">
            <i class="fa-solid fa-house" style="color:#593255 ;font-size: 18px; "></i>
        </a>
    </div>
    <br>
        <h2 class="genre-heading">GENRE</h2>
        
    
<br>
<div class="border">
    <img src="https://i.ibb.co/YyRHmg2/Frame.png" alt="border">
</div>
<br>

    <div class="carousel-container">
        <div class="arrow"></div>
        <ul class="genre-list">
            <li>
                <div class="col-md-4 mb-2"> 

                <!-- fetching products -->
<!-- style='background-image: url('/Artworks/images/bibhas.jpg');
                 -->
                <?php
                 search_product();
                ?>

                <!-- <div class="genre-item">
                    <div class="rectangle" style="background-image: url('https://s32625.pcdn.co/wp-content/uploads/2017/05/what-is-abstract-art-kandinsky.jpg.optimal.jpg');">
                        <div class="genre-details">
                            <span class="genre-title">Abstract Art</span>
                            <p class="genre-description">Explore ></p>
                        </div>
                    </div>
                </div> -->
            <!-- </li>
            <li>
                <div class="genre-item">
                    <div class="rectangle" style="background-image: url('https://s32625.pcdn.co/wp-content/uploads/2015/05/4834.Courbet_2C002D00_The_2D00_Desperate_2D00_Man.jpg.optimal.jpg');">
                        <div class="genre-details">
                            <span class="genre-title">Realist Art</span>
                            <p class="genre-description">Explore ></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="genre-item">
                    <div class="rectangle" style="background-image: url('https://blog.artsper.com/wp-content/uploads/2018/01/Andy-2-min-2.jpg');">
                        <div class="genre-details">
                            <span class="genre-title">Pop Art</span>
                            <p class="genre-description">Explore ></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="genre-item">
                    <div class="rectangle" style="background-image: url('https://mymodernmet.com/wp/wp-content/uploads/2021/04/rosso-emerald-crimson-expressive-portrait-paintings-7.jpg');">
                        <div class="genre-details">
                            <span class="genre-title">Potraits</span>
                            <p class="genre-description">Explore ></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                
                <div class="genre-item">
                    <div class="rectangle" style="background-image: url('https://cdn.britannica.com/60/95760-050-899F8959/River-Landscape-canvas-oil-Adriaen-van-de-1663.jpg');">
                        <div class="genre-details">
                            <span class="genre-title">Potraits</span>
                            <p class="genre-description">Explore ></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul> -->
        <!-- row end -->

    </div>
    <!-- column end -->
    </div>
    <br><br>
    
        <h2 class="latestRelease-heading">LATEST RELEASE</h2>
      
  
<br>
<div class="border">
    <img src="https://i.ibb.co/YyRHmg2/Frame.png" alt="border">
</div>
<br>
<div class="carousel-container">
    <div class="arrow"></div>
    <ul class="latestRelease-list">
        <li>
            <div class="latestRelease-item">
                <a href="1browseArtworkDetails.php">
                <div class="rectangles" style="background-image: url('https://widowcranky.files.wordpress.com/2018/08/img_0998.jpg?w=700');">
                    <div class="latestRelease-details">
                        <span class="latestRelease-title">The Lovers</span>
                        <p class="latestRelease-description">Explore ></p>
                    </div>
                </div>
                </a>
            </div>
        </li>
        <li>
            <div class="latestRelease-item">
                <a href="2browseArtworkDetails.php">
                <div class="rectangles" style="background-image: url('data:image/jpeg;base64,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');">
                    <div class="latestRelease-details">
                        <span class="latestRelease-title">The Pain of Anger</span>
                        <p class="latestRelease-description">Explore ></p>
                    </div>
                </div>
                </a>
            </div>
        </li>
        <li>
            <div class="latestRelease-item">
                <a href="3browseArtworkDetails.php">
                <div class="rectangles" style="background-image: url('https://www.artmajeur.com/medias/hd/s/i/siyu-sun/artwork/10220977_20945457-478247149208201-1046061118-o.jpg');">
                    <div class="latestRelease-details">
                        <span class="latestRelease-title">My sadness</span>
                        <p class="latestRelease-description">Explore ></p>
                    </div>
                </div>
                </a>
            </div>
        </li>
        <li>
            <div class="latestRelease-item">
                <a href="4browseArtworkDetails.php">
                <div class="rectangles" style="background-image: url('https://www.artmajeur.com/medias/standard/i/g/igor-shaimardanov/artwork/7829821_www.jpg');">
                    <div class="latestRelease-details">
                        <span class="latestRelease-title">Winter Evening</span>
                        <p class="latestRelease-description">Explore ></p>
                    </div>
                </div>
                </a>
            </div>
        </li>
    </ul>
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
    </body>
</html>