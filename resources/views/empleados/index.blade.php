@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Posts'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Empleados</h4>
            <p class="card-category">Lista de empleados registrados en la base de datos</p>
          </div>
          @if(Session::has('flash_message'))
  <div class="alert alert-success {{ Session::has('penting') ? 'alert-important' : '' }}">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('flash_message') }}
  </div>
@endif
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                @can('post_create')
                <a href="{{ route('empleados.create') }}" class="btn btn-sm btn-facebook">Añadir empleado</a>
                @endcan
              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  
                  <th><i class="fa-solid fa-person"></i> Nombre </th>
                  <th><i class="fa-solid fa-envelope"></i> Email </th>
                  <th><i class="fa-solid fa-children"></i></i> Sexo</th>
                  <th><i class="fa-solid fa-building-shield"></i></i> Area </th>
                  <th><i class="fa-solid fa-file-shield"></i></i> Boletin</th>
                  <th class="text-right"> Acciones </th>
                </thead>
                <tbody>
                  @forelse ($empleados as $empleado)
                  <tr>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->email }}</td>
                    <td>{{ $empleado->sexo }}</td>
                    <td>{{ $empleado->area->nombre }}</td>
                    <td>
                      @if($empleado->boletin ==0)
                    
                        No
                      
                      @else
                       Si
                      
                      @endif
                    
                    </td>
                    
                    <td class="td-actions text-right">
                    
                    @can('post_edit')
                      <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                    @endcan
                    @can('post_destroy')
                      <form action="{{ route('empleados.destroy', $empleado->id) }}" method="post"
                        onsubmit="return confirm('Esta seguro que quiere elminar a este empleado')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>
                      @endcan
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Sin registros.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              {{-- {{ $users->links() }} --}}
            </div>
          </div>
          <!--Footer-->
          <div class="card-footer mr-auto">
            {{ $empleados->links() }}
          </div>
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
