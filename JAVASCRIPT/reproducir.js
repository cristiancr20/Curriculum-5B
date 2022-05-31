
const video = document.getElementById("video");
const playPause = document.getElementById("play");

playPause.addEventListener("click", () => {
    if(video.paused || video.ended){
        video.play();
        playPause.querySelector(".pause-btn").classList.toggle("hide");
        playPause.querySelector(".play-btn").classList.toggle("hide");
    }else{
        video.pause();
        playPause.querySelector(".pause-btn").classList.toogle("hide"); 
        playPause.querySelector(".play-btn").classList.toogle("hide");
    }
})