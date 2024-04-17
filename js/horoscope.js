$(document).ready(function() {
    $('.horoscope a').click(function(e) {
        e.preventDefault(); // Prevent default link behavior
        
        // Get the href attribute of the clicked link
        var href = $(this).attr('href');
        
        // Make an AJAX request to fetch horoscope information
        $.ajax({
            url: href, // Use the href as the URL for the AJAX request
            type: 'GET',
            success: function(response) {
                $('#content').html(response); // Update the content of the div with the fetched information
            },
            error: function() {
                alert('Error fetching horoscope information.');
            }
        });
    });
});
