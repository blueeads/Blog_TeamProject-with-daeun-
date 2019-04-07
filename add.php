<?php
    require __DIR__ . './header.php';

    session_start();

    if (!isset($_SESSION['user'])) {
        echo "<script>alert('로그인이 필요합니다.'); location.href = './login.php';</script>";
    }

    if (isset($_POST['subject']) && isset($_POST['content'])) {
        $subject = $_POST['subject'];
        $content = $_POST['content'];

        $db = new PDO("mysql:host=localhost;dbname=myhomepage;charset=utf8", "root", "");

        $st = $db->prepare("INSERT INTO board (subject, content, user) values (?, ?, ?)");
        $st->execute([$subject, $content, $_SESSION['user']->user_id]);

        echo "<script>alert('글쓰기가 완료되었습니다.'); location.href = './main.php';</script>";
    }
?>

<script type="text/javascript" src="./js/jquery-3.1.0.min.js" charset="utf-8"></script>
    <script type="text/javascript">

        // 이미지 정보들을 담을 배열
        var sel_files = [];

        $(document).ready(function() {
            $("#input_imgs").on("change", handleImgFileSelect);
        }); 

        function fileUploadAction() {
            console.log("fileUploadAction");
            $("#input_imgs").trigger('click');
        }

        function handleImgFileSelect(e) {

            // 이미지 정보들을 초기화
            sel_files = [];
            $(".imgs_wrap").empty();

            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);

            var index = 0;
            filesArr.forEach(function(f) {
                if(!f.type.match("image.*")) {
                    alert("확장자는 이미지 확장자만 가능합니다.");
                    return;
                }

                sel_files.push(f);

                var reader = new FileReader();
                reader.onload = function(e) {
                    var html = "<a href=\"javascript:void(0);\" onclick=\"deleteImageAction("+index+")\" id=\"img_id_"+index+"\"><img src=\"" + e.target.result + "\" data-file='"+f.name+"' class='selProductFile' title='Click to remove'></a>";
                    $(".imgs_wrap").append(html);
                    index++;

                }
                reader.readAsDataURL(f);
                
            });
        }

        function deleteImageAction(index) {
            console.log("index : "+index);
            console.log("sel length : "+sel_files.length);

            sel_files.splice(index, 1);

            var img_id = "#img_id_"+index;
            $(img_id).remove(); 
        }

        function fileUploadAction() {
            console.log("fileUploadAction");
            $("#input_imgs").trigger('click');
        }

        function submitAction() {
            console.log("업로드 파일 갯수 : "+sel_files.length);
            var data = new FormData();

            for(var i=0, len=sel_files.length; i<len; i++) {
                var name = "image_"+i;
                data.append(name, sel_files[i]);
            }
            data.append("image_count", sel_files.length);
            
            if(sel_files.length < 1) {
                alert("한개이상의 파일을 선택해주세요.");
                return;
            }           

            var xhr = new XMLHttpRequest();
            xhr.open("POST","./main.php");
            xhr.onload = function(e) {
                if(this.status == 200) {
                    console.log("Result : "+e.currentTarget.responseText);
                }
            }

            xhr.send(data);

        }
    </script>

<div id="content-box">
    <form action="./add.php" method="POST">
        <h3>글쓰기</h3>
        <div class="view-box">
            <div class="line">
                <div class="left-section section">제목</div>
                <div class="right-section section"><input type="text" name="subject"></div>
            </div>
                <div class="imgs_wrap">
                <img id="img" />
         </div>
            <div class="line">
                <textarea name="content" cols="30" rows="10"></textarea>
            </div>
            <div class="btn-row">
                <a href="javascript:" onclick="fileUploadAction();" class="my_button">파일 업로드</a>
                <input type="file" id="input_imgs" multiple/>
                <button type="reset">초기화</button>
                <button type="submit">글쓰기</button>
            </div>
        </div>
    </form>
</div>

<?php
    require __DIR__ . './footer.php';
?>