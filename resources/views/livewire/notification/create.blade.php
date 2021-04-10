<div>
	<div class="content-wrapper">
	    {{-- Content Header (Page header) --}}
	    <div class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h4>Agregar notificación whatsapp</h4>
                {{-- <span>Estas son notificaciones programadas</span> --}}
	          </div>
	          {{-- /.col --}}
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="{{ route('notification.index') }}">Notificaciones</a></li>
	              <li class="breadcrumb-item active">create</li>
	            </ol>
	          </div>
	          {{-- /.col --}}
	        </div>

	        <form wire:submit.prevent="save" method="POST">
	        <div class="page-body">
	            <div class="card">
	                <div class="form-group container">
	                    <div class="row col-12 col-sm-6 offset-sm-3 pb-8">
	                    	<div class="col-12">
                                <label class="col-form-label">País</label>

                                <select class="form-control" wire:model="country_id">
                                    <option  selected value="">Seleccione</option>
                                    @foreach ($countries as $country)
                                    <option value="{{$country->id}}">
                                        {{-- <img src="{{$country->flag}}" alt=""> --}}
                                        {{$country->phone_code}} {{$country->name}}
                                    </option>
                                    @endforeach
                                </select>
                                @error('country_id') <span class="error text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-12">
                                <label class="col-form-label">Telefono</label>
                                <input type="text" class="form-control" wire:model="phone_number">
                                @error('phone_number') <span class="error text-danger">{{ $message }}</span>@enderror
                            </div>

{{-- 	                        <div class="col-12">
	                            <label class="col-form-label">Cargar imagen</label>
	                            <input type="file" class="form-control" wire:model="file_upload">
	                            @error('file_upload') <span class="error text-danger">{{ $message }}</span>@enderror
	                        </div> --}}

	                        <div class="col-12" >
	                            <div wire:ignore>
	                                <label class="col-form-label">Contenido</label>
	                                <textarea name="text_body" input="text_body" class="form-control" id="mytextarea" rows="5">
	                                </textarea>
	                            </div>
	                            @error('text_body') <span class="error text-danger">{{ $message }}</span>@enderror
	                        </div>-

	                        <div class="col-12 mt-3 text-center">
	                            <a href="{{route('notification.index')}}" class="btn btn-sm btn-secondary">
	                                Volver
	                            </a>
	                            <button class="btn btn-sm text text-white" style="background-color: #17a2b8">Aceptar</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        </form>
	        {{-- /.row --}}
	      </div>
	      {{-- /.container-fluid --}}
	    </div>
	    {{-- /.content-header --}}
	</div>
</div>
<script src="https://cdn.tiny.cloud/1/t6azg0zybtcuxa22la4mfcrrs9jc153k89z0u3jk3bno1oig/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    var texto = ''

    tinymce.init({
      selector: "#mytextarea",
      plugins: "emoticons",
      toolbar: "emoticons",
      toolbar_location: "bottom",
      menubar: false,
      setup : function(ed) {
                  ed.on('change', function(e) {
                    @this.set('text_body', tinymce.get("mytextarea").getContent())
                  });
            }
    });

</script>