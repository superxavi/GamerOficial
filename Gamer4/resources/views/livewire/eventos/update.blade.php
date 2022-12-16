<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="ID_EVE"></label>
                <input wire:model="ID_EVE" type="text" class="form-control" id="ID_EVE" placeholder="Id Eve">@error('ID_EVE') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="NOMBRE_EVE"></label>
                <input wire:model="NOMBRE_EVE" type="text" class="form-control" id="NOMBRE_EVE" placeholder="Nombre Eve">@error('NOMBRE_EVE') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="FECHA_EVE"></label>
                <input wire:model="FECHA_EVE" type="text" class="form-control" id="FECHA_EVE" placeholder="Fecha Eve">@error('FECHA_EVE') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="LUGAR_EVE"></label>
                <input wire:model="LUGAR_EVE" type="text" class="form-control" id="LUGAR_EVE" placeholder="Lugar Eve">@error('LUGAR_EVE') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="DESCRIPCCION_EVE"></label>
                <input wire:model="DESCRIPCCION_EVE" type="text" class="form-control" id="DESCRIPCCION_EVE" placeholder="Descripccion Eve">@error('DESCRIPCCION_EVE') <span class="error text-danger">{{ $message }}</span> @enderror
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
