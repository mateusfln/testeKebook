
# Documentação Básica da API de Tarefas

## Visão Geral
### Teste para vaga de Desenvolvedor Laravel Junior Kebook
API de Tarefas, desenvolvida em PHP com o framework Laravel. Esta API fornece operações básicas CRUD (Create, Read, Update, Delete) para gerenciar tarefas.

### Configuração
Antes de começar a usar a API, certifique-se de seguir as etapas de configuração abaixo:

### Instalação de Dependências:
Certifique-se de ter o Composer instalado e, em seguida, execute o seguinte comando na raiz do projeto para instalar as dependências:

```
$composer install
```

### Configuração do Banco de Dados:
Execute as migrations para criar as tabelas do banco de dados:

```
$php artisan migrate
```

### Execução do Servidor:
Inicie o servidor embutido do Laravel com o seguinte comando:
```
$php artisan serve
```

A API estará acessível em http://127.0.0.1:8000 por padrão.

# Endpoints
A API oferece os seguintes endpoints para gerenciar tarefas:

### 1. Listar Todas as Tarefas
Endpoint: **GET /tarefas**

**Descrição**: Retorna a lista de todas as tarefas.

### 2. Obter Detalhes de uma Tarefa
Endpoint: **GET /tarefas/{id}**

**Descrição**: Retorna os detalhes de uma tarefa específica com base no ID fornecido.

### 3. Criar Nova Tarefa
Endpoint: **POST /tarefas**

**Descrição**: Cria uma nova tarefa com base nos dados fornecidos no corpo da solicitação.

Exemplo de Corpo da Solicitação (formato JSON):
```
{
    "descricao": "Concluir relatório",
    "concluida": false
}
```

### 4. Atualizar uma Tarefa
Endpoint: **PUT /tarefas/{id}**

**Descrição**: Atualiza uma tarefa existente com base no ID fornecido.

Exemplo de Corpo da Solicitação (formato JSON):
```
{
    "descricao": "Relatório finalizado",
    "concluida": true
}
```

### 5. Excluir uma Tarefa
Endpoint: **DELETE /tarefas/{id}**

**Descrição**: Exclui uma tarefa existente com base no ID fornecido.

## Testando com Postman
Para testar a API use o Postman ou qualquer outro software que consegue testar API´s.

## Considerações Finais
Espero que tenham gostado do meu teste. Espero poder trabalhar e evoluir ao lado da **Kebook**!
Muito obrigado!
