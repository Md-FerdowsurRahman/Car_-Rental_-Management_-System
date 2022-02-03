@extends('layouts.admin')
@section('content')
<div class="">
    <section class="content">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card card-outline card-primary">
                    <div class="card-body">
                        <div id="list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table tabe-hover table-bordered dataTable no-footer" id="list" role="grid" aria-describedby="list_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="text-center sorting_asc" tabindex="0" aria-controls="list" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 24.2875px;">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="list" rowspan="1" colspan="1" aria-label="Staff: activate to sort column ascending" style="width: 121.075px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="list" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 192.312px;">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="list" rowspan="1" colspan="1" aria-label="Branch: activate to sort column ascending" style="width: 548.037px;">Message</th>
                                                <th class="sorting" tabindex="0" aria-controls="list" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 98.2875px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($messages as $message)
                                            <tr role="row" class="odd">
                                                <td class="text-center sorting_1">{{ $loop->iteration }}</td>
                                                <td><b>{{ $message->name }}</b></td>
                                                <td><b>{{ $message->email }}</b></td>
                                                <td><b>{{ $message->message }}</b></td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <form action="{{ route('message.delete',$message) }}" method="POST">
                                                        @csrf   
                                                        <button type="submit" class="btn btn-danger btn-flat">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
</div>
@endsection