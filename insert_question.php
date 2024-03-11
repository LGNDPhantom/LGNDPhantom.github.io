<?php
include_once 'db.php'; // Include the database connection file

if (isset($_POST['submit'])) {
    $question_text = $_POST['question_text'];

    // Handle image upload (adjust this part as needed)
    $target_dir = 'uploads/';
    $target_file = $target_dir . basename($_FILES['question_image']['name']);
    move_uploaded_file($_FILES['question_image']['tmp_name'], $target_file);

    // Insert question data into the 'questions' table
    $sql = "INSERT INTO questions (text, image_url) VALUES ('$question_text', '$target_file')";
    if ($conn->query($sql) === TRUE) {
        echo 'Question inserted successfully';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}

$conn->close(); // Close the database connection
?>
