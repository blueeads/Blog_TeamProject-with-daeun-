<?php
    require __DIR__ . '/header.php';
?>
<link rel="stylesheet" href="login.css">

<div class = "login_box">
    <div class = "index_box">
        <div class = login_box_size>
            <div class = "login_logo">
                <img src="logo.png" alt="" width = "100px" height = "100px">
            </div>
            
        <div>
            <h4>문-구</h4>
        </div>

            <div class = "info">
                <form action="./login.php" method="post">
                <ul>
                    <li>
                    <button type="submit" class = "login_input" id = "login_btn" >Start</button>
                    </li>
                    <li>
                    <button type="submit" class = "login_input" id = "Join_btn" >Login</button>
                    </li>
                </ul>
                </form>

            </div>
        
        <!-- <div class = "login_button">
            <button type="submit" class = "login">LOGIN</button>
        </div> -->
        </div>
    </div>
</div>

<?php
    require __DIR__ . '/footer.php';
?>