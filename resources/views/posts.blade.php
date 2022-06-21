
@extends('layouts.main')

@section('container')
    <div class="container my-4">
        <h1 class="mb-4 text-center">{{ $subJudul }}</h1>
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <form action="/posts" method="GET">
                    
                    @if (request('category'))
                        <input type="hidden" value="{{ request('category') }}" name="category">
                    @endif
                    @if (request('author'))
                        <input type="hidden" value="{{ request('author') }}" name="author">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <button class="btn warna2" type="submit" id="button-search">Button</button>
                    </div>
                </form>
                
            </div>
        </div>
        
        @if ($konten->count())
            <div class="card mb-3">
                {{-- <img src="https://source.unsplash.com/random/1200×400/?{{ $konten[0]->category->name }}" class="card-img-top" alt="pap" height="600"> --}}
                <img src="https://picsum.photos/1200/500" class="card-img-top" alt="{{ $konten[0]->category->name }}">

                <div class="card-body text-center">
                    <h4 class="card-title"><a href="/posts/{{ $konten[0]->slug }}"></a>{{ $konten[0]->title }}</h4>
                    <p class="card-text">
                        <small>
                            <a href="/posts?author={{ $konten[0]->user->username }}"  class="text-decoration-none">{{ $konten[0]->user->name }}
                            </a>  
                            <a href="/posts?category={{ $konten[0]->category->name }}" class="text-decoration-none ml-2">{{ $konten[0]->category->name }}
                            </a>
                            {{ $konten[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $konten[0]->excerpt }}</p>
                    <a href="/posts/{{ $konten[0]->slug }}" class="text-decoration-none">Read More ...</a>
                </div>
            </div>
             
        
            <div class="d-flex justify-content-end my-3">
                {{ $konten->links() }} 
             </div>
           
            <div class="container">
                <div class="row">
                    @foreach ($konten->skip(1) as $post)
                        <div class="col-md-4">
                        @php $x = mt_rand(1,300); @endphp
                        
                            
                        
                            <div class="card mb-4">
                                <div class="position-absolute bg-dark px-3 py-2">
                                    <a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                                </div>
                                {{-- <img src="https://source.unsplash.com/random/200x200/?{{ $post->category->name }}" class="card-img-top" width="300" alt="pap"> --}}
                                <img src="https://picsum.photos/id/{{ $x }}/250/250" alt="{{ $post->category->name }}">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="/posts/{{ $post->slug }}"></a>{{ $post->title }}</h4></h5>
                                    <p class="card-text">
                                        <small> By
                                            <a href="/posts?author={{ $post->user->username }}"  class="text-decoration-none">{{ $post->user->name }}
                                            </a>  
                                            {{ $post->created_at->diffForHumans() }}
                                        </small>
                                    </p>
                                    <p class="card-text">{{ $post->excerpt }}</p>

                                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More ...</a>
                                </div>
                            </div>
                            
                        </div>
                    @endforeach
                </div>
            </div> 
    
        @else
            <p class="text-center fs-5">Post not Found</p>
        @endif
        
        
    </div>
@endsection