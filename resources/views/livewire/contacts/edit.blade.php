<div>
        <div class="card border border-light">
            <div class="card-header" style="background-color: rgba(127, 169, 199, 0.527)">
                <h3 class="text-center mt-2">Edit Contacts</h3>
            </div>
            <div class="card-body shadow">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="name">
                    <label for="name">Name</label>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.debounce.500ms="contact_number">
                    <label for="contact_number">Contact Number</label>
                    @error('contact_number')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.debounce.500ms="email">
                    <label for="email">Email Address</label>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="address">
                    <label for="address">Address</label>
                    @error('address')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select name="sim_card" class="form-select" wire:model.defer="sim_card">
                        <option hidden="true">Select Sim Card</option>
                        <option selected disabled>Select Sim Card</option>
                        <option value="TNT">TNT</option>
                        <option value="Sun">Sun</option>
                        <option value="Globe">Globe</option>
                        <option value="TM">TM</option>
                        <option value="PLDT">PLDT</option>
                        <option value="Smart">Smart</option>
                    </select>
                    <label for="sim_card">Sim Card</label>
                    @error('sim_card')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary" wire:click="editContact()">
                        Save Changes
                    </button>
                    <button class="btn btn-info mx-2" wire:click="back()">
                        back
                    </button>
                </div>
            </div>
        </div>
</div>
