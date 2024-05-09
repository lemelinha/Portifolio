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

<button onclick='window.location.href = "/admin"'>Voltar</button>
<h1>Editar Projeto</h1>
<form action="" method="post">
    <label for="titulo">Nome do Projeto</label>
    <input type="text" name="titulo" id="titulo" required value="<?= $projectInfo->nm_projeto ?>">
    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="10" required><?= $projectInfo->ds_projeto ?></textarea>
    <label for="github">Link para o GitHub</label>
    <input type="text" name="github" id="github" value="<?= $projectInfo->lk_github ?>">
    <label for="expo">Link para o Expo</label>
    <input type="text" name="expo" id="expo" value="<?= $projectInfo->lk_expo ?>">
    <label for="online">Link Online</label>
    <input type="text" name="online" id="online" value="<?= $projectInfo->lk_online ?>">
    <input type="submit" value="Editar" name="editar">
</form>
