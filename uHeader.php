<?php 
session_start();
?>
<html>
<head>
<title>OPRAU</title>
<!--icon from library-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/popup.css">
<style>
    *{
	margin:0;
	padding:0;
	}
body{
	margin:0;
	box-sizing:border-box;
	}
/* header.php*/
/* menubar */
.menu_bar{
    z-index:999;
	top:0;
	position:fixed; 
	width:100%;
	background: linear-gradient(130deg, #166416,#0a3d0a) ;
	height:75px;
	padding-left: 20px;
	/*padding-right: 20px;*/
	display:flex;
	/*overflow:hidden;*/
	box-shadow: 0 0 10px 8px gray	;
	flex-direction: row;
	align-items: center;
	justify-content: space-between;

	
}

.menu_bar .header{
	display: flex;
	flex-direction: row;
}
/*name of project*/
#logo{
	display: inline-flex;
	align-items: center;
	height: 100%;
}
.menu_bar .header  #logo img{
        width: 40px;
        height: 40px;
        margin-right: 15px;
 }
.menu_bar .header #logo #name{
	color:white;
	font-size:25px;
	font-family: system-ui;
}
.menu_bar .header a{
	text-decoration:none;
	color:white;
	text-align:center;
	display:block;
	margin: 0 10px;
	font-family: system-ui;

}
.menu_bar .header a pre span{
	font-family: system-ui;
}

/*search button*/
.menu_bar .header form{
	margin-right: 20px;
	display: flex;
	flex-direction: row;
}
.menu_bar .header form input{
  padding:4px;
  font-size:14px;
  outline: none;
  /*float: left;*/
  width: 200px;
  height:30px;
  border-radius: 4px;
}
.menu_bar .header form input:focus {
	box-shadow: 0 0 2px 2px gray;
}
 .menu_bar .header form button {
  width: 40px;
  height:25px;
  margin-top: 3px;
  margin-left: 8px;
  background:none;
  box-shadow: 0 0 2px 2px gray;
  color: white;
  border-radius:5px;
}


.menu_bar .header a:active, form button i:active{
	color:gray;
}
/* search button end*/
/* end menubar */



/* end header.php*/

</style>
	<?php
include('log_in.php');
include('u_sign_up.php');

?>
<script>
    function gotoPage(page){
        login = '<?php echo $_SESSION['logedin']; ?>';
        if(login){
          window.location.href=page;
   
        }else{
            alert('you need to log in first....');
            popup('logIn');
        }
            
    } 

    
    
   function logout() {
        let text = "Do you want to log out!";
        if (confirm(text) == true) {
            window.location.href = 'logout.php'
        } 
        else
        return;
}
     function product(){
        // window.location.href='s.php'
     }
</script>


</head>
<!-- menubar -->

<body>

	<?php 
		function sheader(){?>
	<section id = "seller_section">
	<div class="menu_bar">
		<div class="header">
			<a href="sDashboard.php"> <pre style="font-size:22px;"class="fa fa-th-large"> <span>Dashboard</span></pre></a>
		</div>
		<div class="header">
			<li id = "logo">
		      	 <img src="icon/logo.png" alt="">
		            <span id="name"><abbr title="Oganic Product Of Rural Areas For Urgan Areas">OPRAU</abbr></span>
		   </li>	
	  </div>
    <div class="header" style="margin-right: 20px;">
    	<form class="search">
					<input type="text" placeholder="Search...." name="search">
					<button type="submit"><i class="fa fa-search" ></i></button>
			</form>
			<a  href="saleProduct.php" ><pre style="font-size:22px;"class="fa fa-home"> <span>Home</span></pre></a>
			<a href="index.php"><pre style="font-size:22px;"class='fa fa-shopping-bag'> <span>Buy</span></pre></a>
			<a href="#"><pre style="font-size:22px;"class="fa fa-database"> <span>Product</span></pre></a>
			<a href="sDashboard.php"><pre style="font-size:22px;"class="fa fa-truck"> <span>Order</span></pre></a>
			
			<!-- <li id="log_in1"><a onclick = "popup('logIn')" href="#">LOGIN</a></li> -->
			
			
		
		</div>
</div>

</section>
<?php 
}
		function uheader(){
			?>
	<section id = 'user_section'>
<div class="menu_bar">
	<div class="header">
		<a href="#" onclick="gotoPage('uDashboard.php')"><pre style="font-size:22px;"class="fa fa-th-large"> <span>Dashboard</span></pre></a>
	</div>
	<div class="header">
			<li id = "logo">
		      	 <img src="icon/logo.png" alt="">
		            <span id="name">OPRAU</span>
		  </li>	
	 </div>
	 <div class="header" style="margin-right: 20px;">
	 		<form class="search">
				<input type="text" placeholder="Search...." name="search">
				<button type="submit"><i class="fa fa-search" ></i></button>
			</form>
			<a href="index.php" ><pre style="font-size:22px;"class="fa fa-home"> <span>Home</span></pre></a>
		
			<a href="#" onclick = "gotoPage('saleProduct.php')"><pre style="font-size:22px;"class="fa fa-balance-scale"> <span>Sale</span></pre></a>
		
		
		
<?php

	if (isset($_SESSION['logedin'])) {
		?>
			<a href="#" onclick = "logout()" ><pre style="font-size:22px;"class="fa fa-sign-in"> <span>Log out</span></pre></a>
		<?php

	}
else{
	?>
			<a onclick = "popup('logIn')" href="#"><pre style="font-size:22px;"class="fa fa-sign-in"> <span>Log In</span></pre></a>
			<a onclick = "popup('userSignUp')" href="#" ><pre style="font-size:22px;"class="fa fa-user-plus"> <span>Sign Up</span></pre></a>

	<?php
}
// session_destroy();
		?>
			<a href="#"><pre style="font-size:22px;"class="fa fa-shopping-cart"> <span>Cart</span></pre></a>
		</div>
</div>
</section>
<?php 
	}?>
	


</body>
</html>


