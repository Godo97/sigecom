<div class="form-group row">
    <label for="estatu" class="col-sm-2 col-form-label">Estatus</label>
    <div class="col-sm-8">
        <select class="form-control select" name="estatu" style="width: 100%;">
            <option value="1" selected="selected">Activo</option>
            <option value="0">Inactivo</option>
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
            <input type="text" name="ci" class="form-control @error('ci') is-invalid @enderror" placeholder="xxxxxxxx" autocomplete="off">
            <div class="invalid-feedback">
                @error('ci')
                <h6>{{ $message }}</h6>
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
            <input type="text" name="usuario" class="form-control @error('usuario') is-invalid @enderror" placeholder="bdtexxxxxx" autocomplete="off">
            <div class="invalid-feedback">
                @error('usuario')
                <h6>{{ $message }}</h6>
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
            <input type="text" name="pnombre" class="form-control @error('pnombre') is-invalid @enderror" placeholder="Primer Nombre" autocomplete="off">
            <input type="text" name="snombre" class="form-control" placeholder="Segundo Nombre" autocomplete="off">
            <div class="invalid-feedback">
                @error('pnombre')
                <h6>{{ $message }}</h6>
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
            <input type="text" name="papellido" class="form-control @error('pnombre') is-invalid @enderror" placeholder="Primer Apellido" autocomplete="off">
            <input type="text" name="sapellido" class="form-control" placeholder="Segundo Apellido" autocomplete="off">
            <div class="invalid-feedback">
                @error('papellido')
                <h6>{{ $message }}</h6>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="genero" class="col-sm-2 col-form-label">Genero</label>
    <div class="col-sm-8">
        <select class="form-control select" name="genero" style="width: 100%;">
            <option value="" selected="selected">Femenino</option>
            <option value="">Masculino</option>
            <option value="">Otros</option>
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
            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
            <div class="invalid-feedback">
                @error('foto')
                <h6>{{ $message }}</h6>
                @enderror
            </div>
        </div>
    </div>
</div>