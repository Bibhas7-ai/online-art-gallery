<?php
//including connect file
include('connect.php');


// getting productions function

// ...

function getproduct(){
    global $con;
    $select_query = "SELECT * FROM insert_table";
    $result_query = mysqli_query($con, $select_query);
    
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id']; 
        $product_name = $row['product_name'];
        $image = $row['image'];
        echo "<div class='genre-item'>
                <div class='rectangle'>
                    <img width='400' height='350' src='images/$image'>
                    <div class='genre-details'>
                        <span class='genre-title'>$product_name</span> <br>
                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>Explore</a>
                    </div>
                </div>
            </div>
            </li>
            <li>";
    }
}

// ...

            global $con;

function search_product() {
    if (isset($_GET['search_data_product'])) {
        $search_data_value = $_GET['search_data_product']; // Correct variable name
        
        $search_query = "SELECT * FROM `insert_table` WHERE product_name LIKE '%$search_data_value%'"; // Corrected query
        
        $result_query = mysqli_query($con, $search_query);
        
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_name = $row['product_name'];
            $image = $row['image'];
            
            echo "<div class='genre-item'>
                <div class='rectangle'></div>
                <img width='400' height='350' src='images/$image'> 
                <div class='genre-details'>               
                    <span class='genre-title'>$product_name</span>
                    <p class='genre-description'>Explore ></p>
                </div>
            </div>";
        }
    }
}

                
                ?> 