@extends('layouts.app')
@section('content')

  <div class="container">
    <h2>Area a ingresar </h2><br/>
    <form method="post" action="{{url('crudareas')}}" enctype="multipart/form-data">

      @csrf
      <div class="row">
        <div class="form-group col-lg-12">
          <label for="name">Area:</label>
          <input type="text" class="form-control" name="area" required>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-lg-12" style="margin-top:60px">
          <button type="submit" class="btn btn-success" style="margin-left:38px">Agregar</button>
        </div>
      </div>

    </form>

@endsection