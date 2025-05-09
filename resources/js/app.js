import './bootstrap';
import $ from 'jquery';

// navi
$(document).ready(function(){
    $('.top-menu-drop').on('click', function () {
        $('.top-menu').stop(true, true).slideToggle(300); // 300ms toggle animation
    });

    $('.mid-menu-drop').on('click', function () {
        $('.mid-menu').stop(true, true).slideToggle(300); // 300ms toggle animation
    });
});

$(document).ready(function(){
    const words = ['Over 40,000+ 5-Star Course Reviews',
        'Easy to Navigate Website. Works on All Devices',
        'Entire Course in Video Format',
        'Rated 5-Star on Google, Facebook & Yelp',
        'Instant Final Exam Result. Includes SMS Alerts.',
        'A+ Accredited on BBB.',
        'Reliable Customer Service You can Count on!'];
    let index = 0;
    let isFlipped = false;

    setInterval(function () {
        const $rotate = $('.rotate');
        const $front = $rotate.find('.front');
        const $back = $rotate.find('.back');

        // Prepare next word
        index = (index + 1) % words.length;
        const nextWord = words[index];

        $rotate.css({
            'transition': 'transform 0.6s',
            'transform-style': 'preserve-3d',
            'display': 'inline-block',
            'position': 'relative',
            'vertical-align': 'baseline',
            'line-height': '1'
        });
        $front.css({
            'backface-visibility': 'hidden',
            'display': 'inline-block',
            'width': '100%',
            'transform': 'rotateX(0deg)',
            'vertical-align': 'baseline',
            'line-height': '1'
        });
        $back.css({
            'backface-visibility': 'hidden',
            'display': 'inline-block',
            'width': '100%',
            'transform': 'rotateX(180deg)',
            'vertical-align': 'baseline',
            'line-height': '1',
            'position': 'absolute',
            'top': '0',
            'left': '0'
        });

        // Update hidden side's text
        if (isFlipped) {
            $front.text(nextWord);
        } else {
            $back.text(nextWord);
        }

        // Trigger the flip
        $rotate.css('transform', `rotateX(${isFlipped ? 0 : 180}deg)`);

        // Toggle flip state
        isFlipped = !isFlipped;
    }, 2000);

});

