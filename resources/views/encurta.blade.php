<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENCURTA</title>
</head>
<body>

    <form action="/encurta" method="post">
        @csrf <!-- {{ csrf_field() }} -->
        <label for="">Digite o LINK:</label>
        <input type="text" name="input">
        <input type="submit" value="Encurtar!">
    </form>
</body>
</html>