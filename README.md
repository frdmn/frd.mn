# frd.mn

```
$ npm install
$ bower install
$ composer install
$ grunt
$ php parser.php > data/github.json
$ php -S localhost:8888
```

[→ localhost:8888](http://localhost:8888)

## How to install composer

```sh
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin
```

## Todo:

- [X] github.json schema festlegen (infos unterseite: stars, forks, language, language detail)
- [X] github.json per script aufbauen (anhand vom projects array [info.json])
- pretty urls: /alias.html statt /project.php?alias=$alias
- imprint?
