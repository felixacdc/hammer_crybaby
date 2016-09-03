<div class="container">
    <div class="row">
        <div class="prf-box margin_null_bottom">
            <h3 class="prf-border-head">{{ $dataShow->name }}</h3>
            <div class=" wk-progress pf-status">
                <div class="col-md-4 col-xs-4">Nombre:</div>
                <div class="col-md-8 col-xs-8">
                    <strong>{{ $dataShow->name }}</strong>
                </div>
            </div>
            <div class=" wk-progress pf-status">
                <div class="col-md-4 col-xs-4">Descripcion:</div>
                <div class="col-md-8 col-xs-8">
                    <strong>{{ $dataShow->description }}</strong>
                </div>
            </div>
            <div class=" wk-progress pf-status">
                <div class="col-md-4 col-xs-4">Telefono:</div>
                <div class="col-md-8 col-xs-8">
                    <strong>{{ $dataShow->phone }}</strong>
                </div>
            </div>
            <div class=" wk-progress pf-status">
                <div class="col-md-4 col-xs-4">Productos:</div>
                <div class="col-md-8 col-xs-8">
                    <strong>{{ $dataShow->products }}</strong>
                </div>
            </div>

            <div class=" wk-progress pf-status">
                <div class="col-md-4 col-xs-4">Direccion de Facebook:</div>
                <div class="col-md-8 col-xs-8">
                    <strong>{{ $dataShow->facebook }}</strong>
                </div>
            </div>

        <div class="modal-footer model-close-less">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</div>
