<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $page = 'Inicio';
    include('layout/archivosfooter.php');?>

    <script>
    $.ajax({
    url: 'http://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/9',
	type: 'GET',
	beforeSend: function (xhr) {
	xhr.setRequestHeader(
	   'Authorization',
	   'Basic ' + btoa('Authorization:'+TOKEN));
	},
	'dataType': "json",
	success:function(response)
	{
        console.log('Inmuebles Destacados');
       console.log(response);
       console.log(response.length);
	}
				
});
    </script>
</body>
</html>