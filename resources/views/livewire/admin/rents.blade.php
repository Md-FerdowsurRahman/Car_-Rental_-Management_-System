<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mr-5">ALl Rents</h3>
                <div class="card-tools">

                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" wire:model="search" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Sl.</th>
                            <th class="text-center">User Name</th>
                            <th class="text-center">Car Name</th>
                            <th class="text-center">Rent Date</th>
                            <th class="text-center">Plces</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center" wire:click="sortBy('rent_status')">Status @if($sortField=='rent_status' && $orderBy==='desc') <i class="fa fa-sort-up"></i> @elseif($sortField=='rent_status' && $orderBy==='asc') <i class="fa fa-sort-down"></i> @endif</th>
                            <th class="text-center" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rents as $rent)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="text-center"><a href="#">{{ $rent->user->name}}</a></td>
                            <td class="text-center"><a href="#">{{ $rent->car->name}}</a></td>
                            <td class="text-center">{{ $rent->rent_date->format('d/m/Y') }} - {{ $rent->return_date->format('d/m/Y') }}</td>
                            <td class="text-center">{{ $rent->rentplace->place_name }} - {{ $rent->returnplace->place_name }}</td>
                            <td class="text-center">${{$rent->rent_amount}}</td>
                            <td class="text-center cursor-pointer1" wire:click="changeStatus({{$rent->id}},{{$rent->rent_status}})"><span class="badge {{ $rent->current_rent_status_color }}">{{ $rent->current_rent_status }}</span></td>
                            <td wire:click.prevent="cancelRent({{ $rent->id }})" class="text-danger text-center cursor-pointer1">
                                @if($rent->rent_status !=3)
                                <i class="fa fa-stop mr-2"></i><a class="text-decoration-none text-danger">Cancel</a>
                                @endif
                            </td>
                            <td wire:click.prevent="confirmDelete()" class="text-danger text-center cursor-pointer1"> <i class="fa fa-trash-alt mr-2"></i><a class="text-decoration-none text-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>