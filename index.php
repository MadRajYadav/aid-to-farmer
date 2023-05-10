<?php 
include ('uHeader.php');
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href = "css/popup.css">
    <style>
        #oprau{
            margin:0;
            margin-top:90px;
            box-sizing:border-box;
        }
        /* oprau.php*/
        #row{
            margin:20px;
            height: 360px; 
            width:97%;
            border-radius: 10px;
            background:#fff;
            text-align:center;
            box-shadow: 0 0 12px 5px gray;
        }
        #row #product{
            display:inline-block;
            width:18%;
            height:90%;
            text-decoration : none;
            overflow: hidden;
            box-shadow: 0 0 5px 5px gray;
            margin-top: 18px;
            margin-left: 9px;
            margin-right: 9px;
            border-radius: 5px;
        }
        #row #product:hover{           
            transform: scale(1.03);     
        }
        #proImg{
            width: 100%;
            height: 72%;
            margin-bottom: 3%;
        }
        #row #product #proImg img{
            margin-top:10px;
            height :89%;
            width :94%;
            border-radius: 10px;
        } 
        #row #product #proImg img:hover{
            transform: scale(1.02);           
        }
        #row #product #proName{
            padding: 5px;
        }
        #row #product #proName span{
            font-size: 18px;
            font-family: sans-serif;
            font-stretch: condensed;
            color: midnightblue;
        }
        #row #product #proName #rateFrom{
            color:red ;
        }   
        /* end oprau.php*/
        #buttom{
            display:inline-block;
            width:24%;
            height:100%;
            border:3px #eee groove;
            color:black;
        }
    </style>
    <script type="text/javascript">
        function product_Name(var1){
            document.cookie="item_id = "+ var1;
        }
    </script>  
    </head>
    <?php
    uheader();
    ?> 
    <body id  = "oprau" bgcolor = "#eee"  >
        <div style="margin:5px;" >
            <?php 
                include ('connection.php');
                $qur = "select * from item";
                $result = mysqli_query($con,$qur);
                
                $i = 0;
                while($data = mysqli_fetch_assoc($result)){
                    $location = "itemImage/". $data["item_location"];
                    $item_id = $data["item_id"];
                    if($i%5==0){
                        echo ' <div id="row" >';   
                    }
                    ?>
                        <a href="product.php" id = "product" onclick="product_Name('<?php echo $item_id; ?>')" >
                                    <div id="proImg">
                                            <img src="<?php echo $location ?>"></img> 
                                    </div>
                                    <div id="proName">
                                        <span id="name1"> <?php echo ucfirst($data["item_name"]);?> </span><br>
                                        <span id="rateFrom">From ₹ <?php echo $data["min_price"];?></span><br>
                                        <span>Explore Now!</span>
                                    </div>
                            </a>
                    <?php
                    if ($i%5==4){
                        echo '</div>';
                    }
                    $i++;
                }
            ?>
        </div>
        <?php 
        include('footer.php');
        ?>
    </body>
</html>


 
    