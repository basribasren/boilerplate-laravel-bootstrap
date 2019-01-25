<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# boilerplate-laravel-bootstrap

[![Build Status](https://travis-ci.org/basribasren/boilerplate-laravel-bootstrap.svg?branch=master)](https://travis-ci.org/basribasren/boilerplate-laravel-bootstrap) [![Build status](https://ci.appveyor.com/api/projects/status/weuboxr8dwbpp0q2?svg=true)](https://ci.appveyor.com/project/basribasren/boilerplate-laravel-bootstrap) [![dependencies Status](https://david-dm.org/basribasren/boilerplate-laravel-bootstrap/status.svg)](https://david-dm.org/basribasren/boilerplate-laravel-bootstrap) ![GitHub All Releases](https://img.shields.io/github/downloads/basribasren/boilerplate-laravel-bootstrap/total.svg) [![GitHub license](https://img.shields.io/github/license/basribasren/boilerplate-laravel-bootstrap.svg)](https://github.com/basribasren/boilerplate-laravel-bootstrap/blob/master/LICENSE) [![GitHub last commit](https://img.shields.io/github/last-commit/basribasren/boilerplate-laravel-bootstrap.svg)](https://github.com/basribasren/boilerplate-laravel-bootstrap/commits/master)

boilerplate for create web using laravel v5 with bootstrap admin theme.
Tools : Laravel, Bootstrap, Webpack, compoers, artisan, bootstrap admin theme.

## Ecosystem

<!-- prettier-ignore -->
| Project | Status | Description |
|---------|--------|-------------|
| [react]          | [![react-status]][react-package] | A declarative, efficient, and flexible JavaScript library for building user interfaces. |
| [redux]          | [![redux-status]][redux-package] | Predictable state container for JavaScript apps. |
| [materialui]          | [![materialui-status]][materialui-package] | React components that implement Google's Material Design. |
| [babel]          | [![babel-status]][babel-package] | Babel is a compiler for writing next generation JavaScript. |
| [webpack]          | [![webpack-status]][webpack-package] | A bundler for javascript and friends. |
| [workbox]          | [![workbox-status]][workbox-package] | JavaScript libraries for Progressive Web Apps. |
| [prettier]          | [![prettier-status]][prettier-package] | Prettier is an opinionated code formatter. |
| [eslint]          | [![eslint-status]][eslint-package] | A fully pluggable tool for identifying and reporting on patterns in JavaScript. |

[react]: https://github.com/facebook/react
[react-status]: https://img.shields.io/npm/v/react.svg
[react-package]: https://npmjs.com/package/react
[redux]: https://github.com/reduxjs/redux
[redux-status]: https://img.shields.io/npm/v/redux.svg
[redux-package]: https://npmjs.com/package/redux
[materialui]: https://github.com/mui-org/material-ui
[materialui-status]: https://img.shields.io/npm/v/material-ui.svg
[materialui-package]: https://npmjs.com/package/material-ui
[babel]: https://github.com/babel/babel
[babel-status]: https://img.shields.io/npm/v/babel.svg
[babel-package]: https://npmjs.com/package/babel
[webpack]: https://github.com/webpack/webpack
[webpack-status]: https://img.shields.io/npm/v/webpack.svg
[webpack-package]: https://npmjs.com/package/webpack
[workbox]: https://github.com/googlechrome/workbox
[workbox-status]: https://img.shields.io/npm/v/workbox.svg
[workbox-package]: https://npmjs.com/package/workbox
[prettier]: https://github.com/prettier/prettier
[prettier-status]: https://img.shields.io/npm/v/prettier.svg
[prettier-package]: https://npmjs.com/package/prettier
[eslint]: https://github.com/eslint/eslint
[eslint-status]: https://img.shields.io/npm/v/eslint.svg
[eslint-package]: https://npmjs.com/package/eslint

## Folder Structure

After creation, your project should look like this:

```
my-app/
├── node_modules/
├── vendor/
├── app/
│   └── .../
│   └── .../
│   └── Http/
│   └── .../
│   └── User.php
├── .../
├── .../
├── .../
├── public/
│   └── assets/
├── resources/
│   └── assets/
│   	└── css/
│   	└── js/
│   	└── .../
│   └── .../
│   └── views/
├── routes/
├── .../
├── .../
├── composer.json
├── package.json
├── Procfile.js
└── webpack.mix.js

```

## Available Scripts

In the project directory, you can run:

### `npm install`

Runs this command to install npm dependencies<br>
result will in the `node_modules` folder

### `composer install`

Runs this command to install composer dependencies<br>
result will in the `vendor` folder

### `php artisan list`

To view a list of all available Artisan commands, you may use the list command<br>
to view list artisan command articel [Artisan Command](https://quickadminpanel.com/blog/list-of-16-artisan-make-commands-with-parameters/)

### `npm run dev`

Run webpack to create assets in public folder in development mode.<br>

### `npm run watch`

Run webpack to create assets in public folder in watch mode.<br>

### `npm run hot`

Builds the app for production to the `dist` folder.<br>

### `npm run production`

Run webpack to create assets in public folder in production mode<br>

## Maintainers

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore -->
<img src="https://avatars0.githubusercontent.com/u/25193994?v=4" width="100px;"/><br /><sub><b>Basri Basren</b></sub>

<!-- ALL-CONTRIBUTORS-LIST:END -->

## Something Missing?

If you have ideas for more “How To” recipes that should be on this page, [let us know](https://github.com/basribasren/boilerplate-react-redux/issues)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
