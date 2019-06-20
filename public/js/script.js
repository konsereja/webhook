
$( document ).ready(function() {
$('#ajax_form').on('click', '#btn',
        function(e){
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
            e.preventDefault();
            
            $.ajax({
                url:  $('#ajax_form').attr('action'),//url страницы (action_ajax_form.php)
                type: 'POST', //метод отправки
                dataType: 'html', //формат данных
                data: $('#ajax_form').serialize(), // Сеарилизуем объект
                success: function(data) { //Данные отправлены успешно
                    
                $('#result_form').html(data);
                    },
                    error: function(response) { // Данные не отправлены
                $('#result_form').html('Ошибка. Данные не отправлены.');
                    }
                   });
        }
    );
});
// function sendAjaxForm() {
// $.ajax({
// url:  $('#ajax_form').attr('action'),//url страницы (action_ajax_form.php)
// type: 'POST', //метод отправки
// dataType: 'html', //формат данных
// data: $('#ajax_form').serialize(), // Сеарилизуем объект
// success: function(data) { //Данные отправлены успешно
//     
// $('#result_form').html(data);
//     },
//     error: function(response) { // Данные не отправлены
// $('#result_form').html('Ошибка. Данные не отправлены.');
//     }
//    });
// }

