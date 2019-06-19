<label class="{{$class}} form-padrao__file">
    @isset($text)
    <span class="form-padrao__file-text">{{$text}} </span>
    @endisset
    {{ Form::file($tipo)}}
</label>