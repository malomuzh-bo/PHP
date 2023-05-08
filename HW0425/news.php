<?php
include_once 'article.php';
class News {
    public $listArticles = array();

    public function AddArticle($header, $shortText, $fullText) {
        $id = rand(1000, 9999);
        $article = new Article($id, $header, $shortText, $fullText);
        array_push($this -> listArticles, $article);
    }

    public function GetArticles() {
        foreach ($this -> listArticles as $article) {
            echo $article -> GetHeader("black", 20);
            echo $article -> GetShortText("gray", 12);
        }
    }

    public function GetArticle($id) {
        foreach ($this -> listArticles as $article) {
            if ($article -> GetId() == $id) {
                echo $article -> GetHeader('black', 20);
                echo $article -> GetFullText('gray', 12);
            }
        }
    }
}

?>