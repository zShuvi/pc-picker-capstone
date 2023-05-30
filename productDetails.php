<?php
    // retrieve details for specific product from database
    $productId = $_GET["productId"] ;
    $productName = $_GET["productName"];
    
    // $cmd = "select * from products_table where productId = $productId;";
    // $res = mysqli_query($con, $cmd);

 		// if (mysqli_num_rows($res)>0) {
 		// 	session_start();
 		// 	$productsList = mysqli_fetch_assoc($res);
    //     }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php 
        include "includes/third-party-integration.php";
    ?>
    
    
    
    <style>
        @charset "UTF-8";
    :root {
        --star-size: 15;
        --star-color: #cfcfcf;
        --star-background: #ffd700;
    }
        

    div.column {
    float: left;
    padding: 10px;
    margin-left: 1%;
    height: 27rem;
    }
    
    div.image {
    width: 48.5%;
    background-color: white;
    }

    img.productImage {
    height: 25rem;
    width: 25rem;
    }

    div.right {
    margin-right: 1%;
    width: 48.5%;
    background-color: white;
    }

    body {
    height: 100vh;
    margin: 0;
    }

    .stars{
        --percent: calc(var(--rating) /5 * 100%);
        display: inline-block;
        font-size: var(--star-size);
        font-family: Times;
        line-height: 1;
    }

    .stars::before {
            letter-spacing: 3px;
            content: '★★★★★';
            background: linear-gradient(90deg, var(--star-background) var(--percent), var(--star-color) var(--percent));
            -webkit-background-clip: text; 
            -webkit-text-fill-color: transparent;
        }
    /* .stars {
    position: relative;
    white-space: nowrap;
    svg {
        width: 15px;
    }
    } */

    .cover {
    background: white;
    height: 100%;
    overflow: hidden;
    mix-blend-mode: color;
    position: absolute;
    top: 0;
    right: 0;
    }

    svg.singleStar {
    fill: gold;
    }

    
    /* Clear floats after the columns
    .row:after {
    content: "";
    display: table;
    clear: both;
    } */

    div.empty {
        clear: left;
    }

    div.row-2 {    
        background-color: white;
        margin: 1%;
    }
    

    div.specifications{
        
    }

    div.comments{
        background-color: white;
    }

    </style>
</head>
<body>
    <?php
    include "includes/nav_bar.html";
    ?>
    <div class="row">
    <div class="column image">
        <!-- could turn it into a slideshow -->
        <img class="productImage" src="https://down-my.img.susercontent.com/file/e5292b0d1146f8c114f5dec866f1a04f">
    </div>

    <div class="column right">
        <?php
        // switch ($category){
        //     case "Computer Case": 
        //         echo $brand . $name;
        //         break;
        //     case "":
                
        //     default: 
                
        // }
        echo $brand.$name;
        ?>
        <div class="stars" style="--rating: 3.0;" aria-label="This rating show 4.9 stars over 5"></div>
        <?php
            
            $rating = 4.9;
            $ratingPercentage = $rating / 5.0 * 100;
            // echo '
            // <table>
            // <tr>
            //  ';
        //     echo '
        //     <td>
        //     <div class="stars">
            
        //     <svg class="singleStar" viewBox="0 0 576 512" width="15" title="star">
        //       <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
        //     </svg>';

        //     echo '<svg class="singleStar" viewBox="0 0 576 512" width="15" title="star">
        //       <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
        //     </svg>';

        //     echo 
        //     '<svg class="singleStar" viewBox="0 0 576 512" width="15" title="star">
        //       <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
        //     </svg>';

        //     echo '<svg class="singleStar" viewBox="0 0 576 512" width="15" title="star">
        //       <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
        //     </svg>';

        //     echo '<svg class="singleStar" viewBox="0 0 576 512" width="15" title="star">
        //       <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
        //     </svg>';

            
        //     echo '
        //     <!-- width indicate rating 1 out of 5 stars is 20% -->
        //     </div>
        //   </td>
        //     ';
            
            echo '
            <td>5 Ratings |&nbsp;</td>
            <td>15 Sold |&nbsp;</td>
            <td>RM 9.99 - 99.99 </td>
            </tr>
            </table>
            ';
            
        ?>
        <table>
            <tr><td>Shipping</td> <td>Free Shipping</td></tr>
            <tr><td>Shipping To</td> <td>KL City, Kuala Lumpur</td></tr>
            <tr><td>Shipping Fee</td> <td>RM0.00</td></tr>
            <tr><td>Quantity</td> <td>
                <!-- minus button  -->
                <button>
                    <svg style="width: 1rem; height: 1rem;">
                        <polygon points="4.5 4.5 3.5 4.5 0 4.5 0 5.5 3.5 5.5 4.5 5.5 10 5.5 10 4.5"></polygon>
                    </svg>
                </button>
                <input type="text" value="1" style="width: 4rem; height: 2rem;"/>
                <button>
                    <svg style="width: 1rem; height: 1rem;">
                        <polygon points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5"></polygon>
                    </svg>
                </button>
            </td></tr>
        <tr><td><input type="button" value="Add to Cart"></td>
        <td><input type="button" value="Buy Now"></td></tr>
        </table>
    </div>
    </div>
    <div class="empty"> </div>
    <div class="row-2">
    <div class="specification">
    <h2>Product Specification</h2>
        <table>
        <tr><td>Category</td><td><?php echo $category; ?></td></tr>
        <!-- Example category -->
        <!-- PC Partpicker > Marketplace > CPU --> 
        <!-- Additional specifications based on item -->
        <?php
            switch ($category){
                case "psu": 
                    echo 
                    "<tr><td>Brand</td> <td>$brand</td></tr>
                    <tr><td>Modular</td> <td>$modular</td></tr>                    
                    <tr><td>Power Supply Certification</td> <td>$certification</td></tr>
                    ";
                    break;
                case "case":
                    echo "<tr><td>Brand</td> <td>$brand</td></tr>
                    <tr><td>Modular</td> <td>$modular</td></tr>                    
                    <tr><td>Power Supply Certification</td><td>$certification</td></tr>";
                    break;
                default: 
                break;
            }
        ?>
        
        <tr><td> Stock </td> <td> <?php echo $stock; ?> </td></tr>
        <tr><td> Ships From </td> <td> </td></tr>
        </table>
    </div>
    <div class="Description">
        <h2>Product Description</h2>
        <?php
        echo "<p>".$description."</p>";
        ?>
    </div>
    </div>
    <div class="Comments">
        
    </div>
</body>
</html>