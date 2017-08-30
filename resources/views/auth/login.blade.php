<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }} ">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>

<body>

    <section class="login main">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4 maxwidth">
                    <div class="boxLogin">
                        <div class="heading rounded-top d-flex justify-content-center">
                            <img src="{{ asset('img/logo-login.png') }}" alt="Sinergia">
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="body">
                                <div class="d-flex justify-content-center">
                                    <div class="col-10 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Login</label>
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="" value="{{ old('email') }}" autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="col-10 form-group">
                                        <label for="password">Senha</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="footer rounded-bottom">
                                <div class="d-flex justify-content-center">
                                    <div class="col-5"></div>
                                    <div class="col-5">
                                        <button type="submit" class="btn btn-block btn-laranja">
                                            <i class="fa fa-sign-in" aria-hidden="true"></i> Entrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>