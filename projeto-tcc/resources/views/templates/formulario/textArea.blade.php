<span class="form-padrao__text-area-info">Não coloque telefone e e-mail nesse campo. Caso contrario seu cadastro será excluído. </span>
<label class="{{ $class ?? null }}"> 
    {!! Form::textarea($input, $value ?? null, $attributes) !!}
</label>