@extends('layouts.app')

@section('content')
    <div class="content">
        <a href="{{ url('category') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Product List</a>
        {{ Form::model($product, ['route' => ['product.update', $product], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH',]) }}
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Create</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        @include("products.form")
                        <div class="edit-form-btn">
                        {{ link_to_route('product.index', 'cancel', [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit('update', ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        {{ Form::close() }}
    </div>
@endsection