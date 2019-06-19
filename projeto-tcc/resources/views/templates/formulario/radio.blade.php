<label class="{{ $class ?? null }} form-padrao__radio"> 
    @isset($tipo)
    <span class="form-padrao__tipo-radio">{{$tipo ?? null}} </span>
    @endisset
    
    <div class="form-padrao__box-radio">
        {!! Form::radio($input, $value ?? null, $checked ?? null); !!}
        <span class="form-padrao__checkmark"></span>
        <span class="form-padrao__radio-text">{{$placeholder?? $input}} </span>
    </div>
</label>