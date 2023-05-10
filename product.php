<?php 
include ('uHeader.php');
?>
<html>

<head>
    <title></title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        #product{
            margin:0px;
            margin-top:87px;
            box-sizing:border-box;
        }
        .productbackground{
            margin: 10px;
            padding: 10px;
            background-color: #eee;
            box-shadow:0 0 6px 6px gray;
            text-align: center;
            border-radius: 10px;

        }
        #productImageInfoDiv{
            display: inline-block;
            vertical-align: top;
            margin: 6px;
            width : 18.5%;
            height: 310px;
            border-radius: 2%;
            background:#fff;
            text-align:center;
            box-shadow:0 0 4px 5px #e8d7d7;

        }

        #productImageInfoDiv #productImageInfoA{
            text-decoration: none;
            display:inline-block;
            width:100%;
            height:100%;
        }
        #productImageInfoDiv #productImageInfoA #productImageDiv {
            margin:10px;
            width: auto;
            height: 75%;
            margin-bottom: 3%;
        }
         #productImageInfoDiv #productImageInfoA #productImageDiv #productImageImg{
                margin-top: 3%;
                height: 89%;
                width: 93%;
                border-radius: 4%;
         }

         #productImageInfoDiv:hover{
            transform: scale(1.03);
            
        }

        @media screen and (max-width: 1245px) {
            .productbackground{
                width:1240px;  
            } 
            #productImageInfoDiv{
        
            width : 290px;
            height: 300px;
            

        }
        }


    </style>
    <script>
    function goToProductDef(id){
        document.cookie="product_id = "+ id;
        window.location.href = "product_def.php";
    }
    </script>

<?php
uheader();
?>
</head>
<body id = "product" >

<div id = 'background'class='productbackground'>
<?php

$item_id = $_COOKIE['item_id'];
include ('connection.php');
$sql = "select * from product";
$result = mysqli_query($con,$sql);

while($data = mysqli_fetch_assoc($result)){
    if($data["item_id"]==$item_id){
        if($data['pro_quantity'] > 0){
        $unit = $data['pro_unit'];
        $rate = $data['pro_prize'];
        $name=$data["pro_name"];
        $location = "./productImage/". $data["pro_location"];
        echo"
        <div id = 'productImageInfoDiv' onclick = 'goToProductDef(".$data['product_id'].")'>
        <a id ='productImageInfoA' href='#'>
        <div id='productImageDiv'>
        <img id = 'productImageImg' src ='$location' alt=''>
        </div>

        <div id='productInfoDiv'>
        <span id = 'productName'>".ucfirst($name)."</span><br>
        <span>₹".$rate." " .$unit."</span><br>
        <span></span>
        </div>
        </a>
        </div>";
        }
    }
}
?>
</div>
<?php include('footer.php'); ?>
</body>

</html>