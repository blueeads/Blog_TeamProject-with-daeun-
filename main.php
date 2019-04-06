<?php
    require __DIR__ . '/header.php';

    session_start();

    $db = new PDO("mysql:host=localhost;dbname=myhomepage", "root", "");
?>

<link rel="stylesheet" href="main.css">
<script src="star.js"></script>

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
        <?php
                    $st = $db->prepare("SELECT * FROM board");
                    $st->execute();

                    while ($content = $st->fetch()) {
                        ?>
            <table>
                <tbody>
                            <tr> <td class = "view=title"> <p> <?php echo $content['content']; ?> </p></td> </tr>

                            <tr> <td class = "view-image"></td> </tr>
                            <tr> <td class = "view-star"> <script>DrawStar(3);</script> </td></tr>
                            <tr><td class = "view-recommend"> <p><?php echo $content['subject']; ?></p>  </td></tr>
                            <tr><td  class = "view-user"> <p>Write : <?php echo $content['user']; ?></p>  </td></tr>
                            <br>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
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