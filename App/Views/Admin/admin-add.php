<style>
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        padding: 10px;
    }

    button {
        background-color: var(--color-detach);
        padding: 10px 20px;
        border-radius: 2px;
        font-size: 18px;
        cursor: pointer;
    }
</style>

<?php
    if (isset($alert)){
        echo $alert;
    }

    if (sizeof($_POST) > 1){
        header('Location: /admin/add');
    }

?>

<button onclick='window.location.href = "/admin"'>Voltar</button>
<h1>Adicionar projeto</h1>
<form action="" method="post">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" required>
    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="10" required></textarea>
    <label for="github">Link para o GitHub</label>
    <input type="text" name="github" id="github">
    <label for="expo">Link para o Expo</label>
    <input type="text" name="expo" id="expo">
    <label for="online">Link para o Projeto Online</label>
    <input type="text" name="online" id="online">
    <input type="submit" value="Adicionar">
</form>