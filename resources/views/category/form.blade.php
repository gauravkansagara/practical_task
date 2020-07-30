<div class="box-body">
    <div class="form-group">
        {{ Form::label('name','Category Name' , ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('category_name',null, ['class' => 'form-control box-size', 'placeholder' => 'Name' ]) }}
            @if($errors->has('category_name'))
                <div class="alert alert-danger box-size">{{ $errors->first('category_name') }}</div>
            @endif
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('category_description','Category Description' , ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::textarea('category_description',null, ['class' => 'form-control box-size', 'placeholder' => 'Category Description' ]) }}
            @if($errors->has('category_description'))
                <div class="alert alert-danger box-size">{{ $errors->first('category_description') }}</div>
            @endif
        </div>
    </div>
    
</div>