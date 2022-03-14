
<h1>User Login</h1>

<form action="users" method="POST">
    @csrf
    <input type="text" name="username" Placeholder="enter user id"/><br>
    <span style="color:red">@error("username"){{ $message }} @enderror</span>
    <br>
    <input type="password" name="Userpassword" Placeholder="enter user password"/><br>
    <span style="color:red">@error("Userpassword"){{ $message }} @enderror</span>
   
    <br>
    <button type="submit">Login</button>
</form>