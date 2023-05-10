<?php 
include ('uHeader.php');
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="OPRAU.css">
    <style type="text/css">
        *{
            margin:0;
            padding:0;
        }
        body{
            margin:0;
            margin-top:74px;
            box-sizing:border-box;
        }
        /* seller_data.php */
        .account{ 
            visibility: hidden;
            font-size:20px;
            color:white;
            display:block;
            position:fixed;
            margin:0px 32%;
            top: 74px;
            width: 30%;
            padding:33px;
            background-color: gray;
            border:white 5px groove;
        }
        .account #cencel_div{
		float: right;
    	margin: -33px;
        }
        .account #cencel_div #cencel_button{
            font-size:18px;
        }
        .account form input{
            font-size:13px;
            face:vardhana;
            width: 98%;
            height: 25px;
            border-radius:4px;
        }

        .account form i{
            margin: -35px;
        }
        .account form button {
            font-size:16px;
            padding:6px;
            font-family:algerian;
            color:blue;
            border-radius:5px;
        }
        .account  button a{
            text-decoration:none;
            color:blue;
        }
        .account  button a:hover{
            border:3px groove pink;
            border-radius:5px;
        } 

        /* the end seller_data.php */
        #row a{
        pointer-events: none;
       }
    </style>
    <?php 
        
        sheader();
     ?>
</head>
<body>

<div class="account">
    <div id = "cencel_div" >
            <button id = "cencel_button"><a> X </a></button>
    </div>
    <form id="account" method="post">
        User Id: <input type="text" name="id" id="id" placeholder="Enter User Id."><br>
        PassWord: <input type="password" name="pass" id="pass" placeholder="Enter New password."><br>
        Confirm PassWord: <input type="text" name="r_pass" id="r_pass" placeholder="Re-Enter New password."><br>
        Account Holder Name : <input type="text" name="h_name" id="H_name" placeholder="Enter Account Holder's Name."><br>
        Account Number: <input type="password" name="ac_no" id="ac_no" placeholder="Enter Account Number."><br>
        Confirm Account Number: <input type="text" name="r_ac_no" id="r_ac_no" placeholder="Re-Enter Account Number."><br>
        Enter Bank Name: <input type="number" name="bank_n" id="bank_n" placeholder="Enter Bank Name."><br>
    UPI ID: <input type="password" name="upi" placeholder="Enter UPI ID."><br>
        Confirm UPI ID: <input type="text" name="r_upi" placeholder="Re-Enter UPI ID."><br><br>
        <i><button type="reset" style="margin-left:33%;"><a>Reset</a></button>
            <button type="submit" name="sellerDataSubmit"><a>Submit</a></button></i>

    </form>
    </div>


</body>

</html>


<?php
if(isset($_POST['sellerDataSubmit'])){
    $obj = new sellerData();
}

?>

<?php
class sellerData{
        public $id, $pass, $r_pass, $h_name, $ac_no, $r_ac_no, $bank_n, $upi_id, $r_upi_id;

        public function __construct(){
             //$idS='';
            $this->id = $_POST['id']; 
            $this->pass = $_POST['pass']; 
            $this->r_pass = $_POST['r_pass']; 
            $this->h_name = $_POST['h_name']; 
            $this->ac_no = $_POST['ac_no']; 
            $this->r_ac_no = $_POST['r_ac_no'];
            $this->bank_n = $_POST['bank_n']; 
            $this->upi_id = $_POST['upi']; 
            $this->r_upi_id = $_POST['r_upi'];
            if($this->id != " "){
                include ('connection.php');
                if($con){
                    $qur = "select * from user_data where user_id='$this->id'";
                    $run = mysqli_query($con,$qur);
                    if($row = mysqli_fetch_array($run))
                        $idS = $row["user_id"];
                }
            }
            if($idS==$this->id){
               // echo "<script>alert('matched')</script>";
                $qur = "insert into seller_data value('$this->id','$this->pass','$this->ac_no','$this->h_name','$this->bank_n','$this->upi_id')";
                
            }
            else
                echo "<script>alert('not matched')</script>";

        }
}



?>

