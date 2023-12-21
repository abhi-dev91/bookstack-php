# create test database
CREATE DATABASE IF NOT EXISTS `bookstacktest`;

# grant rights
GRANT ALL PRIVILEGES ON `bookstacktest`.* TO 'bookstacktest'@'%';
