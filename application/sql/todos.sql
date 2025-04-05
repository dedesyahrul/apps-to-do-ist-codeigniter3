-- Create the todos table
CREATE TABLE IF NOT EXISTS `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert some sample data
INSERT INTO `todos` (`title`, `description`, `status`, `created_at`) VALUES
('Complete Project', 'Finish the todo application project by implementing all features', 0, NOW()),
('Buy Groceries', 'Get milk, bread, eggs, and fruits from the supermarket', 0, NOW()),
('Call Mom', 'Schedule a call with mom to catch up', 0, NOW()),
('Exercise', 'Go for a 30-minute run in the park', 0, NOW()),
('Read Book', 'Read chapter 5 of the programming book', 0, NOW()); 
