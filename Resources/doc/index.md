Getting Started With IrvyneEmbedlyBundle
========================================


## Prerequisites

- This version of the bundle requires Symfony 2.1+. If you are using Symfony 2.0.x, please use the [NodrewEmbedlyBundle](https://github.com/nodrew/NodrewEmbedlyBundle).
- The [PHP's cURL extension](http://www.php.net/manual/en/curl.installation.php) is required.

## Installation

Installation is a quick 5 step process (I hope so !) :

1. Download IrvyneEmbedlyBundle && [Embedly-PHP](https://github.com/embedly/embedly-php) using composer
2. Enable the Bundle
3. Configure the IrvyneEmbedlyBundle
4. Add the IrvyneEmbedlyBundle routing (Optional)
5. Example code (See how it works)

### Step 1: Download IrvyneEmbedlyBundle && [Embedly-PHP](https://github.com/embedly/embedly-php)  using composer

Add IrvyneEmbedlyBundle && [Embedly-PHP](https://github.com/embedly/embedly-php) in the "require" part of your composer.json:

```js
{
    "require": {
        ...
        "irvyne/embedly-bundle": "dev-master",
        "embedly/embedly-php": "master"
    }
}
```

The [Embedly-PHP](https://github.com/embedly/embedly-php) library is not on packagist so we must define it from GitHub.

```js
    "repositories": [
        {
            "type": "package",
            "package": {
                "version": "master",
                "name": "embedly/embedly-php",
                "source": {
                    "url": "https://github.com/embedly/embedly-php.git",
                    "type": "git",
                    "reference": "master"
                },
                "dist": {
                    "url": "https://github.com/embedly/embedly-php/zipball/master",
                    "type": "zip"
                },
                "autoload": {
                    "psr-0": { "Embedly": "src/" },
                    "files": ["src/Embedly/Embedly.php"]
                },
                "minimum-stability": "dev"
            }
        }
    ],
```

**Warning:**

> The previous code mut be placed between the `"require": { ... },` and the `"scripts": { ... },` part of the `composer.json` file.

**Lazy:**

> If you are too lazy to think, here is an example of a [`composer.json`](https://github.com/Irvyne/IrvyneEmbedlyBundle/blob/master/Resources/doc/examples/composer.json) file.

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update friendsofsymfony/user-bundle embedly/embedly-php
```
or simply
``` bash
$ php composer.phar update
```

Composer will install the IrvyneEmbedlyBundle bundle to your project's `vendor/irvyne/embedly-bundle` directory and the [Embedly-PHP](https://github.com/embedly/embedly-php) library to `vendor/embedly/embedly-php`.

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Irvyne\EmbedlyBundle\IrvyneEmbedlyBundle(),
    );
}
```

### Step 3: Configure the IrvyneEmbedlyBundle

Now that you have properly enable the bundle, you must add the following configuration to your `config.yml` file.

``` yaml
# app/config/config.yml
irvyne_embedly:
    key: yourEmbedlyKey
```

Or if you prefer XML:

``` xml
<!-- app/config/config.xml -->
<irvyne_embedly:config
    key="yourEmbedlyKey"/>
```

### Step 4: Add the IrvyneEmbedlyBundle routing (Optional)

If you want, you can active some example routes to see what is returned.

``` yaml
# app/config/routing_dev.yml
irvyne_embedly:
    resource: "@IrvyneEmbedlyBundle/Resources/config/routing_dev.yml"
    prefix:   /_embedly
```

You can access two routes (for the moment) : `app_dev.php/_embedly/oembed` or `app_dev.php/_embedly/oembed/{url}` (where {url} is an encoded url, example : `embed.ly%2Fdocs%2Fendpoints`)

### Step 5: Example code (See how it works)

In Progress ...