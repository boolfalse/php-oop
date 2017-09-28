<?php // Lesson 3
// CLASSES FILE

abstract class Publication
{
    public $id;
    public $title;
    public $content;
    public $preview;
    public $type;

    public function __construct($row)
    {
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->content = $row['content'];
        $this->preview = $row['preview'];
        $this->type = $row['type'];
    }

    public function printItemGlobal()
    {
        echo "Type of current publication: " . $this->type;
    }

    abstract public function printItem();
}

class NewsPublication extends Publication
{
    public function printItem(){
        echo "Նորություն<br />";
        $this->printItemGlobal();
    }
}

class ArticlePublication extends Publication
{
    public $author;

    public function printItem(){
        echo "Հոդված<br />";
        $this->printItemGlobal();
    }
}

class PhotoPublication extends Publication
{
    public $place;

    public function printItem(){
        echo "Նկար<br />";
        $this->printItemGlobal();
    }
}