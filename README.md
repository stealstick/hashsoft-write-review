# hashsoft-write-review


##How to use

### POST /review/write.php

PARAMETERS

- id : Int
- name : String
- title : String
- text : String
- star : Int

RESPONSES

- insert : String(JSON)
- ex) {insert : ok} or {insert : error}

### GET /review/write.php

PARAMETERS

- id : Int

RESPONSES

- name : String
- title : String
- text : String
- time : String
- star : Int
- ex) [{"name":"","title":"","text":"","time":"September 18, 2016, 10:47 am","star":2}]





## How to use this source?

1. Add connect.php

connect.php
<?
mysql_connect('{database_url}','{database_id}','{database_pw}');
mysql_select_db('{database_select}');
?>

2. use sql query

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `time` varchar(30) NOT NULL,
  `star` int(11) NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




