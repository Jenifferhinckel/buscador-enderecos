# buscador-enderecos-test
Aplicação web para buscar endereço na API via cep : https://viacep.com.br/.

## Como rodar o projeto

Instale um banco de dados (eu usei o postgreSQL), clone esse projeto e configure as informações do banco clonando o arquivo .env-example para um .env, após configurado rode o php artisan migrate que criará a tabela no banco e depois rode o php artisan serve que ao clicar no link ele abrirá o sistema.