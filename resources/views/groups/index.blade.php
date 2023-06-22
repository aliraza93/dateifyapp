<!DOCTYPE html>
<html>
<head>
    <title>Groups</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        h1 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
    }

    .group {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .group h2 {
        color: #333;
        margin-top: 0;
    }

    .group ul {
        list-style: none;
        padding: 0;
    }

    .group li {
        margin-bottom: 10px;
    }

    .group img {
        max-height: 200px;
        max-width: 200px;
        object-fit: cover;
        border-radius: 5px;
    }

    .pagination {
        margin-top: 20px;
        text-align: center;
    }

    .pagination a {
        display: inline-block;
        padding: 5px 10px;
        background-color: #4caf50;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
        margin-right: 5px;
    }

    .pagination a:hover {
        background-color: #45a049;
    }

    .pagination .active {
        background-color: #333;
    }
</style>
</head>
<body>
    <h1>Groups</h1>
    @foreach($groups as $group)
    <div class="group">
        <h2>{{ $group->id }}: {{ $group->name }}, {{ $group->state }}</h2>
        <ul>
            <li>
                <img src="{{ $group->avatar }}" alt="">
            </li>
        </ul>
    </div>
@endforeach

<div class="pagination">
    {{ $groups->links() }}
</div>
</body>
</html>
