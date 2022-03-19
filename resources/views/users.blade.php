<h1>user List</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile photo</td>
    </tr>
    @foreach($collection as $item)

    <td>{{$item['id']}}</td>
    <td>{{$item['first_name'] }}</td>
    <td>{{$item['email'] }}</td>
    <td>img src={{ item['avatar'] }}</td>

    @endforeach

</table>