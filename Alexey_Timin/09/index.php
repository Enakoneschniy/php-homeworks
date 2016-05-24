<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">



<script src="js/jquery-2.2.3.min.js"></script>

<script type="text/javascript" language="javascript">
    function AjaxFormRequest(result_id,form_id,url) {
        jQuery.ajax({
            url:     'result.php',
            type:     "POST",
            dataType: "html",
            data: jQuery("#"+form_id).serialize(),
            success: function(response) {
                document.getElementById(result_id).innerHTML = response;
            },
            error: function(response) {
                document.getElementById(result_id).innerHTML = "Ошибка при отправке формы";
            }
        });
    }
    function AjaxFormRequest2(result_id,form_id,url) {
        jQuery.ajax({
            url:     'result2.php',
            type:     "POST",
            dataType: "html",
            data: jQuery("#"+form_id).serialize(),
            success: function(response) {
                document.getElementById(result_id).innerHTML = response;
            },
            error: function(response) {
                document.getElementById(result_id).innerHTML = "Ошибка при отправке формы";
            }
        });
    }
    jQuery(document).ready(function($){
        $('#clickMe').click(function(){
            $('.modalWindow').fadeIn('slow');
        });

        $('.modalWindow').click(function(){
            $(this).fadeOut('slow');
        });
    });
    jQuery(document).ready(function($){
        $('#clickMe2').click(function(){
            $('.modalWindow').fadeIn('slow');
        });

        $('.modalWindow').click(function(){
            $(this).fadeOut('slow');
        });
    });
</script>
</head>
<body>

        <br/><br/>
        <form method="post" action="" id="form_id">
           <p> <label for="regul">регул.выражение</label>
            <input type="text" name="regul"><br/></p>
            <p> <label for="prtext">произвольный текст</label>
            <textarea type="text" name="prtext"></textarea><br/></p>
            <input type="button" id="clickMe" value="Отправить" onclick="AjaxFormRequest('result_div_id', 'form_id', 'result.php')"><br><br>
            <input type="button" id="clickMe2" value="Применить" onclick="AjaxFormRequest2('result_div_id', 'form_id', 'result2.php')"><br><br>
        </form>
        <div class="modalWindow" id="result_div_id"></div>
</body>
</html>


