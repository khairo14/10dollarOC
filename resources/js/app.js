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

$(document).ready(function() {
    // Set the container height to match the tallest panel
    function setContainerHeight() {
        const heights = [
            $('.panel1').outerHeight(),
            $('.panel2').outerHeight(),
            $('.panel3').outerHeight()
        ];
        const maxHeight = Math.max(...heights);
        $('.3way-panel').css('height', maxHeight + 'px');
    }

    // Initialize on load and when window resizes
    setContainerHeight();
    $(window).resize(setContainerHeight);

    // Button click handlers
    $('.panel-btn-1').click(function(e) {
        e.preventDefault();
        // Slide panel1 in from left, others out
        $('.panel1').removeClass('-translate-x-full translate-x-full').addClass('translate-x-0');
        $('.panel2').removeClass('translate-x-0 -translate-x-full').addClass('translate-x-full');
        $('.panel3').removeClass('translate-x-0 -translate-x-full').addClass('translate-x-full');
        $('.panel-btn-1').parent().addClass('bg-yellow-600 text-white').removeClass('bg-white text-black');
        $('.panel-btn-2').parent().addClass('bg-white text-black').removeClass('bg-yellow-600 text-white');
        $('.panel-btn-3').parent().addClass('bg-white text-black').removeClass('bg-yellow-600 text-white');
    });

    $('.panel-btn-2').click(function(e) {
        e.preventDefault();
        // Slide panel2 to center, others out
        $('.panel1').removeClass('translate-x-0 translate-x-full').addClass('-translate-x-full');
        $('.panel2').removeClass('-translate-x-full translate-x-full').addClass('translate-x-0');
        $('.panel3').removeClass('translate-x-0 -translate-x-full').addClass('translate-x-full');
        $('.panel-btn-2').parent().addClass('bg-yellow-600 text-white').removeClass('bg-white text-black');
        $('.panel-btn-1').parent().addClass('bg-white text-black').removeClass('bg-yellow-600 text-white');
        $('.panel-btn-3').parent().addClass('bg-white text-black').removeClass('bg-yellow-600 text-white');
    });

    $('.panel-btn-3').click(function(e) {
        e.preventDefault();
        // Slide panel3 in from right, others out
        $('.panel1').removeClass('translate-x-0 -translate-x-full').addClass('-translate-x-full');
        $('.panel2').removeClass('translate-x-0 translate-x-full').addClass('-translate-x-full');
        $('.panel3').removeClass('-translate-x-full translate-x-full').addClass('translate-x-0');
        $('.panel-btn-3').parent().addClass('bg-yellow-600 text-white').removeClass('bg-white text-black');
        $('.panel-btn-2').parent().addClass('bg-white text-black').removeClass('bg-yellow-600 text-white');
        $('.panel-btn-1').parent().addClass('bg-white text-black').removeClass('bg-yellow-600 text-white');
    });
});

$(document).ready(function() {
    $('.faq-toggle').click(function() {
        // Toggle the current item
        const content = $(this).next('.faq-content');
        const arrow = $(this).find('.fa-caret-down');

        // Slide toggle the content
        content.slideToggle(300);

        // Rotate the arrow
        arrow.toggleClass('rotate-180');
        arrow.toggleClass('text-yellow-600');

        // Close other open items (optional)
        $(this).closest('.faq-item').siblings().find('.faq-content').slideUp(300);
        $(this).closest('.faq-item').siblings().find('.fa-caret-down').removeClass('rotate-180');
        $(this).closest('.faq-item').siblings().find('.fa-caret-down').removeClass('text-yellow-600');
    });
});
