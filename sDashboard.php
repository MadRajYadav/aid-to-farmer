<?php
session_start();
?>
<html lang="en">
<head>
    <title>Dashboard</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  href = "css/popup.css">
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
    
    #hamburger_btn{
        display: none;
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
    .val-box img{
        font-size: 25px;
        line-height: 60px;
        margin-right: 18px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        text-align: center;
        color: #fff;
        background: chartreuse;
    }
    .values{
        padding: 30px 30px 0 30px;
        display: none; /* // flex */
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        transition: 0.4s ease;
    }
    .values .val-box{
        background: #fff;
        width: 235px; 
        padding: 16px 20px ;
        border-radius: 5px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        box-shadow: 5px 5px 30px 20px rgb(125, 124, 124);
        margin-bottom: 15px;
    }
    .values .val-box h3{
        font-size: 20px;
        font-weight: 700;
    }
    .values .val-box span{
        font-size: 15px;
        color: #7e8798;
    }
    .board{
        width: 94%;
        margin: 30px 0 30px 30px;
        overflow: auto;
        background: #fff;
        border-radius: 8px;
        margin-top: 50px;
        /* display: none; */
        display: initial;
        transition: 0.4s ease;
    }
    .product img{
        width: 80px;
        height: 80px;
        border-radius:3px;
        object-fit: cover;
        margin-right: 15px;
    }
    .board h5{
        font-weight: 600;
        font-size: 14px;
    }
    .board p{
        font-weight: 400;
        font-size: 13px;
        color: #787d8d;
    }
    .board .product{
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
    .active p{
        background: #d7fada;
        padding: 2px;
        display: inline-block;
        border-radius: 40px;
        color: #2b2b2b;
    }
    .edit a{
        text-decoration: none;
        font-size: 14px;
        color: #554cd1;
        font-weight: 600;
    }
    #interface .items li:hover{
        background: #eef0f3;
    }
    @media (max-width: 769px){
        #menu {
            width: 270px;
            position: fixed;
            left: -270px;
           
        }
        #interface {
            width: 100%;
            margin-left: 0px;
            display: inline-block;
        }
        #interface .navigation {
            width: 100%;
        }
        .values {
            padding: 30px 30px 0 30px;
            justify-content: flex-start;
        }
        .values .val-box {
            
            padding: 16px 20px;
            margin: 10px 20px 10px 0;
        }
        .board {
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
.accept-btn{
    width: 130px;
    height: 40px;
    background-color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-weight: 700;
    letter-spacing: 1px;
    font-family: calibri;
    border-radius: 20px;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.2);
}
.accept-btn:hover{
    color: black;
    background-color: white;
    transition: all ease 0.3s;
    cursor:pointer;
}
</style>
<?php
 if($_SESSION['logedin']==true){
}else{
    echo "<script>alert('you need to log in first....');
        window.location.href='index.php';
        </script>";
}
include('Funtions.php');
?>
<script>
    function logout() {
        let text = "Do you want to log out!";
        if (confirm(text) == true) {
            window.location.href = 'logout.php'
        } 
        else
        return;
    }
    
</script>
</head>
<body>
       <section id="menu" class="menu">
       <div class="logo">
            <img src="icon/logo.png" alt="">
            <span id="project_name">OPRAU</span>
        </div>
        <div class="items">
            <ul>
                    <li onclick="received_order();" id='rec-order'style="background:#eef0f3;"><a href="#"><pre style="font-size:22px;" class="fa fa-truck">   Received Order</pre></a></li>
                    <li onclick="profile1(0)" id='profile'><a href="#" ><pre style="font-size:22px;"class="fa fa-user-circle">   Profile</pre></a></li>
                    <li id="your-product" onclick="your_product()"><a href="#" ><pre style="font-size:22px;"class="fa fa-database">   Your Product</pre></a></li>
                    <li onclick = "pro_history(1)" id="product-history"><a href="#"><pre style="font-size:22px;"class="fa fa-history">   Product History</pre></a></li>
                    <li onclick = "logout()"><a href="#" ><pre style="font-size:22px;"class="fa fa-sign-out">   Log Out</pre></a></li>
                    <li onclick = "popup('help-popup')"><a href="#" ><pre style="font-size:22px;"class="fa fa-phone">   Help Centre</pre></a></li>
                  <!--  <li ><a href="#"><pre style="font-size:22px;"class="fa fa-language">   Choose Language</pre></a></li> -->
                </ul>
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
                <a href="saleProduct.php"><img src="icon/icons8-home-24.png" class="home_icon" alt="" ></a>  
            </div>
        </div>
        <h3 class="i-name" id="i-name">Received Order</h3>
        <div class="board" id="board">
            <table width="100%">
                <thead>
                     <tr>
                        <td>Order Id</td>
                        <td>Product Name</td>
                        <td>Price</td>
                        <td>Qty.</td>
                        <td>Amount</td>
                        <td>Date Time</td>
                        <td>User Name</td>
                        <td>Address</td>
                        <td>Number</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                 <?php 
                        include('connection.php');
                        $userId = $_SESSION['userId'];
                        $query = "select o.user_id, o.order_id, o.quantity, o.total_amount, o.datetime, o.status, p.pro_name, p.pro_location, p.pro_unit from order_table o, product p where o.seller_id = '$userId' and p.product_id = o.product_id";
                        $result = mysqli_query($con, $query);
                        $i=0;
                        while($dataRow = mysqli_fetch_assoc($result)){ 
                            $i++;
                            $price = $dataRow['total_amount']/$dataRow['quantity'];
                            $userId = $dataRow['user_id'];
                            $query = "select * from user_data where user_id = '$userId' ";
                            $userResult = mysqli_query($con, $query);
                            $userRow = mysqli_fetch_assoc($userResult);
                            
                    ?>
                    <tr>
                        
                        <td>   <?php echo $dataRow['order_id']; ?> </td>
                        <td class="product">
                            <img src="productImage/<?php echo $dataRow['pro_location']; ?>" alt="">
                            <div class="product-de">
                                <h5><?php echo ucfirst($dataRow['pro_name']); ?></h5>
                            </div>
                        </td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $dataRow['quantity']; ?></td>
                        <td><?php echo $dataRow['total_amount']; ?></td>
                        <td><?php echo $dataRow['datetime']; ?></td>
                        <td><?php echo ucfirst($userRow['name']); ?></td>
                        <td><?php echo ucfirst($userRow['land_mark']).", ".ucfirst($userRow['city']).", ".ucfirst($userRow['district']).", ".ucfirst($userRow['state']).", ".$userRow['pin_code']; ?></td>
                        <td><?php echo $userRow['number']; ?></td>
                        <td><div class="accept-btn" id="accept_btn" name="accept_btn" onclick="">Accept</div></td>
    
                        </tr>
                      <?php 
                        }
                        if($i==0)
                       {
                           ?>
                           <td class="role" style="color:red;">You do not receive any order........</td>
                           <?php
                       }
                    ?> 
                </tbody>
            </table>
        </div>
<?php
    include('help.php');
    include('profile.php');
    include('your_product.php');
    include('sProduct_history.php');
    include('log_in.php');
?>
    </section>
</body>
</html>


