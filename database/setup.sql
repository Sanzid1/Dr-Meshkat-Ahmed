-- Create database if not exists
CREATE DATABASE IF NOT EXISTS dr_meshkat_db;
USE dr_meshkat_db;

-- Publications table
CREATE TABLE IF NOT EXISTS publications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    journal VARCHAR(255),
    year INT,
    authors TEXT,
    doi VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Awards and honors table
CREATE TABLE IF NOT EXISTS awards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    organization VARCHAR(255),
    year INT,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Research projects table
CREATE TABLE IF NOT EXISTS research_projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    start_date DATE,
    end_date DATE,
    funding_source VARCHAR(255),
    description TEXT,
    status ENUM('Ongoing', 'Completed', 'Planned') DEFAULT 'Ongoing',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Experience table
CREATE TABLE IF NOT EXISTS experience (
    id INT AUTO_INCREMENT PRIMARY KEY,
    position VARCHAR(255) NOT NULL,
    institution VARCHAR(255) NOT NULL,
    start_date DATE,
    end_date DATE,
    description TEXT,
    type ENUM('Academic', 'Clinical', 'Research') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Blog posts table
CREATE TABLE IF NOT EXISTS blog_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    author VARCHAR(100),
    status ENUM('draft', 'published') DEFAULT 'draft',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);