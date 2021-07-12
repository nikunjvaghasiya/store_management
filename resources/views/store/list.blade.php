{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <title></title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="cotainer">
        <h1>Store Details</h1>
    </div>
    <div class="form-control">
        <a href="{{ url('create') }}" class="form-control">Add Store Detail</a>
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
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script>
    $(function () {
    
      var table = $('.storeData').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('show') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'store_name', name: 'store_name'},
              {data: 'store_number', name: 'store_number'},
              {data: 'state', name: 'state'},
              {data: 'city', name: 'city'},
              {data: 'store_area', name: 'store_area'},
              {data: 'store_address', name: 'store_address'},
              {data: 'pin', name: 'pin'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
      
    });
</script>
</html>