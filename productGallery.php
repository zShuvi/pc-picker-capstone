<?php
    // pull out list of products from database based on the category
    $category = $_GET["category"] ;
    
    // $cmd = "select * from products_table where category = $category;";
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
    <?php 
        include "includes/third-party-integration.php";
    ?>
    <title><?php echo $category ?></title>    
    <style>
      .Shop_Cart{
            Height: 25px;
            Width: 18px;
        }
      div.grid_container{
        display: grid;
        grid-template-columns: auto auto auto auto auto;        
      }
      div.grid_item {
        display: flex;
        flex-direction: column;
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        height: 20rem;
        border: 1px solid white;
        border-radius: 20px;
      }
      div.grid_item a img{
        border-radius: 20px 20px 0 0;
        width: 100%;
        height: 13rem;
      }
      div.desc{
        margin: 2px;
      }
    </style>
</head>
<body>
<?php
    include "includes/nav_bar.html";
    ?>
<h1><?php echo ucwords($category); ?></h1>
<div class="grid_container">
    <?php
    //display the list of products as a gallery format

    // for ($i = 0; $i < count($productsList); $i++){
    for ($i = 0; $i < 20; $i++){
      $productId = "product".$i; 
        echo '
        <div class="grid_item">
        <a target="_blank" href="productDetails.php?productName=amd_ryzen_5_5600">
        <img src="Image/amd_ryzen_5_5600.webp" alt="AMD Ryzen 5 5600" width="100rem" height="100rem">
        </a>
        <div class="desc '.$productId.'">
        <p class="title"> AMD Ryzen 5 5600 </p>
        <p class="price"> RM 949.00 </p>
        <p class="rating"> ***** </p>
        <p class="quantitySold"> 1k sold </p>
        <p class="vendorLocation"> Kuala Lumpur </p>
        </div>
        </div>';
    }
    ?>
</div>

</body>
</html>


<!-- <div class="gallery grid_item">
  <a target="_blank" href="productDetails.php?productName=amd_ryzen_5_7600X">
    <img src="Image/amd_ryzen_5_7600X.webp" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">
    <p class="productTitle2"> AMD Ryzen 5 7600X </p>
    <p class="productPrice2"> RM 949.00 </p>
    <p class="productRating2"> ***** 1k sold </p>
    <p class="vendorLocation2"> Kuala Lumpur </p>
  </div>
</div>

<div class="gallery grid_item">
  <a target="_blank" href="productDetails.php?productName=amd_ryzen_5_7600X">
    <img src="" alt="" width="600" height="400">
  </a>
  <div class="desc">
  <p class="productTitle2"> AMD Ryzen 5 3600XT </p>
    <p class="productPrice2"> RM 949.00 </p>
    <p class="productRating2"> ***** 1k sold </p>
    <p class="vendorLocation2"> Kuala Lumpur </p>
  </div>
</div>

<div class="gallery grid_item">
  <a target="_blank" href="productDetails.php?productName=amd_ryzen_5_7600X">
    <img src="" alt="" width="600" height="400">
  </a>
  <div class="desc">
    <p class="productTitle2"> AMD Ryzen 5 2600X </p>
    <p class="productPrice2"> RM 949.00 </p>
    <p class="productRating2"> //*****// 1k sold </p>
    <p class="vendorLocation2"> Kuala Lumpur </p>
  </div>
</div>
<div class="gallery grid_item">
  <a target="_blank" href="productDetails.php?productName=amd_ryzen_5_7600X">
    <img src="" alt="" width="600" height="400">
  </a>
  <div class="desc">
    <p class="productTitle2"> AMD Ryzen 5 1600X </p>
    <p class="productPrice2"> RM 949.00 </p>
    <p class="productRating2"> //*****// 1k sold </p>
    <p class="vendorLocation2"> Kuala Lumpur </p>
  </div>
</div>
 -->
