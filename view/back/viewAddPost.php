<?php
$title = 'J.Forteroche | Posts';
ob_start();
?>

    <section id="posts">
        <form method="post" action="?action=formAddPost">
            <p><label for="title_post">Titres Episode</label> : <input type="text" name="title_post" id="title_post"></p>
            <p><label for="text_post">Texte de l'episode</label> : <textarea name="text_post" id="text_post"></textarea></p>
            <input type="submit" value="Ajouter Episode">
        </form>
    </section>

<?php
$content = ob_get_clean();
require('./view/front/template.php');