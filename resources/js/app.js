import './bootstrap';
import $ from 'jquery';

// navi
$(document).ready(function(){
    $('.top-menu-drop').on('click', function () {
        $('.top-menu').stop(true, true).slideToggle(300); // 300ms toggle animation
    });
});

