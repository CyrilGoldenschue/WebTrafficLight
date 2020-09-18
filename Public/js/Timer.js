let rectangle = document.getElementById('Rectangle');
timerLight(rectangle.getAttribute('data-light'));
function timerLight(state) {

    switch (state){
        case "0":
            setTimeout(function (){
                location.reload();
            }, 10000) //stop
            break;
        case "1":
            setTimeout(function (){
                location.reload();
            }, 1500) //ready
            break;
        case "2":
            setTimeout(function (){
                location.reload();
            }, 5000) //go
            break;
        case "3":
            setTimeout(function (){
                location.reload();
            }, 1500) //slow
            break;
        default:
            setTimeout(function (){
                location.reload();
            }, 10000) //stop
            break;

    }

}


