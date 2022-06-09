$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsiveclass:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        800:{
            items:2
        },
        1000:{
            items:3
        },
        1300:{
            items:4
        }
    }
})


var modal1 = document.getElementById("prisijungti");
var modal2 = document.getElementById("registruotis");

var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");

var span1 = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close")[1];
btn1.onclick = function() {
    modal1.style.display = "block";
}
btn2.onclick = function() {
    modal2.style.display = "block";
}
span1.onclick = function() {
    modal1.style.display = "none";    
} 
span2.onclick = function(){
    modal2.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal2||event.target == modal1) {
      modal2.style.display = "none";
      modal1.style.display = "none";
    }
} 
const accordion = document.getElementsByClassName("contentBx");
for(i = 0; i < accordion.length; i++){
    accordion[i].addEventListener('click',function(){
        this.classList.toggle('active')
    })
}
