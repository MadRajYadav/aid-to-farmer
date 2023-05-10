
<script>
        function dashboard(){
            
                document.getElementById('board').style.display='initial';
                document.getElementById('values').style.display='flex';
                document.getElementById('product').style.display='none';
                document.getElementById('your_order').style.display='none';
                document.getElementById('dashboard').style.background='#eef0f3';
                document.getElementById('your-order').style.background='none';
                document.getElementById('upload_img').style.background='none';
                document.getElementById('i-name').innerHTML='Dashboard';
                document.getElementById('upload_btn').style.display='none';
                // document.getElementById('your_order').style.display='none';


        }

        function upload_img(){
            document.getElementById('board').style.display='none';
            document.getElementById('values').style.display='none';
            document.getElementById('your_order').style.display='none';
            document.getElementById('product').style.display='flex';
            document.getElementById('dashboard').style.background='none';
            document.getElementById('upload_img').style.background='#eef0f3';
            document.getElementById('your-order').style.background='none';
            document.getElementById('i-name').innerHTML='Upload Product';
            document.getElementById('upload_btn').style.display='initial';
            // // document.getElementById('your_order').style.display='none';



    }
    function your_order(){
            document.getElementById('your_order').style.display='flex';
            document.getElementById('cart_iteam').style.display='none';
            document.getElementById('profile_board').style.display='none';
             document.getElementById('your-order').style.background='#eef0f3';
             document.getElementById('your-cart').style.background='none';
             document.getElementById('profile').style.background='none';
             document.getElementById('i-name').innerHTML='Your Order';
             document.getElementById('product_history').style.display='none';
            document.getElementById('product-history').style.background='none';
            
           
            
            document.getElementById('board').style.display='none';
            
            // document.getElementById('values').style.display='none';
            // document.getElementById('product').style.display='none';
            
            
            // document.getElementById('upload_img').style.background='none';
            
            // document.getElementById('i-name').innerHTML='Upload Product';
            
            // document.getElementById('upload_btn').style.display='none';



    }

    function cart1(){
            document.getElementById('cart_iteam').style.display='flex';
            document.getElementById('your_order').style.display='none';
           
            document.getElementById('profile_board').style.display='none';
             document.getElementById('your-order').style.background='none';
             document.getElementById('your-cart').style.background='#eef0f3';
             document.getElementById('profile').style.background='none';
             document.getElementById('i-name').innerHTML='Your Cart';
             document.getElementById('product_history').style.display='none';
            document.getElementById('product-history').style.background='none';

    }
    function profile1(pro){
            if(pro==1){
                document.getElementById('profile_board').style.display='flex';
                document.getElementById('your_order').style.display='none';
                document.getElementById('cart_iteam').style.display='none';
                document.getElementById('product_history').style.display='none';
                document.getElementById('profile').style.background='#eef0f3';
                document.getElementById('your-cart').style.background='none';
                document.getElementById('your-order').style.background='none';
                document.getElementById('product-history').style.background='none';
                document.getElementById('i-name').innerHTML='Profile';
                
                
                
              
            }else{
                document.getElementById('profile_board').style.display='flex';
                document.getElementById('your_product').style.display='none';
                document.getElementById('board').style.display='none';
                 document.getElementById('product_history').style.display='none';
            document.getElementById('product-history').style.background='none';
                document.getElementById('rec-order').style.background='none';
                document.getElementById('your-product').style.background='none';
                document.getElementById('profile').style.background='#eef0f3';
                document.getElementById('i-name').innerHTML='Profile';
            }
            
       
    }
    function your_product(){
            document.getElementById('your_product').style.display='flex';
            document.getElementById('board').style.display='none';
            document.getElementById('profile_board').style.display='none';
             document.getElementById('product_history').style.display='none';
            document.getElementById('product-history').style.background='none';
            document.getElementById('rec-order').style.background='none';
            document.getElementById('profile').style.background='none';
            document.getElementById('your-product').style.background='#eef0f3';
            document.getElementById('i-name').innerHTML='your product';
    }
    function received_order(){
        
        // document.getElementById('received_order').style.display='none';
            document.getElementById('board').style.display='flex';
            document.getElementById('your_product').style.display='none';
            document.getElementById('product_history').style.display='none';
            document.getElementById('product-history').style.background='none';
            // document.getElementById('values').style.display='none';
            // document.getElementById('product').style.display='none';
          
            document.getElementById('profile_board').style.display='none';
            document.getElementById('profile').style.background='none';
            
            // document.getElementById('upload_img').style.background='none';
            document.getElementById('your-product').style.background='none';
            document.getElementById('rec-order').style.background='#eef0f3';
            // document.getElementById('i-name').innerHTML='Upload Product';
            document.getElementById('i-name').innerHTML='Received Order';
       
    }
function pro_history(i){

            if(i == 1){
            document.getElementById('i-name').innerHTML='Product History';
            document.getElementById('product_history').style.display='flex';
            document.getElementById('your_product').style.display='none';
            
            document.getElementById('board').style.display='none';
            document.getElementById('profile_board').style.display='none';
            document.getElementById('product-history').style.background='#eef0f3';
            document.getElementById('rec-order').style.background='none';
            document.getElementById('your-product').style.background='none';
            document.getElementById('profile').style.background='none';
          
            }else{
                
                document.getElementById('your_order').style.display='none';
                document.getElementById('cart_iteam').style.display='none';
                document.getElementById('your-order').style.background='none';
                document.getElementById('profile_board').style.display='none';
                document.getElementById('profile').style.background='none';
                document.getElementById('product_history').style.display='flex';
                document.getElementById('product-history').style.background='#eef0f3';
                document.getElementById('your-cart').style.background='none';
                document.getElementById('i-name').innerHTML='Product History';
                
            }
            
}
    function home(){
        window.location.href='index.php';
    }

    function popup(popup_name) {
            get_popup = document.getElementById(popup_name);
            if (get_popup.style.display == "flex") {
                get_popup.style.display = "none";
            } else {
                get_popup.style.display = "flex";
            }
            
        }

    function showSallerDetails(){
        if(document.getElementById('saller-info').style.display=='none'){
            document.getElementById('saller-info').style.display='initial';
        }else{
            document.getElementById('saller-info').style.display='none';
        }
    }

    function logLat(){
        
        var x = document.getElementById("location");
        getLogLet();
        function getLogLet(){
            if(navigator.geolocation){
                
                navigator.geolocation.getCurrentPosition(showExactPosition);
                
            }else{
                x.innerHTML="Geolocation is not supported";
            }
        }
        function showExactPosition(position){
            x.innerHTML ="Latitude: "+position.coords.latitude+"<br>Longitude: "+position.coords.longitude;
            var lat=position.coords.latitude;
            var log=position.coords.longitude;
            alert(lat+log);
            document.cookie="lat="+lat;
            document.cookie="log="+log;
            // document.cookie="lat=; max-age=0";
            // document.cookie="log=; max-age=0";

        }
    }
    </script>

<script>
  
         function getLogLet(){
           
            if(navigator.geolocation){
                
                navigator.geolocation.getCurrentPosition(showExactPosition);
                
            }else{
                x.innerHTML="Geolocation is not supported";
            }
        }
        function showExactPosition(position){
            // document.querySelector('.form input[name="lat"]').value=position.coords.latitude;
            // document.querySelector('.form input[name="log"]').value=position.coords.longitude;
            var lat=position.coords.latitude;
            var log=position.coords.longitude;
            document.cookie="lat="+lat;
            document.cookie="log="+log;
            
           

        }
        function showError(error){
            switch(error.code){
                case error.PERMISSION_DENIED:
                    alert("You must allow the request for Geolocation to fill out the form");
                    location.reload();
                    break;
            }
        }

    function changeImage() {
        var userImage = document.getElementById("upload_img").value;
        alert(userImage);
        document.getElementById("cu_iteam").src = 'C:/Users/hs256/Downloads/download.jpg';
}
    </script>