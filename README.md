Kata
====
[![Downloads](https://img.shields.io/packagist/dt/pdt256/kata.svg)](https://packagist.org/packages/pdt256/kata)
[![License](https://img.shields.io/packagist/l/pdt256/skill.svg)](https://github.com/pdt256/skill/blob/master/LICENSE.txt)

## Introduction

Kata for PHP.

## Installation

*NOTE:* These instructions are written with the presumption that you are running on a Mac OS X machine.

#### Pre-requisites

1. Install XCode from the App Store
  * This needs to be the entire XCode package, not just the build tools.
  * This will take some time to install, approximately 10-15+ minutes on a good internet connection. The XCode package is roughly 3.8GB. It is recommended to be on a hardwired internet connection.
2. [Install Homebrew](http://brew.sh/) (Follow instructions provided at this link)
3. [Install PHP 5.6](#installPHP56)
4. [Install Composer](#installComposer)

#### Install Dependencies

```bash
$ composer install
```

## Setup Scopes

1. Open PHPStorm
2. Go to Preferences > Appearance & Behavior > Scopes
3. Click the "+" icon and select "Local" to add a new Scope (Name: "Source")
4. Locate the "kata/src" and "kata/tests" directories and click the "Include" button
5. Click "Apply"

## Setup PHP Code Sniffer

1. Go to Preferences > Languages & Frameworks > PHP > Code Sniffer
2. Click the "..." button
3. Click the "+" icon button to add a new Configuration (Name: Local)
4. Locate the phpcs binary path
  1. Click the "..." button to browse
  2. Locate the binary: <project path>/vendor/bin/phpcs
5. Click "Validate"
6. Click "Apply" & "Ok"
7. Go to Preferences > Editor > Inspections
8. Search for "PHP Code Sniffer validation" and enable it by checking the checkbox
9. In the second dropdown for "Severity", select the "Source" scope you created earlier
  1. Un-check the "Everywhere else" option that was created
10. Select "PSR2" from the "Coding Standard" dropdown
11. Click "Apply" & "Ok"

<a name="installPHP56"></a>
#### Install PHP 5.6 and XDebug

```bash
$ brew install homebrew/php/php56 homebrew/php/php56-xdebug
```

<a name="installComposer"></a>
#### Install Composer

This will install composer globally for your user and for easier use.

```bash
$ curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
```

## Unit Tests:

```bash
$ vendor/bin/phpunit
```


### License

The MIT License (MIT)

Copyright (c) 2016 Jamie Isaacs <pdt256@gmail.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
