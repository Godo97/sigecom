<div class="form-group row">
    <label for="estatu" class="col-sm-2 col-form-label">Estatus</label>
    <div class="col-sm-8">
        <select class="form-control select" name="estatu" style="width: 100%;" placeholder="-- Seleccione --">
            <option selected disabled>-- Seleccione --</option>
            @foreach($estatus as $estatu)
            <option value="{{ $estatu->id }}" {{ (isset($estatu->id) || old('id'))}}> {{ $estatu->estatu }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="ci" class="col-sm-2 colform-label">Cédula de identidad</label>
    <div class="col-sm-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="far fa-address-card"></i>
                </span>
            </div>
            <input type="text" name="ci" class="form-control @error('ci') is-invalid @enderror" placeholder="xxxxxxxx" value="{{ old('ci') }}" autocomplete="off">
            <div class="invalid-feedback" role="alert">
                @error('ci')
                <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="usuario" class="col-sm-2 colform-label">Usuario</label>
    <div class="col-sm-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-user"></i>
                </span>
            </div>
            <input type="text" name="usuario" class="form-control @error('usuario') is-invalid @enderror" placeholder="bdtexxxxxx" value="{{ old('usuario') }}" autocomplete="off">
            <div class="invalid-feedback" role="alert">
                @error('usuario')
                <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="pnombre" class="col-sm-2 colform-label">Nombres</label>
    <div class="col-sm-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-grin"></i>
                </span>
            </div>
            <input type="text" name="pnombre" class="form-control @error('pnombre') is-invalid @enderror" value="{{ old('pnombre') }}" placeholder="Primer Nombre" autocomplete="off">
            <input type="text" name="snombre" class="form-control" placeholder="Segundo Nombre" value="{{ old('snombre') }}" autocomplete="off">
            <div class="invalid-feedback" role="alert">
                @error('pnombre')
                <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="papellido" class="col-sm-2 colform-label">Apellidos</label>
    <div class="col-sm-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-grin"></i>
                </span>
            </div>
            <input type="text" name="papellido" class="form-control @error('papellido') is-invalid @enderror" value="{{ old('papellido') }}" placeholder="Primer Apellido" autocomplete="off">
            <input type="text" name="sapellido" class="form-control" value="{{ old('sapellido') }}" placeholder="Segundo Apellido" autocomplete="off">
            <div class="invalid-feedback" role="alert">
                @error('papellido')
                <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="genero" class="col-sm-2 col-form-label">Genero</label>
    <div class="col-sm-8">
        <select class="form-control select" name="genero" style="width: 100%;">
            <option selected disabled>-- Seleccione --</option>
            @foreach($generos as $genero)
            <option value="{{ $genero->id }}" {{ (isset($genero->id) || old('id'))}}>{{ $genero->genero }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="foto" class="col-sm-2 colform-label">Foto</label>
    <div class="col-sm-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-camera"></i>
                </span>
            </div>
            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" value="{{ old('foto') }}">
            <div class="invalid-feedback" role="alert">
                @error('foto')
                <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="btn-group float-right">
        <input type="submit" value="Enviar" class="btn btn-sm btn-block btn-primary">
    </div>
</div>