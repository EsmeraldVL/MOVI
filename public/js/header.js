
 function mostrarPassword(){
  var cambio = document.getElementById("password");
  if(cambio.type == "password"){
    cambio.type = "text";
    $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
  }else{
    cambio.type = "password";
    $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
  }
} 

$(document).ready(function() {


        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
        
             //>=, not <=
            if (scroll >= 80) {
                //clearHeader, not clearheader - caps H
                $(".navbar").addClass("bg-light fixed-top");
            } else {
              $(".navbar").removeClass("bg-light fixed-top");
            }
        }); //missing );
          
        // document ready  
        });

/*
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $(".zoom-me img").css({
    width: (100 + scroll/5)  + "%",
    top: -(scroll/10)  + "%",
    //Blur suggestion from @janwagner: https://codepen.io/janwagner/ in comments
    "-webkit-filter": "blur(" + (scroll/200) + "px)",
    filter: "blur(" + (scroll/200) + "px)"
  });
});
*/

//footer---------
$(document).ready(function ($) {
  $(window).on("scroll", function () {
    //ADD .TIGHT
    if (
      $(window).scrollTop() + $(window).height() >
      $(".wrapper").outerHeight()
    ) {
      $("body").addClass("tight");
      $(".arrow").hide();
    } else {
      $("body").removeClass("tight");
      $(".arrow").show();
    }
  });

  //BACK TO PRESENTATION MODE
  $("html").on("click", "body.tight .wrapper", function () {
    $("html, body").animate(
      {
        scrollTop: $(".wrapper").outerHeight() - $(window).height()
      },
      500
    );
  });
});

$(".arrow").click(function () {
  $("html").animate({ scrollTop: $("html").prop("scrollHeight") }, 1200);
});

