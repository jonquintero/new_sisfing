{{ csrf_field() }}

<div class="form-group">
    <label for="name">Nombre:</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Administracion" value="{{ old('name', $dependency->name) }}">
</div>

