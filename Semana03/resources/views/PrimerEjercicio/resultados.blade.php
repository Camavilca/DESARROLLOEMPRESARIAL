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
          CINE - PAGO
        </div>
        <div class="card-body">
           <label for="">Cantidad de Gaseosas Conpradas: <span>{{$cantGas}}</span> </label>
           <br>
           <label for="">Monto a Pagar: <span>{{$montPagar}}</span> </label>
           <br>
           <label for="">Monto que a ingresado para pagar: <span>{{$monto}}</span> </label>
           <br>
           <label for="">Vuelto de su compra: <span>{{$desc}}</span> </label>
           <br>
           <label for="">Mensaje de falta de stock:  <span>{{$mensaje}}</span> </label>
           <br>
           <label for="">Mensaje de falta de dinero:  <span>{{$mensaje2}}</span> </label>
        </div>
      </div>
    </div>
</body>
</html>