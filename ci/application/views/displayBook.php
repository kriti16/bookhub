<h2><?php echo $title." books"; ?></h2>

<?php foreach ($bookdetails as $book_item): ?>

        <h3><?php echo $book_item['title']; ?></h3>
        <div class="main">
                <?php echo "Author:".$book_item['author'];
                      echo "Intro:".$book_item['intro'];                      
                ?>
        </div>

<?php endforeach; ?>


