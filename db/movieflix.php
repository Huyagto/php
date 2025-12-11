-- db/movieflix.sql
CREATE DATABASE IF NOT EXISTS movieflix CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE movieflix;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL UNIQUE,
  email VARCHAR(150) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  role VARCHAR(20) NOT NULL DEFAULT 'user',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Admin (password = admin123)
INSERT INTO users (username, email, password, role)
VALUES ('admin','admin@example.com','$2y$10$eVPqxG7sC4F7XnK9PBTfUeSPdVf8yVZPxhzxDaVurq1UD2ndXMh2y','admin');
