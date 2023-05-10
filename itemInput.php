<?php
 if($_SESSION['logedin']==true){
}else{
    echo "<script>alert('you need to log in first....');
        window.location.href='index.php';
        </script>";
}
?>
    <div class="popup-container" id = "itemInput">
        <div class="popup">
            <form method="POST" enctype="multipart/form-data">
                <h2>
                    <span style="color: #75cfb8;">INPUT ITEM</span>
                    <button type="reset" onclick='product_Name("itemInput")'>X</button>
                </h2>
                <input type="text" name="name" id="name" placeholder="Item name." required>
                <input type="number" name="prize" id="prize" placeholder="Minimum item Price." required>
                <input  type="file" name="uploadfile" value="" placeholder="Upload Item's Picture" accept = "image/*" >
                <button type="submit" class="loginbtn" name="inputItemSubmit">Submit</button>
            </form>
        </div>
    </div>
    
<?php
if(isset($_POST["inputItemSubmit"])){
    // $fileName = $_FILES["uploadfile"]["name"];
    $name = strtolower($_POST["name"]);
    $fileName=$name.".jpg";
    $tempName = $_FILES["uploadfile"]["tmp_name"];
    $prize = $_POST["prize"];
    $folder="itemImage/".$fileName;
    include ('connection.php');
    $sql = "select * from item where item_name = '$name'";
    $result = mysqli_query($con,$sql);
        $data=mysqli_fetch_assoc($result);
        if(is_null($data)){
            $sql = "insert into item values ('$name','$prize','$fileName',0)";
            if(move_uploaded_file($tempName,$folder) && mysqli_query($con,$sql)){
                echo "<script>alert('Uploaded successfully!')</script>";
            }
            else{
                echo "<script>alert('Something went wrong.')</script>";
            }  
        }
        else
        {
            echo "<script>alert('Item already exist.')</script>";     
        }
}
?>




