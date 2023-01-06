<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Categoria Juego</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
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
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
