let rectangle = document.getElementById('Rectangle');

let timerState = rectangle.getAttribute('data-timer')


timerLight(timerState);


function timerLight(time) {

    setTimeout(function (){
        location.reload();
    }, time)

}


