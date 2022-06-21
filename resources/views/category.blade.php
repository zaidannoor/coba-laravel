
@extends('layouts.main')

@section('container')
    
    <div class="container my-4">
        <h2 class="mb-4">{{ $subJudul }}</h3>
            
            @foreach ($konten as $post)
                <article class="mb-4">
                    <h4><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h4>
                    <h6 class="text-secondary">Zaidan Noor Irfan</h6>
                    <p>{{ $post->excerpt }}</p>
                </article> 
            @endforeach
        
    </div>
@endsection