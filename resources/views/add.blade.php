<h1>Add Member</h1>
@if(session('user'))
<h2 style='color: green'>{{ session('user') }} user has been added</h2>
@endif
<form action="addmember" method="POST">
   @csrf
    <input type="text" name="user" placeholder="Enter User Name"> <br> <br>
    <input type="password" name="password" placeholder="Enter User Password"> <br> <br>
    <input type="text" name="email" placeholder="Enter User Email"> <br> <br>
    <button method='submit'>Add Member</button>
</form>