<link rel="stylesheet" href="../../style/style.css">
<?php
include_once("../../sample/navigation_modules.html");
include_once("../module_1.php");
?>
<article class="modules-content">
<h2>Literatura</h2>
<p>Polecamy przeczytać</p>
<p>
    <ul>
        <li id="lit">
        Jakub B. Bączek, Jacek Santorski, Z prądem i pod prąd. Determinacja, wyd. JS & Co Dom Wydawniczy, 2017 r.

        </li>
        <li id="lit">
        John Hattie, Widoczne uczenie się dla nauczycieli, wyd. Centrum Edukacji Obywatelskiej, 2015 r.
        </li>
        <li id="lit">
        John Kotter, Holger Rathgeber, Peter Mueller, Gdy góra lodowa topnieje. Wprowadzanie zmian w każdych okolicznościach, wyd. Helion, 2008 r.

        </li>
        <li id="lit">
        Robert J. Marzano, Sztuka i teoria skutecznego nauczania, wyd. Civitas, 2015 r.
        </li>
        <li id="lit">
        Tony Stoltzfus, Sztuka zadawania pytań w coachingu. Jak opanować najważniejszą umiejętność coacha?, wyd. Aetos Media Sp. z o. o., 2012 r.
        </li>

    </ul>
</p>
<p class="attached">
<a href="../../resources/poprawione-pdf/Kurs_na_relacje-modu__I-dyrektor-pdf.pdf-correctedByPAVE.pdf" target="_blank"><img src="../../images/zasob_16.png" alt="ikona załącznika">całość modułu</a>
</p>
    <div class = "back_next">
            <a href="1_6.php" class="back-button"> wróć</a>
            <a href="../../index.php" class="start-button">powrót na stronę główną</a>
            </div>
</article>
</section>
</section>
<script>
    
    function dupa(){
        document.getElementsByClassName("btn")[6].style.color='black'
    }
    window.onload = dupa();
</script>
<?php
include_once("../../sample/footer.html")
?>