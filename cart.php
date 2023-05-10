<!DOCTYPE html>
<html lang="en">



<head>
    
    <link rel="stylesheet" href="css/popup.css"> 

    <style>
        .cart {
            justify-content: flex-start;
            align-items: flex-start;
            width: 70%;
            height: 570px;
            background: #fbfbfb;
            border-radius: 5px;
            margin-left: 5%;
            display: none;
            flex-direction: row;
            padding: 15px;
            /* overflow-y: scroll; */
            position: fixed;
            transition: 0.4s ease;
            /* margin-right: 20px; */
        }

        .cart_iteams_total_price {
            width: 28%;
            height: 300px;
            background: rgb(238, 236, 238);
            padding: 10px;
            display: flex;
            flex-direction: column;
            border-style: dotted;

        }

        .price_details_head {
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: bold;
            padding-bottom: 5px;
            border-bottom: 2px solid #f1f;
        }
        
        .sub-cart {
            display: inline-grid;
            width: 80%;
            height: 545px;
        }

        .cart_iteams {
            height: 100%;
            width: 96%;
            background: rgb(247 247 247);
            margin-right: 30px;
            overflow: scroll;
        }

        .place_order {
            width: 94%;
            height: 59px;
            background: rgb(31, 141, 177);
            margin-top: -65px;
            border-radius: 4px;
            margin-left: 5px;
            justify-content: center;
            align-items: center;
            display: flex;

        }

        .iteam img {
            height: 100px;
            width: 100px;
        }

        .iteam p {
            margin: 0px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        tr {
            border-bottom: 1px solid #080808;
            
        }

        tbody tr td {
            padding: 10px 15px;
            text-align: center;
        }

        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
            border-radius: 30px;
        }

        ::-webkit-scrollbar-thumb {
            background: #ddd;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #ccc;
        }

        ::-webkit-scrollbar-track {
            background: #f1f;
        }

        .count_qty:hover{
            cursor: pointer;
        }

        .remove_btn {
            background-color: black;
            font-size: 10px;
            font-weight: bold;
            margin: 5px 3px;
            border-radius: 18px;
            padding: 9px 14px;
            cursor: pointer;
            color: rgb(215, 174, 174);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .edit_btn {
            background-color: black;
            font-size: 25px;
            font-weight: bold;
            margin: 5px 3px;
            border-radius: 18px;
            padding: 9px 14px;
            cursor: pointer;
            color: rgb(215, 174, 174);
            display: flex;
        }

        .remove_btn:hover {
            background-color: white;
            color: black;
            transition: 0.4s ease;
        }

        @media (max-width: 998px) {
            .user_details {
                flex-direction: column;

            }

            .edit {
                margin-top: 0px;
            }

            .product {
                width: 100%;
            }

        }

        .upload_img {
            display: flex;
            width: 50px;
            height: 50px;
            background-image: url(images/search.jpg);
            overflow: hidden;
            border-radius: 100%;

        }

      
    </style>
    <?php
        if($_SESSION['logedin']==true){
        }else{
            echo "<script>alert('you need to log in first....');
                window.location.href='index.php';
                </script>";
        }

    ?>
<script>
    function total_cart_price(value1, prize, avilableQty) {
        
        var qty = parseFloat(document.getElementById('qty').innerHTML);
        if ((avilableQty - (qty + value1)) >= 0) {
            if (qty <= 1 && value1 == -1) {
                document.getElementById('qty').innerHTML = qty;
            }
            else if (qty == 0.25 && value1 == -0.25) {
                document.getElementById('qty').innerHTML = qty;
            }
            else {
                document.getElementById('qty').innerHTML = qty + value1;
                var total_price = (qty + value1) * prize;
                document.getElementById('total_p').value = total_price;
                
                document.getElementById('payable_price').innerHTML = parseFloat(document.getElementById('payable_price').innerHTML)+ (value1*prize);
                document.getElementById('total_price').innerHTML= parseFloat(document.getElementById('total_price').innerHTML)+ (value1*prize);
                
                
            }
        }
    }

 
        function rem_popup(productId) {
            get_popup = document.getElementById('remove-cnf-popup');
            document.getElementById('product_id').value = productId;
            if (get_popup.style.display == "flex") {
                get_popup.style.display = "none";
            } else {
                get_popup.style.display = "flex";
            }

        }

        function none(){
                alert(345678)
                document.getElementById('cart_iteam').style.display='none';
        }
       
    
</script>

</head>


<body>
 
    <form action="#" method="POST" enctype="multipart/form-data">
  
        <div class="cart" id="cart_iteam">
            <div class="sub-cart">
                <div class="cart_iteams">
                    <table>
                        <tbody>
                         <?php 
                        include('connection.php');
                        $userId = $_SESSION['userId'];
                        $query = "select * from cart_table where user_id='$userId' ";
                        $result = mysqli_query($con, $query);
                        $i=0;
                        $total_amount=0;
                        while($dataRow = mysqli_fetch_assoc($result)){ 
                            $i++;  
                            $total_amount=$total_amount+$dataRow['total_amount'];
                           $product_id= $dataRow['product_id'];
                        $query1="select * from product where product_id='$product_id'";
                        $result1=mysqli_query($con,$query1);
                        $product_Row=mysqli_fetch_assoc($result1);
                        $pro_location=$product_Row['pro_location'];
                        $session = 'productId'.$i;
                        $inputName = 'total_p'.$i;
                        $_SESSION[$session] = $product_id;
                        
                    ?>
                            <tr>
                            
                                <td><?php echo $i; ?></td>
                                <td class="iteam">
                                    <img src="productImage/<?php echo $product_Row['pro_location']; ?>" alt="">

                                </td>
                                <td class="iteam">
                                    <p style="font-weight:bold;"><?php echo $product_Row['pro_name']; ?></p>
                                    
                                </td>
                                <td >
                                    <spam onclick="total_cart_price(-0.25,<?php echo $product_Row['pro_prize'];?>,<?php echo $product_Row['pro_quantity'];?>)" class='fa fa-minus-circle count_qty'
                                        style="font-size: 15px;margin-right: 1px;"></spam>
                                    <spam onclick="total_cart_price(-1,<?php echo $product_Row['pro_prize'];?>,<?php echo $product_Row['pro_quantity'];?>)" class='fa fa-minus-circle count_qty'
                                        style="font-size: 15px;margin-right: 20px;"></spam>
                                    <spam id="qty" name="quan"> <?php echo $dataRow['quantity']; ?></spam>
                                    <spam> kg</spam>
                                    <spam onclick="total_cart_price(0.25,<?php echo $product_Row['pro_prize'];?>,<?php echo $product_Row['pro_quantity'];?>)" class='fa fa-plus-circle count_qty'
                                        style="font-size: 15px;margin-left: 20px;"></spam>
                                    <spam onclick="total_cart_price(1,<?php echo $product_Row['pro_prize'];?>,<?php echo $product_Row['pro_quantity'];?>)" class='fa fa-plus-circle count_qty'
                                        style="font-size: 15px;margin-left: 2px;"></spam>
                                </td>
                                <td >₹ <input type="number" id="total_p" value = "<?php echo $dataRow['total_amount'];?>" name="<?php echo $inputName;?>" style = "outline : none; border:none; background: #F9FAFB; width:80px;" readonly ></spam></td>
                                
                                <td><spam onclick="rem_popup('<?php echo $product_id ?>')" class="remove_btn" >Remove</spam></td>
                            </tr>

                    <?php 
                        }
                
                        if($i!=0){
                    ?> 
                        </tbody>
                    </table>
                </div>
                <div class="place_order" id ="place_order">
                    <button type="submit" class="remove_btn" name="place_order">Places</button>
                </div>
            </div>
            <div class="cart_iteams_total_price">
                <div class="price_details_head">
                    Price deatils
                </div>
                <div class="price_details">
                    <table>
                        <tbody>
                            <tr>
                                <td style="text-align: justify; font-weight: bold;">
                                    Price (<?php echo $i; ?> items)
                                </td>
                                <td style="text-align: justify;">₹<spam id="total_price"><?php echo $total_amount; ?></spam></td>
                            </tr>
                            <tr>
                                <td style="text-align: justify; font-weight: bold;">Discount</td>
                                <td style="text-align: justify;">0</td>
                            </tr>
                            <tr>
                                <td style="text-align: justify; font-weight: bold;">Delivery Charges</td>
                                <td style="text-align: justify;">0</td>
                            </tr>
                            <tr>
                                <td style="text-align: justify; font-weight: bold;">Total Amount</td>
                                <td style="text-align: justify; font-weight: bold;" >₹ <spam id="payable_price"><?php echo $total_amount; ?></spam></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
                }
                else {
                ?>
                <div style="display:flex; align-items:center; justify-content:center; height:72%;width:68%; background:white; position:fixed; text-align:center; box-shadow: 0 0 5px 5px gray;">
                <spam style="color:red; font-size:20px;" > There is no any product in your cart.</spam>
                </div>

            <?php
                }
                ?> 
            
        </div>

                    <div class="popup-container" id="remove-cnf-popup">
                        <div class="popup" style="flex-direction:row;">
                            
                                <h2>
                                    <span style="color: #75cfb8;font-size:20px;">Remove Product</span>
                                    <input type = "text" name = "product_id"  id = "product_id"  hidden>
                                    <button type="reset" onclick="rem_popup(0);">X</button>
                                </h2>
                                <span>Do you want remove it from cart?</span><br><br>
                                <button type="submit" class="rem_product" name="cnf_remove">Confirm</button>
                            
                        </div>
                    </div>

    
    </form>

                 
</body>

</html>

<?php
if(isset($_POST['place_order'])){
    // echo "<script>alert('$')</script>";
    $count = 0;
    for($j = 1; $j<=$i; $j++){
        $session = 'productId'.$j;
        $inputName = 'total_p'.$j;
        $product_id = $_SESSION[$session];
        $total_price=$_POST[$inputName];
        $query = "SELECT * FROM product WHERE product_id='$product_id'";
        $re = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($re);
        $seller_id=$row['user_id'];
        $user_id =  $_SESSION['userId'];
        $qty=$total_price/$row['pro_prize'];
        if($qty!=0){
        date_default_timezone_set('Asia/Kolkata');
        $date = date('y-m-d h:i:s');
            $sql = "INSERT INTO order_table value(0,'$seller_id', '$user_id', '$product_id', '$total_price','$qty' , '$date', 'Not Accepted!' ); ";
            $rs = mysqli_query($con, $sql);
            if($rs ){
                $sql1 = "delete from cart_table where product_id='$product_id' and  user_id='$user_id'";
                $rs1 = mysqli_query($con, $sql1);
                if($rs1 ){
                    $quan = $row['pro_quantity']-$qty;
                    $sql = "update product set  pro_quantity = '$quan' where product_id='$product_id'";
                    mysqli_query($con,$sql);
                    $count++;

                }
            }
        }else{
            echo "<script>alert('Product no. '+'$j' + ' order failed');</script>";
        }
        
    }
    if($count!=0){
    echo "<script>alert('$count'+ ' product oredered Successfuly.');</script>";
    }
}





      if(isset($_POST['cnf_remove'])){
          $pro_id=$_POST['product_id'];
        // echo "<script>alert('ok $pro_id');</script>";
            $query1="delete from cart_table where product_id='$pro_id' and user_id='$userId'";
            $result1=mysqli_query($con,$query1);
            if($result1){
                echo "<script>alert('Removed Succefully....');
                window.location.href='uDashboard.php';</script>";
                
            }else{
                echo "<script>alert('Something is wrong.......');</script>";
            }
       
        
    }

?>
