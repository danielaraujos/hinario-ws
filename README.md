# Hinário- WebService

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

Este projeto foi desenvolvido para criar um back-end para um aplicativo de Hinário. Desta forma o aplicativo consumirá as requisições de forma mais rápida.


### Administração
![](http://danielaraujos.com/partners/git_project/hinario-ws/home.png) 
#### Hinos
![](http://danielaraujos.com/partners/git_project/hinario-ws/hinos.png) 
#### Indices
![](http://danielaraujos.com/partners/git_project/hinario-ws/indices.png) 

## Framework
- [x] CakePHP 3
- [x] Mysql


### Requisições
<ul>
    <li>PATH /api/v1/ - Rota padrão. </li>
    <li>GET /hinos - Obtém a lista de todos os hinos.</li>
    <li>GET /indices - Obtém a lista de todos os indices dos hinos.</li>
    <li>GET /cifras - Obtém a lista de todas as cifras.</li>
</ul>


## Instalação

1. Baixe [Composer](http://getcomposer.org/doc/00-intro.md) ou atualize `composer self-update`.
2. Execute `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

Se o Composer estiver instalado globalmente, execute
```bash
composer create-project --prefer-dist cakephp/app [app_name]
```


## Configuração
Leia e edite `config/app.php` e configure o 'Datasources' e qualquer outra configuração relevante para sua aplicação.
<strong>Utilize o migrate e seed para popular o banco.</strong>

