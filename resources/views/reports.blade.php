@extends('layouts.admin')
@section('content')
<div class="">
    <section class="content">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card card-outline card-primary">
                    <div class="card-body">
                        <form action="{{ route('report.get') }}" method="GET">
                            <div class="d-flex w-100 px-1 py-2 justify-content-center align-items-center">
                                <label for="date_from" class="mx-1">Status</label>
                                <select name="status" id="status" class="custom-select custom-select-sm col-sm-3">
                                    <option value="">All</option>
                                    <option value="Not Received" {{ (request()->status=='Not Received')?'selected':'' }}>Not Received</option>
                                    <option value="0" {{ (request()->status=='0')?'selected':'' }}>Under Review</option>
                                    <option value="1" {{ (request()->status=='1')?'selected':'' }}>Aproved</option>
                                    <option value="2" {{ (request()->status=='2')?'selected':'' }}>Completed</option>
                                    <option value="3" {{ (request()->status=='3')?'selected':'' }}>Cancelled</option>
                                </select>
                                <label for="date_from" class="mx-1">From</label>
                                <input type="date" id="date_from" class="form-control form-control-sm col-sm-3" value="{{ request()->from?? '' }}" name="from">
                                <label for="date_to" class="mx-1">To</label>
                                <input type="date" id="date_to" class="form-control form-control-sm col-sm-3" value="{{ request()->to?? '' }}" name="to">
                                <button class="btn btn-sm btn-primary mx-1 bg-gradient-primary" type="submit">View Report</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row" id="divToPrint">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: 5px;">
                                        <button type="button" onClick="Download('divToPrint');" class="btn btn-secondary float-right" id="print"><i class="fa fa-print"></i> Print</button>
                                        <form action="#" method="POST">
                                            @csrf
                                            <input type="hidden" name="from" value="{{ request()?->from }}">
                                            <input type="hidden" name="to" value="{{ request()?->to }}">
                                            <input type="hidden" name="status" value="{{ request()?->status }}">
                                            <button type="submit" style="margin-right: 15px;" class="btn btn-success float-right"><i class="fa fa-download"></i> Download Report</button>
                                        </form>

                                    </div>
                                </div>

                                <table class="table table-bordered" id="report-list">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Person Name</th>
                                            <th>Car Name</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($rents)
                                        @if ($rents->count()<=0) <tr>
                                            <td colspan="6" class="text-center">
                                                <div class="alert alert-danger" role="alert">
                                                    Ther is no Rent within the date. Please check.
                                                </div>
                                            </td>
                                            </tr>
                                            @endif


                                            @foreach ($rents as $rent)
                                            <tr role="row" class="odd">
                                                <td class="text-center sorting_1">{{ $loop->iteration }}</td>
                                                <td>
                                                    <b>{{ $rent->user->name }}</b><br>
                                                    {{ $rent->created_at->format('d/m/Y') }}
                                                </td>
                                                <td>
                                                    {{ $rent->car->name }}
                                                </td>
                                                <td>
                                                    ${{ $rent->rent_amount }}
                                                </td>
                                                <td>
                                                    {{ $rent->current_rent_status }}
                                                </td>
                                                <td>
                                                    {{ $rent->rent_date->format('d/m/Y') }} to {{ $rent->return_date->format('d/m/Y') }}
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="details d-none">
                <p><b>Date Range:</b> <span class="drange"></span></p>
                <p><b>Status:</b> <span class="status-field">All</span></p>
            </div>
        </div>
        <!--/. container-fluid -->
        <script>
            function Download(divName) {
                var downloadContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = downloadContents;
                window.print();
                document.body.innerHTML = originalContents;
            }
        </script>
    </section>
</div>
@endsection