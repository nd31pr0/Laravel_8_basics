<h1>Add Members</h1>

<form action="add" method='post'>
    @csrf
    <input type='text' name='Id' placeholder='Enter id'> <br> <br>
    <input type='text' name='Name' placeholder='Enter Name'> <br> <br>
    <input type='text' name='email' placeholder='Enter Email'> <br> <br>
    <input type='text' name='Address' placeholder='Enter Address'> <br> <br>
    <button type='submit'>Add Member</button> <br>