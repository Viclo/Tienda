@extends('plantilla.admin')

@section('titulo', 'Crear categoría')

@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Categorías</a></li>
  <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection

@section('contenido')

<div id="apiCategory">
  <form action="{{ route('admin.category.store') }}" method="POST">
    @csrf
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Administración de Categorías</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">            
        <h1>Crear categoría</h1>
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input v-model="nombre"
            @blur = "getCategory"
            @focus = "div_aparecer = false"
          class="form-control" type="text" name="nombre" id="nombre">
          <label for="slug">Slug</label>
          <input readonly v-model="generarSlug" class="form-control" type="text" name="slug" id="slug">
          <div v-if="div_aparecer" v-bind:class="div_clase_slug">
              @{{ div_mensajeslug }}
          </div>
          <br v-if="div_aparecer">
          <label for="description">Descripción</label>
          <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
        </div>
      </div>
      <div class="card-footer">
        <a class="btn btn-danger" href="{{ route('cancelar','admin.category.index') }}">Cancelar</a>
          <input
            :disable = "deshabilitar_boton == 1"
            type="submit" value="Guardar" class="btn btn-primary float-right">
      </div>     
    </div>
  </form>
</div>

@endsection