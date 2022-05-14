<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
<form
  @if($tema->id)
  action="{{route('temas.update',$tema->id)}}" @else action="{{route('temas.store')}}" @endif method="POST"> 
  @if($tema->id) @method('PUT')
  @endif
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">Nombre del Tema</label>
    <input type="text" name="nombre" value="{{old('nombre',$tema->nombre)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Categoría del Tema</label>
    <input type="text"  name="categoria" value="{{old('categoria',$tema->categoria)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
  
  <button type="submit" class="btn btn-primary fw-bolder text-white">GUARDAR</button>
</form>
</body>
</html>