DROP DATABASE IF EXISTS todoapp;
CREATE DATABASE todoapp;
USE todoapp;
CREATE TABLE todo_app(
    id INT PRIMARY KEY AUTO_INCREAMENT,
    task_name VARCHAR(100) NOT NULL,
    status ENUM('complete','incomplete','inprogress') NOT NULL DEFAULT 'incomplete',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);