@extends('app') <?php  // App sahifasidan kengaytirilgan, yani App ning bolasi hisoblanadi ?>

@section('title', 'Bu jamoa a\'zolari sahifasi') <?php  //Members sahifasi uchun title o'rnatish ?>
    

@section('content')  <?php  // Members sahifasining tanasi, ya'ni App ning ichiga joylashtiriladigan qism ?>
    <h1>Hello from all Members!!!</h1>

    <p>Members: <br/>

            @forelse ($members as $member)
                <i>{{ $member }} <br/></i>

                @empty
                <p>Jamoa a'zolari mavjud emas</p>
                    
                {{-- @endempty --}}
            @endforelse
    </p>
@endsection
    