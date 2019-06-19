@include('templates.includes.header')
   
    <section id="conteudo-view" class="login hs-container">
        @include('templates.componentes.highlights', [ 'class'=> 'highlights--blue  highlights--cadastro ', 'title'=> 'Acesse sua conta'])

        {!! Form::open(['route' => 'user.login', 'method'=> 'post', 'class' => 'login__form']) !!}

            <label class="login__label"> 
                {!! Form::text('username', null, ['class'=> 'login__input', 'placeholder'=>'Usuario']) !!}
            </label>


            <label class="login__label"> 
                {!! Form::password('password', ['class'=> 'login__input','placeholder'=>'Senha' ]) !!}
            </label>

        {!! Form::submit('entrar', ['class'=> 'login__submit']) !!}
        {!! Form::close() !!}
        <div class="login__cadastrar"> 
           <p class="login__cadastrar-info">Ainda não tem cadastro? Crie seu usuário </p>
           <a href={{ url('/cadastro') }} class="login__cadastrar-btn">Cadastre-se</a>
        </div>
    </section>
@include('templates.includes.footer')