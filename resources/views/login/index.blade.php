@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card bg-light" style="margin-top: 30%">
                <div class="card-body">
                    <h1 class="text-center mb-3">{{ $title }}</h1>
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
                    <a id="lupa" class="text-decoration-none" href="/lupa">Forgot Password ?</a>
                    <p>Doesn't have an account ? 
                        <span class="badge badge-inf">
                            <a href="/regis" class="text-decoration-none">Regis here</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection