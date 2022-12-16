<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
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
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
