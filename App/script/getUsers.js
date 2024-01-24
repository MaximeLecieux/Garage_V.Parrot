$(document).ready(function(){
    $.getJSON('App/lib/getUsers.php', function (data){
        data.forEach(element => {
            $('#users').append('<tr><td>'+element.email+'</td><td>'+element.type+'</td></tr>')
            $('#idUser').append('<option value="'+element.idUser+'">'+element.email+'</option>')
        });
    })
})

