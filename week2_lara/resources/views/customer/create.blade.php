<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
    <div class="card-header">
                Add New Customer
            </div>
            @if ($errors->any())
            <div>
                @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
                @endforeach
            </div>
            @endif
        <div class="card">
           
            <div class="card-body">
                <form action="{{route('customer.store')}}" method="post" class="form">
                    @csrf
                <div>
                       <x-label label="Customer Name" class="p-3"></x-label>
                       <x-input-text type="text" name="name"></x-input-text>
                    @error('name')
                    <span class='text-danger'>{{$message}}</span>
                    @enderror
                    </div>
                    <div>
                    <x-label label="Customer Email" class="text-success"></x-label>
                        <x-input-text type="email" name="email"></x-input-text>
                        @error('email')
                    <span class='text-danger'>{{$message}}</span>
                    @enderror
                    </div>
                    <div>
                    <x-label label="Customer Address" class="text-info"></x-label>
                    <x-input-text type="address" name="address"></x-input-text>
                    </div>
                    @error('address')
                    <span class='text-danger'>{{$message}}</span>
                    @enderror
                    <div>
                        <x-button bname="Add" type="submit"></x-button>
                        <x-button bname="Back" class="bg-primary"></x-button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>