# 🐶 API REST Simples em Laravel

Esta é uma **API RESTful** simples desenvolvida com Laravel para cadastro de cachorros (`dogs`).

---

## ✅ Requisitos

- PHP >= 8.1
- Composer
- MySQL ou outro banco compatível
- [Postman](https://www.postman.com/) ou [Insomnia](https://insomnia.rest/) (ou outro cliente HTTP)

---

## 🚀 Como Rodar o Projeto

1. **Clone o repositório**
   ```bash
   git clone https://github.com/4strum/api-dogs.git
   cd api-dogs
   ```

2. **Instale as dependências**
   ```bash
   composer install
   ```

3. **Configure o `.env`**
   - Copie o arquivo `.env.example` para `.env`:
     ```bash
     cp .env.example .env
     ```
   - Configure as informações do banco de dados.

4. **Gere a chave da aplicação**
   ```bash
   php artisan key:generate
   ```

5. **Rode as migrations**
   ```bash
   php artisan migrate
   ```

6. **Inicie o servidor**
   ```bash
   php artisan serve
   ```

7. **Acesse a API usando a URL exibida**
   - Exemplo: `http://localhost:8000/api/dogs`

---

## 🧪 Testando a API

Use o **Postman**, **Insomnia** ou outro cliente HTTP para testar os endpoints:

| Método | Endpoint             | Descrição         |
|--------|----------------------|-------------------|
| GET    | `/api/dogs`          | Listar todos      |
| GET    | `/api/dogs/{id}`     | Mostrar um        |
| POST   | `/api/dogs`          | Criar novo        |
| PUT    | `/api/dogs/{id}`     | Atualizar         |
| DELETE | `/api/dogs/{id}`     | Deletar           |

---

## 📄 Exemplo de corpo (POST / PUT)

```json
{
  "name": "Luna",
  "raca": "Vira-lata"
}
```

---

## 📌 Observações

- As rotas foram criadas usando `Route::apiResource()`
- Retornos em JSON
- Projeto ideal para estudo de APIs REST com Laravel
