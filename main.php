<?php
    require __DIR__ . '/header.php';
?>

<style>
.mainbox {
    top : 200px;
    margin : auto 20%;
}
.top-line {
    width : 100%;
    height : 50px;
    border-bottom : 2px solid gray;
    position: fixed;
    background: rgb(45, 43, 52);
    z-index : 1;
}
.top-main {
    list-style : none;
    display : inline-block;
    padding-right : 20px;
}

.main-logo {
    width : 20%
}

.main-logo img {
    text-align : center;
}

.main-logo .img-button {
    width : 100%;
    margin-left : 15%;
    position : relative;
    background: url("./logo.png") no-repeat;
    border: none;
    cursor: pointer;
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

.view-box {
    float : left;
    margin-top : 60px;
    width : 540px;
}

.view-box ul {
    width : 100%;
}

.view-box li {
    width : 100%;
}

.view-title {
    background : white;
    height : 50px;
    font-size : 24px;
}

.view-title p {
    margin : 0;
    padding : 10px;
}

.view-image {
    max-height : 770px;
    max-width : 100%;
    /* background : yellow; */
    height : auto;
    width : auto;
    padding : 0;
}

.view-image img {
    width : 100%;
    height : 100%;
}

.view-star {
    background : white;
    padding : 10px 0;
}

.view-star p {
    margin : 0;
    padding-left : 10px;
}

.view-recommend {
    background : white;
    height : 150px;
}

.view-recommend p {
    margin : 0;
    padding-left : 10px;
}

.view-user {
    background : white;
    padding-bottom : 10px;
}

.view-user p {
    margin : 0;
    padding-left : 10px;
}

.movie-bar {
    width : 300px;
    color : white;
    margin-top : 50px;
}

.movie-bar p {
    border-bottom : 2px solid rgb(0, 173, 181);
    padding : 10px;
    font-size : 20px;
}

.movie-bar li {
    color : white;
    border-bottom : 1px solid gray;
    padding-top : 8px;
    padding-bottom : 8px;
}

.movie-bar a {
    padding-left : 10px;
    color : white;
}

.right-sidebox {
    float: right;
    display: inline-block;
    position: absolute;
    margin-left: 100px;
}
</style>


<div class = "top-line">
    <div class = "main-logo">
        <img src="logo.png" alt="" width = "45px" height = "45px">
    <input type="button" class="img-button">
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
<div class = "mainbox">
    <div>
        <div class = "view-box">
            <ul>
                <li class = "view-title"><p>SKY캐슬</p></li>
                <li class = "view-image"><img src="sky.jpg" alt="스카이캐슬"></li>
                <li class = "view-star"><p>★★★★☆</p></li>
                <li class = "view-recommend"><p>SKY캐슬은 ...</p></li>
                <li class = "view-user"><p>작성자 : 피라미드</p></li>
            </ul>
        </div>
    </div>
    
    <div class = "right-sidebox">
        <div class = "movie-bar"><p>영화</p>
        <ul>
            <li><a href="http://">로맨스</a></li>
            <li><a href="http://">액션</a></li>
            <li><a href="http://">공포</a></li>
            <li><a href="http://">판타지</a></li>
        </ul>
    </div>
</div>
</div>

<?php
    require __DIR__ . '/footer.php';
    ?>