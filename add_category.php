<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Category</title>
</head>
<body>
    <form action="insert_category.php" method="post" enctype="multipart/form-data">
        <label>Category Name:</label>
        <input type="text" name="category_name"><br>
        <label>Category Image:</label>
        <input type="file" name="category_image"><br>
        <input type="submit" name="submit" value="Add Category">
    </form>
</body>
</html>
