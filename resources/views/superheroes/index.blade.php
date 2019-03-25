@extends('superheroes.layout')

@section('content')
    <h1 class="text-center">Hospital</h1>
    <hr>
    
    <div class="container">
        <a id="navbarDropdown" class="nav-link dropdown-toggle float-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="fas fa-user"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    <a class="btn btn-primary mb-3" href="{{ route('superheroes.create') }}">agregar doctor</a>
    <a class="btn btn-primary mb-3 float-right" href="{{ url('superheroes.show') }}">ver PDF</a>
    @if ($message = Session::get('success'))
    <div class="alert alert-succcess">
      <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-striped">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Telefono</th>
      <th class="text-center" colspan="2" scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($superheroes as $superheroe)
    <tr>
      <th scope="row">{{ $superheroe->id }}</th>
      <td>{{ $superheroe->nombre }}</td>
      <td>{{ $superheroe->poder }}</td>
      <td>{{ $superheroe->creador }}</td>
      <td><a class="btn btn-primary" href="{{ route('superheroes.edit', $superheroe->id) }}"><i class="fas fa-edit"></i></a></td>
      <td>
        <a class="btn btn-danger" data-toggle="modal" data-target="#confirmarBorrar-{{ $superheroe->id }}" ><i class="fas fa-trash"></i></a>
      </td>
    </tr>

    @include('superheroes.confirmarBorrar')

    @endforeach
    <tr>
  </tbody>
</table>
{{$superheroes->links()}}
</div>
@endsection