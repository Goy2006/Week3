<?php
class Book {
   
    private $title;
    private $author;
    private $status;

    public function setDetails($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function borrowBook() {
        $this->status = "Borrowed";
    }

    public function returnBook() {
        $this->status = "Returned";
    }

    public function getDetails() {
        return [
            'title' => $this->title,
            'author' => $this->author,
            'status' => $this->status
        ];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Library Book Management</title>
	<style>
		.bbtn {
			background-color: blue;
		}

		.rbtn {
			background-color: orange;
		}
	</style>
</head>
<body>
	<h1>Library Book Management</h1>
	<form action="" method="POST">
	<div>
		<labe>Title:</labe>
		<input type="txt" name="txtTitle" placeholder="Book Title" required>
	</div>
	<div>
		<label>Author:</label>
		<input type="txt" name="txtAuthor" placeholder="Enter your Author">
	</div>
	<div>
		 <button type="submit" name="Hinuram" class="bbtn">Borrow Book</button>
         <button type="submit" name="Ginbalik" class="rbtn">Return Book</button>
	</div>

</body>
</html>

<?php 
    if(isset($_POST['Hinuram']) || isset($_POST['Ginbalik']))
    {
   	     $book = new Book();
   	     $book->setDetails($_POST['txtTitle'], $_POST['txtAuthor']);
         if (isset($_POST['Hinuram'])) {
         $book->borrowBook();
         }
         elseif (isset($_POST['Ginbalik'])) {
         $book->returnBook(); 
        }
        
        $details = $book -> getDetails();
        echo "Title: " . $details['title'] . "<br>";
        echo "Author: " . $details['author'] . "<br>";
        echo "Status: " . $details['status'];
   }

   ?>