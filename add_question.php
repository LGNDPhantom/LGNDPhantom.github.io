<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Question</title>
</head>
<body>
    <form action="insert_question.php" method="post">
        <!-- Add fields for question text, image, correct answer, and wrong answers -->
        <!-- Adjust as needed -->
        <label>Question Text:</label>
        <input type="text" name="question_text"><br>
        <label>Question Image:</label>
        <input type="file" name="question_image"><br>
        <!-- Other question-related fields here -->
        <input type="submit" name="submit" value="Add Question">
    </form>
</body>
</html>

