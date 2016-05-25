$("#check").click(function(e){
	e.preventDefault();

    $.ajax({
        url: 'getcheck.php',
        type: 'POST',
        //dataType: 'json',
        data: {
            button: 'check',
            pattern: $('#pattern').val(),
            text: $('#text').val()
        },
        success: function( Status ){

            alert(Status);

        },
        error: function(Status){

            console.log('ОШИБКИ AJAX запроса: ' + Status );
            return false;
        }
    });
});

$("#apply").click(function(e){
    e.preventDefault();

    $.ajax({
        url: 'getcheck.php',
        type: 'POST',
        data: {
            button: 'apply',
            pattern: $('#pattern').val(),
            text: $('#text').val()
        },
        success: function( Status ){

            console.log(Status);
            $("#mydiv").html(Status);

        },
        error: function(Status){

            console.log('ОШИБКИ AJAX запроса: ' + Status );
            return false;
        }
    });
});
