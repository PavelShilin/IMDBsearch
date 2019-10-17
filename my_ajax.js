function send()
{
//Получаем параметры
var text = $('#text').val()
  // Отсылаем паметры
       $.ajax({
                type: "POST",
                url: "/result.php",
                data: "text="+text,
                //При удачном завершение запроса - выводим то, что нам вернул PHP
                success: function(html) {
 //предварительно очищаем нужный элемент страницы
                        $("#response").empty();
//и выводим ответ php скрипта
                        $("#response").append(html);
                }
        });
}