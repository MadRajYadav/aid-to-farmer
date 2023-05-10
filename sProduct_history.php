<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;  
    }
    .product_history{
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
    .product_history h5{
        font-weight: 600;
        font-size: 14px;
    }
    .product_history p{
        font-weight: 400;
        font-size: 13px;
        color: #787d8d;
    }
    .product_history .product{
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
  .product img{
        width: 80px;
        height: 80px;
        border-radius:3px;
        object-fit: cover;
        margin-right: 15px;
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
        <div class="product_history" id="product_history">
            <table width="100%">
                <thead>
                     <tr>
                        <td>Product Id</td>
                        <td>Order Id</td>
                        <td>Product Name</td>
                        <td>Price</td>
                        <td>Qty.</td>
                        <td>Amount</td>
                        <td>Order Date Time</td>
                        <td>User Name</td>
                        <td>Address</td>
                        <td>Status</td>
                        <td>Status Date Time</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        include('connection.php');
                        $sellerId = $_SESSION['userId']; 
                        $query = "select * from history where seller_id = '$sellerId'";
                        if($result = mysqli_query($con,$query)){
                            while($historyRow = mysqli_fetch_assoc($result)){ 
                              $userId =   $historyRow['user_id'];
                              $productId = $historyRow['pro_id'];
                              $query = "select * from user_data where user_id = '$userId'";
                              $result1 = mysqli_query($con,$query);
                              $userRow = mysqli_fetch_assoc($result1);
                              $query2="select * from product where product_id='$productId'";
                              $result2=mysqli_query($con,$query2);
                              $productRow=mysqli_fetch_assoc($result2);
                              $pro_location=$productRow['pro_location'];
                              ?>
                                <tr>
                                <td><?php echo $productId;  ?></td>
                                <td><?php echo $historyRow['order_id'];  ?></td>
                                <td class="product"> <img src="productImage/<?php echo $pro_location; ?>" alt="">
                            <div class="product-de">
                                <h5><?php echo ucfirst($historyRow['pro_name']); ?></h5>
                            </div></td>
                                <td><?php echo $historyRow['price'];  ?></td>
                                <td><?php echo $historyRow['quantity'];  ?></td>
                                <td><?php echo $historyRow['price']*$historyRow['quantity'];  ?></td>
                                <td><?php echo $historyRow['order_date'];  ?></td>
                                <td><?php echo $userRow['name'];  ?></td>
                                <td><?php echo ucfirst($userRow['land_mark']).", ".ucfirst($userRow['city']).", ".ucfirst($userRow['district']).", ".ucfirst($userRow['state']).", ".$userRow['pin_code']; ?></td>
                                <td  style="color:red;"><?php echo $historyRow['status'];  ?></td>
                                <td><?php echo $historyRow['datetime'];  ?></td>
                                </tr>
                              <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
                    
