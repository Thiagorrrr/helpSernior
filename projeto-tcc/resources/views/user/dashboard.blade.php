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
    @else
        <h3 class="dashboard__name dashboard__name--cuidador"> {{$data->name}}</h3>
    @endif

    @if ($data->funcao === "Casa de Repouso")
    <h3 class="dashboard__funcao dashboard__funcao--casa"> {{$data->funcao}}</h3>
    @else
    <h3 class="dashboard__funcao dashboard__funcao--cuidador"> {{$data->funcao}}</h3>
    @endif

    @if ($data->funcao === "Casa de Repouso")
    <span class="dashboard__type"> Casa de Repouso que atende todos as normas previstas.</span>
    @else
    <span class="dashboard__type"> Profissional qualificado para serviço de cuidador.</span>
    @endif

    <span class="dashboard__cobranca">{{$data->cobranca}}</span>
    <span class="dashboard__preco">
        <span class="dashboard__moeda">R$</span>    
        {{$data->salario}}
    </span>
    </div>
</div> 
<div class="dashboard__box-call hs-container"> 
    <a class="dashboard__box-call-btn" href="tel:{{$data->phone}}">Ligar</a> <span class="dashboard__box-call-number">{{$data->phone}}</span>

</div>

<div class="dashboard__box-description hs-container"> 
    <span class="dashboard__description">Descrição:</span>
    <p class="dashboard__paragrafo">{{$data->descri}}</p>

   @if ($data->funcao === "Casa de Repouso")
   <span class="dashboard__description">Localização:</span>
    <p class="dashboard__paragrafo">Rua:  {{$data->rua}}</p>
    <p class="dashboard__paragrafo">Cep: {{$data->cep}}</p>
    <p class="dashboard__paragrafo">Número: {{$data->numero}}</p>
    <p class="dashboard__paragrafo">Municipio: {{$data->municipio}}</p>
    @else
   
    @endif

</div>


</div>
@include('templates.includes.footer')
   
   
   