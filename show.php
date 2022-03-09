<?php 

include_once("templates/header.php");

?>
<div class="container contact">
    <h1 id="main-title"><?php echo $contact["nome"]?></h1>
    <p class="subtitle">Telefone</p>
    <p><?php echo $contact["phone"]?></p>
    <p class="subtitle">Observações</p>
    <p><?php echo $contact["observations"]?></p>
    <?php include_once("templates/backBtn.html");?>
</div>

<?php 

include_once("templates/footer.php");

?>

