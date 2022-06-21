
@extends('layouts.main')

@section('container')
    
    <div class="container my-4">
        <h2 class="mb-4">{{ $subJudul }}</h3>
            
         @foreach ($konten as $author)
            <ul>
                <li><h4><a href="/authors/{{ $author->username }}" class="text-decoration-none">{{ $author->name }}</a></h4></li>
            </ul>
         @endforeach
        
    </div>
@endsection


