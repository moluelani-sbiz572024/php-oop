<?php
require_once './sample01/WorkingTemplate.php';

use sample01\WorkingTemplate;

$work = new WorkingTemplate();

$work->setValiable('href', 'https://tomcat.apache.org/');
$work->setValiable('class', 'sample01');
$work->setValiable('alt', 'abcd9012');

echo $work->getHtml(
  '<a href="{href}" class="{class}" alt="{alt}">{href}</a>'
);