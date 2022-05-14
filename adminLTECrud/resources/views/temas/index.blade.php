<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <button type="button" class="btn btn-primary"><a class="text-white text-decoration-none fw-bolder" href="{{route('temas.create')}}">AGREGAR TEMAS</a></button>
    <table class="table table-dark">
  <thead >
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Categoría</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($temas as $tema)
        <tr class="table-active"> 
        <td>{{$tema->id}}</td>
        <td>{{$tema->nombre}}</td>
        <td>{{$tema->categoria}}</td>
        <td>
          <a href="{{route('temas.edit',$tema->id)}}">Editar</a>
        </td>
        <td>{{$tema->id}}</td>
        </tr>
         
        
    @endforeach
  </tbody>
</table>
</body>
</html>