[![SensioLabsInsight](https://insight.sensiolabs.com/projects/3ad118ec-c1b8-44e1-b92c-c51369a52bc3/mini.png)](https://insight.sensiolabs.com/projects/3ad118ec-c1b8-44e1-b92c-c51369a52bc3)

hashidsBundle
=============

##This is a bundle to use http://www.hashids.org/ as a service

## Installation


#### Symfony 2.1.x <= 2.4.x: Composer

[Composer](http://packagist.org/about-composer) is a project dependency manager for PHP. You have to list
your dependencies in a `composer.json` file:

``` json
{
    "require": {
        "cayetanosoriano/hashids-bundle": "dev-master"
    }
}
```
To actually install in your project, download the composer binary and run it:

``` bash
wget http://getcomposer.org/composer.phar
# or
curl -O http://getcomposer.org/composer.phar

php composer.phar install
```

### Step 2: Enable the bundle

Finally, enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...

            new cayetanosoriano\HashidsBundle\cayetanosorianoHashidsBundle(),
    );
}
```

## Configuration
###Add the following to your config.yml
```
cayetanosoriano_hashids:
    salt: "randomsalt" #optional
    min_hash_length: 10 #optional
    alphabet: "abcd..." #optional
```

### Then use the service
```
$kcy = $this->get('hashids');
```

### license
```
Copyright (c) 2015 You <you$domain,com>

Permission to use, copy, modify, and/or distribute this software for any
purpose with or without fee is hereby granted, provided that the above
copyright notice and this permission notice appear in all copies.

THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
```
