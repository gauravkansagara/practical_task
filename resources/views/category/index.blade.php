@extends('layouts.app')

@section('content')
    <div class="content">
        <a href="{{ url('category/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Create Product</a>
        

        <table border=1>
        <tr>
            <th>Name</th>
            <th>Desc</th>
            <th>Action</th>
        </tr>
        
        @foreach($category as $cat)
        <tr>
            <td>{{ $cat->category_name }}</td>
            <td>{{ $cat->category_description }}</td>
            <td>
                <a href="category/{{ $cat->id }}/edit" class="btn btn-primary" role="button" aria-disabled="true">edit</a>
                <a href="javascript:void(0);" class="btn btn-primary" role="button" onclick="deleteProduct({{ $cat->id }})" aria-disabled="true">delete</a>
            </td>

        </tr>
        @endforeach
        </table>
    </div>
@endsection

@push('script')
<script>
    
    function deleteProduct(id) {
            $.ajax({
                url: "category/" + id,
                type: "DELETE",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(success) {
                    location.reload();
                },
                
            });
    }
    </script>
@endpush