@extends('_layout.frontend')

@section('body')


    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 ">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1 class="text-center login-title">Login</h1>
                <div class="account-wall">

                    <img class="profile-img"
                         src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                         alt="">
                    <form class="form-signin" action="{{url('login')}}" method="post">
                        {{ csrf_field() }}
                        <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign in
                        </button>
                        <label class="checkbox pull-left">
                            <input type="checkbox" value="remember-me">
                            Remember me
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection