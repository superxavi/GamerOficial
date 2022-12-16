<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Videojuego</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="ID_VDJ"></label>
                <input wire:model="ID_VDJ" type="text" class="form-control" id="ID_VDJ" placeholder="Id Vdj">@error('ID_VDJ') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="ID_CAT"></label>
                <input wire:model="ID_CAT" type="text" class="form-control" id="ID_CAT" placeholder="Id Cat">@error('ID_CAT') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="NOMBRE_VDJ"></label>
                <input wire:model="NOMBRE_VDJ" type="text" class="form-control" id="NOMBRE_VDJ" placeholder="Nombre Vdj">@error('NOMBRE_VDJ') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="COMPANIA_VDJ"></label>
                <input wire:model="COMPANIA_VDJ" type="text" class="form-control" id="COMPANIA_VDJ" placeholder="Compania Vdj">@error('COMPANIA_VDJ') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="PRECIO_VDJ"></label>
                <input wire:model="PRECIO_VDJ" type="text" class="form-control" id="PRECIO_VDJ" placeholder="Precio Vdj">@error('PRECIO_VDJ') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="DESCRIPCION_VDJ"></label>
                <input wire:model="DESCRIPCION_VDJ" type="text" class="form-control" id="DESCRIPCION_VDJ" placeholder="Descripcion Vdj">@error('DESCRIPCION_VDJ') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="NUMJUGADORES_VDJ"></label>
                <input wire:model="NUMJUGADORES_VDJ" type="text" class="form-control" id="NUMJUGADORES_VDJ" placeholder="Numjugadores Vdj">@error('NUMJUGADORES_VDJ') <span class="error text-danger">{{ $message }}</span> @enderror
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
