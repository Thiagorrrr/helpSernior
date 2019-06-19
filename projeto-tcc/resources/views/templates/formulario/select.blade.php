<label class="{{$class?? null}} form-padrao__select">
    <span class="form-padrao__select-tipo"> Tipo de cartão de Crédito</span>
    {{ Form::select('form-padrao__select-input', $setors, null, array('class'=>'form-padrao__select-input')) }}
</label>
