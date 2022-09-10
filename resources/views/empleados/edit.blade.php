@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Editar Post'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('empleados.update') }}" class="form-horizontal">
          @csrf
          <div class="card ">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Empleado</h4>
              <p class="card-category">Ingresar datos del nuevo empleado</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Nombre Completo</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre completo"
                  value="{{ old('nombre', $empleado->nombre) }}" autocomplete="off" autofocus>
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Correo Electronico</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="email" placeholder="Ingrese el email"
                  value="{{ old('email', $empleado->email) }}" autocomplete="on" autofocus>
                </div>
                <div class="form-check form-check-radio">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="sexo" id="masculino" value="{{ old('sexo', $empleado->sexo) }}" >
                      Masculino
                      <span class="circle">
                          <span class="check"></span>
                      </span>
                  </label>
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="sexo" id="femenino" value="{{ old('sexo', $empleado->sexo) }}" >
                    Femenino
                    <span class="circle">
                        <span class="check"></span>
                    </span>
                </label>
              </div>  
              </div>
              <div class="form-group col-md-3">
                <label for="inputState">Area(*)</label>
                <select name="area_id" class="form-control" id="area_id">
                  <option selected>Choose...</option>
                  @foreach($areas AS $area)
                  <option value="{{ old('sexo',$area->id)  }}">{{ $area->nombre }}</option>
                  @endforeach
                </select>
                <label for="exampleFormControlTextarea1">Descripcion(*)</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="1" value="{{ old('descripcion', $empleado->sexo) }}"></textarea>
                
                
              </div>
              <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="boletin" value="1">
                    Desea resibir boletin informativo 
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                </label>
              </div>
                                   
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Desarrollador"> Desarrollador
                          <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Analista"> Analista
                          <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                        </label>
                      </div>
                      <div class="form-check form-check-inline disabled">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Tester" > Tester
                          <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                        </label>
                      </div>
                                  
               
              </div>
            </div>

            <!--End body-->

            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection