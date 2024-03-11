<?php
include_once 'db.php'; // Include the database connection file

if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];

    // Handle image upload (adjust this part as needed)
    $target_dir = 'uploads/';
    $target_file = $target_dir . basename($_FILES['category_image']['name']);
    move_uploaded_file($_FILES['category_image']['tmp_name'], $target_file);

    // Insert category data into the 'categories' table
    $sql = "INSERT INTO categories (name, image_url) VALUES ('$category_name', '$target_file')";
    if ($conn->query($sql) === TRUE) {
        echo 'Category inserted successfully';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}

$conn->close(); // Close the database connection
?>
