<h1>Members List</h1>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>email</td>
        <td>Address</td>
        <td>operation</td>
    </tr>
    @foreach ($members as $item)
    <tr>
        <td>{{ $item['Id'] }}</td>
        <td>{{ $item['Name'] }}</td>
        <td>{{ $item['email'] }}</td>
        <td>{{ $item['Address'] }}</td>
        <td><a href={{ "delete/".$item['Id'] }}>Delete</a></td>
        <td><a href={{ "edit/".$item['Id'] }}>Edit</a></td>
    </tr>
    @endforeach
</table>
