<?php
    $page = 'home';
    include_once "Header.php";
?>
        <img src="img/FPSP slika.jpg" class="picture01">
        <div class="content">
        <h2 class="welcome">Dobro došli na sajt studentskog parlamenta</h2>
            <div class="articles-wrapper">
                <div class="article-wrapper">
                    <a href="News 1.php"><img class="article-image" src="img/Image 1.jpg"></a>
                    <a href="News 1.php" class="news-title"><h2>Naslov 1</h2></a>
                    <div class="date">30-11-2020</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
                    <button class="read-more" onclick="window.location.href='News 1.php';">Pročitajte više</button>
                </div>
                <div class="article-wrapper">
                    <a href="News 2.php"><img class="article-image" src="img/Image 2.jpg"></a>
                    <a href="News 2.php" class="news-title"><h2>Naslov 2</h2></a>
                    <div class="date">28-11-2020</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button class="read-more" onclick="window.location.href='News 2.php';">Pročitajte više</button>
                </div>
                <div class="article-wrapper">
                    <a href="News 3.php"><img class="article-image" src="img/Image 3.jpg"></a>
                    <a href="News 3.php" class="news-title"><h2>Naslov 3</h2></a>
                    <div class="date">26-11-2020</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button class="read-more" onclick="window.location.href='News 3.php';">Pročitajte više</button>
                </div>
                <div class="article-wrapper">
                    <a href="News 4.php"><img class="article-image" src="img/Image 4.jpg"></a>
                    <a href="News 4.php" class="news-title"><h2>Naslov 4</h2></a>
                    <div class="date">24-11-2020</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button class="read-more " onclick="window.location.href='News 4.php';">Pročitajte više</button>
                </div>
                
            </div>
            
        </div>
    <?php
        include_once "Footer.php";
    ?>
