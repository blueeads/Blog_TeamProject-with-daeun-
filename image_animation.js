var timer;

function CreateTiemr() {
    var logoanimation = document.getElementsByClassName("logo_animation");

    if (timer) {
        clearInterval(timer);
        timer = null;
    }

    timer = setInterval(function() {
        location.href = "./login.php";
        console.log("AA");
    }, 5000);
}

