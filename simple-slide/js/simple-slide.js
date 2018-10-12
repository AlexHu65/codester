/*Objects slide*/
var item = 0;
var pagination = $("#pagination #item-pagination");
var controls = $("#play span");
var imgSlide = $(".slide-img");
var toggle = false;




/*Control slide*/
var interruptSlide = false;
var pauseSlide = false;
var play = true;


/*Start animation*/
$(imgSlide[item]).animate({"top": -10 + "%", "opacity": 0}, 100);
$(imgSlide[item]).animate({"top": 30 + "px", "opacity": 1}, 600);

$("#slide ul li").css({"width": 100 / $("#slide ul li").length + "%"});
$("#slide ul").css({"width": $("#slide ul li").length * 100 + "%"});


//Pagination
$("#pagination #item-pagination").click(function () {

    if (play) {
        stopSlide();
    }

    item = $(this).attr("item") - 1;
    moveSlide(item);
});


/*Move the slides*/
function avanzar() {

    if (!play) {
        stopSlide();
    }

    if (item == $("#slide ul li").length - 1) {
        item = 0;
    } else {
        item++;
    }
    moveSlide(item);
}

/*Arrow next*/
$("#slide #next").click(function () {

    if (!play) {
        stopSlide();
    }
    avanzar();

});


/*Arrow back*/
$("#slide #back").click(function () {

    if (!play) {
        stopSlide();
    }

    if (item == 0) {
        item = $("#slide ul li").length - 1;
    } else {
        item--;
    }
    moveSlide(item);

});

/* Move the slide */
function moveSlide(item) {


    $("#slide ul").animate({"left": item * -100 + "%"}, 1000, "easeOutQuart");
    $("#pagination li").css({"opacity": .5});
    $(pagination[item]).css({"opacity": 1});

    interruptSlide = true;

    $(imgSlide[item]).animate({"top": -10 + "%", "opacity": 0}, 100);
    $(imgSlide[item]).animate({"top": 30 + "px", "opacity": 1}, 600);
}


/*Controls stop and play*/

$("#play").click(function () {

    stopSlide();

});

/*Pause function controls*/

function stopSlide() {

    if (play) {



        $(controls).removeClass("glyphicon glyphicon-pause");
        $(controls).addClass("glyphicon glyphicon-play");

        play = false;
    } else {

        $(controls).removeClass("glyphicon glyphicon-play");
        $(controls).addClass("glyphicon glyphicon-pause");





        play = true;

    }

}

/*Se interval play button*/
setInterval(function () {

    if (interruptSlide) {

        interruptSlide = false;
    } else {

        if (play && !pauseSlide) {
            avanzar();
        }
    }


}, 3000);

/*Show arrows*/

$('#slide').mousemove(function () {


    pauseSlide = true;

    $("#slide #back").css({
        "opacity": 1,
        "transition": ".5s",
        "-webkit-transition": ".5s",
        "-moz-transition": ".5s"
    });
    $("#slide #next").css({
        "opacity": 1,
        "transition": ".5s",
        "-webkit-transition": ".5s",
        "-moz-transition": ".5s"
    });


});


$('#slide').mouseout(function () {

    pauseSlide = false;

    $("#slide #back").css({
        "opacity": 0,
        "transition": ".5s",
        "-webkit-transition": ".5s",
        "-moz-transition": ".5s"
    });
    $("#slide #next").css({
        "opacity": 0,
        "transition": ".5s",
        "-webkit-transition": ".5s",
        "-moz-transition": ".5s"
    });


});


/*Hide slide*/

$("#btnSlide").click(function () {

    if (!toggle) {
        toggle = true;
        $("#slide").slideUp("fast");
        $("#btnSlide").html('<i class="fa fa-angle-down"></i>');

    } else {
        $("#slide").slideDown("fast");
        $("#btnSlide").html('<i class="fa fa-angle-up"></i>');

        toggle = false;
    }

});








