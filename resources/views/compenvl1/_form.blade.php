@csrf
<div class="form-group row">
    <label for="codigo" class="col-sm-2 col-form-label">Codigo</label>
    <div class="col-sm-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-barcode"></i>
                </span>
            </div>
            <input type="number" name="codigo" id="codigo" class="form-control @error('codigo') is-invalid @enderror" placeholder="xxx" value="{{ $compenvl1->codigo }}" autocomplete="off">
            <div class="invalid-feedback" role="alert">
                @error('codigo')
                <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="compenvl1" class="col-sm-2 col-form-label">Competencia Nvl 1</label>
    <div class="col-sm-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-book"></i>
                </span>
            </div>
            <input type="text" name="compenvl1" id="compenvl1" class="form-control @error('compenvl1') is-invalid @enderror" placeholder="Competencia" value="{{ $compenvl1->compenvl1 }}" autocomplete="off">
            <div class="invalid-feedback" role="alert">
                @error('compenvl1')
                <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="descripcion" class="col-sm-2 form-label">Descripción</label>
    <div class="col-sm-8">
        <div class="input-group">
            <textarea class="form-control" id="descripcion" name="descripcion">{{ $compenvl1->descripcion }}</textarea>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="btn-group float-right">
        <input type="submit" value="Enviar" class="btn btn-sm btn-block btn-primary">
    </div>
</div>