@extends('layouts.app')

@section('content')
    <div class="content">
        <a href="{{ url('product/create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Create Product</a>
        <input type="text" id="search" placeholder="Search"/>
        <select id="sortingPrice">
            <option value="">Sort By Price</option>
            <option value="asc">ASC</option>
            <option value="desc">DESC</option>
        </select>
        <table border=1 id="productData">
        <thead>
            <tr>
                <th>Name</th>
                <th>Desc</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
        </table>
    </div>
@endsection
@push('script')
<script>
    $(document).ready(function(){
        ajaxcall("","");

        $("#search").keyup(function(){
            var searchdata = $(this).val();
            var sort = $("#sortingPrice").val();
            ajaxcall(searchdata,sort)
        });

        $("#sortingPrice").change(function(){
            var sort = $(this).val();
            var searchdata = $("#search").val();
            ajaxcall(searchdata,sort)
        });
    });

    function deleteProduct(id) {
        $.ajax({
            url: "product/" + id,
            type: "DELETE",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(success) {
                var searchdata = $(this).val();
                var sort = $("#sortingPrice").val();
                ajaxcall(searchdata,sort)
            },
            
        });
    }

    function ajaxcall(search,sort) {
        $.ajax({
            url: "{{ url('/api/getProduct')}}",
            type: "POST",
            data:{
                "product_data":search,
                "sorting":sort
            },
            success: function(response) {
                $("#productData").find("tr:gt(0)").remove();
                var data = response.data; 
                var trData = "";
                for(var i=0; i< data.length; i++){
                    trData += "<tr><td>"+data[i].product_name+"</td><td>"+data[i].product_description+"</td><td>"+data[i].price+"</td> <td> <a href='product/"+data[i].id+"/edit' class='btn btn-primary' role='button' aria-disabled='true'>edit</a><a href='javascript:void(0);' onclick='deleteProduct("+data[i].id+")' class='btn btn-primary' role='button' aria-disabled='true'>Delete</a></td></tr>";
                }
                $('#productData tbody').append(trData);
            },
        });
    }
</script>
@endpush