$('form').submit(function(e) {
    e.preventDefault();
    const data = $(this).serialize();
    $.ajax({
        method: 'POST',
        url: './sendForm.php',
        data: data,
        success: function() {
            $('input[type=text]').val('');
            $('input[type=email]').val('');
            $('form span:last-child').css('color', 'black');
        }
    });
});