require('./bootstrap');



$(document).ready(function () {
    
    var container = $('.student');
    var filter = $('#filter'),
    apiUrl = window.location.protocol + '://' + window.location.host + '/api/students/genders';   

    var source = $('#student-template').html();
    var template = Handlebars.compile(source);



    filter.on('change', function () {
        var gender = $(this).val();

        $.ajax({
            url: apiUrl,
            method: 'POST',
            data: {
                filter: gender
            }
        })
        .done(function(res){
            if (res.response.length > 0 ) {

                for (var i = 0; i < res.response.length; i++) {
                    var item = res.response[i];

                    container.html('');

                    var context = {
                        slug: item.slug,
                        img: item.img,
                        nome: item.nome,
                        eta: item.eta,
                        assunzione: (item.genere == 'm') ? 'Assunto' : 'Assunta',
                        azienda: item.azienda,
                        ruolo: item.ruolo,
                        descrizione: item.descrizione
                    }

                    var output = template(context);
                    container.append(output);
                }

            } else {
                console.log('Error');
                        
            }
            
        })
        .fail(function(){
                    
        })
    })


})

    

