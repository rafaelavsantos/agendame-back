# AgendaMe Saas
- Projeto FullStack desenvolvido para o entender o desenvolvido completo de uma aplicação Saas

## 🚀 Instalação e Execução do Projeto Laravel (Linux)

## 📋 Pré-requisitos
Antes de iniciar, certifique-se de ter instalado no seu sistema:
- PHP >= 8.1
- Composer
- Git
- Extensões PHP necessárias: `mbstring`, `xml`, `bcmath`, `curl`, `zip`

---

## 1️⃣ Atualizar pacotes
```bash
sudo apt update && sudo apt upgrade -y

```

## 2️⃣ Instalar PHP e extensões necessárias

```bash
sudo apt install php php-cli php-common php-mbstring php-xml php-bcmath php-curl php-zip unzip curl git -y
```

## 3️⃣ Instalar Composer

```bash
sudo apt install composer -y

```

## 4️⃣ Clonar o repositório do projeto

```bash
git clone https://github.com/usuario/repositorio.git
cd repositorio
```

## 5️⃣ Instalar dependências do Laravel

```bash
composer install
```

## 6️⃣ Configurar variáveis de ambiente
- Edite o arquivo .env para configurar banco de dados e outras variáveis.

## 7️⃣ Executar migrações (se houver)

```bash 
php artisan migrate
```

## 8️⃣ Subir servidor local

```bash 
php artisan serve
```

### Acesse no navegador:

```bash
http://127.0.0.1:8000
```