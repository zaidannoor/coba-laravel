@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main>
                <div class="card bg-light mt-5">
                    <div class="card-body">
                        <h2 class="text-center mb-3">{{ $title }}</h2>
                        <form method="post">
                            <div class="form-group m-2">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="username" autocomplete="off">
                            </div>
                            <div class="form-group m-2">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                            </div>
                            <button type="submit" name="submit" class="btn btn-dark my-3" style="width: 100%;">Submit</button>
                        </form>
                    
                        <p>Already have an account ? 
                            <span class="badge badge-info">
                                <a href="/login" class="text-decoration-none">Login</a>
                            </span>
                        </p>
                    </div>
                </div>
            </main>
                
            
        </div>
    </div>
@endsection