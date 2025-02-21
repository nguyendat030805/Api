<table class="table">
    <thead>
        <tr>
            <th>User ID</th>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $country)
        <tr>
            <td>{{ $country['userId'] }}</td>
            <td>{{ $country['id'] }}</td>
            <td>{{ $country['title'] }}</td>
            <td>{{ $country['body'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
