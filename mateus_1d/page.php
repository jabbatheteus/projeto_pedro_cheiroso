<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form> 
        <h3>Cadastro</h3>
        <input type="text" placeholder="login" id="login">
        <input type="password" placeholder="senha" id="senha">
        <input type="email" placeholder="email" id="email">
        <input type="tel" placeholder="telefone" id="telefone">
        <input type="submit" onclick="logar ()"; return false;>
    </form>

    <style>
    body {
        background-color: black;
        color: white;
        font-family: italic;
        text-align: center;
    }
    form {
        margin: auto;
        width: 300px;
        padding:30px;
        border: 2px solid white;
        border-radius: 30px;
        background-color: rgba(255, 255, 255, 0.1);
    }
    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid white;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.2);
        color: white;
    }
    input[type="email"], input[type="tel"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid white;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.2);
        color: white;
    }
      
</style>

</body>
</html>