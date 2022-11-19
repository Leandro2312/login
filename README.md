## Aula 02
 - Envio de informações para PHP
 - Operadores relacionais 
 - Estrutura de decisão
 - Redirecionamento de página

## Envio de informações para o PHP
 - no arquivo do formulário é importante o *action* do form estar configurado para o arquivo php que irá receber as informações.
 - Importante escolher entre os métodos *get* e *post* qual o mais adequado para usar, lembrando que:
    - get: envia as informações na url
    - post: envia as informações de forma oculta
 - exemplo de formulário:
 ```html
 <form action="validar.php" method="post">
        Usuário:<input name="usuario"><br>
        Senha:<input name="senha" type="password"><br>
        <button type="submit">Entrar</button>
        <button type="reset">Limpar</button>
</form>
```
- no arquivo php que vai receber as informações, você precisa utilizar o método **$POST[]** ou **$_GET[]** em conjunto com o *name* do campo que você deseja recuperar a informação. Exemplo:
```php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

echo "$usuario - $senha";
```

## Operadores relacionais 
- `> maior`
- `< menor`
- `>= maior igual`
- `<= menor igual`
- `!= diferente`
- `== igual`

 
