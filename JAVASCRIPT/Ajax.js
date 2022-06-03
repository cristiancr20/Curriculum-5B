
//capturamos el id del button el cual se llma boton 
//y se realizara una accion de evento escucha para un click
//y esto llamara a un metodo o funcion con el nombre de traerDatos
document.querySelector('#boton').addEventListener('click', traerDatos);

//funcion traerDatos
function traerDatos(){
        //    console.log("correcto");

    //creamos una constante en la cual se almacenara un 
    //nuevo XMLHttpRequest
    const xhttp= new XMLHttpRequest();

    //la constante tendra un metodo open
    //y dentro tendra un metodo get,
    //esto abrira al json  
    xhttp.open('GET', '../PHP/Horario.json', true);

    //la constante enviara los datos con el metodo send
    xhttp.send();

    //con la propiendad onreadystatechange obtendremos una respuesta
    //dentro de la funcion preguntamos los estados
    //
    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){

            //parseamos los datos de texto y
            //los almacenamos en una variable datos
            let datos = JSON.parse(this.responseText);

            //una variable res para poder almacenar los datos
            //del json
            let res = document.querySelector('#res');
            //con innerHTML para que se pueda ver los datos 
            res.innerHTML= '';
            
            //recorremos los datos 
            for( let item of datos){
                
                //por cada ciclo agregamos la información 
                res.innerHTML += `
                <tr>
                    <td> ${item.lunes}</td>
                    <td> ${item.martes}</td>
                    <td> ${item.miercoles}</td>
                    <td> ${item.jueves}</td>
                    <td> ${item.viernes}</td>
                </tr>
                `
            }
        }
    }
}

function Buscar() {
    var tabla = document.getElementById('tablaEstudiantes');
    var busqueda = document.getElementById('txtBusqueda').value.toLowerCase();
    var cellsOfRow="";
    var found=false;
    var compareWith="";
    for (var i = 1; i < tabla.rows.length; i++) {
        cellsOfRow = tabla.rows[i].getElementsByTagName('td');
        found = false;
        for (var j = 0; j < cellsOfRow.length && !found; j++) { compareWith = cellsOfRow[j].innerHTML.toLowerCase(); if (busqueda.length == 0 || (compareWith.indexOf(busqueda) > -1))
            {
                found = true;
            }
        }
        if(found)
        {
            tabla.rows[i].style.display = '';
        } else {
            tabla.rows[i].style.display = 'none';
        }
    }
}