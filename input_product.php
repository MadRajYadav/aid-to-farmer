<style>
 div.popup-container div.popup #quan{
    width: 72%;
    margin-bottom: 20px;
    background-color: transparent;
    border: none;
    border-bottom: 2px solid #75cfb8;
    border-radius: 0;
    padding: 5px 0;
    font-weight: 550;
    font-size: 14px;
    outline: none;
    }
    div.popup-container div.popup #unit{
        border: none;
        border-bottom: 2px solid #75cfb8;
        width: 26%;
        padding: 5px 0;
        font-size:14px;
        font-weight: 550;
        background-color: transparent;
        face:vardhana;
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
    <div class="popup-container" id="inputProduct">
        <div class="popup">
            <form method="POST" enctype="multipart/form-data">
                <h2>
                    <span style="color: #75cfb8; font-size:18px;">UPLOAD <span id='productName' name = "item_name"></span>
                    <button type="reset" onclick='product_Name(".")'>X</button>
                </h2>
                <input type="text" name="name" id="name" placeholder="Enter Product name."/>
                <input type="number" name="prize" id="prize" placeholder="Enter Product's Prize." required/>
                <input type="number" name="quan" id="quan" placeholder="Enter Quantity of products." required/>
                <select id="unit" name="unit">
                    <option value="Kg">Kg</option>
                    <option  value="Ltr">Ltr</option>
                     <option value="Piece">Piece</option>
                </select>
                <input  type="file" placeholder="Upload Product Picture" name="uploadfile" value="" required />
                <button type="submit" class="loginbtn" name="inputProductSubmit" id="submit"><a>Submit</a></button>
            </form>
        </div>
    </div>


<?php
if(isset($_POST["inputProductSubmit"])){
    $user_id=$_SESSION['userId'];
    include ('connection.php');
    // $fileName = $_FILES["uploadfile"]["name"];
    $name = $_POST["name"];
    $fileName = "img_".$name."_".$user_id.".jpg";
    $tempName = $_FILES["uploadfile"]["tmp_name"];
    $prize = $_POST["prize"];
    $quan = $_POST["quan"];
    $unit = $_POST["unit"];
    $item_name=$_COOKIE['item_name'];
    $result = mysqli_query($con,"select item_id from item where item_name = '$item_name'");
    $row = mysqli_fetch_assoc($result);
    $item_id = $row['item_id'];
    $folder="./productImage/".$fileName;
    date_default_timezone_set('Asia/Kolkata');
    $date = date('y-m-d h:i:s');
    $sql = "select pro_location from product where user_id = '$user_id' and pro_location = '$fileName'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $tt = strtolower($row['pro_location']);
    if(strtolower($row['pro_location']) != strtolower($fileName)){
        $sql = "insert into product values ('$user_id','$item_id', 0, '$name', '$prize', '$quan', '$unit', '$fileName','$date')";
        if(mysqli_query($con,$sql)){
            if(move_uploaded_file($tempName,$folder))
                echo "<script>alert('Uploaded successfully!')</script>";
            else 
                echo "<script>alert('Something went wrong.')</script>";
        }
            else
                echo "<script>alert('Something went wrong.')</script>";
    }
    else
        echo "<script>alert('your product already exists, you can upadte by update pannel.')</script>";
}       
?>



