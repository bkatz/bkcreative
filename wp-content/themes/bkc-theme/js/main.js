/* Author:

*/

$('.featured').cycle({ 
    fx:     'fade', 
    speed:   2000, 
    timeout: 6000, 
    next:   '.featured', 
    pause:   1  });

$(".scrollable").scrollable();

$(".scrollable2").scrollable();

$("#ripstevejobs a[title]").tooltip({ position: "center left",  effect: 'fade', offset: [-70, 50]});
