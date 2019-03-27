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
            
        <div>
            <h4>비밀번호를 잊으셨나요?</h4>
        </div>

            <div class = "info">
                <form action="./login.php" method="post">
                <ul>
                    <li>
                        <input type="text" class = "login_input" id = "login_input_text" name = "user_name" placeholder = "NAME">
                    </li>
                    <li>
                        <input type="password" class = "login_input" id = "login_input_text" name = "user_id" placeholder = "ID">
                    </li>
                </ul>
                </form>
                <button type="submit" class = "login_input" id = "login_btn" >FIND</button>
            </div>
        
        <!-- <div class = "login_button">
            <button type="submit" class = "login">LOGIN</button>
        </div> -->
            
            <div class = "login_join">
                <a>회원이 아니신가요?</a>
                <a href="join.php" id = "login_join_joinbtn">지금 가입하세요.</a>
            </div>
        
        </div>
    </div>
</div>

<?php
    require __DIR__ . '/footer.php';
?>