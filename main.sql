CREATE TABLE categories (
    category_id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    image_url VARCHAR(255)
);

CREATE TABLE questions (
    question_id INT PRIMARY KEY,
    category_id INT NOT NULL,
    text TEXT NOT NULL,
    image_url VARCHAR(255),
    correct_answer_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(category_id)
);

CREATE TABLE answers (
    answer_id INT PRIMARY KEY,
    question_id INT NOT NULL,
    text TEXT NOT NULL,
    image_url VARCHAR(255),
    is_correct BOOLEAN NOT NULL,
    FOREIGN KEY (question_id) REFERENCES questions(question_id)
);
