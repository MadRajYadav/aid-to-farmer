<?php 
include ('uHeader.php');
?>
<html>
<head>
    <style>
        *{
            margin:0;
            padding:0;
        }
        #body{
            margin-top:90px;
            box-sizing:border-box;
        }
        /* oprau.php*/
        #row{
            margin:10px;
            margin-top: 25px;
            height:300px; 
            width:100%;
            border-radius: 10px;
            background:#eee;
            text-align:center;
            box-shadow: 0 0 12px 6px gray;
            text-align: center;  
            padding-top: 10px; 
        }
        #product{
            display:inline-block;
            width:17.5%;
            height:88%;
            margin: 1%;
            text-decoration : none;
            border-radius: 5px;
            box-shadow: 0 0 6px 6px gray;
        }
        #proImg{
            width: 100%;
            height: 90%;
            border-radius: 5px;      
        }
        #row #product #proImg img{
            margin:4%;
            height :89%;
            width :90%;
            border-radius: 10%;
        } 
        #row #product:hover{
            transform: scale(1.05);
        }
        #row #product #proName #name1{
            font-size: 18px;
            color: blue;
            font-family: sans-serif;
            font-stretch: condensed;
        }
        /* end oprau.php*/
        #textAddItem{
            font-size: 18px;
            color: #ff0101;
            font-family: sans-serif;
            font-stretch: expanded;
        } 
         @media screen and (max-width: 950px){
            #row{
                margin:10px;
                margin-top: 25px;
                height:300px; 
                width:950px;
                border-radius: 10px;
                background:#eee;
                text-align:center;
                box-shadow: 0 0 6px 6px  gray;
                text-align: center;  
                padding-top: 20px;
            } 
            #textAddItem{
                font-size: 18px;
                color: #ff0101;
                font-family: sans-serif;
                font-stretch: expanded;
            } 
        }
    </style>
<script type="text/javascript">
    function product_Name(var1){
        if(var1=="itemInput"){
            if(document.getElementById('itemInput').style.display=='none'){
                alert("NOTE: \nplease, use web browser to download picture and \nupload a clear picture of an item on this site.");
            document.getElementById('itemInput').style.display='flex';
            }
            else{
                document.getElementById('itemInput').style.display='none';
            }
        }
        else if(document.getElementById('inputProduct').style.display=='none'){
            document.getElementById('inputProduct').style.display='flex';
            alert("NOTE: \nplease, take a clear picture of your product and then upload on this site.");
            document.getElementById('productName').innerHTML=var1.toUpperCase();//((var1.charAt(0)).toUpperCase()+var1.slice(1))
            document.cookie="item_name = "+ var1;
        }
        else{
            document.getElementById('inputProduct').style.display='none';
        }
       }
</script>
<?php
    sheader();
?>
</head>
 <body id = "body" bgcolor = "#fff" >
    <div style="margin:5px;" >
<?php
include('log_in.php');
 if($_SESSION['logedin']==true){
}else{
    echo "<script>alert('you need to log in first....');
        popup('logIn');
        </script>";
}
  include('input_product.php');
    include('itemInput.php');
include('connection.php');
 $qur = "select * from item";
 $result = mysqli_query($con,$qur);
$i = 0;
while($data = mysqli_fetch_assoc($result)){
    $location = "itemImage/". $data["item_location"];
    $name = $data["item_name"];
        if($i%5==0){
            echo '<div id="row" >';   
        }
     ?>
        <a href="#" id = "product" onclick="product_Name('<?php echo $name; ?>')" >
                    <div id="proImg">
                            <img src="<?php echo $location ?>"></img> 
                    </div>
                    <div id="proName">
                        <span id="name1"> Click me to sale </span>
                    </div>
            </a>
    <?php
    if ($i%5==4){
        echo '</div>';
    }
    $i++;
 }
 if($i%5==0){
        echo ' <div id="row" >';   
    }
?>
            <a href="#" id = "product" onclick="product_Name('itemInput')" >
                    <div id="proImg" >
                        <img src="icon/addItemPlusSign.png"></img> 
                    </div>
                    <div id="proName">
                        <span id="textAddItem"> Click me to add new item </span>
                    </div>
            </a>
        </div>
</div>
<?php include('footer.php') ?>
</body>               
</html>


 
    