let timerState = Rectangle.getAttribute('data-timer')


timerLight(timerState);


function timerLight(time) {

    setTimeout(function (){
        location.reload();
    }, time)

}


