<link rel="stylesheet" href="../../style/style.css">
<?php
include_once("../../sample/navigation_modules.html");
include_once("../module_2.php");
?>
<article class="modules-content">
<h2>Literatura</h2>
<p>Polecamy przeczytać</p>
<p>
    <ul>
        
        <li id="lit">
        Marshall B. Rosenebrg, Porozumienie bez przemocy. O języku życia, wyd. Czarna Owca, 2015 r.
        </li>
        <li id="lit">
        Agnieszka Kozak, Joanna Berendt, Dogadać się z nastolatkiem. Dojrzałość i szacunek w relacji, wyd. CoJaNaTo, 2021 r.
        </li>
        <li id="lit">
        Carol Dweck, Nowa psychologia sukcesu, wyd. MUZA, 2015 r.
        </li>
    </ul>
</p>
<p class="attached">
<a href="../../resources/modul_3_docenianie/kurs_na_relacje_modul_III-docenianie-gd-pdf.pdf" target="_blank"><img src="../../images/zasob_16.png" alt="ikona załącznika">całość modułu</a>
</p>
    <div class = "back_next">
    <a href="2_6.php" class="back-button"> wróć</a>
    <a href="../part3/3_1-main.php" class="start-button">przejdź dalej</a>
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