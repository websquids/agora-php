# agora-php
Agora.io Server SDK for PHP (Unofficial).

This repository is fork from [meteor-technology/agora-php](https://github.com/meteor-technology/agora-php).

## Requirement
* composer
* php >=7.1
* ext-json >=1.0

## Install
```bash
$ composer require websquids/agora-php
```

## Usage
```php
require_once 'vendor/autoload.php';

$config = [
    'debug'  => true,
    'id'     => 'your id',
    'secret' => 'your secret',
];

$agora = new \meteorTechnology\AgoraSDK\Agora($config);

var_dump($agora->project->all());
var_dump($agora->usage->get('2019-1-21','2019-1-22',['appid']));
var_dump($agora->kicking_rule->all());
var_dump($agora->token->buildToken('channel','uid'));
```
## LICENSE
MIT
