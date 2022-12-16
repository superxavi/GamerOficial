<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Aula</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="ID_AUL"></label>
                <input wire:model="ID_AUL" type="text" class="form-control" id="ID_AUL" placeholder="Id Aul">@error('ID_AUL') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="NOMBRE_AUL"></label>
                <input wire:model="NOMBRE_AUL" type="text" class="form-control" id="NOMBRE_AUL" placeholder="Nombre Aul">@error('NOMBRE_AUL') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="EDIFICIO_AUL"></label>
                <input wire:model="EDIFICIO_AUL" type="text" class="form-control" id="EDIFICIO_AUL" placeholder="Edificio Aul">@error('EDIFICIO_AUL') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="DIRECCION_AUL"></label>
                <input wire:model="DIRECCION_AUL" type="text" class="form-control" id="DIRECCION_AUL" placeholder="Direccion Aul">@error('DIRECCION_AUL') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="OBSERVACION_AUL"></label>
                <input wire:model="OBSERVACION_AUL" type="text" class="form-control" id="OBSERVACION_AUL" placeholder="Observacion Aul">@error('OBSERVACION_AUL') <span class="error text-danger">{{ $message }}</span> @enderror
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
