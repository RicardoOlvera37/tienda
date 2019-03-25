<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Listado</title>
</head>
<body>
    <div class="row mb-2">
        <h1>Listado de Doctores</h1>
         <img class="float-right" src="{{ asset('images/j.png') }}" width="70px" alt="">   
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Especiliadad</th>
          <th scope="col">Telefono</th>
        </tr>
      </thead>
      <tbody>
        @foreach($superheroes as $superheroe)
        <tr>
          <th scope="row">{{ $superheroe->id }}</th>
          <td>{{ $superheroe->nombre }}</td>
          <td>{{ $superheroe->poder }}</td>
          <td>{{ $superheroe->creador }}</td>
        </tr>    
        @endforeach
        <tr>
      </tbody>
    </table>
</body>
</html>