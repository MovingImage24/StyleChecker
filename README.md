# PHP Code Style Checker

This library provides a single policy on PHP code styles, as well as a utility to check your 
project/library against this code style policy without automatically fixing your code. 

### Installation

Make sure that in your composer.json you have the private packagist set up:

```
{
[...]
  "repositories": [
    {
      "type": "composer",
      "url": "http://packagist.mi24.tv/"
    }
  ],
  "config": {
    "secure-http": false
  },
[...]
}
```

Now, install it as a development dependency:

```
$ composer require --dev movingimage/style-checker
```

### Usage

To check your current project's codebase after installing the library:

```
$ ./vendor/bin/check_code_style.sh
```

Or you can install it as a pre-commit hook by creating a new file `.git/hooks/pre-commit` with the following contents:

```
#!/usr/bin/env bash
./vendor/bin/check_code_style.sh
```