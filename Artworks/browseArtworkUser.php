<?php
include('connect.php');

// Define a SQL query to fetch the latest items
$select_query = "SELECT * FROM insert_table";
$result_query = mysqli_query($con, $select_query);

$items = array(); // Initialize an empty array to store items

while ($row = mysqli_fetch_assoc($result_query)) {
    $items[] = $row;
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="browseArtwork.css">
    <script src="https://kit.fontawesome.com/98d2dd6dda.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style></head>

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
                    <div class="genre-item">
                        <div class="rectangle"
                            style="background-image: url('https://s32625.pcdn.co/wp-content/uploads/2017/05/what-is-abstract-art-kandinsky.jpg.optimal.jpg');">
                            <div class="genre-details">
                                <span class="genre-title">Abstract Art</span>
                                <p class="genre-description">Explore ></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="genre-item">
                    <div class="rectangle"
                        style="background-image: url('https://s32625.pcdn.co/wp-content/uploads/2015/05/4834.Courbet_2C002D00_The_2D00_Desperate_2D00_Man.jpg.optimal.jpg');">
                        <div class="genre-details">
                            <span class="genre-title">Realist Art</span>
                            <p class="genre-description">Explore ></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="genre-item">
                    <div class="rectangle"
                        style="background-image: url('https://blog.artsper.com/wp-content/uploads/2018/01/Andy-2-min-2.jpg');">
                        <div class="genre-details">
                            <span class="genre-title">Pop Art</span>
                            <p class="genre-description">Explore ></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="genre-item">
                    <div class="rectangle"
                        style="background-image: url('https://mymodernmet.com/wp/wp-content/uploads/2021/04/rosso-emerald-crimson-expressive-portrait-paintings-7.jpg');">
                        <div class="genre-details">
                            <span class="genre-title">Portraits</span>
                            <p class="genre-description">Explore ></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="genre-item">
                    <div class="rectangle"
                        style="background-image: url('https://cdn.britannica.com/60/95760-050-899F8959/River-Landscape-canvas-oil-Adriaen-van-de-1663.jpg');">
                        <div class="genre-details">
                            <span class="genre-title">Landscapes</span>
                            <p class="genre-description">Explore ></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <br><br>

    <div class="border">
    <img src="https://i.ibb.co/YyRHmg2/Frame.png" alt="border">
</div>
<br>
<h2 class="latestRelease-heading">LATEST RELEASE</h2>
<div class="carousel-container">
    <div class="arrow"></div>
    <ul class="latestRelease-list">
        <li>
        <?php foreach ($items as $item) : ?>
            <li>
                <div class="latestRelease-item">
                    <div class="rectangle">
                        <img width='400' height='300' src='images/<?php echo $item['image']; ?>' alt='Artwork'>
                        <div class="latestRelease-details">
                            <span class="latestRelease-title"><?php echo isset($item['product_name']) ? $item['product_name'] : 'N/A'; ?></span>
                            <p class="latestRelease-description">
                                <a href='browseArtDetails.php?product_id=<?php echo isset($item['product_id']) ? $item['product_id'] : ''; ?>&product_name=<?php echo isset($item['product_name']) ? urlencode($item['product_name']) : ''; ?>'>
                                    View Details
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

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
                    <i class="iconify" data-icon="ion:logo-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/ArtScape" target="_blank">
                    <img src="https://www.freeiconspng.com/thumbs/linkedin-logo-png/linkedin-logo-3.png" alt="LinkedIn">
                </a>
            </div>
        </div>    </footer>
</body>

</html>

