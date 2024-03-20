CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(255),
    UNIQUE (username)  -- Ensure usernames are unique
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE projects (
    project_id INT AUTO_INCREMENT PRIMARY KEY,
    project_title VARCHAR(255) NOT NULL,
    owner_id INT NOT NULL,
    project_date DATE NOT NULL,
    project_description TEXT NOT NULL,
   
    category ENUM('nature', 'people', 'architecture', 'animal', 'sports', 'travel') NOT NULL,
    project_url VARCHAR(255),
    FOREIGN KEY (owner_id) REFERENCES users(user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE photos (
    photo_id INT AUTO_INCREMENT PRIMARY KEY,
    photo_name VARCHAR(50) NOT NULL,
    project_id INT,
    photo_path VARCHAR(255) NOT NULL,
    /*description TEXT,*/
    FOREIGN KEY (project_id) REFERENCES projects(project_id)
);



CREATE TABLE testimonials (
    testimonial_id INT AUTO_INCREMENT PRIMARY KEY,
    project_id INT,
    testimonial_text TEXT NOT NULL,
    user_id INT,
    FOREIGN KEY (project_id) REFERENCES projects(project_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);
