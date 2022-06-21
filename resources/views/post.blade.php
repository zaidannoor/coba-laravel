@extends('layouts.main')

@section('container')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>{{ $konten['title'] }}</h3>
                
                <h6 class="text-secondary my-4">By 
                    <a href="/author/{{ $konten->user->username }}" class="text-decoration-none">{{ $konten->user->name }}</a>, <a href="/categories/{{ $konten->category->slug }}" class="text-decoration-none">{{ $konten->category->name }}</a>
                </h6>
                {{-- <img src="https://source.unsplash.com/random/700×400/?{{ $konten->category->name }}" class="img-fluid" alt="pap"> --}}
                <img src="https://picsum.photos/700/400" class="img-fluid" alt="{{ $konten->category->name }}">

                <article class="my-4">
                    {!! $konten->body !!} 
                </article>
                  
            
                <a href="/posts" class="text-decoration-none d-block mt-3 p-3">Back to Main</a>
            </div>
        </div>
       
        
    </div>
@endsection


