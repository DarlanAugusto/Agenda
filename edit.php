<?php 

include_once("templates/header.php");

?>
    
    <h1 class="main-title">Editar Contato</h1>
    <div id="container-edit">
        <form action="<?php echo $BASE_URL?>config/process.php" method ="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?php echo $contact["id"]?>">
            
            <div class="edit">
                <label class="subtitle" for="name">Nome:</label>
                <input class="upp" type="text" name="nome" id="nome" value ="<?php echo $contact["nome"]?>" required>

                <label class="subtitle" for="phone">Telefone:</label>
                <input class="upp" type="text" name="phone" id="phone" value="<?php echo $contact["phone"]?>" required>

                <label class="subtitle" for="obs">Observações:</label>
                <textarea name="observations" id="observations" cols="30" rows="4"><?php echo $contact["observations"]?></textarea>
            </div>
            <button class="btn" type="submit">Salvar</button>
        </form>
    </div>


<?php 

include_once("templates/footer.php");

?>
