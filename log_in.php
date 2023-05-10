<script>
function popup(popupId){
		popupTask = document.getElementById(popupId)
		// alert(popupId)
		if(popupTask.style.display=='flex'){
		popupTask.style.display='none'
        window.location.href = 'index.php';
        }
		else{
		popupTask.style.display='flex'
        }
	}
    </script>
    <div class="popup-container" id="logIn">
        <div class="popup">
            <form method="POST">
                <h2>
                    <span style="color: #75cfb8;">LOGIN</span>
                    <button type="reset" onclick='popup("logIn");'>X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="userData" id="email_username" required>
                <input type="password" placeholder="password" name="password" required>
                <span><a style="color:red; cursor: pointer;" onclick='popup("forget_pass");'>Forget password</a></span>
                <button type="submit" class="loginbtn" id  ="loginbtn" name="logInSubmit">LOGIN</button>
            </form>
        </div>
    </div>

    <div class="popup-container" id="forget_pass">
        <div class="popup">
            <form method="POST">
                <h2>
                    <span style="color: #75cfb8;">Forget</span>
                    <button type="reset" onclick='popup("forget_pass");'>X</button>
                </h2>
                <input type="text" placeholder="Enter your register email" name="userData" id="email_username" required>
                <button type="submit" class="loginbtn" id  ="sendbtn" name="sendSubmit">Send</button>
            </form>
        </div>
    </div>
<?php
if(isset($_POST['logInSubmit'])){
	$data = $_POST['userData'];
	$pass = $_POST['password'];
	$flag=0;
	$sqldata="";
	include ('connection.php');
	$query = "select * from  user_data where email = '$data' or number = '$data'";
	$result = mysqli_query($con,$query);
	if($result){
        $sqldata = mysqli_fetch_assoc($result);
		if($sqldata){
			if($pass==base64_decode($sqldata['password'])){
				$_SESSION['userId']=$sqldata['user_id'];
				$_SESSION['userPasword']=$pass;
				$_SESSION['logedin']=true;
                $pageName =  basename($_SERVER['PHP_SELF']); 
				echo"<script>alert('Loged in successful.);
                window.location.href = '$pageName';
				</script>";
                echo "<script>document.getElementById('logIn').style.display = none;</script>";
			}
			else
				echo"<script>alert('Oops, Password is wrong!')</script>";
		}
		else
			echo"<script>alert('Oops!, Wrong User email or Nunber.')</script>";
    }
mysql_close($con);
}
//<!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"-->
?>