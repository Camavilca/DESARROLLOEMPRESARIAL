<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="card">
        <div class="card-header bg-info">
          HOTEL - LARAVEL - PAGO
        </div>
        <div class="card-body">
           <label for="">TIPO DE HABITACION: <span>{{$habit}}</span> </label>
           <br>
           <label for="">DIAS QUE SE HOSPEDARAN: <span>{{$tiempo}}</span> </label>
           <br>
           <label for="">PRECIO POR DIA: <span>{{$costoHa}}</span> </label>
           <br>
           <label for="">MONTO TOTAL A PAGAR: <span>{{$monto}}</span> </label>
           <br>
           <label for="">NUMERO DE PERSONAS QUE PUEDEN USAR LA HABITACION:  <span>{{$personas}}</span> </label>
        </div>
      </div>
    </div>
</body>
</html>