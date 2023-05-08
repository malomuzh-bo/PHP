<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #e6edf3; 
font-family: -apple-system,BlinkMacSystemFont,'Segoe UI','Noto Sans',Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji'; 
font-size: var(--body-font-size, 14px);
line-height: 1.5; color: #0d1117">
    
</body>
</html>
<?php
include_once 'article.php';
include_once 'news.php';

$news = new News();

$news -> AddArticle("article1", "short text1.", "full text1.");
$news -> AddArticle("article2", "short text2.", "full text2.");
$news -> AddArticle("article3", "short text3.", "full text3.");
$news -> AddArticle("article4", "short text4.", "full text4.");
$news -> AddArticle("article5", "short text5.", "full text5.");

$news -> GetArticles();

echo "<hr/>";

?>