$(document).ready(function(){
    $.getJSON('App/lib/getServices.php', function (data){
        data.forEach(element => {
            $('.services').append('<div class="col-lg-3 col-md-4 mx-2 my-2"><div class="card"><div class="card-header"><img class="card-img-top img-service" src="uploads/images/services/'+element.img+'" alt="'+element.name+'"></div><div class="card-body "><h3 class="card-title center">'+element.name+'</h3><p class="card-text">'+element.description+'</p></div></div></div>')
            $('#idService').append('<option value="'+element.idService+'">'+element.name+'</option>')
        });
    })
})


