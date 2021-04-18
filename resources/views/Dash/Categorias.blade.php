@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Agregar Categoria</h3>
    </div>
    <form>
        <div class="row">
            <div class="col-sm-6">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre categoria</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <label>Descripcion</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
        </div>
    </form>
</div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
    </form>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop