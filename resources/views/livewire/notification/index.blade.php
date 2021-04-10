<div>
	<div class="content-wrapper">
	    {{-- Content Header (Page header) --}}
	    <div class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h4>Listado de notificaciones whatsapp</h4>
                {{-- <span>Estas son notificaciones programadas</span> --}}
	          </div>
	          {{-- /.col --}}
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Notificaciones</a></li>
	              <li class="breadcrumb-item active">index</li>
	            </ol>
	          </div>
	          {{-- /.col --}}
	        </div>

	        <div class="py-2">
	            <div class="row align-items-end">
	                <div class="col-lg-12">
	                    <div class="page-header-breadcrumb">
	                        <a href="{{route('notification.create')}}">
	                            <button class="btn btn-info float-right" style="background-color: #17a2b8">Crear notificación</button>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        @if (count($notifications) > 0)
	        <div class="card">
                <div class="card-block table-border-style">
			        <div class="table-responsive">
				        <table class="table table-bordered">
						  <thead>
						  	<tr>
						  		<th scope="col">#</th>
						  		<th scope="col">Contenido</th>
						  		<th scope="col">Telefono</th>
						  		<th scope="col">Acción</th>
						  	</tr>
						  </thead>
						  <tbody>
						  	@foreach($notifications as $notification)
						  		<tr>
						  			<td>{{ $notification->id }}</td>
						  			<td>{{ strip_tags($notification->text_body) }}</td>
						  			<td>{{ $notification->countries->phone_code . $notification->phone_number}}</td>
						  			@if($notification->status > 0)
						  			<td>
										<a class="btn btn-success" href="#" >
											Enviado
										</a>
									</td>
									@else
										<td>
										<button wire:click="send({{ $notification->id }})" class="btn btn-warning" style="background-color: #ffc107">
											Enviar
										</button>
										</td>
									@endif
						  		</tr>
						  	@endforeach
						  </tbody>
						</table>
						{{ $notifications->links() }}
					</div>
				</div>
			</div>
			@else
                <div class="card">
                    <div class="card-header">
                        No posee notificaciones
                    </div>
                </div>
            @endif
	        {{-- /.row --}}
	      </div>
	      {{-- /.container-fluid --}}
	    </div>
	    {{-- /.content-header --}}
	</div>
</div>
