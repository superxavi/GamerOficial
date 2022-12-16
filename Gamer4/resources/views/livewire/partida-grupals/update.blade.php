<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Partida Grupal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="ID_PAG"></label>
                <input wire:model="ID_PAG" type="text" class="form-control" id="ID_PAG" placeholder="Id Pag">@error('ID_PAG') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="ID_VDJ"></label>
                <input wire:model="ID_VDJ" type="text" class="form-control" id="ID_VDJ" placeholder="Id Vdj">@error('ID_VDJ') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="ID_EQU"></label>
                <input wire:model="ID_EQU" type="text" class="form-control" id="ID_EQU" placeholder="Id Equ">@error('ID_EQU') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="HORA_INICIO_PAG"></label>
                <input wire:model="HORA_INICIO_PAG" type="text" class="form-control" id="HORA_INICIO_PAG" placeholder="Hora Inicio Pag">@error('HORA_INICIO_PAG') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="FECHA_PAG"></label>
                <input wire:model="FECHA_PAG" type="text" class="form-control" id="FECHA_PAG" placeholder="Fecha Pag">@error('FECHA_PAG') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="INTEGRANTES_PAG"></label>
                <input wire:model="INTEGRANTES_PAG" type="text" class="form-control" id="INTEGRANTES_PAG" placeholder="Integrantes Pag">@error('INTEGRANTES_PAG') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="ASISTENCIA_PAG"></label>
                <input wire:model="ASISTENCIA_PAG" type="text" class="form-control" id="ASISTENCIA_PAG" placeholder="Asistencia Pag">@error('ASISTENCIA_PAG') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="OBSERVACION_PAG"></label>
                <input wire:model="OBSERVACION_PAG" type="text" class="form-control" id="OBSERVACION_PAG" placeholder="Observacion Pag">@error('OBSERVACION_PAG') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
