// Инициализируем асинхронный HTTP GET запрос
var xhr = new XMLHttpRequest();
xhr.open('get', 'send-ajax-data.php');
// Указываем функцию-обработчик, которая выполнится после выполнения
// запроса
xhr.onreadystatechange = function () {
    var DONE = 4; // readyState 4 означает что запрос выполнился.
    var OK = 200; // код HTTP ответа 200 означает успешное выполнение
    // запроса.
    if (xhr.readyState === DONE) {
        if (xhr.status === OK) {
            console.log(xhr.responseText); // 'This is the returned
            // text.'
        } else {
            console.log('Error: ' + xhr.status); // Выполнится в случае
            // возникновения ошибки
        }
    }
};
// Отправляем запрос к send-ajax-data.php
xhr.send(null);


$.get('send-ajax-data.php')
    .done(function(data) {
        console.log(data);
    })
    .fail(function(data) {
        console.log('Error: ' + data);
    });
