<link rel="stylesheet" href="../../style/style.css">
<?php
include_once("../../sample/navigation_modules.html");
include_once("../module_1.php");
?>
<article class="modules-content">
<h2>Dowiedz się więcej</h2>
<p>Polecamy przeczytać</p>
<p>
    <ul>
    <li id="lit">
        Jesper Juul, Życie w rodzinie. Wartości w partnerstwie i rodzicielstwie, wyd. MiND, 2013 r.
        </li>
        <li id="lit">
        John M. Oldham, Lois B. Morris, Twój psychologiczny autoportret, wyd. Czarna Owca, 2019 r.
        </li>
        <li id="lit">
        Kevin Steede, 10 błędów popełnianych przez dobrych rodziców, wyd. GWP Gdańskie Wydawnictwo Psychologiczne, wyd. 2015
        </li>
    </ul>
</p>
<p class="attached">
    <!-- <a href="../../resources/poprawione-pdf/Kurs_na_relacje_modu__II-warto_ci-GD-pdf.pdf-correctedByPAVE.pdf" target="_blank"><img src="../../images/zasob_16.png" alt="ikona załącznika">trankrypcja tekstu</a> -->
</p>
    <div class = "back_next">
    <a href="1_2.php" class="back-button"> wróć</a>
    <a href="../part2/1_1-main.php" class="start-button">przejdź dalej</a>
    </div>
</article>
</section>
</section>
<script>
    
    function dupa(){
        document.getElementsByClassName("btn")[1].style.color='black'
    }
    window.onload = dupa();
</script>
<?php
include_once("../../sample/footer.html")
?>