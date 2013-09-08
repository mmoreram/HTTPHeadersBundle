[![knpbundles.com](http://knpbundles.com/mmoreram/HTTPHeadersBundle/badge-short)](http://knpbundles.com/mmoreram/HTTPHeadersBundle)  
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/mmoreram/HTTPHeadersBundle/badges/quality-score.png?s=fc68c628777bd22df39e2c48f26b6c2c8bc35ad3)](https://scrutinizer-ci.com/g/mmoreram/HTTPHeadersBundle/)

Custom HTTP Headers for Symfony2
-----

## Installing [HttpHeadersBundle](https://github.com/mmoreram/http-headers-bundle)
You have to add require line into you `composer.json` file

    "require": {
        "php": ">=5.3.3",
        "symfony/symfony": "2.3.*",
        ...
        "mmoreram/http-headers-bundle": "dev-master"
    },

Then you have to use composer to update your project dependencies

    php composer.phar update

And register the bundle in your appkernel.php file

    return array(

        // ...
        new Mmoreram\HttpHeadersBundle\HttpHeadersBundle(),
        // ...
    );

## Configuring HttpHeaders Bundle
You can now configure as many HTTP Headers as you want for your project. You only have to give them a name and a set of values into your `config.yml` file


    #Http Headers
    http_headers:
        response:
            x_jedi_newton:
                name: X-Jedi-Newton
                values:
                    - I can calculate the motion of heavenly bodies, but not the madness of people
                    - Errors are not in the art but in the artificers
                    - It is the weight, not numbers of experiments that is to be regarded

            x_jedi:
                name: X-Jedi
                values:
                    - Meet our team at humans.txt

This bundle will get a random quote in each request. If only one quote is defined, just this quote will be output.

## Join X-Jedi
There is a project called X-Jedi, that encourages all development teams to add their own http-headers under the name of X-Jedi, with their most representative quotes. You can find more info in [X-Jedi Project](http://xjedi.org) webpage
