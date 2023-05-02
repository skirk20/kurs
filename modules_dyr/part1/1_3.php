<link rel="stylesheet" href="../../style/style.css">
<?php
include_once("../../sample/navigation_modules.html");
include_once("../module_1.php");
?>
<article class="modules-content">
    <h2>Refleksja</h2>
    <p>
        <ul>
            <li>Co jako dyrektor myślisz o&nbspdziałaniach obu nauczycielek?</li>
            <li>Jak zadbać o spójność działań wychowawczych w&nbspzespole?</li>
            <li>Jakie zadania, według Ciebie, ma wychowawca?</li>
            <li>Na czym powinien skoncentrować się wychowawca: na dbaniu o&nbspstan emocjonalny uczniów czy budowaniu wiedzy i&nbspumiejętności z&nbspnauczanego przedmiotu?</li>
        </ul>
    </p>
    
    
    <div class = "back_next">
            <a href="1_2.php" class="back-button"> wróć</a>
            <a href="1_4.php" class="start-button">przejdź dalej</a>
            </div>
</article>
</section>
</section>
<script>
    
    function dupa(){
        document.getElementsByClassName("btn")[2].style.color='black'
    }
    window.onload = dupa();
</script>
<?php
include_once("../../sample/footer.html")
?>