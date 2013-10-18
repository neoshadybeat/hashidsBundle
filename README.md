hashidsBundle
=============

##This is a bundle to use http://www.hashids.org/ as a service

## Installation


#### Symfony 2.1.x: Composer

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
