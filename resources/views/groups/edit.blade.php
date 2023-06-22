<!DOCTYPE html>
<html>
<head>
    <title>Edit Group</title>
    <style>
        /* CSS styles here */
    </style>
</head>
<body>
    <h1>Edit Group</h1>
    <form action="/groups/{{ $group->id }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $group->name }}">
        
        <label for="state">State:</label>
        <input type="text" id="state" name="state" value="{{ $group->state }}">
        
        <label for="url">url:</label>
        <input type="text" id="url" name="url" >
        <!-- Add other fields as needed -->

        <button type="submit">Update</button>
    </form>
</body>
</html>
