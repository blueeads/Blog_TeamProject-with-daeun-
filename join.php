<?php
    require __DIR__ . '/header.php';
?>
<link rel="stylesheet" href="login.css">

<div class = "login_box">
    <div class = "login_index">
        <div class = login_box_size>

            <div class = "login_logo">
                <img src="logo.png" alt="" width = "100px" height = "100px">
            </div>
            
            <div class = "info">
                <form action="./login.php" method="post">
                <ul>
                    <li>
                        <input type="text" class = "login_input" id = "login_input_text" name = "user_name "placeholder = "NAME">
                    </li>
                    <li>
                        <input type="text" class = "login_input" id = "login_input_text" name = "user_id" placeholder = "ID">
                    </li>
                    <li>
                        <input type="text" class = "login_input" id = "login_input_text" name = "user_pw" placeholder = "PASSWORD">
                    </li>
                </ul>
                </form>
                <button type="submit" class = "login_input" id = "join_btn">JOIN</button>
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