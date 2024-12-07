<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### **Levantamento de Requisitos**

#### **1. Requisitos Funcionais**
- **Autenticação e Autorização**
  - Cadastro de usuários (clientes e administradores).
  - Login e logout.
  - Recuperação de senha via e-mail.
  - Controle de permissões (diferenciar cliente de administrador).

- **Gestão de Contas**
  - Criar e visualizar contas bancárias associadas aos clientes.
  - Atualizar dados pessoais dos clientes.
  - Listar contas ativas e inativas (apenas para administradores).

- **Transações Bancárias**
  - Depósitos, saques e transferências entre contas.
  - Histórico de transações com filtros (data, valor, tipo).
  - Saldo atualizado em tempo real.

- **Relatórios e Estatísticas**
  - Geração de relatórios financeiros em PDF (transações, saldo por período).
  - Dashboard com gráficos (estatísticas de contas e transações).

- **Notificações**
  - Envio de notificações via e-mail (ex.: confirmação de transferência).
  - Registro de notificações no MongoDB para histórico.

#### **2. Requisitos Não Funcionais**
- **Segurança**
  - Senhas criptografadas (bcrypt ou argon2).
  - Proteção contra CSRF e XSS.
  - Validação no backend para entradas do usuário.

- **Escalabilidade**
  - Uso de MongoDB para dados não estruturados (logs, notificações).
  - MySQL para dados estruturados (contas, transações, usuários).

- **Responsividade**
  - Design responsivo com Tailwind CSS.

- **Performance**
  - Lazy loading de componentes (JavaScript).
  - Cache para dados frequentemente acessados (ex.: saldo).

---

### **Distribuição das Tecnologias**
- **PHP (Laravel)**: Backend principal; gerenciar regras de negócio, rotas, e controle dos modelos.
- **MySQL**: Armazenamento dos dados estruturados (ex.: usuários, contas, transações).
- **MongoDB**: Armazenamento de logs, notificações, e dados históricos não estruturados.
- **Blade**: Views dinâmicas; construção da interface em conjunto com Tailwind CSS.
- **JavaScript**: Interações dinâmicas (ex.: validação de formulários, gráficos em tempo real).
- **Tailwind CSS**: Estilização do frontend, responsividade.
- **CSS puro**: Ajustes adicionais de estilos quando necessário.
- **PDF Library (ex.: DomPDF)**: Geração de relatórios financeiros em PDF.

---

### **Estrutura de Tabelas/Collections**
#### **Tabelas (MySQL)**
1. **users**
   - id (PK)
   - name
   - email (unique)
   - password
   - role (cliente/admin)
   - created_at, updated_at

2. **accounts**
   - id (PK)
   - user_id (FK para users)
   - account_number (unique)
   - balance
   - status (ativo/inativo)
   - created_at, updated_at

3. **transactions**
   - id (PK)
   - account_id (FK para accounts)
   - type (deposito, saque, transferencia)
   - amount
   - created_at

4. **password_resets**
   - email
   - token
   - created_at

#### **Collections (MongoDB)**
1. **notifications**
   - user_id
   - title
   - message
   - status (lido/não lido)
   - timestamp

2. **logs**
   - action (ex.: "transferência realizada")
   - user_id
   - details (JSON contendo informações da ação)
   - timestamp

---

### **Funcionalidades Adicionais**
- **API REST**: Criar endpoints REST para integração com possíveis aplicativos móveis.
- **Job Queues**: Usar filas (Laravel Queue) para tarefas assíncronas, como envio de e-mails e notificações.
- **Docker**: Containerizar a aplicação para facilitar a implantação e o desenvolvimento local.
