<label class="{{$class?? null}} form-padrao__select">
<span class="form-padrao__select-tipo"> {{$text ?? null}}</span>
    {{ Form::select( $name, $setors, null, array('class'=>'form-padrao__select-input' )) }}
</label>
