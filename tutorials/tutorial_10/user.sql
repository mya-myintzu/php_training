CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
)
INSERT INTO `users` (`userid`, `name`, `username`, `password`) VALUES
(1, 'test', 'test abc', 'guy76tvt577vvtyyunmkl990mnn76668');

