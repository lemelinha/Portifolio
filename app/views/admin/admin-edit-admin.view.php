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
<h1>Editar Informações Pessoais</h1>
<form action="" method="post">
    <label for="sobre-mim">Sobre Mim</label>
    <textarea name="sobre-mim" id="sobre-mim" cols="30" rows="10" required> <?= $adminInfo->ds_sobre_mim ?> </textarea>
    <label for="tecnologias">Tecnologias</label>
    <textarea name="tecnologias" id="tecnologias" cols="30" rows="10" required> <?= $adminInfo->ds_tecnologias ?> </textarea>
    <label for="github">Link para o GitHub</label>
    <input type="text" name="github" id="github" value="<?= $adminInfo->lk_github ?>">
    <label for="linkedin">Link para o Linkedin</label>
    <input type="text" name="linkedin" id="linkedin" required value="<?= $adminInfo->lk_linkedin ?>">
    <input type="submit" value="Editar" name="editar">
</form>