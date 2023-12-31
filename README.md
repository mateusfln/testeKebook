# Teste para vaga de Desenvolvedor Laravel Junior Kebook
API de Tarefas, desenvolvida em PHP com o framework Laravel. Esta API fornece operações básicas CRUD (Create, Read, Update, Delete) para gerenciar tarefas.
### Descrição do teste
Desenvolver uma API simples de lista de tarefas utilizando PHP. A API deve permitir a criação, leitura, atualização e exclusão de tarefas.
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

---



# Documentação Básica da API de Tarefas

## Requisitos necessários:
#### **Certifique-se de ter o PHP na versão >=8.2** instalado e as dependências do laravel necessárias.
**https://laravel.com/docs/10.x/deployment#server-requirements**

#### Dependências extras para rodar o projeto:
```
sudo apt install php-sqlite3
```
```
composer install
```

### Configuração
Antes de começar a usar a API, certifique-se de seguir as etapas de configuração abaixo:

### Clone do projeto:
#### Para rodar o projeto localmente, você irá precisar clonar ele em seu computador. Abra o terminal de comando e rode o seguinte comando:

```
git clone https://github.com/mateusfln/testeKebook.git
```
#### Depois de clonar o projeto, entre na pasta do teste:

```
cd testeKebook
```

#### Abra o projeto com sua IDE, caso esteja rodando com vsCode:

```
code .
```
```
cd testeKebook
```
## Configuração do Banco de Dados:
#### Execute as migrations para criar as tabelas do banco de dados:

```
php artisan migrate
```

## Execução do Servidor:
#### Inicie o servidor local do Laravel com o seguinte comando:
```
php artisan serve
```

A API estará acessível em http://127.0.0.1:8000 por padrão.

## Testando a API
#### Para testar a API use o Postman ou qualquer outro software que consegue testar API´s.
##### Abaixo segue uma collection do Postman para facilitar os testes da API
[link para o arquivo
](https://github.com/mateusfln/testeKebook/blob/7dc49810f6b02bbfb03c560c422de04069eeede7/collection.json)
## Endpoints da API
#### A API oferece os seguintes endpoints para gerenciar tarefas:

### 1. Listar Todas as Tarefas
Endpoint: **GET /api/tarefas**

**Descrição**: Retorna a lista de todas as tarefas.

### 2. Obter Detalhes de uma Tarefa
Endpoint: **GET /api/tarefas/{id}**

**Descrição**: Retorna os detalhes de uma tarefa específica com base no ID fornecido.

### 3. Criar Nova Tarefa
Endpoint: **POST /api/tarefas**

**Descrição**: Cria uma nova tarefa com base nos dados fornecidos no corpo da solicitação.

Exemplo de Corpo da Solicitação (formato JSON):
```
{
    "descricao": "Concluir relatório",
    "concluida": false
}
```

### 4. Atualizar uma Tarefa
Endpoint: **PUT /api/tarefas/{id}**

**Descrição**: Atualiza uma tarefa existente com base no ID fornecido.

Exemplo de Corpo da Solicitação (formato JSON):
```
{
    "descricao": "Relatório finalizado",
    "concluida": true
}
```

### 5. Excluir uma Tarefa
Endpoint: **DELETE /api/tarefas/{id}**

**Descrição**: Exclui uma tarefa existente com base no ID fornecido.



## Considerações Finais
### Espero que tenham gostado do meu teste. Espero também poder trabalhar e evoluir ao lado da **Kebook**!
# Muito obrigado!
