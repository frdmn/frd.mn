# frd.mn

[![Current tag](http://img.shields.io/github/tag/frdmn/frd.mn.svg)](https://github.com/frdmn/frd.mn/tags) [![Repository issues](http://issuestats.com/github/frdmn/frd.mn/badge/issue)](http://issuestats.com/github/frdmn/frd.mn) [![Flattr this repository](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=frdmn&url=https://github.com/frdmn/frd.mn)

![](http://up.frd.mn/ItPzG.png)

Repository of my personal website / project portfolio.

## Installation

1. Make sure you've installed all requirements
2. Clone this repository:  
  `git clone https://github.com/frdmn/frd.mn`
3. Install all dependencies and libraries:  
  `npm install`  
  `bower install`  
  `composer install`
4. Run grunt task:  
  `grunt`

## Usage

### How to install composer

```sh
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin
```

### Pretty URLs / rewrites

The project contains a `.htaccess` file in case you run Apache with enabled `AllowOverride`. In case you run Nginx you can use the following rewrite directive for your server block configuration:

```
rewrite ^(.*)\.html$ /project.php?alias=$1;
```

## Requirements / Dependencies

* NodeJS / `npm`
* Grunt
* Bower
* Composer

## Credits

* Marian Friedmann ([rnarian](https://github.com/rnarian)) 

## Version

0.0.1

## License

[MIT](LICENSE)
