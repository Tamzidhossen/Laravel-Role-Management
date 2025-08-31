<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is Blog Dashboard</h1>
    <ul>
        @can('admin')
        <li><a href="#">Backup</a></li>
        <li><a href="#">Restore</a></li>
        <li><a href="#">Settings</a></li>
        @endcan
        @can('editor')
        <li><a href="#">Users</a></li>
        <li><a href="#">Media</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Tags</a></li>
        @endcan
        @can('author')
        <li><a href="#">Posts</a></li>
        <li><a href="#">Pages</a></li>
        <li><a href="#">Comments</a></li>
        @endcan
        @can('xUser')
            User Not Permission Access! Please Get Access in Admin.
        @endcan
    </ul>
</body>
</html>