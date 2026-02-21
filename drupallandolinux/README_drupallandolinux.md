# Estudo Drupal
Repositório público PHP

![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)

# Projetos neste repositorio
```
│
├── 📂 vendor
│   (Estrutura do Drupal)
│
├── 📂 web
│   (Seu site)

```


# Criando um projeto Drupal com Lando no Linux:

* 1. Pré-requisitos

Confirmar instalados:

```
$ docker --version
//docker --version

$ lando version
// v3.25.6

$ composer --version
Composer version 2.9.5 2026-01-29 11:40:53
PHP version 8.3.30 (/usr/bin/php8.3)

$ php -v
// PHP 8.3.30

```

IMPORTANTE: Usar PHP 8.3!

# Criar o diretório e entrar nele:

```
mkdir drupallandolinux
cd drupallandolinux
```

# Instalar Drupal e Drush via host (PHP 8.3):
```
composer create-project drupal/recommended-project:^10 .
composer require drush/drush
```

# Inicialização do Lando:
```
lando init \
  --source cwd \
  --recipe drupal10 \
  --webroot web \
  --name drupallandolinux
```

# Edite o .lando.yml para garantir o PHP e Banco corretos:
```
nano .lando.yml

name: drupallandolinux
recipe: drupal10
config:
  php: '8.3'
  webroot: web
  database: mariadb:10.6

```

# 3. Subir containers

> lando start


# Instalação e configura o banco de dados 

sem interface web:

> lando drush site:install --db-url=mysql://drupal:drupal@database:3306/drupal --account-name=admin --account-pass=admin -y

Se não funcionar use explicitamente o caminho do drush e o comando do PHP.

> $ lando php /app/vendor/bin/drush site:install --db-url=mysql://drupal:drupal@database:3306/drupal --account-name=admin --account-pass=admin -y -vvv


# Dar permissões de escrita na pasta
(Necessário no Linux)
Libere para o Lando gerenciar as configurações:

> chmod -R 777 web/sites/default


# Reconfigurar o banco:

> lando drush site:install --db-url=mysql://mariadb:mariadb@database/mariadb --account-name=admin --account-pass=admin -y --root=/app/web

# Criar URL de acesso:

> lando drush uli --uri=https://drupallandolinux.lndo.site --root=/app/web

Copia o link e abra no navegador.


#Se algo der errado:

Tentativa simples:

```
$ lando rebuild -y
$ composer install
```

Matar tudo e iniciar tudo novamente:

```
Parar processos deste projeto:
$ lando stop
$ lando destroy -y
Para todos os processo com lando deste computador:
$ lando poweroff
Apagar processos perdidos fantasmas:
$ docker volume prune -f
```

* Recriar o arquivo de configuração

> lando drush site:install --db-url=mysql://drupal:drupal@database:3306/drupal --account-name=admin --account-pass=admin -y --root=/app/web

* Testes basicos:

* 1º Verifique se os containers estão rodando:

>  lando list

service: database, appserver e proxy

* 2º Teste de Conexão Direta:

> lando mysql

Se não retorna nada (nem erro, nem o prompt do banco), significa que o processo do cliente MySQL dentro do container está travando ou não consegue se comunicar com o processo do servidor MariaDB.

* Verificar a conexão com o banco

> lando ssh -s database -c "mysqladmin -u mariadb -pmariadb ping"

Retorna “mysqld is alive” se ok.

* Entrar no contreiner:

> lando ssh -s database --user root

Dentro do container, execute este comando para resetar o usuário mariadb:

> mysql -u root -e "CREATE USER IF NOT EXISTS 'mariadb'@'%' IDENTIFIED BY 'mariadb'; GRANT ALL PRIVILEGES ON *.* TO 'mariadb'@'%' WITH GRANT OPTION; FLUSH PRIVILEGES;" 

Saia do container 
> exit

* Rebuild do projeto:

> lando rebuild -y

* Reconfigurar o banco:

> lando drush site:install --db-url=mysql://mariadb:mariadb@database/mariadb --account-name=admin --account-pass=admin -y --root=/app/web

* Criar URL de acesso:

> lando drush uli --uri=https://drupallandolinux.lndo.site --root=/app/web

Copia o link e abra no navegador.



# Matar todos os processos apagar o diretório:
Parar processos deste projeto:
```
$ lando stop
$ lando destroy -y
Para todos os processo com lando deste computador:
$ lando poweroff
Apagar processos fantasmas:
$ docker volume prune -f
$ rm -rf /drupallandolinux
```

