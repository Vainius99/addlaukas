@extends('layouts.app')


@section('content')


<div class="container">
    <form method="get" action="{{route('client.create')}}">
        <input type="text" name="clientCount" value="{{$clientCount}}">
        <button type="submit"> add client</button>
    </form>

    <form method="get" action="{{route('client.create')}}">
        <input type="text" name="clientCount" value="{{$clientCount}}" hidden>
        <button type="submit" name="clientAdd" value="add">Add</button>
        <button type="submit" name="clientAdd" value="remove">Remove</button>
    </form>

    <div class="addClient">
        <button class="btn btn-primary" id="addClient">Add Client</button>
    </div>


    <form method='post' action="{{route('client.store')}}">
        <div class="dynamicFields">
            @for ($i=0; $i<$clientCount; $i++ )
            <div class="client">
                <input type="text" name="client_name[][name]"/>
                <input type="text" name="client_surname[][surname]"/>
                <textarea type="text" name="client_description[][description]"></textarea>
                <button type="button" class="btn btn-danger remove-client">X</button>
            </div>
            @endfor
        </div>
        @csrf
        <button type="submit"> create</button>
    </form>
</div>

<script>
$(document).ready(function(){
    $("#addClient").click(function() {
        $(".dynamicFields").append('<div class="client"><input type="text" name="client_name[]"/><input type="text" name="client_surname[]"/> <textarea type="text" name="client_description[]"></textarea><button type="button" class="btn btn-danger remove-product">X</button>')
    });

    $(document).on('click', '.remove-client', function() {
        $(this).parents('.client').remove();
    });
})

</script>


@endsection
