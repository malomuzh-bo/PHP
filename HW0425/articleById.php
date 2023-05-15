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
include_once 'news.php';
include_once 'article.php';

$files = file_get_contents("articles.json");
$articles = json_decode($files, true);
$articleObj;

if (isset($_GET['id'])) {
    foreach ($articles as $article) {
        if ($article['id'] == $_GET['id']) {
            $articleObj = new Article($article['id'], $article['header'], $article['shortText'], $article['fullText']);
            echo $articleObj -> GetHeader('gray', 20);
            echo $articleObj -> GetFullText('black', 15) . "<hr/>";
            return;
        }
    }
}
else {
    echo 'Invalid request.';

}
?>
