<?php
include 'Book.php';
class Model
{
    public function getBookDetails()
    {
        return array(
            "xyz"=>new Book('xyz','Ajay suneza','classic book'),
            "Jungle Book"=>new Book('Jungle Book','R.kipling','classic book')
        );
    }
    public function getBook($title)
    {
       $allbooks= $this->getBookDetails();
       return $allbooks[$title];
    }
}


?>