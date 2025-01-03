$(document).ready(function(){ 
    llenarSelectCandidato();
    mostrarTodo();
    //----------------------Eventos-----------------
    $(document).on('click', '#btn_registrar', function (event) {
        event.preventDefault();
        let datos = {
            nombre: $('#nombre').val(), 
            ficha: $('#ficha').val(),
            programa: $('#programa').val(),
            operacion: 'registrar'
        };
        $.post('../Controlador/votaciones.controlador.php', datos, function (respuesta) {
            //let datos = JSON.parse(respuesta);
            alert(respuesta);    
            limpiar();
        })        
        
    });

    $(document).on('click', '#btn_votar', function (event) {
        event.preventDefault();
        const datos = {
            id: $('#candidato').val(),
            mesa: $('#mesa').val(),
            operacion: 'votar'
        };
        $.post('../Controlador/votaciones.controlador.php', datos, function (respuesta) {
            alert(respuesta);  
            $(location).attr('href','votos.php');
        })
        
    });

    $(document).on('click', '#btn_filtrar', function (event) {
        event.preventDefault();
        const datos = {
            id: $('#candidato').val(),
            mesa: $('#mesa').val(),
            operacion: 'buscar'
        };
        if ($('#candidato').val() != '') {
            $.post('../Controlador/votaciones.controlador.php', datos, function (respuesta) {
                console.log(respuesta);
                let datos = JSON.parse(respuesta);
                let  candidatos=0,nombre='';
                    datos.forEach(dato => {
                        candidatos++;
                        nombre = dato.nombreCandidato;
                    })        
                $('#resultado').html(`<center><h1> Total de votos de ${nombre} es de ${candidatos}</h1><center>`);	
            })
        }
    });
    //---------------------------Funciones------------------------------
    function llenarSelectCandidato(){        
        $.post('../Controlador/votaciones.controlador.php', {operacion: 'llenarSelectCandidatos'}, function (respuesta) {
            let datos = JSON.parse(respuesta);
            let option = '';
            datos.forEach(dato => {
                option += `
                    <option value="${dato.idCandidato}">${dato.nombreCandidato}</option>
                `;              
            }); 
            $('#candidato').html(option);
        })
    }

    function mostrarTodo(){        
        $.post('../Controlador/votaciones.controlador.php', {operacion: 'mostrar'}, function (respuesta) {
            let datos = JSON.parse(respuesta);
            let candidatos=0, enBlanco=0;
                datos.forEach(dato => {
                    candidatos++;
                    if (dato.idCandidato == 8) {
                        enBlanco++;
                    }
                })            
            $('#resultado').html(`<center><h1> Total de votos es de ${candidatos}</h1><h1> Total de votos en blanco: ${enBlanco}</h1><center>`);
        })
    }

    function limpiar() {
        $('#nombre').val(""); 
        $('#ficha').val("");
        $('#programa').val(""); 
    }

});
