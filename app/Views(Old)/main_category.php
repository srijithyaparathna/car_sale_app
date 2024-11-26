<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/category/create" method="post">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id"><br><br>

        <label for="category_name">Category Name:</label>
        <input type="text" id="category_name" name="category_name"><br><br>

        <label for="status">Status:</label>
        <input type="text" id="status" name="status"><br><br>

        <label for="created_date">Created Date:</label>
        <input type="date" id="created_date" name="created_date"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>