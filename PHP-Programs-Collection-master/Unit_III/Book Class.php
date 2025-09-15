<?php
	class Book
	{
		var $book_id;
		var $book_name;
		var $book_price;
		function get_book_info()
		{
			$this->book_id=readline("Enter Book ID : ");
			$this->book_name=readline("Enter Book Name : ");
			$this->book_price=readline("Enter Book Price : ");
		}
		function disp_book_info()
		{
			if($this->book_price>500)
			{
			    echo "\nBook ID : $this->book_id";
    			echo "\nBook Name : $this->book_name";
    			echo "\nBook Price : $this->book_price";
			}
		}
	}
	$b1=new Book();
	$b2=new Book();
	$b3=new Book();
	
	$b1->get_book_info();
	$b2->get_book_info();
	$b3->get_book_info();
	
	$b1->disp_book_info();
	$b2->disp_book_info();
	$b3->disp_book_info();
?>