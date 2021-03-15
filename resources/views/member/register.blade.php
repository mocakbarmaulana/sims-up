<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="card py-5" style=" width: 28rem">
            <div class="card-title text-center">
                <h1>Sims Up</h1>
            </div>
            <div class="card-body">
                <form action="{{route('member.register_proses')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Full Name" value="{{old('name')}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong class="px-2">*{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            placeholder="Email" value="{{old('email')}}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong class="px-2">*{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="address" class="form-control @error('address') is-invalid @enderror"
                            name="address" placeholder="Address">{{old('address')}}</textarea>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong class="px-2">*{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control @error('phone_number') is-invalid @enderror"
                            name="phone_number" placeholder="Phone Number" value="{{old('phone_number')}}">
                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong class="px-2">*{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong class="px-2">*{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Password">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Register</button>
                        <div class="d-flex align-items-center">
                            <a href="{{route('member.login')}}">Log in?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
