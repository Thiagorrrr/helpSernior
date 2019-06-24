@include('templates.includes.header')

<div class="hs-container buscar">
    @include('templates.componentes.highlights', [ 'class'=> 'highlights--blue highlights--about-items', 'classSub'=> 'highlights__subtitle--cadastro' ,'title'=> '', 'subTitle'=>' Pesquise por cuidadores e casas de repouso'])
    <form action="/buscar" method="GET" role="search" class="form-buscar">
        {{ csrf_field() }}
        <div class="form-buscar__content">
            <input type="text" class="form-buscar__input" name="q" placeholder="Nome"> 
            
            <button type="submit" class="form-buscar__btn">
                <span class="form-buscar__search"></span>
            </button>
            
        </div>
    </form> 
    
    @isset($mensagem)
        <span class="buscar__mensagem"> {{$mensagem}} </span>
    @endisset

    <div class="buscar__container"> 
    @foreach ($data as $item)
        @include('user.card', ['data' => $item] )
    @endforeach 

    </div>
    

</div>
@include('templates.includes.footer')
      
   