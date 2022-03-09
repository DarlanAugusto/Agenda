<?php 

include_once("templates/header.php");

?>
    
<div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?php echo $printMsg?></p>
    <?php endif;?>
    <h1 id="main-title">Minha Agenda</h1>
    <?php if(count($contacts ) > 0 ): ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact): ?>
                    <tr>
                        <td scope="row"><?php echo $contact["id"]; ?></td>
                        <td scope="row"><?php echo $contact["nome"]; ?></td>
                        <td scope="row"><?php echo $contact["phone"]; ?></td>
                        <td class = "actions">
                            <a href="<?php echo $BASE_URL ?>#"><i class="fa-solid fa-eye"></i></a>
                            <a href="<?php echo $BASE_URL ?>#"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="<?php echo $BASE_URL ?>#"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p id="empty-text"> Ainda não há contatos na sua agenda, <a href="<?php echo $BASE_URL?>create.php">Clique aqui para adicionar!</a> </p>    
    <?php endif; ?>
</div>


<?php 

include_once("templates/footer.php");

?>

