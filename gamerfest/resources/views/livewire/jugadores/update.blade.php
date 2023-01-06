<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Jugadore</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="ID_JUG"></label>
                <input wire:model="ID_JUG" type="text" class="form-control" id="ID_JUG" placeholder="Id Jug">@error('ID_JUG') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="ID_EQU"></label>
                <input wire:model="ID_EQU" type="text" class="form-control" id="ID_EQU" placeholder="Id Equ">@error('ID_EQU') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="NOMBRE_JUG"></label>
                <input wire:model="NOMBRE_JUG" type="text" class="form-control" id="NOMBRE_JUG" placeholder="Nombre Jug">@error('NOMBRE_JUG') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="CEDULA_JUG"></label>
                <input wire:model="CEDULA_JUG" type="text" class="form-control" id="CEDULA_JUG" placeholder="Cedula Jug">@error('CEDULA_JUG') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="TELEFONO_JUG"></label>
                <input wire:model="TELEFONO_JUG" type="text" class="form-control" id="TELEFONO_JUG" placeholder="Telefono Jug">@error('TELEFONO_JUG') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="CORREO_JUG"></label>
                <input wire:model="CORREO_JUG" type="text" class="form-control" id="CORREO_JUG" placeholder="Correo Jug">@error('CORREO_JUG') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="OBSERVACION_JUG"></label>
                <input wire:model="OBSERVACION_JUG" type="text" class="form-control" id="OBSERVACION_JUG" placeholder="Observacion Jug">@error('OBSERVACION_JUG') <span class="error text-danger">{{ $message }}</span> @enderror
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
