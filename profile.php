    <style>
        .user_profile {
            justify-content: flex-start;
            align-items: flex-start;
            width: 90%;
            height: 500px;
            background: #fff;
            border-radius: 5px;
            margin-left: 5%;
            display: none;
            flex-direction: column;
            padding: 4px;
            overflow-y: scroll;
            transition: 0.4s ease;
        }
        ::-webkit-scrollbar{
            width: 5px;
            border-radius: 30px;
        }
        ::-webkit-scrollbar-thumb{
            background: #ddd;
        }
        ::-webkit-scrollbar-thumb:hover{
            background: #ccc;
        }
        ::-webkit-scrollbar-track{
            background: #f1f;
        }
        .user_profile spam
        {
            display: flex;
            width:350px;
            height: auto;
            padding: 12px;
            border-bottom: 1px solid #d7dbd7e6;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 10px;
            font-size:18px;
            font-family: sans-serif;
        }        
        .user_column {
            width: 50%;
            height: auto;
            margin-left: 5%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 100px;
        }
     .profile_img img{
        width: 120px;
        height: 120px;
        border-radius: 100%;
        border: 4px solid gray;
        
     }
     .profile_head{
        width: 100%;
        height: 120px;
        background-color: #f1f;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
     }
     .profile_img{
        z-index:1;
        margin-bottom: -120px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: auto;
        height: auto;
        border-radius: 100%;
        padding-bottom: 10px;
     }    
     .user_details{
        display: flex;
        flex-direction: row;
        width: 100%;
     }
        @media (max-width: 998px){
            .user_details{
                flex-direction: column;
            }   
            .product{
                width: 100%;
            }
        }
    </style>
    <script>
        function takeImage(){
            let inputImage = document.querySelector("input[type=file]").files[0];
            document.getElementById("image").src =URL.createObjectURL(inputImage);
            document.getElementById('picUploadCnf').style.display='flex';            
        }
       
    </script>
<?php   
         if($_SESSION['logedin']==true){
            }else{
                echo "<script>alert('you need to log in first....');
                    window.location.href='index.php';
                    </script>";
            }          
            include('connection.php');
            $userId = $_SESSION['userId'];
            $query = "select * from user_data where user_id = '$userId'";
            $result = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($result);            
        ?>
   <form method="POST" enctype="multipart/form-data">
    <div class="user_profile" id="profile_board">
        <div class="profile_head">
           <form method='POST' enctype="multipart/form-data">
            <div class="profile_img">
                <img id = "image" src="profile_pic/<?php echo $row['profile_pic']?>" alt="pic">     
                <label for="inputTag" style = "margin-left: 80px; margin-top: -35px;z-index: 1; cursor:pointer;" >
                    <i class="fa fa-2x fa-camera"></i>
                    <input type="file" name ="uploadPicture" id="inputTag"  style="display:none" onchange="takeImage()">
                    <br/><br/>
                </label>
                <label for="">Id: <?php echo $row['user_id'];?></label>   
            </div> 
            <div class="popup-container"  style = "z-index:2;" id="picUploadCnf">
                    <div class="popup">          
                                <h2>
                                    <span id = "heading">Upload Confirm</span>
                                    <button type="reset" onclick="popup('picUploadCnf');">X</button>
                                </h2>            
                        <button type="submit" class="conform"  name="confirmed">Confirm</button>          
                    </div>
                </div>  
            </form> 
        </div>
        <div class="user_details">
        <div class="user_column">
            <span style="font-size:25px; color:red;">Personal details</span>
            <spam ><?php echo ucfirst($row['name']);?></spam>
            <spam><?php echo ucfirst($row['land_mark']).", ".ucfirst($row['city']).", ".ucfirst($row['district']).", ".ucfirst($row['state']).", ".$row['pin_code']; ?></spam>
            <spam ><?php echo $row['email'];?></spam>
            <spam ><?php echo $row['number'];?></spam>
            <a href="#" style="font-size:14px;margin-left: 290px; color:red;" onclick="popup('profile-edit-popup')"> Edit Profile</a>
        </div>
        </div>
    </div>
</form>
     <form action="#" method="POST" >
    <div class="popup-container" id="otp-popup">
        <div class="popup">
                <h2>
                    <span style="color: #75cfb8;">OTP</span>
                    <button type="reset" onclick="popup('otp-popup');">X</button>
                </h2>  
                <input type="text" placeholder="Enter otp" name="otp" required>
                <button type="submit" class="otp" name="login">Confirm</button>
        </div>
    </div>
    </form>
    <div class="popup-container" id="profile-edit-popup" style="z-index:2;">
                        <div class="popup">
                            <form action="" method="POST">
                                <h2>
                                    <span style="color: #75cfb8;">Update Profile</span>
                                    <button type="reset" onclick="popup('profile-edit-popup');">X</button>
                                </h2>     
                                <input type="text" placeholder="Enter Name" name="name" value="<?php echo ucfirst($row['name']);?>" required>
                                <input type="text" placeholder="Enter Phone" name="phone" value="<?php echo ucfirst($row['number']);?>" required>
                                <input type="email" placeholder="Enter Email" name="email" value="<?php echo ucfirst($row['email']);?>" required>
                                <button type="submit" class="update" name="profile_update">Update</button>
                            </form>
                        </div>
                    </div>
    <script>
        function popup(popup_name) {
            get_popup = document.getElementById(popup_name);
            if (get_popup.style.display == "flex") {
                get_popup.style.display = "none";
            } else {
                get_popup.style.display = "flex";
            }  
        } 
</script>    
<?php
if(isset($_POST['confirmed'])){
    $tempName = $_FILES['uploadPicture']['tmp_name'];
    $fileName = $_FILES['uploadPicture']['name'];
    $fileName = $userId.substr($fileName,-15);
    $folder = "profile_pic/".$fileName;
    $sql = "UPDATE user_data SET profile_pic = '$fileName' WHERE user_id='$userId'";
    $page = basename($_SERVER['PHP_SELF']);
    // $status=unlink($folder);
    if(move_uploaded_file($tempName,$folder) && mysqli_query($con,$sql)){
                echo "<script>alert('Uploaded successfully!');</script>";
                header("Refresh: 1; url=$page");
                $page = "profile.php";
                header("Refresh: 1; url=$page");  
            }
            else{
                echo "<script>alert('Something went wrong.')</script>";
            } 
}
if(isset($_POST['profile_update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone'];
    $query="update user_data set name='$name', email='$email', number='$number' where user_id='$userId'";
    if(mysqli_query($con,$query)){
        echo "<script>alert('Succefully updated')</script>";
    }
}
?>
