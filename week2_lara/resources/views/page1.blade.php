<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>
    <div class="container">
        <!-- <x-alert :type="$type" :message="$message" class="m-2"> -->
        <!-- <x-slot name="title" class="text-danger">
        404 Error
        </x-slot>
        </x-alert> -->
        <x-alert :type="$type" :message="$message" class="m-5">
        <x-slot name="slot1" class="text-danger">
        Server Error
        </x-slot>
      
         <div>Something Went Wrong</div>
        </x-alert>
        <!-- <x-alert :type="$type" :message="$message" class="m-3">
         <div>Something Went Wrong</div>
        </x-alert> -->
        <div class="row">
            <div class="col-md-6">
                page1<hr>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae at veniam vel officia doloremque velit, voluptatem totam itaque earum? Labore eveniet amet aspernatur fuga cumque aliquam error saepe quod provident!

            </div>
            <div class="col-md-6">
                {{-- @forelse ($posts as $post)
                    <div>
                        <h2>{{$post['title']}}</h2>
                        <p>{{$post['content']}}</p>
                    </div>
                @empty
                    <h2>No more posts</h2>
                @endforelse --}}
                
                    
                    <x-latest-post :posts="$posts">

                    </x-latest-post>
                
            </div>
        </div>
    </div>

    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    
</body>
</html>