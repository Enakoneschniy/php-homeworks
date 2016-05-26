$(function(){
    $('.btn-primary').click(function(e){ //кнопка проверить
        e.preventDefault();
        var formData = $('.regular-form').serializeArray();
        $.ajax({
            url: "ajax.php",
            type: "post",
            dataType: "json",
            data: formData,
            success: function(response){
                console.log(response);
                if(response === "OK"){
                    alert('Текст соответсвует регулярному выражению');
                }else{
                    alert('Текст НЕ соответсвует регулярному выражению');
                }
            }
        });

    });
    $('.btn-success').click(function(z){ //кнопка применить
        z.preventDefault();
        var formData2 = $('.regular-form').serializeArray();
        $.ajax({
            url: "ajax2.php",
            type: "post",
            dataType: "json",
            data: formData2,
            success: function(response){
                    $("#ajaxAnswer").text(response);
            }
        });
        //$("#ajaxAnswer").load("ajax2.php",formData2,"json");
    });
});
