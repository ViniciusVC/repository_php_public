# repository_php_public
Repositório público PHP

![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)

# Projetos neste repositorio
```
│
├── 📂 Alura_php
│   │   (Formacao Linguagem PHP)
│   │  
│   ├── 📂 Aula_01
│   │
│   ├── 📂 Aula_02
│   │   
│   ├── 📂 Aula_03
│   │   
│   ├── 📂 Aula_04
│
├── 📂 Resumo_PHP
│   (Exemplos simples)
│
├── 📂 site_2014
│    (Pequeno site)
│    
├── 📂 drupallandolinux
    (Drupal com Lando no Linux)

```



# Instalando PHP no Ubuntu:

```
sudo apt update
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install php8.1
```

# Para instalar extensões comuns do PHP 8.1 (por exemplo, para Drupal):

> sudo apt install php8.1-cli php8.1-fpm php8.1-mysql php8.1-xml php8.1-gd php8.1-curl php8.1-zip php8.1-mbstring


# Verifique a versão instalada:

> php -v


# Apache no Ubuntu
Logar como administrador: "$ sudo su"
Atualizar o Ubuntu: ”$ apt-get update”
Atualizar o Ubuntu: ”$ apt-get upgrade”
Instalar o Apache v2: “$ apt-get install apache2”
Reinicie o Apache: “$ /etc/init.d/apache2 restart”
Permissão de escrita no diretório padrão do Apache: “$ chmod 777 /var/www"
Teste usando : "http://localhost:80 ou http://127.0.0.1:80"
Teste usando : "$ emacs /webtools/IBMIHS/conf/redirects.oi.com.br.conf"
Abrir o Files em modo administrador: “sudo nautilus”


# Criando um projeto Drupal com Lando no Linux:

* 1. Pré-requisitos

Confirmar instalados:

```
docker --version
lando version
composer --version
php -v
```

IMPORTANTE: Usar PHP 8.3!

* 2. Criar projeto

```
mkdir -p ~/projetos/drupal
cd ~/projetos/drupal
Ou
mkdir -p ~/projetos/repository_php_public/drupal
cd ~/projetos/repository_php_public/drupal
```

Criar .lando.yml:

```
name: drupal
recipe: lamp

config:
 webroot: web
 php: '8.1'

services:
 database:
   type: mariadb:10.6
   creds:
     user: drupal
     password: drupal
     database: drupal

tooling:
 composer:
   service: appserver
```

* 3. Subir containers

> lando start

Se houver erro de banco antigo:

```
lando destroy -y
docker volume prune -f
lando start
```

* 4. Instalar Drupal via Composer
> lando composer create-project drupal/recommended-project web

* 5. Acessar instalação web
> lando info
Abrir a URL do app.
> https://drupal.lndo.site

* 6. Configurar banco no instalador Drupal

```
Database: drupal
User: drupal
Password: drupal
Host: database
Port: 3306
IMPORTANTE: Nunca usar localhost!
```

* 7. Verificações finais

```
lando ps
lando logs -s database
```

Site deve abrir em:
> http://drupal.lndo.site

