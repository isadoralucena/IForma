<h1 align="center">
    <img src="./public/images/logo.png"></img>
</h1>

# Sobre
O **IForma** é um site educacional que possui cadastros de três usuários (administrador, professor e aluno). Seu objetivo é ser um banco de conteúdos postados por professores, beneficiando alunos em seus estudos.

# Instalação

## Clonar o repositório

```
git clone https://github.com/Isadoralucena/IForma.git
```

## Instalar o laravel


```
composer global require laravel/installer
```

## Atualizar dependências

```
composer update
```
## Configurar banco de dados
Renomear o arquivo .env.example para .env e colocar informações do servidor

```
DB_CONNECTION=mysql
DB_HOST= 
DB_PORT=
DB_DATABASE= 
DB_USERNAME= 
DB_PASSWORD= 
```
Rodar migrações
```
php artisan migrate
```
## Criar um admin
```
php artisan db:seed
```
Logar com `admin@gmail.com` e senha `123123123`








