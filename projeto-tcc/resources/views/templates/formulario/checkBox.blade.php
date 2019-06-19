<label class="{{$class}} form-padrao__checkbox">
    {{Form::checkbox('checkbox', $item, false)}}
    <span class="form-padrao__checkmark form-padrao__checkmark--checkbox"></span>
    <span class="form-padrao__checkbox-text">{{$text}}</span>
</label>