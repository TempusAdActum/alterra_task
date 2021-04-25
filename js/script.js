$(document).on('click', ".js_buttonAdd", function () {
    let name = $(this).parents('form').find('input[name=name]');
    let phone = $(this).parents('form').find('input[name=phone]')
    if (!name.val().length){
        alert('имя пустое. Конечно нужно делать проверку со стороны сервера, но этого пункта нет в задании');
        return;
    }
    if (!phone.val().length){
        alert('Телефон пуст. Конечно нужно делать проверку со стороны сервера, но этого пункта нет в задании');
        return;
    }
    $.ajax({
        'type': 'POST',
        'data': {
            'action': 'add',
            'name': name.val(),
            'phone': phone.val()
        },
        'dataType': 'JSON',
    }).done(function (data) {
        $('.contacts__list').append(data);
        name.val('');
        phone.val('');
    })
});

$(document).on('click', ".js_actionDelete", function () {
    let contact = $(this).parents('.contact__block');
    let id = contact.find('input[name=id]');
    $.ajax({
        'type': 'POST',
        'data': {
            'action': 'delete',
            'id': id.val(),
        },
        'dataType': 'JSON',
    }).done(
        contact.remove()
    )
});

$(document).ready(function () {
    $(".js_phone").mask("9 999 999 99 99");
});