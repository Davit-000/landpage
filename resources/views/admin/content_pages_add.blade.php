<div class="wrapper container-fluid">
    {!!
        Form::open([
            'url' => route('pagesAdd'),
            'class'=> 'form-horizontal',
            'method' => 'POST',
            'enctype' => 'multipart/form-data'
         ])
    !!}
    <div class="form-group">
        {!! Form::label('alias', 'Pseudo', ['class' => 'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('alias', old('alias'), [
                'class' => 'form-control',
                'placeholder' => 'Enter Page Alias'
                ])
            !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('text', 'Text', ['class' => 'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('text', old('text'), [
                'id' => 'editor',
                'class' => 'form-control',
                'placeholder' => 'Enter Page Title'
                ])
            !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Image', ['class' => 'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('images', [
                'class' => 'filestyle',
                'data-buttonText' => 'Chose Images',
                'data-buttonName' => 'btn-primary',
                'data-placeholder' => 'No File',
                'data-iconName' => 'glyphicon glyphicon-inbox',
                'data-buttonBefore' => 'false'
                ])
            !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('link', 'Link', ['class' => 'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('link', old('link'), [
                'class' => 'form-control',
                'placeholder' => 'Enter Link'
                ])
            !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-5 col-xs-10">
            {!! Form::button(Html::tag('i', '', ['class' => 'fa fa-times']) . ' Save', [
                    'class' => 'btn btn-primary btn-lg',
                    'type' => 'submit'
                ])
            !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>

<script>
    CKEDITOR.replace('editor');
</script>