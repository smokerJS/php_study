### serve
~~~console
npm install
npm run build

mysql port 4000
~~~


### table
~~~console
CREATE TABLE `user` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `birth` datetime DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `message` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

CREATE TABLE `board` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `writer` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL DEFAULT 'coment',
  `content` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_no` int(11) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `user_no_idx` (`user_no`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
~~~