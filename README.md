# Laravel LunaUi

[![Latest Stable Version](https://poser.pugx.org/designbycode/lunaui/v/stable)](https://packagist.org/packages/designbycode/lunaui)
[![Total Downloads](https://poser.pugx.org/designbycode/lunaui/downloads)](https://packagist.org/packages/designbycode/lunaui)
[![License](https://poser.pugx.org/designbycode/lunaui/license)](https://packagist.org/packages/designbycode/lunaui)
[![GitHub stars](https://img.shields.io/github/stars/DesignByCode/LunaUi?style=social)](https://github.com/DesignByCode/LunaUi/stargazers)
[![Twitter](https://img.shields.io/twitter/url?style=social&url=https%3A%2F%2Ftwitter.com%2FDesign_By_Code)](https://twitter.com/intent/tweet?text=Wow:&url=https%3A%2F%2Fgithub.com%2FDesignByCode%2FLunaUi)

## Introduction to LunaUi
While Laravel does not dictate which JavaScript or CSS pre-processors you use, it does provide a basic starting point using [Luna-sass](https://designbycode.github.io/Luna/Build/index.html) and [Vue](https://vuejs.org/) that will be helpful for many applications. By default, Laravel uses [NPM](https://www.npmjs.org/) to install both of these frontend packages.

## Installation

```
$ composer require designbycode/lunaui
```

## Setup
After instalation you can run the following commands to scaffold your project

__For Luna-sass with authentication__ 
```
$ php artisan ui:auth
```

__For Luna-sass without authentication__
```
$ php artisan ui luna
```

__For Luna-sass with Vuejs and without authentication__
```
$ php artisan ui vue
```

__For Luna-sass with Vuejs and with authentication__
```
$ php artisan ui vue --auth
```


## Luna-sass Documentation

Documentation can be found on the [Luna-sass website](https://designbycode.github.io/Luna/Build/index.html).


## Official Laravel Documentation

Documentation can be found on the [Laravel website](https://laravel.com/docs/frontend).


## License

Laravel-Helper is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
