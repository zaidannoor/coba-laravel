
@extends('layouts.main')

@section('container')
    
    <div class="container my-4">
        <h2 class="mb-5">{{ $subJudul }}</h2>
             
        <div class="row">
            @foreach ($konten as $category)
                @php $x = mt_rand(1,60); @endphp
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://picsum.photos/id/{{ $x }}/250/250" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <div class="kotak p-3" style="background-color: rgb(0,0,0,0.7)">
                                    <h5 class="card-title">{{ $category->name }}</h5>
                                
                                    <p class="card-text">Last updated {{ $x }} mins ago</p>
                                </div>
                                
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div> 
        
        
    </div>


    
@endsection


