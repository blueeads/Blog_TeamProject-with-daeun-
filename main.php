<?php
    require __DIR__ . '/header.php';
?>

<style>
.top-line {
    width : 100%;
    height : 50px;
    border-bottom : 2px solid gray;
}
.top-main {
    list-style : none;
    display : inline-block;
    padding-right : 20px;

}
.main-logo {
    width : 20%;
    position : relative;

}
.top-menu {
    width : 40%;    
    position: absolute;
    /* float: right; */
    right: 0;
    top : 20px;

}
.top-menu ul {
    text-align: center;
    margin: 0;
    padding: 0;
}
</style>

<div class = "top-line">
    <div class = "main-logo">
    <button type = "button" onclick = "location.href = './'"> <img src="logo.png" alt="" width = "40x" height = "40px"> </button>
    </div>
    <div class = "top-menu">
        <ul>
            <li class = "top-main" id = "home"> <a href="#">Home</a> </li>
            <li class = "top-main" id = "setting"> <a href="#">setting</a> </li>
            <li class = "top-main" id = "user"> <a href="#">user</a> </li>
            <li class = "top-main" id = "write"> <a href="#">write</a> </li>
        </ul>
    </div>
</div>


<?php
    require __DIR__ . '/footer.php';
?>