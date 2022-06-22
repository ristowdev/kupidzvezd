
///////////////////////////////////////////////////////////////////

$( document ).ready(function() { 
    ///////////////////////////////////////////////////////////////////
    
    function call_change(){
      var scroll = $(window).scrollTop();
      var scroll_height = scroll/$(window).height();
      if(scroll_height > 0.05){ 
        $(".headerlgrel-gergre").addClass("lmcndksf-s-s-sda");
      }else{
        if(!$(".header-main.open-m4m32m42").length){
          $(".headerlgrel-gergre").removeClass("lmcndksf-s-s-sda"); 
        }
      }
    }
  
    ///////////////////////////////////////////////////////////////////
  
    call_change();
    $(window).on('scroll', function(){
      
      call_change();
    });


    ///////////////////////////////////////////////////////////////////


            var star_name = $("#star_name").val();
            var star_desc = $("#star_desc").val();

    ///////////////////////////////////////////////////////////////////

    var step_count = 0;

    $("#next-btn").click(function(e){  
        
        step_count++; 
        
        if(step_count==1){
            
             
            
            
            $("#first-section-lod").css("display","none");
            $("#sec-step-2").fadeIn();
            $("#back-btn-b").fadeIn();
            var aladin = A.aladin('#aladin-lite-div', {survey: "P/DSS2/color", fov:60, target:'08 02 44.927 -48 46 19.65', zoom:2, cooFrame:"ICRS"});

            $(".line-plfew div").css("width","60%");

            $("#step-2").addClass("passedstep");
        
        } 

        else if(step_count >= 1){
            
            $("#first-section-lod").css("display","none");
            $("#sec-step-2").css("display","none");

            $("#sec-3-delivery").fadeIn();

            $("#next-btn").css("display","none");

            $("#order-btn").fadeIn();
            $(".line-plfew div").css("width","100%");

            $("#step-3").addClass("passedstep");
        } 
  
        e.preventDefault(); 
    });


    $("#back-btn-b").click(function(e){
        step_count--;
 
        if(step_count == 0){
            
            $("#first-section-lod").css("display","none");
            $("#sec-step-2").css("display","none");
            $("#back-btn-b").css("display","none"); 
            $("#sec-3-delivery").css("display","none");

            $("#first-section-lod").fadeIn();
            
            $(".line-plfew div").css("width","30%");

            $("#step-2").removeClass("passedstep");
        }
        else if(step_count==1){
            $("#first-section-lod").css("display","none");
            $("#sec-step-2").fadeIn();
            $("#back-btn-b").fadeIn();

            $("#sec-3-delivery").css("display","none");

            var aladin = A.aladin('#aladin-lite-div', {survey: "P/DSS2/color", fov:60, target:'08 02 44.927 -48 46 19.65', zoom:2, cooFrame:"ICRS"});
            
            $(".line-plfew div").css("width","60%");

            $("#step-3").removeClass("passedstep");

            
            $("#next-btn").fadeIn();

            $("#order-btn").css("display","none");
        
        } 

        else if(step_count >= 2){
            
            $("#first-section-lod").css("display","none");
            $("#sec-step-2").css("display","none");

            $("#sec-3-delivery").fadeIn();
            
            
            $("#next-btn").css("display","none");

            $("#order-btn").fadeIn();

            

        } 
        e.preventDefault();
    });



    $("#order-btn").click(function(e){ 
        var star_name = $("#star_name").val();
        
        var star_desc = $("#star_desc").val();

        var delivery_fname = $("#delivery_fname").val();
        var delivery_city = $("#delivery_city").val();
        var delivery_phone_number = $("#delivery_phone_number").val();
        var delivery_address = $("#delivery_address").val();
        var delivery_email_address = $("#delivery_email_address").val();

        var coordinates_star = $(".aladin-location-text").text();  
 
        if (delivery_phone_number.length != 0 && delivery_fname.length != 0 && delivery_city.length != 00 && delivery_address != 0 && star_name != 0 && star_desc != 0 && delivery_email_address != 0) {
           

            $.ajax({
                url: 'place_order.php',
                type: 'POST',
                data: {
                    'star_name': star_name,
                    'star_description': star_desc,
                    'delivery_phone_number': delivery_phone_number,
                    'deliery_user_name': delivery_fname,
                    'delivery_city': delivery_city,
                    'delivery_address': delivery_address, 
                    'star_coordinates':coordinates_star,
                    'delivery_email_address':delivery_email_address,

                },
                success: function(res){ 
                    if(res==false){
                        var msg = "Таа ѕвезда е веќе регистрирана на друго име! Изберете друга!!";

                        $(".info-alert span").text(msg);

                        $(".info-alert").fadeIn();

                        clicked_button_order_now = false;
                    }else{
                        
                        $(".success-order-ministre").fadeIn();
                        $(".left-lpfwe--inside").css("display","none");

                    }
                }
            });

        }else{ 
            var msg = "Потполнете ги сите полиња!!!";

            $(".info-alert span").text(msg);

            $(".info-alert").fadeIn();
            clicked_button_order_now = false; 
        }

        e.preventDefault();

         
         
    });



});
 


const elts = {
    text1: document.getElementById("text1"),
    text2: document.getElementById("text2")
};

const texts = [
    "Ако",
    "Ја",
    "Сакаш",
    "Нема",
    "Да",
    "Згрешиш",
    "<3",
];

const morphTime = 1;
const cooldownTime = 0.25;

let textIndex = texts.length - 1;
let time = new Date();
let morph = 0;
let cooldown = cooldownTime;

elts.text1.textContent = texts[textIndex % texts.length];
elts.text2.textContent = texts[(textIndex + 1) % texts.length];

function doMorph() {
    morph -= cooldown;
    cooldown = 0;

    let fraction = morph / morphTime;

    if (fraction > 1) {
        cooldown = cooldownTime;
        fraction = 1;
    }

    setMorph(fraction);
}

function setMorph(fraction) {
    elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
    elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

    fraction = 1 - fraction;
    elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
    elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

    elts.text1.textContent = texts[textIndex % texts.length];
    elts.text2.textContent = texts[(textIndex + 1) % texts.length];
}

function doCooldown() {
    morph = 0;

    elts.text2.style.filter = "";
    elts.text2.style.opacity = "100%";

    elts.text1.style.filter = "";
    elts.text1.style.opacity = "0%";
}

function animate() {
    requestAnimationFrame(animate);

    let newTime = new Date();
    let shouldIncrementIndex = cooldown > 0;
    let dt = (newTime - time) / 1000;
    time = newTime;

    cooldown -= dt;

    if (cooldown <= 0) {
        if (shouldIncrementIndex) {
            textIndex++;
        }

        doMorph();
    } else {
        doCooldown();
    }
}

animate();