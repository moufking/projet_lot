@extends('welcome')


@section('content')

<div class="position-relative" style="height: 100vh;">
    <div class="position-absolute top-50 start-50 translate-middle">


        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @error('email')
           <div class="alert alert-danger" role="alert">
                {{$message}}
          </div>
         @enderror

        <form action="{{ route('inscription.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="Entrer votre email" class="form-control form-control-lg" name="email" >
             <button type="submit" class="btn btn-primary mt-4">Participer au tirage au sort</button>
        </form>
    </div>
</div>

@endsection