<!DOCTYPE html>
<html>
<head>
    <title>Edit Group</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h1 {
        text-align: center;
        margin-top: 50px;
        color: #333;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
        color: #333;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
        margin-bottom: 20px;
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Group</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
css
Copy code
    h1 {
        text-align: center;
        margin-top: 50px;
        color: #333;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
        color: #333;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
        margin-bottom: 20px;
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
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
        
        <label for="url">URL:</label>
        <input type="text" id="url" name="url" >
        <!-- Add other fields as needed -->
    
        <button type="submit">Update</button>
    </form>

</body>
</html>