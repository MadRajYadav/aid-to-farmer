
<script type="text/javascript">
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
      } else {
        alert("Geolocation is not supported by this browser.");
      }
    }
    function showPosition(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
      var accuracy = position.coords.accuracy;
      var timestamp = position.timestamp;
      // Send the location data to the server using AJAX or a form submission
      alert("Latitude: " + latitude + "\nLongitude: " + longitude + "\nAccuracy: " + accuracy + " meters" + "\nTimestamp: " + timestamp);
    }
    function showError(error) {
      switch(error.code) {
        case error.PERMISSION_DENIED:
          alert("User denied the request for Geolocation.");
          getLocation();
          break;
        case error.POSITION_UNAVAILABLE:
          alert("Location information is unavailable.");
          break;
        case error.TIMEOUT:
          alert("The request to get user location timed out.");
          break;
        case error.UNKNOWN_ERROR:
          alert("An unknown error occurred.");
          break;
      }
    }
  </script>
</head>
<body>
<div class="popup-container" id = "userSignUp">
        <div class="popup">
            <form method="POST"  class="myform">
                <h2>
                    <span style="color: #fa9579;">REGISTER</span>
                    <button type="reset" onclick = 'popup("userSignUp")'>X</button>
                </h2>
                <input type="text"  maxlength="25" name="name" placeholder="Enter Your Name." required>
				<input type="text"  maxlength="25" name="city" placeholder="Enter Your City/Village." required>
				<input type="text"  maxlength="25" name="dist" placeholder="Enter Your District." required>
				<input type="text"  maxlength="25" name="lmark" placeholder="Enter a Land mark." required>
			    <input type="text"  maxlength="6" name="pin" placeholder="Enter Your Pin-Code." required>
			    <input type="text"  maxlength="25" name="state" placeholder="Enter Your State." required>
			    <input type="email"  name="email" placeholder="Enter Your Email." >
				<input type="tel"  maxlength="10" name="nmbr" placeholder="Enter Your Number." required>
				<input type="password" maxlength="6" name="pass" placeholder="Enter Your Password." required>
                <button type="submit" onclick = "" class="registerbtn" name="userSignUpSubmit" style="background-color: #fa9579;">SUBMIT</button>
            </form>
        </div>

    </div>
<?php
class user_data{
	public $name,$city,$dist,$lmark,$pin,$state,$email,$nmbr,$pass,$user_id,$latitude,$longitude,$date;
	public function data(){
		$this->name= strtolower($_POST['name']);
		$this->city = strtolower($_POST['city']);
		$this->dist = strtolower($_POST['dist']);
		$this->lmark = strtolower($_POST['lmark']);
		$this->pin = $_POST['pin'];
		$this->state = strtolower($_POST['state']);
		$this->email = $_POST['email'];
		$this->nmbr = $_POST['nmbr'];
		$this->pass=base64_encode($_POST["pass"]);
        date_default_timezone_set('Asia/Kolkata');
		$this->date=date('y-m-d h:i:s');
        // to get current location od the current user
        $ip = $_SERVER['REMOTE_ADDR'];
        $details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
        if ($details->status == 'success') {
        $this->latitude = $details->lat;
        $this->longitude = $details->lon;
        } 
	}
	public function update_table(){
		if($this->name!=" ")
		{
			if($this->nmbr!=" " || $this->pass!=" ")
			{
	 			include ('connection.php');
	 			$qur = "select * from user_data where email = '$this->email' or number = '$this->nmbr'";
	 			if($con){
	 				$result = mysqli_query($con,$qur);
	 				$result = mysqli_fetch_assoc($result);
	 				if(!$result){
	 					$qur = "insert into user_data value(0,'$this->name','$this->city','$this->dist','$this->lmark','$this->pin','$this->state','$this->email','$this->nmbr','$this->pass','$this->longitude','$this->latitude','$this->date','profile-image.jpg')";
		 				if(mysqli_query($con,$qur)){
		 					echo"<script>alert('Registration successful.');</script>";
		 				}
		 				else
		 					echo"<script>alert('Oops!, Somthing went Wrong.');</script>";
	 				}
	 				else{
	 					echo"<script>alert('This email or number already exists.');</script>";
	 				}
	 			}
	 			else
	 				echo"<script>alert('database is not selected.');</script>";
			}
		}
	}
}
?>
<?php
if(isset($_POST['userSignUpSubmit']))
{
	$obj=new user_data();
	$obj->data();
	$obj->update_table();
}
?>
