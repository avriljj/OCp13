//hamburger for nav menu//

$(document).ready(function() {

    $('.open-icon').click(function () {
        console.log(' open icon clicked');
        $('.open-icon').hide(); 
        $('.close-icon').show(); 
        $('.nav-container').toggle();
        const navContainerWidth = $(".nav-container").width();
        $(".content-front-page").css("width", `calc(100vw - ${navContainerWidth}px)`);
        
    });
    $('.close-icon').click(function () {
        console.log(' close icon clicked');
        $('.open-icon').show(); 
        $('.close-icon').hide(); 
        $('.nav-container').toggle();
        $(".content-front-page").css("width", `100vw`);

    });

    $(window).resize(function() {
        // Check if the window size is greater than 800px
        if ($(window).width() > 800) {
            $(".nav-container").show();
            $(".nav-container").css('z-index', '1');
            const navContainerWidth = $(".nav-container").width();
            $(".content-front-page").css("width", `calc(100vw - ${navContainerWidth}px)`);

        } 
        else if ($(window).width() < 800) {
            $('.open-icon').show(); 
            $('.close-icon').hide(); 
            $(".nav-container").hide();
            $(".nav-container").css('z-index', '0');
            $(".content-front-page").css("width", `100vw`);
        }
    });
});

//scroll to top button//
$(document).ready(function () {
    var scrollToTopBtn = $('#scroll-to-top');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 20) {
            scrollToTopBtn.show();
        } else {
            scrollToTopBtn.hide();
        }
    });

    scrollToTopBtn.click(function () {
        $('body,html').animate({ scrollTop: 0 }, 500);
    });
});


//dyanmic span change text//
$(document).ready(function() {
    var wordsArray = ["Développeuse front end", "Développeuse IOS", "Passionée de technologie", "Développeuse Wordpress"];
    var index = 0;
  
    setInterval(function() {
      // Change the content of the span
        $('#dynamicSpan')
            .text(wordsArray[index])
            .animate({ fontSize: '1.2em' }, 500)
            .animate({ fontSize: '1em' }, 500)
            .animate({ fontSize: '1.2em' }, 500)
            .animate({ fontSize: '1em' }, 500);
  
      // Increment the index for the next word
      index = (index + 1) % wordsArray.length;
    }, 2000); // 2000 milliseconds = 2 seconds
});


// // filters // load all  in filters //
function loadAll() {
    $(document).ready(function ($) {
        const ajaxurl = $('#category-filter').data('ajaxurl');
        $.ajax({
            method: 'POST',
            url: ajaxurl,
            data: {
                action: 'loadAll',
            },
            success: function (data) {
            

                $('.projets-content').html(data);
            }
        });
    })
        
}
loadAll();


// filter by languages
$(document).ready(function ($) {
    const ajaxurl = $('#category-filter').data('ajaxurl');
    $('#category-filter a').on('click', function (e) {
        e.preventDefault();
        var category = $(this).data('category');
        
        console.log('clicked on cat filters js');
        if (category == 'all') {
            loadAll();
            console.log('all log');
        } else {
            $.ajax({
                method: 'POST',
                url: ajaxurl,
                data: {
                    action: 'filter_posts_by_category',
                    category: category
                },
                success: function (data) {
                    $('.projets-content').html(data);
                    
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('AJAX request failed: ' + textStatus, errorThrown);
                }
            });
        }
        
    });
});

//filter by cms//

$(document).ready(function ($) {
    const ajaxurl = $('#category-filter').data('ajaxurl');
    $('#category-filter a').on('click', function (e) {
        e.preventDefault();
        var category = $(this).data('category');
        
        console.log('clicked on cat filters js');
        if (category == 'all') {
            loadAll();
            console.log('all log');
        } else {
            $.ajax({
                method: 'POST',
                url: ajaxurl,
                data: {
                    action: 'filter_posts_by_cms',
                    category: category
                },
                success: function (data) {
                    //console.log(data);
                    $('.projets-content').html(data);
                    
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('AJAX request failed: ' + textStatus, errorThrown);
                }
            });
        }
        
    });
});

// scroll to the about section hash //

$(document).ready(function () {
    // Add smooth scroll to the anchor link
    $("#scroll-down-link").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800);
        }
    });
});

// scroll to sections from nav //

$(document).ready(function() {
    $('a[href*="#"]').on('click', function(e) {
        e.preventDefault();

        var target = $(this.hash);

        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 700);
        }
    });
});


//open pdf file//
$(document).ready(function ($) {
    // Function to open the PDF file when the button is clicked
    function openPdf() {
        // Replace "cv.pdf" with the actual name of your PDF file
        var pdfFile = "/OCWPformation/p13/wordpress/wp-content/themes/my-theme/assets/cv.pdf";

        // Open the PDF file in a new tab/window
        window.open(pdfFile, '_blank');
    }

    // Attach the click event to the button using jQuery
    $("#openPdfButton").on("click", openPdf);
});

//open email button//

$(document).ready(function () {
    // Get the button element
    var openEmailButton = $('#openEmailButton');

    // Add a click event listener to the button
    openEmailButton.click(function () {
        // Replace 'email@example.com' with the recipient email address
        var recipientEmail = 'jinzhaocnfr@gmail.com';

        // Replace 'Subject' with the desired subject for the email
        var emailSubject = 'Subject';

        // Replace 'Body' with the desired body text for the email
        var emailBody = 'Body';

        // Construct the mailto URL
        var mailtoUrl = 'mailto:' + encodeURIComponent(recipientEmail) +
            '?subject=' + encodeURIComponent(emailSubject) +
            '&body=' + encodeURIComponent(emailBody);

        
        // Create a hidden <a> element with the mailto link
        var mailtoLink = $('<a/>', {
            href: mailtoUrl,
            style: 'display:none'
        });

        // Append the <a> element to the document
        $('body').append(mailtoLink);

        // Trigger a click on the hidden <a> element
        mailtoLink[0].click();

        // Remove the <a> element from the document
        mailtoLink.remove();
    });
});




