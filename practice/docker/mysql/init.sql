CREATE TABLE IF NOT EXISTS posts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    excerpt VARCHAR(255) NOT NULL,
    content TEXT NOT NULL
);

INSERT INTO posts (title, slug, excerpt, content) 
VALUES 
('Title 1', 'title-1', 'First post excerpt', 'Full content for the first post...'),
('Title 2', 'title-2', 'Second post excerpt', 'Detailed content for the second post...'),
('Title 3', 'title-3', 'Third post summary', 'Third post main content here'),
('Title 4', 'title-4', 'Fourth preview', 'Content for the fourth article'),
('Title 5', 'title-5', 'Fifth intro', 'Final post content with examples');
