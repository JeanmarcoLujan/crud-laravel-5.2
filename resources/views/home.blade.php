@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Registro</div>

                <div class="panel-body">
                    <div>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="dni">DNI</label>
                                <input type="email" class="form-control" id="dni" name="dni" aria-describedby="emailHelp" placeholder="Documento de identidad">
                                
                            </div>
                            <div class="form-group">
                                <label for="name">Nombres y Apellidos</label>
                                <input type="email" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Nombres y apellidos">
                                
                            </div>
                            <div class="form-group">
                                <label for="rol">Rol</label>
                                <select  class="form-control" id="rol" name="rol">
                                  <option>Manager</option>
                                  <option>Desarrollador</option>
                                  <option>Analista</option>
                                  <option>Tester</option>
                                  <option>Asistente</option>
               
                              </select>
                          </div>
                          <button type="submit" class="btn btn-primary">Registrar</button>

                      </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Listado</div>

                <div class="panel-body">
                    <div>
                        <table class="table">
                            <tr>
                                <td>Id</td>
                                <td>DNI</td>
                                <td>Nombre apellidos</td>
                                <td>Rol</td>
                                <td>Opciones</td>   
                            </tr>
                            

                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
