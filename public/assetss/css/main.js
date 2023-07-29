
    

    $('input.input-qty').each(function() {
        var $this = $(this),
          qty = $this.parent().find('.is-form'),
          min = Number($this.attr('min')),
          max = Number($this.attr('max'))
        if (min == 0) {
          var d = 0
        } else d = min
        $(qty).on('click', function() {
          if ($(this).hasClass('minus')) {
            if (d > min) d += -1
          } else if ($(this).hasClass('plus')) {
            var x = Number($this.val()) + 1
            if (x <= max) d += 1
          }
          $this.attr('value', d).val(d)
        })
      })
         
var showsearch = document.querySelector(".showsearch");
console.log(showsearch);
var headerdrop = document.querySelector(".header-active-drop");
var headerpay = document.querySelector(".header-item-pay");
var modeloverlay = document.querySelector(".model-overlay");
var cart = document.querySelector(".row-addcart-btn");
console.log(cart);
var success = document.querySelector(".cart-overlay");
console.log(success);
cart.onclick = function(){

    if( success.style.display === 'none'){
        success.style.display = 'block';
    }else{
        success.style.display = 'none';

    }
}

showsearch.onclick = function(){
    // alert("HI");
    if(headerdrop.style.transform === 'translateX(113%)'){
        headerdrop.style.transform = 'translateX(0%)';
    }else{
        headerdrop.style.transform = 'translateX(113%)';

    }
}

headerpay.onclick = function(){
    if( modeloverlay.style.display === 'none'){
        modeloverlay.style.display = 'block';
    }else{
        modeloverlay.style.display = 'none';

    }

}
// bán hàng

var item = document.querySelectorAll(".scoll-nav-item");
var pans =  document.querySelectorAll(".tab-pane");
item.forEach((tab, index) =>{
   var pan = pans[index];
    tab.onclick = function(){
        // tab.preventDefault();
        document.querySelector(".scoll-nav-item.active").classList.remove('active');
        document.querySelector(".tab-pane.active").classList.remove('active');
        this.classList.add('active');
        pan.classList.add('active');
        
    }
})

var changePhoto = document.querySelectorAll(".slide-thumb-item-img");
var zoomPhoto = document.querySelector(".zoom-container-img");
changePhoto.forEach((img, index) =>{
    img.onclick = function(){
       zoomPhoto.src = img.src;
    }
})

var submitBtn = document.querySelector(".contact-submit-btn");

var ten = document.querySelector(".form-input-name");
var phone = document.querySelector(".form-input-phone");
var text = document.querySelector(".form-textarea");
var message = document.querySelector(".form-message");
submitBtn.onclick = function(){
    this.prevent
    if(ten.value == ""){
        ten.parentElement.querySelector(".form-message").innerHTML = "Vui lòng nhập trường này";
        ten.style.border = "1px solid red";
    }else{
        ten.focus();

        ten.parentElement.querySelector(".form-message").innerHTML = "";
        ten.style.border = "1px solid #f1efef"
    }

    if(phone.value == ""){
        phone.parentElement.querySelector(".form-message").innerHTML = "Vui lòng nhập số điện thoại";
        phone.focus();
        phone.style.border = "1px solid red";
    }else if(phone.value.length <= 10 || phone.value.length >= 12){

        phone.parentElement.querySelector(".form-message").innerHTML =  "Vui lòng nhập số điện thoại lớn hơn 10 or nhỏ hơn 12 số";

        phone.style.border = "1px solid red";
        
    }else{
         phone.parentElement.querySelector(".form-message").innerHTML = "";
        phone.style.border = "1px solid #f1efef";
    }

   
}




// onmousemove="hvr(this, 'in')"
                               
// var countdown = function(end, element, callback){
//     var second = 1000;
//     var minutes = second * 60;
//     var hours = minutes * 60;
//     var day = hours * 24;
//     var end = new Date(end);
//     var timer;
//    var calculate = function(){
//         var now = new Date();
//         var remaining = end.getTime() - now.getTime();
//         var data;
//         if(isNaN(end)){
//             console.log('Invalid day/time');
//             return;
//         };

//         if(remaining <= 0){
//             clearInterval(timer);
//             if(typeos(callback) === "function"){
//                 callback();
//             };
//         }else{
//             if(!timer){
//                 timer = setInterval(calculate, second);
//             };
//         };

//         data = {
//             'days' : Math.floor(remaining/day),
//             'hourse': Math.floor((remaining % day)/hours),
//             'minutes' : Math.floor((remaining%hours) / minutes),
//             'second' : Math.floor((remaining%minutes) / second),
//         }
//         if(element.length){
//             for(x in element){
//                 var x = element[x];
//                 data[x] = ('00' + data[x]).slice(-2);
//                 document.getElementById(x).innerHTML = data[x];
//             }
//         };
//     }
// }

