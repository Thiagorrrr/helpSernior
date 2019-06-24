<section class="card">
{{-- <a class="header__link" href="/{{$data->gender}}">{{$data->name}} </a> --}}
    <div class="card__wrapper"> 

    @if ($data->funcao === "Casa de Repouso")
        <span class="card__funcao card__funcao--casa"> {{$data->funcao}}</span>
    @else
        <span class="card__funcao card__funcao--cuidador"> {{$data->funcao}}</span>
    @endif
    @if ($data->image == null)
    <img class="card__img" src="/images/user.png"/>
    @else 
        <img class="card__img" src="/images/{{$data->image}}"/>

        
        
    @endif
        <h3 class="card__nome"> {{$data->name}}</h3>
        <span class="card__local">{{$data->municipio}} - {{$data->estado}}</span>
        <span class="card__cobranca">{{$data->cobranca}}</span>
        <span class="card__preco">
            <span class="card__moeda">R$</span>    
            {{$data->salario}}
        </span>
        <a class="card__btn" href="/usuario/{{$data->name}}/{{$data->id}}">Contratar </a>


    </div>


</section>


    