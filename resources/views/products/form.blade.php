<div class="box-body">
    <div class="form-group">
        {{ Form::label('name','Name' , ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('product_name',null, ['class' => 'form-control box-size', 'placeholder' => 'Name' ]) }}
            @if($errors->has('product_name'))
                <div class="alert alert-danger box-size">{{ $errors->first('product_name') }}</div>
            @endif
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('product_description','Product Description' , ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::textarea('product_description',null, ['class' => 'form-control box-size', 'placeholder' => 'Product Description' ]) }}
            @if($errors->has('product_description'))
                <div class="alert alert-danger box-size">{{ $errors->first('product_description') }}</div>
            @endif
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('price','Price' , ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::number('price',null, ['class' => 'form-control box-size', 'placeholder' => 'Price','min'=>"1" ]) }}
            @if($errors->has('price'))
                <div class="alert alert-danger box-size">{{ $errors->first('price') }}</div>
            @endif
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('category_id','Category Name' , ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
        {!! Form::select('category_id',$category, null,['class' => 'form-control box-size','placeholder' => 'Select Category']) !!}
            @if($errors->has('category_id'))
                <div class="alert alert-danger box-size">{{ $errors->first('category_id') }}</div>
            @endif
        </div>
    </div>
</div>