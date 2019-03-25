<?php
    require __DIR__ . '/header.php';
?>

<link rel="stylesheet" href="common.css">
<style>
.join_box {
    border : 2px solid gray;
    width : 400px;
    height : 500px;
    margin-top : 5%;
    margin-left : 35%;
}

.join_box .join_window {
    width : 100%;
    height : 100%;

}

.join_logo img{
    width : 100px;
    height : 100px;
}

.join_box .join_logo{
    text-align : center;
}

.join_info ul {
    margin : 0;
    padding : 0;
    list-style : none;
}
</style>

<div class = "join_box">
    <div class = "join_Window">
        <div class = "join_logo">
            <img src="logo.png" alt="">
        </div>
        <div class = "join_info">
            <ul>
                <li><input type="text" name = "user_name"></li>
                <li><input type="text" name = "user_id"></li>
                <li><input type="text" name = "user_pw"></li>
            </ul>
        </div>
        <div calss = "join_button">
            <a href="">JOIN</a>
        </div>
    </div>

</div>

<?php
    require __DIR__ . '/footer.php';
?>