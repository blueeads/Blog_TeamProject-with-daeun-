var text = [5];
var res = [5];

function DrawStar(num) {
    for (var index = 0; index < 5; index++) {
        if(num > index)
        {
            text[index] = '★';
        }
        else 
        {
            text[index] = '☆';
        }
        res[index] =
        String(text[index]);
    }
    document.getElementById("view-star-id").innerHTML = res[index];
}