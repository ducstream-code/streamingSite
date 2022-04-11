function removeHUD(){
    let video = document.getElementById('video')
    video.controls = false;
}

function play() {
    let video = document.getElementById('video')
    video.play();
    let button = document.getElementById('pause')
    button.setAttribute("onclick", "pause()");
    button.innerHTML='<ion-icon name="pause"></ion-icon>'
}

function pause(){
    let video = document.getElementById('video')
    video.pause();
    let button = document.getElementById('pause')
    button.setAttribute("onclick", "play()");
    button.innerHTML="<ion-icon name=\"play\"></ion-icon>"

}

function minusTime(time){
    let video = document.getElementById('video')
    video.currentTime-=time;

}

function plusTime(time){
    let video = document.getElementById('video')
    video.currentTime+=time;

}

function goFullScreen(){
    let elem = document.getElementById('video')
    if (elem.requestFullscreen) {
        elem.requestFullscreen();
    } else if (elem.webkitRequestFullscreen) { /* Safari */
        elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE11 */
        elem.msRequestFullscreen();
    }
}

//
