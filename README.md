# Área do Felinocinotécnico

Área acessada através do endereço: http://cinotecnicos.royalcanin.com.br

O Projeto está totalmente fora dos padrões, pouca OO, sem PSR Compliance, sem namespaces.

Trata-se de um sistema legado co mais de 3 anos atrás, e será necessário padronizá-lo aos poucos

##Tecnologias Utilizadas:

- Silex
- Doctrine

##O que foi feito:

- Todo o projeto foi movido para /web
- Foi inicializado através do composer.json um projeto PSR-4 Compliance
- Classes, Serviços e Métodos serão desenvolvidos em src\Royal\RoyalCin
- No diretório /web foi criado um .htaccess que trata (se o arquivo .php legado não existir ele será movido para app.php)
- No app.php está sendo tratado as rotas e acessos a controllers através do Silex.
- Novas funcionalidades e itens padronizados serão desenvolvidos dentro do app.php
- Assim o restante da aplicação ficará intactada e vamos removendo aos poucos.

##Configuração adicional

#É necessário criar a pasta var para que o projeto funcione.

Royal Cin Project
==============
Projeto cinotecnicos.wab.com.br sendo migrado para o SILEX.

==============
#Ao clonar:
 - $ composer update
 - criar diretórios com permissão de escrita
    - web/upload/
    - web/upload-brindes/
    - var/
    - var/cache
    - var/logs
    - src/tmp/

==============

- Arquivos de Configuração (com base no .sample.php)
  - config/config.yml
  - web/Connections/conecta.php

```
$ mkdir var
$ chmod -R 777 var
$ cd var
$ mkdir logs
$ chmod -R 777 logs
.
.
.
```

Isso e o ajuste do config.yml deve fazer o projeto funcionar.

## Acessar o projeto:

- http://localhost/royalcin/web
