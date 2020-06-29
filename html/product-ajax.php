<?php 
  session_start();
  include('../userlocation.php');
  include('../connection.php');


//   $query="select * from fashion where category_id=2 and vendor_location='".$_SESSION['user_location']."' and approved='y'";

$category_id=$_GET['category_id'];
$sub_category_id=$_GET['sub_category_id'];

if($category_id==1){

    $query="select * from fashion where sub_category_id='$sub_category_id' and vendor_location='".$_SESSION['user_location']."' and approved='y'";

}

else if($category_id==2){

    
    $query="select * from healthandbeauty where sub_category_id='$sub_category_id' and vendor_location='".$_SESSION['user_location']."' and approved='y'";

}
else if($category_id==3){

    
    $query="select * from electronics where sub_category_id='$sub_category_id' and vendor_location='".$_SESSION['user_location']."' and approved='y'";

}
else{

    $query="select * from groceries where sub_category_id='$sub_category_id' and vendor_location='".$_SESSION['user_location']."' and approved='y'";

}

  $result=mysqli_query($conn,$query);

  if(mysqli_num_rows($result) > 0){

     while($row=mysqli_fetch_array($result)){
            
       echo("<div class='product clearfix'>
       <div class='product-image'>
           <a href='#'><img src='./images/products/".$row['imglink']."' alt=''></a>");
             
           if($row['unit_price']!=$row['offer_price']){
               echo(" <div class='sale-flash' style='background-color: rgb(206, 31, 75);'>Deal</div>");
           }
         echo("<div class='product-overlay'>");
         echo("<a href='#' class='add-to-cart'><i class='icon-shopping-cart'></i><span> Add to Cart</span></a>
         <a href='#' class='item-quick-view' data-lightbox='ajax'><i class='icon-zoom-in2'></i><span> Quick View</span></a></div> </div>");

       echo("  <div class='product-desc'>");

       echo(" <div class='product-title'><h3><a href='#'>".$row['product_name']."</a></h3></div>");

       if($row['unit_price']!=$row['offer_price']){
            
        echo(" <div class='product-price'><del>$".$row['unit_price']."</del> <ins>$".$row['offer_price']."</ins></div>");

       }
       else{

        echo("<div class='product-price'>$".$row['offer_price']."</div>");
       }

         echo("</div>
         </div>");
     }
  
    }
   
    else{

        echo("<div style='text-align:center;width:100%;'><h4 style='color:red'>No Result Found for ".$_SESSION['user_location']."</h4></div>");
    }
   
    
  
   


?>