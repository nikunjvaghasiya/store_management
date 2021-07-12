{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="cotainer">
        <h1>Add Store Details</h1>
    </div>
    <div class="container mt-4">
        <div class="form-group">
            <form accept="{{ action('') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="storename">Enter Store Name</label>
                    <input type="text" class="form-control" value="{{ $store_name->store_name }}" name="store_name" id="store_name" aria-describedby="emailHelp">
                </div>
                <br>
                <div class="form-group">
                    <label for="storenumber">Enter Store Number</label>
                    <input type="number" class="form-control" name="store_number" id="store_number" aria-describedby="emailHelp">
                </div>
                <br>
                <div class="form-control">
                    <label for="state" class="form-control">State</label>
                    <select name="state" id="state">Select State name: 
                        @foreach ($state_data as $sd)
                            <option value="{{ $sd->id }}">{{ $sd->state_name }}</option>
                        @endforeach
                    </select>  
                </div>
                <br>
                <div class="form-control">
                    <label for="city" class="form-control">State</label>
                    <select name="city" id="city">Select City name: 
                        @foreach ($city_data as $cd)
                            <option value="{{ $cd->id }}">{{ $cd->city_name }}</option>
                        @endforeach
                    </select>  
                </div>
                <br>
                <div class="form-group">
                  <label for="storearea">Enter Store area</label>
                  <input type="text" class="form-control" name="store_area" id="store_area" aria-describedby="emailHelp">
               </div>
               <br>
                <div class="form-group">
                    <label for="storeaddress">Enter Store address</label>
                    <input type="text" class="form-control" name="store_address" id="store_address" aria-describedby="emailHelp">
                </div>
                <br>
                <div class="form-group">
                  <label for="exampleInputPassword1">Pin</label>
                  <input type="number" class="form-control" name="store_pin" id="store_pin">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
    </div>
</body>            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>