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
    <h3>Role is {{$role}}</h3>
    @if ($status==1)
    <div>Admin is active.</div>
    @else 
    <div>Admin is inactive.</div> 
    @endif

    {{-- @if($type==1)
    <div class="bg-success">{{$message}}</div>
    @elseif($type==2)
    <div class="bg-info">{{$message}}</div>
    @elseif($type==3)
    <div class="bg-danger">{{$message}}</div>
    @endif --}}

    {{-- <div class="col-md-6">
        @switch($type)
            @case(1)
            <div class="bg-success">{{$message}}</div>
                
                @break
            @case(2)
            <div class="bg-info">{{$message}}</div>
            
                @break
            @default
                
        @endswitch
    </div> --}}
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row ">
                @for($i=0;$i<count($employees);$i++)
                    <div class="col-md">
                    <p>{{$employees[$i][0]}}</p>
                    <p>{{$employees[$i][1]}}</p>
                    <p>{{$employees[$i][2]}}</p>
                    </div>
                @endfor
                </div>
            </div>
        </div> 
    </div> --}}

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    @php
                        $active=true;  
                        $hasborder=true;
                    @endphp
                    @forelse ($employees as $emp)
                    @if ($loop->odd)
                    <div @class(['p-4','col-md-4','bg-primary'=>$active])>
                        <p>{{$emp[0]}}</p>
                        <p>{{$emp[1]}}</p>
                        <p>{{$emp[2]}}</p>
                    </div>
                    
                    @else
                    <div @class(['p-4', 'col-md-4','border' => $hasborder])>
                        <p>{{$emp[0]}}</p>
                        <p>{{$emp[1]}}</p>
                        <p>{{$emp[2]}}</p>
                    </div>
                
                    @endif
                    
                    @empty
                        <div>No more employees</div>   
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                @forelse($categories as $category)
                    <div class="col d-flex justify-content-center">
                        <div>
                            <img src="{{asset('$category[1]')}}" width="100px" height="100px">
                            <p>{{$category[0]}}</p>
                        </div>
                @empty
                    <div class="row">
                        No more employees
                    </div>

                @endforelse
            </div>
            <div class="row">
                <div class="col-md-6">
                    @php
                        $message="guest";
                        echo $message;
                    @endphp
                    @isset($records)
                        <div>records</div>
                    @endisset
                </div>
            </div>
        </div>
    </section>
    
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>