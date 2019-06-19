<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title ?? 'Help Seniors'}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Busque no help Seniors os melhores Cuidadores e casas de repouso." />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/app.css')}}">
    <script src="/js/app.js"></script>
</head>
<body>
    

    <header class="header"> 
        <nav class="header__container hs-container"> 
            <div class="header__hamburguer"> 
                <span class="header__hamburguer-line-up"></span>
                <span class="header__hamburguer-line-center"></span>
                <span class="header__hamburguer-line-down"></span>
            </div>
            <h1 class="header__title">Help Seniors</h1>
            <span class="header__user"></span>  
        </nav>
        <nav class="header__wrapper">
            <div class="header__inner"> 
                <ul class="header__lista">
                    @foreach ($links as $item)
                
                    <li class="header__item" >
                        <a class="header__link" href="/{{$item->url}}">{{$item->nome}} </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </nav> 
        
        <div class="header__login-box {{$login ?? null}}"> 
            <a href={{ url('/login') }} class="header__btn header__btn--enter">Entrar </a>    
            <a href={{ url('/cadastro') }} class="header__btn header__btn--login">Cadastrar </a>    
        </div>  
    </header>
