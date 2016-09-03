<div class="panel-body">
  <section id="flip-scroll" class="adv-table">
    <table id="dynamic-payments" class="display table table-bordered table-striped table-condensed cf">
        <thead class="cf">
            <tr>
                <th>No.</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
          @foreach($news as  $key => $data)
            <tr>
                <td>{{ $key+1 }}</td>
                <td> {{ $data->description }} </td>
                <td> {{ $data->date }} </td>
                <td> <img src="/image/{{ $data->image }}" style="width:60px;"> </td>
                <td class="text-center">
                    <button type="button" name="edit" class="btn btn-info btn-sm reLoadModal spaceRight tooltips" data-url="/admin/news/{{ $data->id }}/edit" data-title="Actualizar noticia" title="" data-placement="top" data-toggle="tooltip" data-original-title="Editar noticia">
                        <i class="fa fa-refresh"></i>
                    </button>
                    <button type="button" name="delete" class="btn btn-danger btn-sm reLoadModal spaceRight tooltips" data-url="/admin/news/showDelete/{{ $data->id }}" data-title="Eliminar noticia" title="" data-placement="top" data-toggle="tooltip" data-original-title="Eliminar">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
  </section>
</div>

<div class="modal-footer">
   <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
</div>

<script>
    $('.reLoadModal').on('click', function(e){
        e.preventDefault();
        var loadModal = new LoadModal($("#containerBase"), $(".titleEdit"), $(this));
        loadModal.prepareView();
    });
</script>