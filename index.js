var text = document.querySelector('.text1');
// console.log(text);
var value = text.innerHTML;
// console.log(value);
var mang = ["/img/img/hero-right.webp",
"/img/img/hero-right-2.webp",
"/img/img/hero-right-3.webp"

];
var index = 0;
var anh = document.querySelector("#img");

var t = setInterval("_next()", 2000);


function _next() {
    index++;


    if (index > 2) {
        index = 0;
    }
   
    anh.src = mang[index];
   
  
}
var img = document.querySelectorAll('.image');
var image=document.querySelector('.image').parentElement.parentElement;
console.log(image);
function lui() {
    var a = img[0].src;
    img[0].src = img[1].src;
    img[1].src = img[2].src;
    img[2].src = img[3].src;
    img[3].src = a;
}


var tk_=document.querySelector('#tk');
tk_.addEventListener('click',function(){
    var tk1=document.querySelector('.tk1');
  tk1.classList.toggle('active');
    
})

