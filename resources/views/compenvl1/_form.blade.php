<div class="box box-info padding-1">
        <div class="form-group">
            @csrf
            <label for="codigo" class="form-label">Codigo</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3"><i class="fas fa-barcode"></i></span>
                <input type="number" class="form-control" id="codigo" name="title" value="{{ $compenvl1->codigo }}">
            </div>
            <label for="compenvl1" class="form-label">Competencia</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3"><i class="fas fa-book"></i></span>
                <input type="text" class="form-control" id="compenvl1" name="compenvl1" value="{{ $compenvl1->compenvl1 }}">
            </div>
            <label for="descripcion" class="form-label">Descripción</label>
            <div class="input-group mb-4">
                <textarea class="form-control" id="descripcion" name="descripcion" value="{{ $compenvl1->descripcion }}"></textarea>
            </div>
            <div class="btn-group float-right">
                <input type="submit" value="Enviar" class="btn btn-sm btn-block btn-primary">
            </div>
        </div>
</div>
