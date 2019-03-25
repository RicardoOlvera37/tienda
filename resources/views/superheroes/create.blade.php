@extends('superheroes.layout')

@section('content')

<h1 class="text-center mt-2">Agregar Doctor</h1>
<hr>

<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>


<div class="container">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Error Fatal!!!</strong> Olvidaste llenar todos los datos
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form action="{{ route('superheroes.store') }}" method="post">
    @csrf
     <div class="form-group ">
      <label class="control-label requiredField" for="Nombre">
       Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="Nombre"  name="Nombre" value="{{ old('Nombre') }}" placeholder="nombre del medico" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="poder">
       Especilidad
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="poder"  name="" value="{{ old('poder') }}" placeholder="Agrega la especilidad" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="creador">
       Telefono
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="creador"  name="creador" value="{{ old('creador') }}" placeholder="Telefono de contacto" type="text"/>
     </div>
     <div class="form-group ">



        
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Guardar
       </button>
       <a class="btn btn-success float-right" href="{{ route('superheroes.index') }}">Regresar</a>
      </div>
     </div>
    </form>
   </div>

    <div class="col-md-6">
        <img class="img-fluid" width="" src="{{ asset('images/simi.png')}}" alt>
        </div>

  </div>
 </div>
</div>

</div>
   
@endsection