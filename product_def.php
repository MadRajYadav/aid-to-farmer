<?php 
include ('uHeader.php');
?>
<html lang="en">
<head>
    <title>product_def</title>
    <link rel="stylesheet" type="text/css" href="css/popup.css">
<style>
.main-container{
    left: 0;
    margin-top: 90px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    flex-flow: wrap;
}
div.product-box{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    height: auto;
    width: auto;
    background: #fff;
    border: 2px solid #f4f3f3;
    margin-left: 20px;
    border-radius: 5px;
    margin: 20px 0px 10px 50px ;
}
div.product-box img {
    height: 350px;
    width: 310px;
    margin: 12px 20px 40px 20px;
    border: 2p-x solid #ff8;
}
div.buy-cart {
    height: auto;
    width: 95%;
    /* background: red; */
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    /* border: 2px solid #e5e7eb; */
    margin: 5px 20px 5px 20px;
}
div.buy-cart button {
            background-color: black;
            font-size: 25px;
            font-weight: bold;
            margin: 5px 3px;
            margin-bottom: 10px;
            border-radius: 18px;
            padding: 9px 14px;
            cursor: pointer;
            color: rgb(215, 174, 174);
            display: initial;
        }
div.buy-cart button:hover{
            background-color: white;
            color: black;
            transition: 0.10s ease;
        }
div.product-info{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: space-between;
    height: auto;
    width: 570px;
    background: #fff;
    border: 2px solid #f4f3f3;
    /* margin-left: 20px; */
    border-radius: 5px;
    margin: 20px 0px 10px 10px ;
    padding: 10px;
}
table{
        border-collapse: collapse;
    }
    tr{
        border-bottom: 1px solid #eef0f3; 
    }
    td{
        font-size: 14px;
        font-weight: 400;
        background: #F9FAFB;
        text-align: start;
        padding: 15px;
    
    }
    tr td{
        padding: 10px 15px;
        
    }
    #saller_info{
        background: #d7fada;
    }

div.saller label{
    font-size: 25px;
    margin: 5px;
    cursor: pointer;
}
div.saller_info{
    display: none;
}
div.saller label:hover{
    color: red;
    font-size: 28px;
}
div.button{
    background-color: black;
    font-size: 25px;
    font-weight: bold;
    margin: 5px 3px;
    margin-bottom: 10px;
    border-radius: 18px;
    padding: 9px 14px;
    cursor: pointer;
    color: rgb(215, 174, 174);
    display: initial;
}
div.button:hover{
    background-color: #eef0f3;
    color: black;
    border: 2px solid #f4f3f3;
}
/*slider*/
#sliderSection{
    display:flex;
    flex-direction:row;
    align-items: center;
}
.sliderDiv{
    width:100%;
    margin-left: -38px;
    margin-right: -39px;
    height:fit-content;
    overflow-y: scroll;
}
.sliderDiv::-webkit-scrollbar { /* WebKit */
    width: 0;
    height: 0;
}
#sliding-box{
    display:flex;
    flex-direction:row;
    width: fit-content;
}
a{
    text-decoration: none;
}
.box{

    width: 300px;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
    border-radius: 10px;
    overflow: hidden;
    margin: 25px;
}
.slider-img{
    height: auto;
    /* width: 20%; */
    position: relative;
}
.slider-img img{
    width: 300px;
    height: 310px;
    object-fit: cover;
    box-sizing: border-box;
}
.detail-box{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    box-sizing: border-box;
    font-family: calibri;
}
.type{
    display: flex;
    flex-direction: column;
}
.type a{
    color: #222222;
    margin: 5px 0px;
    letter-spacing: 0.5px;
    font-weight: 700;
    padding-right: 8px;
}
.type span{
    color: rgba(26,26,26,00.5px);
}
.price{
    color: #333;
    font-weight: 600;
    font-size: 1.1rem;
    font-family: poppins;
    letter-spacing: 0.5px;
}
.overlay{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    width: 100%;
    height: 100%;
    background-color: rgba(92,95,236,0.6);
    display: flex;
    justify-content: center;
    align-items: center;
}
.buy-btn{
    width: 160px;
    height: 40px;
    background-color: red;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #252525;
    font-weight: 700;
    letter-spacing: 1px;
    font-family: calibri;
    border-radius: 20px;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
}
.buy-btn:hover{
    color: #ffffff;
    background-color: #f15fa3;
    transition: all ease 0.3s;
}
.overlay{
    visibility: hidden;
}
.slider-img:hover .overlay{
    visibility: visible;
    animation: fade 0.5s;
}
@keyframes fade{
    0%{
        opacity: 0;
    }
    100%{
        opacity: 1;
    }
}
#scroll_Left{
    z-index:1;
    margin-left:20px;
}
#scroll_Right{
    z-index:1;
    margin-right:20px; 
}
</style>
<script>
    function scrollRight () {
      document.getElementById('sliderDiv').scrollLeft += 300;
    }
    function scroll_left () {
      document.getElementById('sliderDiv').scrollLeft -= 300;
    }
 function popup(popupId){
		popupTask = document.getElementById(popupId)
		// alert(popupId)
		if(popupTask.style.display=='flex')
		popupTask.style.display='none'
		else{
		popupTask.style.display='flex'
        }
	}  
    function total_price(value1, prize,avilableQty ){
        var qty=parseFloat(document.getElementById('qty').innerHTML);
        if((avilableQty - (qty+value1))>=0){
            if(qty <=1 && value1 == -1 ){
                document.getElementById('qty').innerHTML = qty;
            }
             else if(qty == 0.25 && value1 == -0.25){
                document.getElementById('qty').innerHTML = qty;
             }
             else{
                 document.getElementById('qty').innerHTML = qty+value1;
                var total_price=(qty+value1)*prize;
                document.getElementById('total_p').value=total_price;
             }
        }
    }
    function showSallerDetails(){
        if(document.getElementById("saller-info").style.display=='flex'){
		document.getElementById("saller-info").style.display='none';
        document.getElementById('showHideSeller').innerHTML ="Show Seller";
        }
		else{
		document.getElementById("saller-info").style.display='flex';
        document.getElementById('showHideSeller').innerHTML ="Hide Seller";
        }
    }
   function goToagainProductDef(id){
        document.cookie="product_id = "+ id;
        window.location.href = "product_def.php";
    }
</script>
</head>
<body>
<?php
    uHeader();
    include 'connection.php';
    $item_id = $_COOKIE['item_id'];
    $product_id = $_COOKIE['product_id'];
    $km="";
    if(product_id != ""){
        $query = "SELECT * FROM product WHERE product_id='$product_id'";
        $re = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($re);
        $seller_id=$row['user_id'];
        $user_id =  $_SESSION['userId'];
    $query1="SELECT * FROM user_data WHERE user_id='$seller_id'";
    $re1=mysqli_query($con,$query1);
    $row_seller=mysqli_fetch_assoc($re1);
    }else{
        echo "<script>alert('not working..');</script>";
    }
?>
<section>
        <div class="main-container">
            <div class="product-box">
                <img src="productImage/<?php echo $row['pro_location']; ?>" alt="Error in loading">  
            </div>
           <form action="" method="POST">
                <div class="product-info">
                            <span><h1 style ="color: green;"><?php echo ucfirst($row['pro_name'])?></h1></span>
                            <p><?php echo $row['description']; ?></p>
                            <div class="price">
                            <table>
                                <tr><td>Price</td> <td id="price" name="price"><?php echo "₹".$row['pro_prize']." /".strtolower($row['pro_unit']); ?></td></tr>
                                <tr><td>Avilable Qty.</td> <td><?php echo $row['pro_quantity']." ".ucwords($row['pro_unit']); ?></td></tr>
                                <tr><td>Enter Qty.</td> <td>
                                <spam onclick = "total_price(-0.25,<?php echo $row['pro_prize'];?>,<?php echo $row['pro_quantity'];?>)"class='fa fa-minus-circle' style = "font-size: 20px;margin-right: 2px;" ></spam>
                                <spam onclick = "total_price(-1,<?php echo $row['pro_prize'];?>,<?php echo $row['pro_quantity'];?>)"class='fa fa-minus-circle' style = "font-size: 20px;margin-right: 20px;" ></spam>

                                <spam id="qty" name = "quan">1</spam><spam> <?php echo strtolower($row['pro_unit']);?></spam>
                                
                                <spam onclick = "total_price(0.25,<?php echo $row['pro_prize'];?>,<?php echo $row['pro_quantity'];?>)" class='fa fa-plus-circle' style = "font-size: 20px;margin-left: 20px;"></spam>
                            <spam onclick = "total_price(1,<?php echo $row['pro_prize'];?>,<?php echo $row['pro_quantity'];?>)" class='fa fa-plus-circle' style = "font-size: 20px;margin-left: 2px;"></spam>

                                </td></tr>
                                <tr><td>Total Price</td> <td>₹ <input type="number" id="total_p" value = "<?php echo $row['pro_prize'];?>" name="total_p" style = "outline : none; border:none; background: #F9FAFB;" readonly ></td></tr>
                            </table>
                            </div>
                            <div class="saller">
                                <label onclick="showSallerDetails()" id = "showHideSeller">Show Seller</label>
                                <div class="saller_info" id="saller-info">
                                    <table>
                                        <tr>    
                                            <td id="saller_info">Saller Name</td>
                                            <td><?php echo ucfirst(strtolower($row_seller['name'])) ?></td>
                                        </tr>
                                        <tr>
                                            <td id="saller_info">Phone</td>
                                            <td><?php echo $row_seller['number']; ?></td>
                                        </tr>
                                        <tr>
                                            <td id="saller_info">Distance</td>
                                            <td><?php echo round($km,2); ?> Km</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="buy-cart">
                        <div id="Addcart_btn" onclick="popup('cartcnf');" class="button" >Add cart</div>
                        <div class="button" id="Buy_btn" name="Buy_btn" onclick="popup('ordercnf');">Buy</div>
                    </div>
                </div>
                <div class="popup-container" id="ordercnf" style="z-index:3;">
                    <div class="popup">
                                <h2>
                                    <span style="color: #75cfb8;">Confirm Order</span>
                                    <button onclick="popup('ordercnf');">X</button>
                                </h2>
                        <button type="submit" class="conform" name="cnf">Confirm</button>
                    </div>
                </div>
                <div class="popup-container" id="cartcnf" style="z-index:3;">
                    <div class="popup">
                                <h2>
                                    <span style="color: #75cfb8;">Add to cart</span>
                                    <button type="reset" onclick="popup('cartcnf');">X</button>
                                </h2>
                        <button type="submit" class="conform" name="addToCart">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
</section>
<section id = "sliderSection">
    <i id = "scroll_Left" class="fa fa-arrow-circle-o-left" style = "font-size:30px" onclick = "scroll_left()" aria-hidden="true"></i>
    <div class = "sliderDiv" id = "sliderDiv">
        <div id = "sliding-box">
            <?php
                $query = "select * from product where item_id = '$item_id'"; 
                $rel = mysqli_query($con,$query);
                while($row2 = mysqli_fetch_assoc($rel)){ 
            ?>
                    <div class="box">
                        <div class="slider-img">
                            <img src="productImage/<?php echo $row2['pro_location']; ?>" alt="Loading Error">
                            <!-- overlayer -->
                            <div class="overlay">
                                <!-- by-btn -->
                                <a href="#" class="buy-btn"  onclick = "goToagainProductDef(<?php echo $row2['product_id']; ?>)">Buy now</a>
                            </div>
                        </div>
                        <div class="detail-box">
                            <!-- type -->
                            <div class="type">
                                <a href="#"><?php echo ucfirst($row2['pro_name'])?></a>
                                <span>Organic product</span>
                            </div>
                            <!-- price -->
                            <a href="#" class="price"><?php echo $row2['pro_prize']?></a>
                        </div>
                    </div>
            <?php

            }
            ?>      
        </div>
            
    </div>
    <i id = "scroll_Right" class="fa fa-arrow-circle-o-right" style = "font-size:30px" onclick = "scrollRight()" aria-hidden="true"></i>
</section>  
<?php include('footer.php'); ?>
</body>
</html>
<?php
 if(isset($_POST['cnf'])){
      if (!isset($_SESSION['logedin'])) {
          echo "<script>alert('You have to login.......');
            popup('logIn');</script>";
    }else{
        $total_price=$_POST['total_p'];
        $product_id=$row['product_id'];
        $qty=$total_price/$row['pro_prize'];
        date_default_timezone_set('Asia/Kolkata');
        $date = date('y-m-d h:i:s');
        if(isset($con)){
            $sql = "INSERT INTO order_table value(0,'$seller_id', '$user_id', '$product_id', '$total_price','$qty' , '$date', 'Not Accepted!' ); ";
            $rs = mysqli_query($con, $sql);
            if($rs){
                $quan = $row['pro_quantity']-$qty;
                $sql = "update product set  pro_quantity = '$quan' where product_id='$product_id'";
                mysqli_query($con,$sql);
                echo "<script>alert('Successfuly ordered!');
                window.location.href ='index.php';</script>";
            }else{
                echo "<script>alert('order failed........');</script>";
            }
        }else{
            echo "<script>alert('cannot connect to the database');</script>";
        }  
    }
}
if(isset($_POST['addToCart'])){
      if (!isset($_SESSION['logedin'])) {
          echo "<script>alert('You have to login.......');
            popup('logIn');</script>";
    }else{
        $total_price=$_POST['total_p'];
        $product_id=$row['product_id'];
        $qty=$total_price/$row['pro_prize'];
        date_default_timezone_set('Asia/Kolkata');
        $date = date('y-m-d h:i:s');

        $query1="select * from cart_table where product_id='$product_id' and user_id='$user_id'";
        $result1=mysqli_query($con,$query1);
        $prod = mysqli_fetch_assoc($result1);
        if(!$prod){
            if(isset($con)){
                $sql = "INSERT INTO  cart_table value('$seller_id', '$user_id', '$product_id', '$total_price','$qty' , '$date' ); ";
                $rs = mysqli_query($con, $sql);
                if($rs){
                    $quan = $row['pro_quantity']-$qty;
                    $sql = "update product set  pro_quantity = '$quan' where product_id='$product_id'";
                    mysqli_query($con,$sql);
                    echo "<script>alert('Successfuly added to cart');
                    window.location.href ='index.php';</script>";
                }else{
                    echo "<script>alert('Something went wrong........');</script>";
                }
            }else{
                echo "<script>alert('cannot connect to the database');</script>";
            }
        }else{
            echo "<script>alert('Product alredy exist in cart....');</script>";
        }
    }
}
?>