function obtenerlistausuarios(){
var listausuarios = JSON.parse(localStorage.getItem('listausuariosls'));

if(listausuarios == null){
    listausuarios =
    [
        ['1','Pabs','monestal','pablomonestel@gmail.com','1pablo9',
        '1987-10-12','1'],
        ['2','olman','santamaria','olman@gmail.com','olman9',
        '1993-04-17','2']
    ]
}
    return listausuarios;

}

function validarcredenciales(pcorreo , pcontrasenna){
    var listausuarios = obtenerlistausuarios();
    var bAcceso = false;

    for(var i = 0; i < listausuarios.length; i++){
        if(pcorreo == listausuarios[i][3] && pcontrasenna == listausuarios[i][4]){
            bAcceso = true;
            sessionStorage.setItem('usuarioactivo',listausuarios[i][1] + ' ' + listausuarios[i][2]);
            sessionStorage.setItem('rolusuarioactivo',listausuarios[i][6]);    
        }
    }
    return bAcceso;
}