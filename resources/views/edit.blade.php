<h1>Update Member</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="Id" value="{{ $data['Id'] }}">
    <input type="text" name="Id" value="{{ $data['Id'] }}"> <br> <br>
    <input type="text" name="Name" value="{{ $data['Name'] }}"> <br> <br>
    <input type="text" name="email" value="{{ $data['email'] }}"> <br> <br>
    <input type="text" name="Address" value="{{ $data['Address'] }}"> <br> <br>
    <button type='submit'>Update</button>
</form>