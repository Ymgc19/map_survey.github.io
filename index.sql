CREATE DATABASE survey_db;

USE survey_db;

CREATE TABLE survey_responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    gender ENUM('male', 'female', 'other') NOT NULL,
    latitude DECIMAL(10, 8),
    longitude DECIMAL(11, 8),
    question1 TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
