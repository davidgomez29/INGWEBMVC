<html>  
<head></head>  
  
<body>  
  
    <table>  
        <tbody><tr><td>Title</td><td>Autor</td><td>Description</td></tr></tbody>  
        <?php   
  
            foreach ($books as $title => $book)  
            {  
                echo '<tr><td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td><td>'.$book->autor.'</td><td>'.$book->description.'</td></tr>';  
            }  
  
        ?>  
    </table>  
  
</body>  
</html>  