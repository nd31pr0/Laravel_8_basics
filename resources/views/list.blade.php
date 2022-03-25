<h1>Members List</h1>

<table border='1'>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>email</td>
        <td>Address</td>
    </tr>
    @foreach($members as $member)
        <tr>
            <td>{{ $member['Id'] }}</td>
            <td>{{ $member['Name'] }}</td>
            <td>{{ $member['email'] }}</td>
            <td>{{ $member['Address'] }}</td>
        </tr>
    @endforeach
    <
</table>