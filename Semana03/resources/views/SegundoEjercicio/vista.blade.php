<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>

<body>
    <style>
        div.container{
        margin-top: 50px;
    }
    
    </style>
    <div class="container">
        <div class="card">
            <div class="card-header bg-info">
                HOTEL DE LARAVEL
            </div>
            <div class="card-body">
                <form action="hotel" method="post">
                    {{csrf_field()}}
                    <div class="form-grouop">
                      <div class="form-group">
                            <label for="habitacion">Tipo de Habitacion</label>
                            <select name="habitacion" id="habitacion">
                                <option value="simple">Simple</option>
                                <option value="doble">Doble</option>
                                <option value="matrimonial">Matrimonial</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tiempo">Tiempo de estancia</label>
                            <input type="text" class="form-control" name="tiempo" id="tiempo"  placeholder="Tiempo de estancia">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>