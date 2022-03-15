/*const zoomElement = document.querySelector(".imagen");

let zoom = 1;
const ZOOM_SPEED = 0.1;

document.addEventListener("wheel", function(e){

    console.log(e.deltaY)
    if(e.deltaY > 0){    
        zoomElement.style.transform = `scale(${zoom += ZOOM_SPEED})`;  
    }
    else{
        zoomElement.style.transform = `scale(1,1)`;
    }

});*/

/*
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var x = scroll / 200;
    console.log(x)
    var n = 1.5
 

    $(".producto-imagen img").css({
    //transform: 'translate3d(-50%, -'+(scroll/100)+'%, 0) scale('+(100 + scroll/5)/100+')',
        transform: `scale(${n + (scroll / 1000)})`,
    //Blur suggestion from @janwagner: https://codepen.io/janwagner/ in comments
    //"-webkit-filter": "blur(" + (scroll/200) + "px)",
    //filter: "blur(" + (scroll/200) + "px)"
    });
    
	
});*/