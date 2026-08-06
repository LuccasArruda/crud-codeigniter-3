# Sistema de Vendas

Aplicação web para gerenciamento de **clientes** e **vendas**, desenvolvida com PHP e CodeIgniter 3. O projeto permite cadastrar, consultar, pesquisar, editar e remover clientes e vendas.

## Funcionalidades

- Cadastro, edição, listagem, busca e exclusão de clientes;
- Cadastro, edição, listagem, busca e exclusão de vendas;
- Associação de cada venda a um cliente;
- Exibição de valores em real (R$) e datas no formato brasileiro;
- Validação dos campos obrigatórios nos formulários.

## Tecnologias

- PHP 5.6 ou superior;
- [CodeIgniter 3](https://codeigniter.com/userguide3/);
- MySQL / MariaDB;
- Apache (por exemplo, via XAMPP);
- Bootstrap e Material Symbols (interface).

## Requisitos

- PHP com a extensão `mysqli` habilitada;
- MySQL ou MariaDB em execução;
- Servidor Apache com `mod_rewrite` habilitado para URLs sem `index.php`;
- Composer (opcional — o framework já está versionado no projeto).

## Como executar localmente

1. Coloque ou clone o projeto na pasta pública do seu servidor local. No XAMPP, um exemplo é:

   ```text
   C:\xampp\htdocs\Pessoal\crud-codeigniter-3
   ```

2. Inicie os serviços **Apache** e **MySQL** no painel do XAMPP.

3. Crie o banco de dados e as tabelas. Use o script abaixo como estrutura inicial:

   ```sql
   CREATE DATABASE crud_codeigniter_3
     CHARACTER SET utf8
     COLLATE utf8_general_ci;

   USE crud_codeigniter_3;

   CREATE TABLE CLIENTES (
     ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     RAZAO_SOCIAL VARCHAR(255) NOT NULL,
     NOME_FANTASIA VARCHAR(255) NOT NULL,
     CNPJ VARCHAR(18) NOT NULL,
     CNPJ_FORMATADO VARCHAR(18) NULL,
     VALOR_FATURAMENTO DECIMAL(15,2) NOT NULL DEFAULT 0.00,
     ENDERECO VARCHAR(255) NULL
   );

   CREATE TABLE VENDAS (
     ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     ID_CLIENTE INT UNSIGNED NOT NULL,
     DATA_CRIACAO DATE NOT NULL,
     VALOR_TOTAL DECIMAL(15,2) NOT NULL,
     CONSTRAINT fk_vendas_clientes
       FOREIGN KEY (ID_CLIENTE) REFERENCES CLIENTES(ID)
   );
   ```

4. Ajuste a conexão com o banco em `application/config/database.php`. A configuração padrão é:

   ```php
   'hostname' => 'localhost',
   'username' => 'root',
   'password' => '',
   'database' => 'crud_codeigniter_3',
   'dbdriver' => 'mysqli',
   ```

5. Em `application/config/config.php`, configure `base_url` para o endereço local do projeto. Exemplo:

   ```php
   $config['base_url'] = 'http://localhost/Pessoal/crud-codeigniter-3/';
   ```

6. Abra [http://localhost/Pessoal/crud-codeigniter-3/](http://localhost/Pessoal/crud-codeigniter-3/) no navegador.

## Rotas principais

| Rota | Descrição |
| --- | --- |
| `/` | Página inicial |
| `/customers` | Lista de clientes |
| `/customers/new` | Novo cliente |
| `/customers/search?search=termo` | Busca de clientes |
| `/sales` | Lista de vendas |
| `/sales/new` | Nova venda |
| `/sales/search?search=termo` | Busca de vendas |

> Se as URLs sem `index.php` não funcionarem no seu servidor, acesse as rotas com o prefixo `index.php/`, por exemplo: `/index.php/customers`.

## Estrutura do projeto

```text
application/
├── config/        # Configurações do CodeIgniter e banco de dados
├── controllers/   # Controllers de clientes, vendas e páginas
├── models/        # Consultas de clientes e vendas
└── views/         # Telas e componentes reutilizáveis
public/assets/     # Arquivos CSS e imagens
system/            # Núcleo do CodeIgniter 3
```

## Observações

- As tabelas e colunas mostradas acima foram documentadas a partir do código da aplicação.
- Antes de publicar, use credenciais próprias para produção, defina uma `base_url` segura e desabilite a exibição de erros do banco.

## Licença

Este projeto utiliza o framework CodeIgniter, licenciado sob a licença MIT. Consulte [license.txt](license.txt) para os termos incluídos no repositório.
