<?php
session_start();
?>
<html lang="en">
<head>
    <title>Dashboard</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="css/popup.css">

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        
    }
    body{
        width: 100%;
        background-color: #e5e7eb;
        position: relative;
        display: flex;
    }
    #menu{
        /* display: initial; */
        background: linear-gradient(130deg, #166416,#0a3d0a);
        width: 300px;
        height: 100%;
        position: fixed;
        left: 0;
        top: 0  ;
       
        
    }
    #menu .logo{
        display: flex;
        align-items: center;
        color: #fff;
        padding: 30px 0 0 30px;
    }
    #menu .logo img{
        width: 40px;
        margin-right: 15px;
    }
     #project_name {
        font-family:algerian;
        color:white;
        font-size:40px;
    }
    #menu .items{
        margin-top: 40px;
    
    }
    
    #menu .items li{
        list-style: none;
        padding: 15px 0;
        margin: 0 -1px 0 25px;
        transition: 0.4s ease;
        
    
    }
    #menu .items #dashboard{
        background: #f3f4f6;
    }
    #menu .items li:hover{
        
        background: #253047;
        cursor: pointer;
    }
    
    #menu .items li:hover a{
        color: #f3f4f6;
        
    }
     
    #menu .items li{
        margin-bottom: 15px;
        border-left: 4px solid #fff ;
        padding-left: 5px;
    }
    #menu .items li a{
        text-decoration: none;
        color: rgb(134, 141, 151);
        font-weight: 300px;
        transition: 0.3s ease;
    
    }
    
    
    #interface{
        width: calc(100% - 300px);
        margin-left: 300px;
        position: relative;
       
    }
    
    #interface .items{
        display: none;
    }
    #interface .navigation{
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: fixed;
        background: #fff;
        padding: 15px 30px;
        border-bottom: 3px solid #594ef7;
        width: calc(100% - 300px);
    
    }
    
    #interface .navigation .n1{
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    #interface .navigation .n1 img{
        
        width: 30px;
        height: 30px;
        margin-right: 30px;
        cursor: pointer;
    
    }
    
    #interface .navigation .items{
        display: none;
    }
    
    .profile .bell{
        width: 30px;
        height: 30px;
      
        margin-left: 15px;
    }
    .profile .home_icon{
        width: 30px;
        height: 30px;
        margin-bottom: 3px;
        margin-left: 5px;
        cursor: pointer;
    }
    
    #interface .navigation .search{
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding: 10px 14px;
        border: 1px solid #d7dbd7e6;
        border-radius: 4px;
    }
    
    #interface .navigation .search input{
        border: none;
        outline: none;
        font-size: 14px;
    }
    
    #interface .navigation .search img{
        width: 30px;
        height: 30px;
        margin-right: 2px;
        
    
        
    }
    
    
    #interface .navigation .profile{
        display: flex;
        justify-content: flex-start;
    }
    
    .i-name{
        color: #444a53;
        padding: 30px 30px 0 30px;
        font-size: 24px;
        font-weight: 700;
        margin-top: 94px;
    }
   
    
    .orderboard{
      /*  width: 94%;
        margin: 30px 0 30px 30px;
        overflow: auto;
        background: #fff;
        border-radius: 8px;
        margin-top: 50px;
         display: none; 
        display: initial;
        transition: 0.4s ease;
        */

        width: 94%;
        margin: 150px 0 15px 13px;
        overflow: auto;
        background: #fff;
        border-radius: 8px;
        margin-top: 25px;
        /* display: none; */
        display: flex;
        transition: 0.4s ease;
    }
    .people img{
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 15px;
    }
    .orderboard h5{
        font-weight: 600;
        font-size: 14px;
    }
    .orderboard p{
        font-weight: 400;
        font-size: 13px;
        color: #787d8d;
    }
    .orderboard .people{
        display: flex;
        justify-content: flex-start;
        align-items: center;
        text-align: start;
    }
    
    table{
        border-collapse: collapse;
    }
    tr{
        border-bottom: 1px solid #eef0f3; 
    }
    thead td{
        font-size: 18px;
        font-weight: bold;
        background: #F9FAFB;
        text-align: center;
        padding: 15px;
         color:green;
        font-family: sans-serif;
        
    
    }
    tbody tr td{
        padding: 10px 15px;
        text-align:center;
        font-family: sans-serif;
    }
    tbody tr td spam{
        color:red;
    }
    
    #interface .items li:hover{
        background: #eef0f3;
        /* background-color: red; */
    }
    
      #cancel{
        border:none;
        background:none;
        color:red;
        cursor:pointer;
        font-size:18px;
    }
    #cancel:hover{
        border-bottom:2px solid red;
    }
    @media  (max-width: 769px){
        #menu {
            /* display: none; */
            width: 270px;
            position: fixed;
            left: -270px;
           
        }
    
        /* #hamburger_btn{
            display: initial;
        } */
    
        #interface {
            width: 100%;
            margin-left: 0px;
            display: inline-block;
        }
    
        #interface .navigation {
            width: 100%;
        }
    
       
        .orderboard {
            width: 92%;
           padding: 0;
           overflow-x: auto;
    
            
        }
    
        table{
            width: 100%;
            border-collapse: collapse;
        }
    
        #interface .items{
            width: 100%;
            display: flex;
            flex-direction: row;
            margin-top: 85px;
            background: rgb(111, 104, 104);
            position: fixed;
            height: 30px;
            justify-content: flex-start;
            align-items: center;
            overflow:hidden;
            padding: 0;
            
        }
    
        #interface .items li{
            list-style: none;
            margin-left: 10px;
            height: 30px;
            padding-top: 2px;
            margin-bottom: -2px;
            
    
        }
        
    
        #interface .items li a{
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            color: white;
            
        }
    
        
    }
    #your-order{
        background:#eef0f3;
    }
    

  
</style>
<script>
    function logout() {
        let text = "Do you want to log out?";
        if (confirm(text) == true) {
            window.location.href = 'logout.php'
        } 
        else
        return;
    }
 
 function cancel_popup(popup_name,orderId) {
            get_popup = document.getElementById(popup_name);
            document.getElementById('order_id').value=orderId;
            if (get_popup.style.display == "flex") {
                get_popup.style.display = "none";
            } else {
                get_popup.style.display = "flex";
            }
            
        }
</script>
<?php 
    if($_SESSION['logedin']==true){
    }else{
        echo "<script>alert('you need to log in first....');
            window:location='index.php';
            </script>";
    }
    include 'Funtions.php';
    

    ?>
    
</head>
<body>
    <section id="menu" class="menu">
       <div class="logo">
            <img src="icon/logo.png" alt="">
            <span id="project_name">OPRAU</span>
        </div>
        <div class="items">
          

                 <li onclick="your_order()" id="your-order"><a href="#"><pre style="font-size:22px;" class="fa fa-truck">   Your Order</pre></a></li>
                 <li onclick="cart1()" id="your-cart"><a href="#"><pre style="font-size:22px;" class="fa fa-truck">   Cart</pre></a></li>
                <li onclick="profile1(1)" id="profile"><a href="#"><pre style="font-size:22px;"class="fa fa-user-circle">   Profile</pre></a></li>
                <li onclick = "pro_history(0)" id="product-history"><a href="#"><pre style="font-size:22px;"class="fa fa-history">   Product History</pre></a></li>
                <li onclick = "popup('help-popup')"><a href="#" ><pre style="font-size:22px;"class="fa fa-phone">   Help Centre</pre></a></li> 
                <li onclick = "logout()"><a href="#" ><pre style="font-size:22px;"class="fa fa-sign-out">   Log Out</pre></a></li>
               
        </div>
    </section>

    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div class="search">
                    <img src="icon/search.svg" alt="">
                    <input type="text" placeholder="Search...">
                </div>
            </div>
            <div class="profile">
                <a href="index.php"><img src="icon/icons8-home-24.png" class="home_icon" alt="" ></a>
                
            </div>
            
        </div>
        
        <h3 class="i-name" id="i-name">Your order</h3>
        <div class="orderboard" id="your_order">

            
                        <table width="100%">
                        <thead>
                            <tr>
                                <td>Order Id</td>
                                <td>Product Name</td>
                                <td>Price</td>
                                <td>Qty.</td>
                                <td>Total Amount</td>
                                <td>Date Time</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                    
                    <?php 
                        include('connection.php');
                        $userId = $_SESSION['userId'];
                        $query = "select o.order_id, o.quantity, o.total_amount, o.datetime, o.status, p.pro_name, p.pro_location, p.pro_unit from order_table o, product p where o.user_id = '$userId' and p.product_id = o.product_id";
                        $result = mysqli_query($con, $query);
                        $i=0;
                        while($dataRow = mysqli_fetch_assoc($result)){ 
                            $i++;
                            $price = $dataRow['total_amount']/$dataRow['quantity'];
                           
                            
                    ?>
                             <tr>
                                <td class="role"><?php echo $dataRow['order_id']; ?></td>
                            
                                <td class="people">
                                    <img src="productImage/<?php echo $dataRow['pro_location'] ?>" alt="">
                                    <div class="people-de">
                                        <h5><?php echo $dataRow['pro_name']; ?></h5>
                                        <p>good quailty</p>
                                    </div>
                                </td>
                                <td class="role"><?php echo $price; ?>/<?php echo $dataRow['pro_unit']; ?></td>
                                <td class="role"><?php echo $dataRow['quantity']; ?> <?php echo $dataRow['pro_unit']; ?></td>
                                <td class="role">₹ <?php echo $dataRow['total_amount']; ?></td>
                                <td class="role"><?php echo $dataRow['datetime']; ?></td>
                                <td class="role"><?php echo $dataRow['status']; ?></td>
                                <td><button id ="cancel" onclick = "cancel_popup('cancel-cnf-popup','<?php echo $dataRow['order_id']; ?>')" >Cancel</button></td>
                               
                           
                    <?php 
                        }
                        if($i==0)
                       {
                           ?>
                           <td class="role" style="color:red;">Please! Order.......</td>
                           <?php
                       }
                       
                    ?> 
                    </tr>
                   
                    </tbody>
                       </table>
                       <div class="popup-container" id="cancel-cnf-popup">
                        <div class="popup" style="flex-direction:row;">
                            <form action="" method="POST">
                                <h2>
                                    <span style="color: #75cfb8;">Cancel Product</span>
                                    <input type = "text" name = "order_id"  id = "order_id" readonly hidden>
                                    <button type="reset" onclick="cancel_popup('cancel-cnf-popup');">X</button>
                                </h2>
                                <span>Do you want cancel this order?</span><br><br>
                                <button type="submit" class="del_product" name="cancel">Confirm</button>
                            </form>
                        </div>
                    </div>
                                
    </div>
<?php
include('profile.php');
include('help.php');
include('uProduct_history.php');
include('cart.php');


?>
        
    </section>

   
</body>
</html>

<?php 
    if(isset($_POST['cancel'])){
        $orderId = $_POST['order_id'];
        date_default_timezone_set('Asia/Kolkata');
		$date=date('y-m-d h:i:s'); 

        $query = "select * from order_table where order_id = '$orderId'";
        $result = mysqli_query($con,$query);
        if($orderRow = mysqli_fetch_assoc($result)){
            $userId = $orderRow['user_id']; 
            $sellerId = $orderRow['seller_id']; 
            $orderId = $orderRow['order_id'];
            $productId = $orderRow['product_id'];
            $orderQuantity = $orderRow['quantity'];
            $totalAmount = $orderRow['total_amount'];
            $price = $totalAmount/$orderQuantity;
            $orderDate = $orderRow['datetime'];
            $query = "select * from product where product_id = '$productId'";
            $result = mysqli_query($con,$query);
            if($productRow = mysqli_fetch_assoc($result)){
                $quantity = $productRow['pro_quantity']+$orderRow['quantity'];
                $productName = $productRow['pro_name'];
                $query = "update product set pro_quantity = '$quantity' where product_id = '$productId'";
                if(mysqli_query($con,$query)){
                    
                    $query = "insert into history value('$userId','$sellerId','$orderId','$productId','$productName','$price','$orderQuantity','$date','Canceleed','$orderDate')";
                    if(mysqli_query($con,$query)){
                        $query = "delete from order_table where order_id = '$orderId'";
                        if(mysqli_query($con,$query)){
                            echo "<script>alert('Canceled successfuly.');</script>";

                        }
                    }

                }
            }
        }
        
        
    }


?>
