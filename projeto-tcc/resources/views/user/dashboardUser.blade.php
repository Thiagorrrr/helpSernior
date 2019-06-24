@include('templates.includes.header')
<div class="dashboard"> 

<div class="dashboard__wrapper-user hs-container "> 
    
    @if ($data->image == null)
    <img class="dashboard__img" src="/images/user.png"/>
    @else 
    <img class="card__img" src="/images/{{$data->image}}"/>
        
    @endif
    
    <div class="dashboard__info"> 
 
    @if ($data->funcao === "Casa de Repouso")
        <h3 class="dashboard__name dashboard__name--casa"> {{$data->name}}</h3>

    @elseif ($data->funcao === "Cuidador")
        <h3 class="dashboard__name dashboard__name--cuidador"> {{$data->name}}</h3>
    @else
        <h3 class="dashboard__name"> {{$data->name}}</h3>
    @endif

    @if ($data->funcao === "Casa de Repouso")
    <h3 class="dashboard__funcao dashboard__funcao--casa"> {{$data->funcao}}</h3>

    @elseif ($data->funcao === "Cuidador")
    <h3 class="dashboard__funcao dashboard__funcao--cuidador"> {{$data->funcao}}</h3>
    
    @else
    <h3 class="dashboard__funcao"> {{$data->funcao}}</h3>
    @endif

    @if ($data->funcao === "Casa de Repouso")
    <span class="dashboard__type"> Casa de Repouso que atende todos as normas previstas.</span>
    @elseif ($data->funcao === "Cuidador")
    <span class="dashboard__type"> Profissional qualificado para serviço de cuidador.</span>
    @else
    <span class="dashboard__type">Cliente apto para contratar</span>
    @endif

    <span class="dashboard__type">Aniversário: {{$data->birth}}</span>
    @if ($data->gender === "M")
    <span class="dashboard__type">Masculino</span>
    @else 
    <span class="dashboard__type">Feminino</span>
    @endif

    @if ($data->salario) 
    <span class="dashboard__cobranca">{{$data->cobranca}}</span>
    <span class="dashboard__preco">
        <span class="dashboard__moeda">R$</span>    
        {{$data->salario}}
    </span>
    @endif
    </div>

        {{-- {{$data->phone}}
        {{$data->birth}}
        {{$data->gender}}
        {{$data->notes}}
        {{$data->rua}}
        {{$data->cep}}
        {{$data->numero}}
        {{$data->municipio}}
        {{$data->estado}}
        {{$data->titular}}
        {{$data->ncartao}}
        {{$data->dtvalidade}}
        {{$data->bandeira}}
        {{$data->securycode}}
        {{$data->cobranca}}
        {{$data->funcao}}
        {{$data->salario}}
       {{$data->image}}
        {{$data->terms}}
        {{$data->desc}} --}}
</div> 

<div class="dashboard__box-description hs-container"> 
    @if ($data->descri) 
    <span class="dashboard__description">Descrição:</span>
    <p class="dashboard__paragrafo">{{$data->descri}}</p>
    @endif

    @if ($data->ncartao) 
    <span class="dashboard__description">Cartão:</span>   
    <p class="dashboard__paragrafo"><strong>Titular:</strong> {{$data->titular}}</p>
    <p class="dashboard__paragrafo"><strong>Número do cartão:</strong> {{$data->ncartao}}</p>
    <p class="dashboard__paragrafo"><strong>Data de Validade:</strong> {{$data->dtvalidade}}</p>
    <p class="dashboard__paragrafo"><strong>Bandeira:</strong> {{$data->bandeira}}</p>
    <p class="dashboard__paragrafo"><strong>Número de segurança:</strong> {{$data->securycode}}</p>
    @endif

   @if ($data->funcao === "Casa de Repouso" || $data->funcao === null)
   <span class="dashboard__description">Localização</span>
    <p class="dashboard__paragrafo"><strong>Rua:</strong>  {{$data->rua}}</p>
    <p class="dashboard__paragrafo"><strong>Cep:</strong> {{$data->cep}}</p>
    <p class="dashboard__paragrafo"><strong>Número:</strong> {{$data->numero}}</p>
    <p class="dashboard__paragrafo"><strong>Municipio:</strong> {{$data->municipio}}</p>
    @endif

</div>


</div>
@include('templates.includes.footer')
   
   
   