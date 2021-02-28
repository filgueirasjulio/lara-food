@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $category->name ?? old('name') }}">
</div>
<div class="form-group">
    <label>Descrição:</label>
    <textarea name="description" cols="30" rows="5" class="form-control">{{ $category->name ?? old('name') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>