@csrf

<div class="form-group row">
    <label for="compenvl1" class="col-sm-2 col-form-label">Competencia Nvl 1</label>
    <div class="col-sm-8">
        <select class="form-control select" name="compenvl1" style="width: 100%;">
            @foreach($compenvl1s as $compenvl1)
            <option value="{{ $compenvl1->id }}" {{ (isset($compenvl1->id) || old('id'))}}> {{ $compenvl1->compenvl1 }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="codigo" class="col-sm-2 col-form-label">Codigo</label>
    <div class="col-sm-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-barcode"></i>
                </span>
            </div>
            <input type="number" name="codigo" id="codigo" class="form-control @error('codigo') is-invalid @enderror" placeholder="xxx" value="{{ $compenvl2->codigo }}" autocomplete="off">
            <div class="invalid-feedback" role="alert">
                @error('codigo')
                <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="compenvl2" class="col-sm-2 col-form-label">Competencia Nvl 2</label>
    <div class="col-sm-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-book"></i>
                </span>
            </div>
            <input type="text" name="compenvl2" id="compenvl2" class="form-control @error('compenvl2') is-invalid @enderror" placeholder="Competencia" value="{{ $compenvl2->compenvl2 }}" autocomplete="off">
            <div class="invalid-feedback" role="alert">
                @error('compenvl2')
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

            <textarea class="form-control" id="descripcion" name="descripcion">{{ $compenvl2->descripcion }}</textarea>
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="btn-group float-right">
        <input type="submit" value="Enviar" class="btn btn-sm btn-block btn-primary">
    </div>
</div>