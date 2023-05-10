<?php
 if($_SESSION['logedin']==true){
}else{
    echo "<script>alert('you need to log in first....');
        window.location.href='index.php';
        popup('logIn');
        </script>";
}
?>

    <div class="popup-container" id="help-popup" style="z-index:2;">
        <div class="popup">
        <h2>
                    <span style="color: #fa9579;">Contact me</span>
                    <button type="reset" onclick="popup('help-popup');">X</button>
                </h2>
            <form action="">
                <div class="mb-3">
                    <label for="clientemail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="clientemail">
                </div>
                <div class="mb-3">
                    <label for="clientphone" class="form-label">Phone</label>
                    <input type="phone" class="form-control" id="clientphone">
                </div>
                <div class="mb-3">
                    <label for="clientenquires" class="form-label">Enquires</label>
                    <input type="text" class="form-control" id="clientenquires">
                </div>
                <button type="button" class="btn-submit">Submit</button>
            </form>
        </div>
    </div>

