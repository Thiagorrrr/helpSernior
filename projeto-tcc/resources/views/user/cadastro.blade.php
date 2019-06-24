@include('templates.includes.header')
<section class="cadastro" >
    @include('templates.componentes.highlights', [ 'class'=> 'highlights--orange-dark highlights--cadastro', 'title'=> 'Cadastre-se agora'])

    <div class="cadastro__container"> 
        <div class="cadastro__cards"> 
            <p class="cadastro__type cadastro__type--parceiro">Sou Parceiro</p>
            <div class="cadastro__img cadastro__img--parceiro"> </div>
            <a href={{ url('/cadastro/parceiro') }} class="cadastro__btn cadastro__btn--parceiro"> Quero participar</a>
        </div>
        <div class="cadastro__cards"> 
            <p class="cadastro__type cadastro__type--cliente">Sou Cliente</p>
            <div class="cadastro__img cadastro__img--cliente"> </div>
            <a href={{ url('/cadastro/cliente') }} class="cadastro__btn cadastro__btn--cliente">Quero contratar </a>
        </div>
    </div>
</section>
@include('templates.includes.footer')