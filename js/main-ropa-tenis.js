/**
 * Created by julio.ramos on 31/08/2018
 */
setTimeout(
    function()
    {
        $(document).ready(function(){
            //$.when($("div.cover").fadeOut()).then($("body").css("background-color","black"));
            $.when($("div.cover").fadeOut());

            $(window).scroll(function() {
                var positionScroll=$(window).scrollTop();
                var alturaDocumentoAct=$(document).height() - 900;
                if(positionScroll > alturaDocumentoAct){
                    var heightaction=$("#acctionbuttoncontent").height() + 50;
                    $(".titlecover").css("padding-top",heightaction);
                    $(".nav-wrapper").css("padding-top",heightaction);
                    $("#acctionbuttoncontent").fadeIn();
                }
            });
        });
    }, 1000);
