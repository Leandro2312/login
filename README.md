## Aula 02
 - Envio de informações para PHP
 - Operadores relacionais 
 - Operadores Lógicos
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
 
