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
    .your_product{
        width: 94%;
        margin: 30px 0 30px 30px;
        overflow: auto;
        background: #fff;
        border-radius: 8px;
        margin-top: 50px;
        /* display: none; */
        display: none;
        transition: 0.4s ease;
    }
    .product img{
        width: 80px;
        height: 80px;
        border-radius:3px;
        object-fit: cover;
        margin-right: 15px;
    }
    .your_product h5{
        font-weight: 600;
        font-size: 14px;
    }
    .your_product p{
        font-weight: 400;
        font-size: 13px;
        color: #787d8d;
    }
    .your_product .product{
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
    #interface .items li:hover{
        background: #eef0f3;
        /* background-color: red; */
    }
    
.pro_edit a:hover{
    cursor:pointer;
}

    @media (max-width: 769px){
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
    
        .your_product {
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
    #productId{
        margin-bottom:10px;
    }
    .pro_edit a{
        margin:10px;
    }
</style>
<?php
include('Funtions.php');

 if($_SESSION['logedin']==true){
}else{
    echo "<script>alert('you need to log in first....');
        window.location.href='index.php';
        </script>";
}
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
    function edit_popup(popup_name, id, quan, price) {
            get_popup = document.getElementById(popup_name);
            document.getElementById('productId').value=id;
            document.getElementById('qty').value = quan;
            document.getElementById('price').value = price;
            if (get_popup.style.display == "flex") {
                get_popup.style.display = "none";
            } else {
                get_popup.style.display = "flex";
            }  
        }
        function del_popup(popup_name, id,pro_location) {
            get_popup = document.getElementById(popup_name);
            document.getElementById('productid').value=id;
            document.getElementById('pro_location').value=pro_location;
            if (get_popup.style.display == "flex") {
                get_popup.style.display = "none";
            } else {
                get_popup.style.display = "flex";
            }  
        }
</script>
        <div class="your_product" id="your_product">
            <table width="100%">
                <thead>
                     <tr>
                        
                        <td>Product Id</td>
                        <td>Product Name</td>
                        <td>Price</td>
                        <td>Avilable Qty.</td>
                    </tr>
                </thead>
                <tbody>
                 <?php 
                        include('connection.php');
                        $userId = $_SESSION['userId'];
                        $query = "select * from product where user_id='$userId'";
                        $result = mysqli_query($con, $query);
                        $i=0;
                        while($dataRow = mysqli_fetch_assoc($result)){ 
                            $i++;  
                    ?>
                    <tr>
                        <td><?php echo $dataRow['product_id']; ?></td>
                        <td class="product">
                            <img src="productImage/<?php echo $dataRow['pro_location']; ?>" alt="">
                            <div class="product-de">
                                <h5><?php echo ucfirst($dataRow['pro_name']); ?></h5>
                            </div>
                        </td>
                        <td ><?php echo $dataRow['pro_prize']; ?></td>
                        <td ><?php echo $dataRow['pro_quantity']; ?></td>
                        <td class="pro_edit"><a onclick="edit_popup('pro-edit-popup','<?php echo $dataRow['product_id']; ?>','<?php echo $dataRow['pro_quantity']; ?>','<?php echo $dataRow['pro_prize']; ?>')" >Edit  </a> <a style="color:red;" onclick="del_popup('delete-cnf-popup','<?php echo $dataRow['product_id']; ?>','<?php echo $dataRow['pro_location']; ?>');">Delete</a></td>
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
                    <div class="popup-container" id="pro-edit-popup">
                        <div class="popup">
                            <form action="" method="POST">
                                <h2>
                                    <span style="color: #75cfb8;">Product Update</span>
                                    <button type="reset" onclick="popup('pro-edit-popup');">X</button>
                                </h2>
                                <input type = "text" name = "productId"  id = "productId" readonly>
                                <input type="text" placeholder="Enter Qty." name="qty" id="qty" >
                                <input type="text" placeholder="Enter Price" name="price" id="price" >
                                <button type="submit" class="update" name="update">Update</button>
                            </form>
                        </div>
                    </div>
                     <div class="popup-container" id="delete-cnf-popup">
                        <div class="popup" style="flex-direction:row;">
                            <form action="" method="POST">
                                <h2>
                                    <span style="color: #75cfb8;">Delete Product</span>
                                    <input type = "text" name = "productid"  id = "productid" readonly hidden>
                                    <input type = "text" name = "pro_location"  id = "pro_location" readonly hidden>
                                    <button type="reset" onclick="popup('delete-cnf-popup');">X</button>
                                </h2>
                                <span>Do you want delete?</span>
                                <button type="submit" class="del_product" name="del_product">Yes</button>
                            </form>
                        </div>
                    </div>

<?php
if(isset($_POST['update'])){
    $productId = $_POST['productId'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
    // echo "<script>alert('check $productId $qty $price')</script>";
    $query="update product set pro_quantity='$qty', pro_prize='$price' where product_id='$productId'";
    
    if(mysqli_query($con,$query)){
        echo "<script>alert('Succefully updated');
        window.location.href='sDashboard.php';
        </script>";
    }
}
if(isset($_POST['del_product'])){
    $productId = $_POST['productid'];
    $pro_location=$_POST['pro_location'];
    $folder = "productImage/".$pro_location;
    $query="DELETE FROM product WHERE product_id='$productId'";
    if(mysqli_query($con,$query)){
        $status=unlink($folder);
        echo "<script>alert('Succefully deleted');
        window.location.href='sDashboard.php';
        </script>";
    }
}
?>
