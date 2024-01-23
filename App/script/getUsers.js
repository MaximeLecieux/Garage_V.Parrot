$(document).ready(function(){
    $.getJSON('App/lib/getUsers.php', function (data){
        console.log(data)
        data.forEach(element => {
            $('#users').append('<tr><td>'+element.email+'</td><td>'+element.type+'</td></tr>')
        });
    })
})

