<div class="modal" id="newregister">
    <div class="modal-dialog modal-lg small">
        <div class="modal-content">
        <form wire:submit.prevent="submitForm">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-wrap">

                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="basic-addon3">Order No</span>
                        <input type="text" wire:model="ordernumber" class="form-control w-50" value="{{$ordersl}}" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="basic-addon3">Receving</span>
                        <input type="date" wire:model="receving" value="{{date('d/m/y',time())}}" class="form-control w-50" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="basic-addon3">Factory</span>
                        <select class="form-control w-50" wire:model="factory">
                            <option value="null">Select Factory</option>
                            <option value="Factory Name 1">Factory Name 1</option>
                            <option value="Factory Name 2">Factory Name 2</option>
                            <option value="Factory Name 3">Factory Name 3</option>
                            <option value="Factory Name 4">Factory Name 4</option>

                        </select>
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="basic-addon3">Order Type</span>
                        <input type="text" wire:model="ordertype" class="form-control w-50" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="basic-addon3">Customer</span>
                        <select wire:model="customer" class="form-control w-50">
                            <option value="null">Select Customer</option>
                            <option value="Customer Name 1">Customer Name 1</option>
                            <option value="Customer Name 2">Customer Name 2</option>
                            <option value="Customer Name 3">Customer Name 3</option>
                            <option value="Customer Name 4">Customer Name 4</option>

                        </select>
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="basic-addon3">Style</span>
                        <input wire:model="style" type="text" class="form-control w-50" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="basic-addon3">Staff</span>
                        <input wire:model="staff" type="text" class="form-control w-50" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="basic-addon3">Season</span>
                        <input wire:model="season" type="text" class="form-control w-50" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="basic-addon3">Gender</span>
                        <input wire:model="gender" type="text" class="form-control w-50" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="basic-addon3">Comodity</span>
                        <input wire:model="comodity" type="text" class="form-control w-50" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="basic-addon3">Mat Frieght</span>
                        <input wire:model="matfrieght" type="text" class="form-control w-50" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="basic-addon3">Inspection/Audit</span>
                        <input wire:model="inspectionaudit" type="text" class="form-control w-50" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-75" id="basic-addon3">Testing</span>
                        <input wire:model="testing" type="text" class="form-control w-25" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-75" id="basic-addon3">Other Charge</span>
                        <input ordercharge type="text" class="form-control w-25" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-75" id="basic-addon3">Destination</span>
                        <input wire:model="destination" type="text" class="form-control w-25" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text w-75" id="basic-addon3">S/D</span>
                        <input wire:model="sd" type="text" class="form-control w-25" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Pack</span>
                        <input wire:model="pack" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="inputboxs p-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">SMV</span>
                        <input wire:model="smv" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <div class="d-flex ">
                    <div class=" p-1">
                        <div class="input-group mb-3"> <span class="input-group-text" id="basic-addon3">Quantity</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            <input wire:model="quantity" type="text" class="form-control" id="basic-url" value="PCS" aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class=" p-1">
                        <div class="input-group mb-3"> <span class="input-group-text" id="basic-addon3">Frieght</span>
                            <input wire:model="fireght" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class=" p-1">
                        <div class="input-group mb-3"> <span class="input-group-text" id="basic-addon3">Terms</span>
                            <input wire:model="terms" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </div>
                <div class="d-flex ">
                    <div class=" p-1">
                        <div class="input-group mb-3"> <span class="input-group-text" id="basic-addon3">Color</span>
                            <input wire:model="color" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class=" p-1">
                        <div class="input-group mb-3"> <span class="input-group-text" id="basic-addon3">Size</span>
                            <input wire:model="size" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class=" p-1">
                        <div class="input-group mb-3"> <span class="input-group-text" id="basic-addon3">U.Price</span>
                            <input wire:model="upricer" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            <input wire:model="ppricetype" type="text" class="form-control" id="basic-url" value="USD" aria-describedby="basic-addon3">
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class=" p-1">
                        <div class="input-group mb-3"> <span class="input-group-text" id="basic-addon3">Description</span>
                            <textarea wire:model="description" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class=" p-1">
                        <div class="input-group mb-3"> <span class="input-group-text">CM</span>
                            <input wire:model="cm" type="text" class="form-control">
                            <input wire:model="cmtype" type="text" class="form-control" value="USD">
                        </div>
                    </div>
                </div>
                @error('ordernumber') <span class="text-danger">{{ $message }}</span> @enderror
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div>
                    <input type="submit" value="SAVE" class="btn btn-info">
                    <div class="btn btn-danger" data-bs-dismiss="modal">Cancel</div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>