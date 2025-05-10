import './bootstrap';
import '../css/app.css';
import $, { data } from 'jquery';

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

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

// registration
$(document).ready(function() {
    $('.register').on('click', function(e) {
        const location = $('#location').val();
        const course = $('#course').val();

        if (location && course <= 0 || location <= 0 || course <= 0) {
            e.preventDefault(); // Prevent form submission
            $('#error-message').text('Please select both location and course').show();
        }
        else {
            $('#error-message').hide();
            window.location.href ='/user';
        }
    });
});

// tooltip
$(document).ready(function() {
    // Tooltip for "What's this?"
    $('[class*="text-blue-500"]').hover(function(e) {
        const tooltip = $('#tooltip');
        tooltip.removeClass('hidden').css({
            top: e.pageY + 10,
            left: e.pageX + 10
        });
    }, function() {
        $('#tooltip').addClass('hidden');
    });

    $('.e-tooltip').hover(function(e) {
        const etooltip = $('#e-tooltip');
        etooltip.removeClass('hidden').css({
            top: e.pageY + 10,
            left: e.pageX + 10
        });
    }, function() {
        $('#e-tooltip').addClass('hidden');
    });

    $('.m-tooltip').hover(function(e) {
        const etooltip = $('#m-tooltip');
        etooltip.removeClass('hidden').css({
            top: e.pageY + 10,
            left: e.pageX + 10
        });
    }, function() {
        $('#m-tooltip').addClass('hidden');
    });

    $('.p-tooltip').hover(function(e) {
        const etooltip = $('#p-tooltip');
        etooltip.removeClass('hidden').css({
            top: e.pageY + 10,
            left: e.pageX + 10
        });
    }, function() {
        $('#p-tooltip').addClass('hidden');
    });

    $('#phone').on('input', function(e) {
        // Remove all non-digit characters
        this.value = this.value.replace(/[^0-9]/g, '');

        // Optional: Format as (123) 456-7890
        if (this.value.length > 3 && this.value.length <= 6) {
            this.value = `(${this.value.slice(0, 3)}) ${this.value.slice(3)}`;
        } else if (this.value.length > 6) {
            this.value = `(${this.value.slice(0, 3)}) ${this.value.slice(3, 6)}-${this.value.slice(6, 10)}`;
        }
    });
});

// Password validation
// Password confirmation validation
$(document).ready(function() {
    $('#password_confirmation').on('keyup', function() {
        if ($(this).val() !== $('#password').val()) {
            $(this).addClass('border-red-500').removeClass('border-gray-300');
        } else {
            $(this).removeClass('border-red-500').addClass('border-gray-300');
        }
    });

    // Form submission
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault();

    // Validate passwords match
        if ($('#password').val() !== $('#password_confirmation').val()) {
            alert('Passwords do not match!');
            return;
        }

    // Validate terms checkbox
        if (!$('#terms').is(':checked')) {
            alert('You must accept the terms and conditions');
            return;
        }

    // Submit form via AJAX or proceed
        $.ajax({
            url: '/user-registration',
            type: 'POST',
            dataType: 'json',
            data: {
                first_name: $('#first_name').val(),
                last_name: $('#last_name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                password: $('#password').val(),
                password_confirmation: $('#password_confirmation').val(),
                address_line_1: $('#address').val(),
                city: $('#city').val(),
                state: $('#state').val(),
                zip_code: $('#zip').val(),
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log('Success:', response);
                if (response.message) {
                    console.log(response.user);
                    alert(response.message);
                }
                // Redirect or show success message
                window.location.href = '/payment';
            },
            error: function(xhr, status, error) {
                console.group('Registration Error');
                console.log('Status:', xhr.status);
                console.log('Status Text:', xhr.statusText);

                if (xhr.status === 422) {
                    // Laravel validation errors
                    const errors = xhr.responseJSON.errors;
                    console.log('Validation Errors:', errors);

                    // Display errors to user
                    let errorMessages = [];
                    $.each(errors, function(field, messages) {
                        errorMessages.push(messages.join('\n'));
                    });
                    alert('Please fix the following errors:\n\n' + errorMessages.join('\n'));
                } else {
                    console.log('Error:', error.message);
                    alert('An error occurred. Please try again later.');
                }
                console.groupEnd();
            }
        });
    });
});

// login
$(document).ready(function() {
    $('.login_email').on('click', function(e) {
        e.preventDefault();

        // Validate form fields
        if ($('#email').val() === '' || $('#password').val() === '') {
            alert('Please fill in all fields');
            return;
        }

        // Submit form via AJAX
        $.ajax({
            url: '/user-login',
            type: 'POST',
            dataType: 'json',
            data: {
                email: $('#email').val(),
                password: $('#password').val(),
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log('Success:', response);
                if (response.message) {
                    alert(response.message);
                }
                // Redirect or show success message
                window.location.href = '/payment';
            },
            error: function(xhr, status, error) {
                console.group('Login Error');
                console.log('Status:', xhr.status);
                console.log('Status Text:', xhr.statusText);

                if (xhr.status === 422) {
                    // Laravel validation errors
                    const errors = xhr.responseJSON.errors;
                    console.log('Validation Errors:', errors);

                    // Display errors to user
                    let errorMessages = [];
                    $.each(errors, function(field, messages) {
                        errorMessages.push(messages.join('\n'));
                    });
                    alert('Please fix the following errors:\n\n' + errorMessages.join('\n'));
                } else {
                    console.log('Error:', error.message);
                    alert('An error occurred. Please try again later.');
                }
                console.groupEnd();
            }
        });
    });
});
// logout
$(document).ready(function() {
    $('.logout').on('click', function(e) {
        e.preventDefault();

        // Submit form via AJAX
        $.ajax({
            url: '/user-logout',
            type: 'POST',
            dataType: 'json',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log('Success:', response);
                if (response.message) {
                    alert(response.message);
                }
                // Redirect or show success message
                window.location.href = '/';
            },
            error: function(xhr, status, error) {
                console.group('Logout Error');
                console.log('Status:', xhr.status);
                console.log('Status Text:', xhr.statusText);

                if (xhr.status === 422) {
                    // Laravel validation errors
                    const errors = xhr.responseJSON.errors;
                    console.log('Validation Errors:', errors);

                    // Display errors to user
                    let errorMessages = [];
                    $.each(errors, function(field, messages) {
                        errorMessages.push(messages.join('\n'));
                    });
                    alert('Please fix the following errors:\n\n' + errorMessages.join('\n'));
                } else {
                    console.log('Error:', error.message);
                    alert('An error occurred. Please try again later.');
                }
                console.groupEnd();
            }
        });
    });
});
// payment
$(document).ready(function() {
    // Base price
    const basePrice = 10.00;
    let deliveryPrice = 0.00;
    let processingPrice = 19.95;

    // Calculate total function
    function calculateTotal() {
        const total = basePrice + deliveryPrice + processingPrice;
        $('#totalAmount').text('$' + total.toFixed(2));
    }

    // Delivery method change
    $('input[name="delivery_method"]').change(function() {
        deliveryPrice = parseFloat($(this).data('price'));
        calculateTotal();
    });

    // DOT Processing change
    $('input[name="dot_processing"]').change(function() {
        processingPrice = parseFloat($(this).data('price'));
        $('#dotProcessingFee span:last').text('$' + processingPrice.toFixed(2));
        calculateTotal();
    });

    // Edit billing info button
    $('#editBilling').click(function() {
        $('input[name="name"], input[name="email"], input[name="address"], input[name="city"], input[name="state"], input[name="zip"], input[name="phone"]').prop('readonly', false);
        $(this).text('Cancel Edit').removeClass('bg-gray-500').addClass('bg-red-500');

        // Toggle between edit and cancel
        if ($(this).data('editing')) {
            $('input[name="name"], input[name="email"], input[name="address"], input[name="city"], input[name="state"], input[name="zip"], input[name="phone"]').prop('readonly', true);
            $(this).text('Edit Billing Info').removeClass('bg-red-500').addClass('bg-gray-500');
            $(this).data('editing', false);
            $('#name').focus();
        } else {
            $(this).data('editing', true);
        }
    });

    // Format card number
    $('#cardNumber').on('input', function() {
        let value = $(this).val().replace(/\s+/g, '');
        if (value.length > 0) {
            value = value.match(new RegExp('.{1,4}', 'g')).join(' ');
        }
        $(this).val(value);
    });

    // Format expiration date
    $('#expiryDate').on('input', function() {
        let value = $(this).val().replace(/\D/g, '');
        if (value.length > 2) {
            value = value.substring(0, 2) + '/' + value.substring(2, 4);
        }
        $(this).val(value);
    });
});
