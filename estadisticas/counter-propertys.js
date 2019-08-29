// Requiere que el archivo "conexion_api/token_api.js" se llame primero
// Requiere jquery

setTimeout(() => {
    // ************************Años de experiencia***************************
    var fecha = new Date();
    var ano = fecha.getFullYear();
   //  Colocar el año de creacion de la empresa
    const CREATECOMPANY = 2006;
    var total = ano - CREATECOMPANY;
   //  Se busca la clase counter-expence para colocarel valor de los años
    $('.counter-experence').append(total);


    // ******************************* Total de inmuebles disponibles **************
    $.ajax({
        url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/1/total/1/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
           type: 'GET',
           beforeSend: function (xhr) {
           xhr.setRequestHeader(
              'Authorization',
              'Basic ' + btoa('Authorization:'+TOKEN));
           },
           'dataType': "json",
           success:function(response)
           {
              //  Se busca la clase counter-propertys para colocarel valor de los inmuebles totales
              $('.counter-propertys').append(response.datosGrales.totalInmuebles);
           }
                       
       });
    //    ****************************************** Inmeubles en arriendo ***************************
       $.ajax({
        url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/1/total/1/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/1/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
           type: 'GET',
           beforeSend: function (xhr) {
           xhr.setRequestHeader(
              'Authorization',
              'Basic ' + btoa('Authorization:'+TOKEN));
           },
           'dataType': "json",
           success:function(response)
           {
              //  Se busca la clase counter-rent para colocarel valor de los inmuebles en arriendo 
              $('.counter-rent').append(response.datosGrales.totalInmuebles);
           }
                       
       });

    //  **********************************   Inmuebles en venta ***************************
       $.ajax({
        url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/1/total/1/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/5/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
           type: 'GET',
           beforeSend: function (xhr) {
           xhr.setRequestHeader(
              'Authorization',
              'Basic ' + btoa('Authorization:'+TOKEN));
           },
           'dataType': "json",
           success:function(response)
           {
              //  Se busca la clase counter-rent para colocarel valor de los inmuebles en venta
              $('.counter-sale').append(response.datosGrales.totalInmuebles);
           }
                       
       });


    //    ****************************************inmuebles en arriendo venta *************************
       $.ajax({
        url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/1/total/1/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/2/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
           type: 'GET',
           beforeSend: function (xhr) {
           xhr.setRequestHeader(
              'Authorization',
              'Basic ' + btoa('Authorization:'+TOKEN));
           },
           'dataType': "json",
           success:function(response)
           {
              
            //  Se busca la clase counter-sale-rent para colocarel valor de los inmuebles en venta
              $('.counter-sale-rent').append(response.datosGrales.totalInmuebles);
           }
                       
       });
}, 500);