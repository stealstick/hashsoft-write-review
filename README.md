# hashsoft-write-review


##How to use

### POST /review/write.php

PARAMETERS

-id : Int
-name : String
-title : String
-text : string

RESPONSES

-insert : String(JSON)
- ex) {insert : ok} or {insert : error}

### GET /review/write.php

PARAMETERS

-id : Int

RESPONSES

- name : String
- title : String
- text : String
- time : String
- ex) [{"name":"","title":"","text":"","time":"September 18, 2016, 10:47 am"}]





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
  `time` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




