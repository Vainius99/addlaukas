
@if ($clients->count() == 0)
<p>Client table is empty</p>
@endif
<a style="color:rgb(121, 95, 26);" href="{{ url('/clients/create')}}">Create</a>
<table>
    <thead>
    <tr>
        <th> ID</th>
        <th> Name</th>
        <th> Surname</th>
        <th> Description </th>
        <th>Action</th>
    </tr>
    </thead>
@csrf
    @foreach ($clients as $client)
    <tr>
        <td>{{ $client->id }}</td>
        <td>{{ $client->name }}</td>
        <td>{{ $client->surname }}</td>
        <td> {{ $client->description }}</td>
        <td> Action </td>
    </tr>
    @endforeach
</table>
