

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page-de-connection</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="formulaire">

    <div class="big-container">
        <div class="logo-and-form-container">
            <div class="logo-container">
                <div class="logo" >
                    <a href="###"> <img src="/HomaBiope-Croquis/Logo/logo-homabiope-blanc.png" alt="" width="100%"></a>
                </div>
                
            </div>
            <div class="form-container">
                <form action="{{route('login-user')}}" method="post">
                    @if(Session::get('success'))
                <div>{{Session::get('success')}}</div>
                @endif
    
                @if(Session::get('fail'))
                <div>{{Session::get('fail')}}</div>
                @endif
                @csrf
                    <h2>Page de connexion</h2>
                    <div class="email">
                        <input type="email" name="email" id="" placeholder="Adresse mail" value="{{old('email')}}" autofocus required>
                    <span>@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="password">
                        <input type="password" placeholder="Mot de passe" name="password" autofocus required>
                    <span>@error('password'){{$message}}@enderror</span>
                    </div>
                    <div class="inscription-item">
                        {{-- <div class="back">
                            <a href="#">
                                <i class="fa-solid fa-arrow-left"></i><span>&nbsp;Retour</span>
                            </a>
                        </div> --}}
                        <div class="inscription">
                            <button type="submit" class="connexion">Connection</button>
                        </div>
                        
                    </div>
                    <div class="forgot-password">
                        <a href="##"> Mot de passe oublié?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>