<label class="{{ $class ?? null }} form-padrao__input-date"> 
    <span class="form-padrao__input-date-text">Nascimento</span>
    {!! Form::date($input, $value ?? null, $attributes) !!}
</label>