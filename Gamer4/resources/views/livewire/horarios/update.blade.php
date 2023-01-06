<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Horario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="ID_HOR"></label>
                <input wire:model="ID_HOR" type="text" class="form-control" id="ID_HOR" placeholder="Id Hor">@error('ID_HOR') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="ID_VDJ"></label>
                <input wire:model="ID_VDJ" type="text" class="form-control" id="ID_VDJ" placeholder="Id Vdj">@error('ID_VDJ') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="ID_AUL"></label>
                <input wire:model="ID_AUL" type="text" class="form-control" id="ID_AUL" placeholder="Id Aul">@error('ID_AUL') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="TIEMPO_INICIO_HOR"></label>
                <input wire:model="TIEMPO_INICIO_HOR" type="text" class="form-control" id="TIEMPO_INICIO_HOR" placeholder="Tiempo Inicio Hor">@error('TIEMPO_INICIO_HOR') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="TIEMPO_FIN_HOR"></label>
                <input wire:model="TIEMPO_FIN_HOR" type="text" class="form-control" id="TIEMPO_FIN_HOR" placeholder="Tiempo Fin Hor">@error('TIEMPO_FIN_HOR') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="FECHA_HOR"></label>
                <input wire:model="FECHA_HOR" type="text" class="form-control" id="FECHA_HOR" placeholder="Fecha Hor">@error('FECHA_HOR') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="OBSERVACION_HOR"></label>
                <input wire:model="OBSERVACION_HOR" type="text" class="form-control" id="OBSERVACION_HOR" placeholder="Observacion Hor">@error('OBSERVACION_HOR') <span class="error text-danger">{{ $message }}</span> @enderror
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