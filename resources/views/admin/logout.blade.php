<!-- resources/views/auth/logout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
<h2>Logout</h2>

<form action="{{ url('/logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
</body>
</html>
