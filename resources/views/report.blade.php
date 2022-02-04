<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report of {{ now()->format('Y/m/d h:i A') }}</title>
    <x-reportcss />
</head>

<body>
    <div>
        <div class="">
            <div class="text-center">
                <strong>
                    Report of Car Rental Management System
                </strong>
            </div>
            <div class="-body">
                <div class="row mb-4"></div>
                <div class="row mb-4"></div>
                <div class="">
                    <table class="table">
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
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <td colspan="5">Downloaded at {{ now()->format('Y/m/d h:i A') }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>