{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
    <style>
        h1{
            text-align: center;
        }
        a{
            font: bold 18px Arial;
            text-decoration: none;
            background-color: #EEEEEE;
            color: #333333;
            padding: 2px 6px 2px 6px;
            border-top: 1px solid #CCCCCC;
            border-right: 1px solid #333333;
            border-bottom: 1px solid #333333;
            border-left: 1px solid #CCCCCC;
        } 
    </style>
</head>
<body>
    <div class="cotainer">
        <h1>Store Details</h1>
    </div>
    <div class="form-control">
        <a href="{{ url('create') }}">Add Store Detail</a>
    </div>
    <div class="container mt-4">
        <div class="form-group">
            <table class="table table-bordered data-table" id="storeData">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Store Name</th>
                        <th>Store Number</th>
                        <th>State Name</th>
                        <th>City Name</th>
                        <th>Store Area</th>
                        <th>Store Address</th>
                        <th>PIN</th>
                        <th>Action</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    @foreach ($view_store_data as $vsd)
                        <tr>
                            <td>{{ $vsd->id }}</td>
                            <td>{{ $vsd->store_name }}</td>
                            <td>{{ $vsd->store_number }}</td>
                            <td>{{ $vsd->state_name }}</td>
                            <td>{{ $vsd->city_name }}</td>
                            <td>{{ $vsd->store_area }}</td>
                            <td>{{ $vsd->store_address }}</td>
                            <td>{{ $vsd->pin }}</td>
                            <td><a href="edit/{{ $vsd->id }}" style="color: green">Edit</a></td>
                            <td><a href="delete/{{ $vsd->id }}" style="color:red">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody> --}}
            </table>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https:////cdn.datatables.net/1.10.3/js/jquery.dataTables.js"></script>
<script>
    $(function() {
        $('#storeData').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('show') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'store_name', name: 's.store_name' },
                { data: 'store_number', name: 's.store_number' },
                { data: 'state_name', name: 'sd.state_name' },
                { data: 'city_name', name: 'cd.city_name' },
                { data: 'store_area', name: 's.store_area' },
                { data: 'store_address', name: 's.store_address' },
                { data: 'pin', name: 's.pin' },
                { data: 'action', orderable: true, searchable: true },

            ]
        });
    });

</script>

</html>