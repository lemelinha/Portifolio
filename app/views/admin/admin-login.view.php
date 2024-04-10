<style>
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        padding: 10px;
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
</style>

<form action="/admin" method="post">
    <label for="senha">Senha</label><br>
    <input type="password" name="senha" id="senha">
    <input type="submit" value="Entrar">
</form>