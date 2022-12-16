<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Categoria Juego</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="ID_CAT"></label>
                <input wire:model="ID_CAT" type="text" class="form-control" id="ID_CAT" placeholder="Id Cat">@error('ID_CAT') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="TIPO_CAT"></label>
                <input wire:model="TIPO_CAT" type="text" class="form-control" id="TIPO_CAT" placeholder="Tipo Cat">@error('TIPO_CAT') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="COMPETENCIA_CAT"></label>
                <input wire:model="COMPETENCIA_CAT" type="text" class="form-control" id="COMPETENCIA_CAT" placeholder="Competencia Cat">@error('COMPETENCIA_CAT') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="DESCRIPCION_CAT"></label>
                <input wire:model="DESCRIPCION_CAT" type="text" class="form-control" id="DESCRIPCION_CAT" placeholder="Descripcion Cat">@error('DESCRIPCION_CAT') <span class="error text-danger">{{ $message }}</span> @enderror
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
