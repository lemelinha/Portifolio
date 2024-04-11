<style>
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        padding: 10px;
    }

    form {
        display: flex;
        flex-direction: column;
        row-gap: 8px;

    }

    label {
        margin-top: 10px;
    }

    input {
        padding: 10px 20px;
        border-radius: 8px;
        background-color: #eee;
        transition: 200ms;
        margin-top: 5px;
    }
    
    input:hover,
    input:focus {
        background-color: #ccc;
        filter: grayscale(36%);
    }
    
    input[type="submit"]{
        cursor: pointer;
        background-color: var(--color-detach);
        font-size: 14px;
        font-weight: bold;
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
    if (sizeof($_POST) > 1){
        header('Location: /admin/add');
    }

    if (isset($alert)){
        echo $alert;
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