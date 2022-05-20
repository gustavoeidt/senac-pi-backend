# senac-pi-backend

Backend em PHP/Laravel para o Projeto Integrador do Senac

# Dependências do projeto

O backend do projeto utiliza Laravel 9, com PHP 8. É necessário que o PHP 8 e o Composer estejam instalados na sua máquina bem como a CLI do GIT.

https://getcomposer.org/
https://www.php.net/
https://git-scm.com/

# Instalando o projeto

1. acesse o terminal
2. clone o projeto localmente usando `git clone`
3. mude o diretório para o diretório recém criado `\senac_g3`
4. faça a instalação das dependencias do projeto com o comando `php composer install`
5. crie o arquivo `\database\database.sqlite` que será usado para nossa DB
6. copie o arquivo `.env.example` para `.env` e atualize as credenciais ddo banco:

```
DB_CONNECTION=sqlite
DB_DATABASE= <Path para o arquivo database.sqlite>
DB_FOREIGN_KEYS=true
DB_HOST=127.0.0.1
DB_PORT=3306
DB_USERNAME=root
DB_PASSWORD=
```

7. execute `php artisan key:generate` para gerar a APP_KEY no arquivo .env
8. execute `php artisan migrate:refresh --seed` para criar as tabelas do banco de dados e incluir registros de testes
9. execute `php artisan serve` para executar o servidor Laravel em `http://localhost:8000`

# Endpoints

O arquivo `endpoints.http` contém exemplos de endpoints bem como o payload para uso da API.
Executando no terminal `php artisan route:list` é possível listar todas as rotas disponíveis na aplicação:

```
  GET|HEAD        api/clientes ..................................................................... clientes.index › ClienteController@index
  POST            api/clientes ..................................................................... clientes.store › ClienteController@store
  GET|HEAD        api/clientes/{cliente} ............................................................. clientes.show › ClienteController@show
  PUT|PATCH       api/clientes/{cliente} ......................................................... clientes.update › ClienteController@update
  DELETE          api/clientes/{cliente} ....................................................... clientes.destroy › ClienteController@destroy
  GET|HEAD        api/pedidos ........................................................................ pedidos.index › PedidoController@index
  POST            api/pedidos ........................................................................ pedidos.store › PedidoController@store
  GET|HEAD        api/pedidos/{pedido} ................................................................. pedidos.show › PedidoController@show
  PUT|PATCH       api/pedidos/{pedido} ............................................................. pedidos.update › PedidoController@update
  DELETE          api/pedidos/{pedido} ........................................................... pedidos.destroy › PedidoController@destroy
  GET|HEAD        api/produtos ..................................................................... produtos.index › ProdutoController@index
  POST            api/produtos ..................................................................... produtos.store › ProdutoController@store
  GET|HEAD        api/produtos/{produto} ............................................................. produtos.show › ProdutoController@show
  PUT|PATCH       api/produtos/{produto} ......................................................... produtos.update › ProdutoController@update
  DELETE          api/produtos/{produto} ....................................................... produtos.destroy › ProdutoController@destroy
```
