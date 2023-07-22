<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
</head>
<body>
<div class="container mt-4">
    <a href="{{route('customer.create')}}" class="btn btn-success">Add New Customer</a>
</div>

<div class="row m-3">
    <div class="col-md-4">
<div class="card text-center">
<x-card :title="$title" :message="$message">
    <x-slot name="header">
    <div class="card-header">
        Featured
    </div>
    </x-slot>

    <x-slot name="footer">
    <div class="card-footer text-body-secondary">
        2 days ago
    </div>
    </x-slot>
</x-card>
   
</div>
</div>
</div>

</body>
</html>