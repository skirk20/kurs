<link rel="stylesheet" href="../../style/style.css">
<?php
include_once("../../sample/navigation_modules.html");
include_once("../module_5.php");
?>
<article class="modules-content">
<h2>Polecana literatura</h2>
    <ul>
<li id="lit">
Angela Lee Duckworth, Upór. Potęga pasji i wytrwałości, wyd. Galaktyka, 2016 r.
</li>
<li id="lit">
Roy Baumeister, John Tierney, Siła woli. Odkryjmy na nowo to, co w człowieku najpotężniejsze, wyd. Media
Rodzina, 2013 r.

</li>
</ul>
<div class = "back_next">
    <a href="5_7.php" class="back-button"> wróć</a>
    <a href="5_9.php" class="start-button">powrót na stronę główną</a>
</div>
</article>
</section>
</section>
<script>
    
    function blure(){
        document.getElementsByClassName("btn")[6].style.color='black'
    }
    window.onload = blure();
</script>
<?php
include_once("../../sample/footer.html")
?>