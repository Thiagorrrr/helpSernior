@include('templates.includes.header')
@include('templates.componentes.highlights', [ 'class'=> 'highlights--blue highlights--about', 'classSub'=> 'highlights__subtitle--cadastro' ,'title'=> 'Crie sua conta', 'subTitle'=>'Cuidador | Casa de Repouso'])

{!! Form::open([ 'route' => 'user.store','method' => 'post', 'class' => 'form-padrao hs-container']) !!}
    @include('templates.formulario.input', [ 'class'=> 'form-padrao__label', 'input' => 'cpf', 'attributes' => ['placeholder' => 'CPF / CNPJ', 'class'=> 'form-padrao__input' ]])
    @include('templates.formulario.input', [ 'class'=> 'form-padrao__label', 'input' => 'name', 'attributes' => ['placeholder' => 'Nome', 'class'=> 'form-padrao__input' ]])
    @include('templates.formulario.input', [ 'class'=> 'form-padrao__label', 'input' => 'phone', 'attributes' => ['placeholder' => 'Telefone', 'class'=> 'form-padrao__input']])
    @include('templates.formulario.input', [ 'class'=> 'form-padrao__label', 'input' => 'email', 'attributes' => ['placeholder' => 'Email', 'class'=> 'form-padrao__input']])
    @include('templates.formulario.password', ['input' => 'password', 'attributes' => ['placeholder' => 'Senha', 'class'=> 'form-padrao__input no-margin-bottom ']])

    @include('templates.componentes.highlights', [ 'class'=> 'highlights--blue highlights--about-items', 'classSub'=> 'highlights__subtitle--cadastro' ,'title'=> '', 'subTitle'=>'Dados pessoais'])

    @include('templates.formulario.radio', [ 'class'=> 'form-padrao__label', 'input' => 'gender', 'value' => 'masculino', 'placeholder' => 'Masculino' ,'tipo'=>'sexo'])
    @include('templates.formulario.radio', [ 'class'=> 'form-padrao__label', 'input' => 'gender', 'value' => 'feminino','placeholder' => 'Feminino'])
    @include('templates.formulario.input', [ 'class'=> 'form-padrao__label', 'input' => 'nascimento', 'attributes' => ['placeholder' => 'Nascimento', 'class'=> 'form-padrao__input no-margin-bottom']])



    @include('templates.componentes.highlights', [ 'class'=> 'highlights--blue highlights--about-items', 'classSub'=> 'highlights__subtitle--cadastro' ,'title'=> '', 'subTitle'=>'  Preencha o CEP e o número da sua residencia'])

    @include('templates.formulario.input', [ 'class'=> 'form-padrao__label', 'input' => 'rua', 'attributes' => ['placeholder' => 'Rua', 'class'=> 'form-padrao__input' ]])
    @include('templates.formulario.input', [ 'class'=> 'form-padrao__label', 'input' => 'cep', 'attributes' => ['placeholder' => 'Cep', 'class'=> 'form-padrao__input' ]])
    @include('templates.formulario.input', [ 'class'=> 'form-padrao__label', 'input' => 'numero', 'attributes' => ['placeholder' => 'Número', 'class'=> 'form-padrao__input' ]])
    @include('templates.formulario.input', [ 'class'=> 'form-padrao__label', 'input' => 'estado', 'attributes' => ['placeholder' => 'Estado', 'class'=> 'form-padrao__input' ]])
    @include('templates.formulario.input', [ 'class'=> 'form-padrao__label', 'input' => 'municipio', 'attributes' => ['placeholder' => 'Município', 'class'=> 'form-padrao__input no-margin-bottom' ]])






    @include('templates.componentes.highlights', [ 'class'=> 'highlights--blue highlights--about-items', 'classSub'=> 'highlights__subtitle--cadastro' ,'title'=> '', 'subTitle'=>'Foto' ])
    @include('templates.formulario.file', [ 'class'=> 'form-padrao__label', 'tipo'=> 'image' , 'text'=> 'Você pode incluir sua foto'])

    @include('templates.formulario.checkBox', [ 'class'=> 'form-padrao__label', 'item'=> 'terms', 'text'=>'Li e concordo com os termos de uso.'])

    
  


    @include('templates.formulario.submit', ['class'=> 'form-padrao__submit','input' => 'Enviar'])

 
{!! Form::close() !!}

@include('templates.includes.footer')