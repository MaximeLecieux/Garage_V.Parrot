$(document).ready(function(){
    $.getJSON('App/lib/getSchedules.php', function (data){
        data.forEach(element => {
            $('#list-schedules').append('<li class="mb-2">'+element.day+' : '+element.morning+' , '+element.afternoon+'</li>')
            $('#day').prepend('<option value="'+element.day+'">'+element.day+'</option>') 
        });
    })
})