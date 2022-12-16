@section('title', __('Partida Indivs'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Partida Indiv Listing </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Partida Indivs">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Partida Indivs
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.partidaIndivs.create')
						@include('livewire.partidaIndivs.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Id Pai</th>
								<th>Id Vdj</th>
								<th>Id Jug</th>
								<th>Hora Inicio Pai</th>
								<th>Fecha Pai</th>
								<th>Observacion Pai</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($partidaIndivs as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->ID_PAI }}</td>
								<td>{{ $row->ID_VDJ }}</td>
								<td>{{ $row->ID_JUG }}</td>
								<td>{{ $row->HORA_INICIO_PAI }}</td>
								<td>{{ $row->FECHA_PAI }}</td>
								<td>{{ $row->OBSERVACION_PAI }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Partida Indiv id {{$row->id}}? \nDeleted Partida Indivs cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $partidaIndivs->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
