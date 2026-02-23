# Estudo Drupal
Repositório público PHP

Estudo de desenvolviemnto com CMS Drupal no Lunux Ubuntu. (Usando PHP 8.3, Lando, Composer, Mariadb)

<img alt="Drupal Logo" src="https://www.drupal.org/files/Wordmark_blue_RGB.png" height="60px">

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


# 4. Instalação e configura o banco de dados 

sem interface web:

> lando drush site:install --db-url=mysql://drupal:drupal@database:3306/drupal --account-name=admin --account-pass=admin -y

Se não funcionar use explicitamente o caminho do drush e o comando do PHP.

> $ lando php /app/vendor/bin/drush site:install --db-url=mysql://drupal:drupal@database:3306/drupal --account-name=admin --account-pass=admin -y -vvv


# 5. Dar permissões de escrita na pasta
(Necessário no Linux)
Libere para o Lando gerenciar as configurações:

> chmod -R 777 web/sites/default


# Reconfigurar o banco:

> lando drush site:install --db-url=mysql://mariadb:mariadb@database/mariadb --account-name=admin --account-pass=admin -y --root=/app/web

# 6. Criar URL de acesso:

> lando drush uli --uri=https://drupallandolinux.lndo.site --root=/app/web

Copia o link e abra no navegador.


# Se algo der errado:

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

# Instalar o Composer 

Para instalar o Composer de forma global e persistente no Ubuntu 24.04:

* 1. Download do Instalador

Baixe o script de instalação oficial do PHP:

> php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

* 2. Verificação de Integridade (Opcional, mas recomendado)

Verifique o hash do instalador para garantir que não foi corrompido:

> php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

(Nota: O hash acima muda conforme as versões; consulte getcomposer.org/download para o código mais recente).

* 3. Instalação Global

Instale o binário no diretório /usr/local/bin para que o comando fique disponível em todo o sistema:

> sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

* 4. Limpeza e Verificação
Remova o script de instalação e teste a versão:

> php -r "unlink('composer-setup.php');"

> composer --version

Diagnóstico para o seu Ambiente (Lando/Drupal).

Como você está no Ubuntu e usa o Lando:

* Conflito de Versão: 
O Composer instalado no host usará o PHP do seu sistema.

* Dependências: 
Se o Drupal exigir extensões que não estão no PHP 8.1 do host (como php-gd, php-xml, php-mbstring), a instalação do Drupal pelo host pode falhar.

* Solução: 
Se o composer create-project reclamar de extensões ausentes, instale-as no Ubuntu:
sudo apt update && sudo apt install php8.1-cli php8.1-common php8.1-gd php8.1-xml php8.1-mbstring php8.1-curl php8.1-zip -y


# MODULOS

* Procure o modulo em:
> www.drupal.org/project/nome_do_modulo

* Baixar o modulo:
> composer require 'drupal/nome_do_modulo:^9.9'

* Ativar o modulo
> lando drush en nome_do_modulo -y

* Limpar de Cache: 
> lando drush cr

* desativar o modulo:
> lando drush pmu nome_do_modulo -y
