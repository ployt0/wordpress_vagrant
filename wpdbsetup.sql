CREATE DATABASE IF NOT EXISTS wordpress;
# @ localhost limits this user to connecting via the local socket. NOT remotely.
CREATE USER IF NOT EXISTS wordpressabuser@localhost IDENTIFIED BY 'wordpiece';
GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP,ALTER ON wordpress.* TO 'wordpressabuser'@'localhost';
FLUSH PRIVILEGES;
