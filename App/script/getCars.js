$(document).ready(function(){
    $.getJSON('App/lib/getCars.php', function (data){
        data.forEach(element => {
            $('.list-cars').prepend('<div class="col-lg-3 col-md-4 mx-2 my-2"><div class="card"><div class="card-header"><img class="card-img-top img-service" src="uploads/images/cars/'+element.first_img+'" alt="'+element.name+'"></div><div class="card-body "><h3 class="card-title center">'+element.name+'</h3><p class="card-text">'+element.model+'</p><ul class="list-group list-group-flush"><li class="list-group-item">'+element.year+'</li><li class="list-group-item">'+element.mileage+' km</li><li class="list-group-item">'+element.price+' €</li></ul><a href="#" class="btn mt-2">Détails</a></div></div></div>')
            $('#idCar').prepend('<option value="'+element.idCar+'">'+element.name+'</option>') 
        });
    })
})

