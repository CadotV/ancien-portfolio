// gallery
function scaleGallery() {
    // This is roughly the max pixels width/height of a square photo
    var widthSetting = 500;

    // Do not edit any of this unless you know what you're doing
    var containerWidth = $(".gallery").width();
    var ratioSumMax = containerWidth / widthSetting;
    var imgs = $(".gallery img");
    var numPhotos = imgs.length,
        ratioSum, ratio, photo, row, rowPadding, i = 0;

    while (i < numPhotos) {
        ratioSum = rowPadding = 0;
        row = new Array();
        while (i < numPhotos && ratioSum < ratioSumMax) {
            photo = $(imgs[i]);
            // reset width to original
            photo.width("");
            ratio = photo.width() / photo.height();
            rowPadding += getHorizontalPadding(photo);
            // if this is going to be first in the row, clear: left
            if (ratioSum == 0) photo.css("clear", "left");
            else photo.css("clear", "none");
            ratioSum += ratio;
            row.push(photo);
            i++;
            // if only 1 image left, squeeze it in
            if (i == numPhotos - 1) ratioSumMax = 999;
        }
        unitWidth = (containerWidth - rowPadding) / ratioSum;

        row.forEach(function(elem) {
            elem.width(unitWidth * elem.width() / elem.height());
        });
    }
}

function getHorizontalPadding(elem) {
    var padding = 0;
    var left = elem.css("padding-left");
    var right = elem.css("padding-right");
    padding += parseInt(left ? left.replace("px", "") : 0);
    padding += parseInt(right ? right.replace("px", "") : 0);
    return padding;
}

// gradient
function setGradient(divGradient) {
    // gradient - A PEN BY Mike Byrne
    // target to give background to
    var $div = document.getElementById(divGradient);
    // rgb vals of the gradients
    var gradients = [{
        start: [128, 179, 171],
        stop: [30, 41, 58]
    }, {
        start: [255, 207, 160],
        stop: [234, 92, 68]
    }, {
        start: [212, 121, 121],
        stop: [130, 105, 151]
    }];
    // how long for each transition
    var transition_time = 8;
    // how many frames per second
    var fps = 60;


    // interal type vars
    var timer; // for the setInterval
    var interval_time = Math.round(1000 / fps); // how often to interval
    var currentIndex = 0; // where we are in the gradients array
    var nextIndex = 1; // what index of the gradients array is next
    var steps_count = 0; // steps counter
    var steps_total = Math.round(transition_time * fps); // total amount of steps
    var rgb_steps = {
        start: [0, 0, 0],
        stop: [0, 0, 0]
    }; // how much to alter each rgb value
    var rgb_values = {
        start: [0, 0, 0],
        stop: [0, 0, 0]
    }; // the current rgb values, gets altered by rgb steps on each interval
    var prefixes = ["-webkit-", "-moz-", "-o-", "-ms-", ""]; // for looping through adding styles
    var div_style = $div.style; // short cut to actually adding styles
    var gradients_tested = false;
    var color1, color2;

    // sets next current and next index of gradients array
    function set_next(num) {
        return (num + 1 < gradients.length) ? num + 1 : 0;
    }

    // work out how big each rgb step is
    function calc_step_size(a, b) {
        return (a - b) / steps_total;
    }

    // populate the rgb_values and rgb_steps objects
    function calc_steps() {
        for (var key in rgb_values) {
            if (rgb_values.hasOwnProperty(key)) {
                for (var i = 0; i < 3; i++) {
                    rgb_values[key][i] = gradients[currentIndex][key][i];
                    rgb_steps[key][i] = calc_step_size(gradients[nextIndex][key][i], rgb_values[key][i]);
                }
            }
        }
    }

    // update current rgb vals, update DOM element with new CSS background
    function updateGradient() {
        // update the current rgb vals
        for (var key in rgb_values) {
            if (rgb_values.hasOwnProperty(key)) {
                for (var i = 0; i < 3; i++) {
                    rgb_values[key][i] += rgb_steps[key][i];
                }
            }
        }

        // generate CSS rgb values
        var t_color1 = "rgb(" + (rgb_values.start[0] | 0) + "," + (rgb_values.start[1] | 0) + "," + (rgb_values.start[2] | 0) + ")";
        var t_color2 = "rgb(" + (rgb_values.stop[0] | 0) + "," + (rgb_values.stop[1] | 0) + "," + (rgb_values.stop[2] | 0) + ")";

        // has anything changed on this interation
        if (t_color1 != color1 || t_color2 != color2) {

            // update cols strings
            color1 = t_color1;
            color2 = t_color2;

            // update DOM element style attribute
            div_style.backgroundImage = "-webkit-gradient(linear, left bottom, right top, from(" + color1 + "), to(" + color2 + "))";
            for (var i = 0; i < 4; i++) {
                div_style.backgroundImage = prefixes[i] + "linear-gradient(45deg, " + color1 + ", " + color2 + ")";
            }
        }

        // test if the browser can do CSS gradients
        if (div_style.backgroundImage.indexOf("gradient") == -1 && !gradients_tested) {
            // if not, kill the timer
            clearTimeout(timer);
        }
        gradients_tested = true;

        // we did another step
        steps_count++;
        // did we do too many steps?
        if (steps_count > steps_total) {
            // reset steps count
            steps_count = 0;
            // set new indexs
            currentIndex = set_next(currentIndex);
            nextIndex = set_next(nextIndex);
            // calc steps
            calc_steps();
        }
    }

    // initial step calc
    calc_steps();

    // go go go!
    timer = setInterval(updateGradient, interval_time);
}
// parallax
var wHeight = $(window).height();

function parallax() {
    var pHeight = $(this).outerHeight();
    var pMiddle = pHeight / 2;
    var wMiddle = wHeight / 2;
    var fromTop = $(this).offset().top;
    var scrolled = $(window).scrollTop();
    var speed = $(this).attr('data-parallax-speed');
    var rangeA = (fromTop - wHeight);
    var rangeB = (fromTop + pHeight);
    var rangeC = (fromTop - wHeight);
    var rangeD = (pMiddle + fromTop) - (wMiddle + (wMiddle / 2));

    if (rangeA < 0) {
        rangeA = 0;
        rangeB = wHeight
    }

    var percent = (scrolled - rangeA) / (rangeB - rangeA);
    percent = percent * 100;
    percent = percent * speed;
    percent = percent.toFixed(2);

    var animFromBottom = (scrolled - rangeC) / (rangeD - rangeC);
    animFromBottom = animFromBottom.toFixed(2);

    if (animFromBottom >= 1) {
        animFromBottom = 1;
    }

    $(this).css('background-position', 'center ' + percent + '%');
    $(this).find('.parallax-content').css('opacity', animFromBottom);
    $(this).find('.parallax-content').css('transform', 'scale(' + animFromBottom + ')');
}
// Get windowSize on the fly
function windowSize() {
    windowHeight = window.innerHeight ? window.innerHeight : $(window).height();
    windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
}

$(document).ready(function() {
    //variables
    // var tabPercent = new Array();

    // initialize tooltip bootstrap javascript
    // $('[data-toggle="tooltip"]').tooltip();
    //  $(window).on('resize', function() {
    //     windowSize();
    //  });

    $(window).on('load', scaleGallery());
    $(window).on('resize', scaleGallery);
    $(window).on('scroll', function() {
        //display pie chart on scroll by setting opacity to 1
        /* Check the location of each desired element */
        $('.chart').each(function() {

            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            if (bottom_of_window > bottom_of_object) {
                $(this).animate({
                    'opacity': '1',
                }, 500);
                if($(this).prop("checked") == ':checked') {} else {
                    $(this).data('easyPieChart').update();
                    $(this).data('easyPieChart').update($(this).data('easyPieChart').options.percent);
                    $(this).prop('checked', ':checked');
                }
            }
        });
    });

    // $('.chart').each(function(tabPercent) {
    //     tabPercent += $(this).data('easyPieChart');
    //     console.log(tabPercent);
    // });
    // $('.parallax').each(parallax);
    //
    // $(window).scroll(function(e) {
    //     $('.parallax').each(parallax);
    // });
    // Toggle left Nav Layout
    $('#toggle-sidebar-left-mobile').click(function() {
        $('#sidebar-left-mobile').removeClass('out');
    });
    $('#toggle-out-sidebar-left-mobile').click(function() {
        $('#sidebar-left-mobile').addClass('out');
    });

    // Toggle right Nav Layout
    $('#toggle-sidebar-right-mobile').click(function() {
        $('#l-second-nav-mobile').removeClass('outright');
    });
    $('#toggle-outright-sidebar-right-mobile').click(function() {
        $('#l-second-nav-mobile').addClass('outright');
    });

    // accordion nav
    $('.slideTrigger').children('a').click(function() {
        $('.slideToggle').slideUp('fast');
        $('.span-icon .octicon-chevron-right').css('transform', 'rotate(0deg)');
        $(this).parent().children('.slideToggle').slideDown('fast');
        $(this).parent().children('.span-icon').children('.octicon-chevron-right').css('transform', 'rotate(90deg)');
    });
    // set Gradients
    setGradient('gradient');
    setGradient('gradient2');
    setGradient('gradient3');
    setGradient('gradient4');
    setGradient('gradient5');

    // Pie chart Skills
    //TODO: create a unique object for better extension
    $('.chart-frontend').easyPieChart({
        // scaleColor: "#bbb",
        lineWidth: 20,
        lineCap: 'round',
        barColor: "#09b1cf",
        trackColor: "#bbb",
        size: 160,
        animate: 1000
    });

    $('.chart-backend').easyPieChart({
        // scaleColor: "#bbb",
        lineWidth: 20,
        lineCap: 'round',
        barColor: "#42cc7e",
        trackColor: "#bbb",
        size: 160,
        animate: 1000
    });

    $('.chart-infographie').easyPieChart({
        // scaleColor: "#bbb",
        lineWidth: 20,
        lineCap: 'round',
        barColor: "#cc4278",
        trackColor: "#bbb",
        size: 160,
        animate: 1000
    });

    $('.chart-other').easyPieChart({
        // scaleColor: "#bbb",
        lineWidth: 20,
        lineCap: 'round',
        barColor: "#da7f34",
        trackColor: "#bbb",
        size: 160,
        animate: 1000
    });

    $('.chart-cms').easyPieChart({
        // scaleColor: "#bbb",
        lineWidth: 20,
        lineCap: 'round',
        barColor: "#e7d536",
        trackColor: "#bbb",
        size: 160,
        animate: 1000
    });

    // TODO: create a unique function that take id without 'tablet' and 'mobile' tag and add them
    $('#about-me').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-about-me').offset().top - 40
        }, 1000);
    });
    $('#programmation').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-programmation').offset().top - 40
        }, 1000);
    });
    $('#infographie').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-infographie').offset().top - 40
        }, 1000);
    });
    $('#musique').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-musique').offset().top - 40
        }, 1000);
    });
    $('#competence').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-competence').offset().top - 40
        }, 1000);
    });

    // tablet
    $('#about-me-tablet').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-about-me').offset().top - 80
        }, 1000);
    });
    $('#programmation-tablet').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-programmation').offset().top - 80
        }, 1000);
    });
    $('#infographie-tablet').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-infographie').offset().top - 80
        }, 1000);
    });
    $('#musique-tablet').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-musique').offset().top - 80
        }, 1000);
    });
    $('#competence-tablet').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-competence').offset().top - 80
        }, 1000);
    });

    // tablet
    $('#about-me-mobile').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-about-me').offset().top - 40
        }, 1000);
        $('#sidebar-left-mobile').addClass('out');
    });
    $('#programmation-mobile').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-programmation').offset().top - 40
        }, 1000);
        $('#sidebar-left-mobile').addClass('out');
    });
    $('#infographie-mobile').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-infographie').offset().top - 40
        }, 1000);
        $('#sidebar-left-mobile').addClass('out');
    });
    $('#musique-mobile').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-musique').offset().top - 40
        }, 1000);
        $('#sidebar-left-mobile').addClass('out');
    });
    $('#competence-mobile').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#scroll-competence').offset().top - 40
        }, 1000);
        $('#sidebar-left-mobile').addClass('out');
    });

});
