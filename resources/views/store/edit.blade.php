<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <h1>Edit Store Details</h1>
    </div>
   
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="col md-6">
                            <div class="container">
                                <form action="{{ url('update') }}" method="post" id="formData" enctype="multipart/form-data">
                                    @csrf
                                    <hr> 
                                    <div class="col-md-6">
                                        <label for="storename" class="control-label">
                                            <b>Store Name: </b>
                                        </label>
                                        <input type="text" class="form-control" value="{{ $edit_data->store_name }}" name="store_name" id="store_name" >
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <label for="storenumber" class="control-label">
                                            <b>Store Number: </b>
                                        </label>
                                        <input type="number" class="form-control" value="{{ $edit_data->store_number }}" name="store_number" id="store_number" >
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <label for="state" class="control-label">
                                            <b>Select State: </b>
                                        </label>
                                        <select class="form-control" id="state_name" name="state_name" >
                                            <option selected disabled></option>
                                            @foreach ($state_data as $sd)
                                                <option value="{{ $sd->state_name }}">{{ $sd->state_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <label for="city" class="control-label">
                                            <b>Select City: </b>
                                        </label>
                                        <select class="form-control" id="city_name" name="city_name" >
                                            <option selected disabled></option>
                                            @foreach ($city_data as $cd)
                                                <option value="{{ $cd->city_name }}">{{ $cd->city_name }}</option>
                                            @endforeach
                                        </select>  
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <label for="storearea" class="control-label">
                                            <b>Store Area: </b>
                                        </label>
                                        <input type="text" class="form-control" name="store_area" id="store_area" value="{{ $edit_data->store_area }}" >
                                   </div>
                                   <br>
                                    <div class="col-md-6">
                                        <label for="storeaddress" class="control-label">
                                            <b>Store Address: </b>
                                        </label>
                                        <input type="text" class="form-control" name="store_address" id="store_address" value="{{ $edit_data->store_address }}" >
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <label for="pin" class="control-label">
                                            <b>PIN: </b>
                                        </label>
                                      <input type="number" class="form-control" name="store_pin" id="store_pin" value="{{ $edit_data->pin }}">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</html>