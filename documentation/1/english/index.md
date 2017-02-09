# Documentation of CodeMommy IsPHP

## Start

### 1. Install by Composer
```bash
composer require codemommy/isphp
```

### 2. Require Vendor Autoload File
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
```

### 3. Use Namespace
```php
<?php
use CodeMommy\IsPHP\Is;
```

## Functions

### php
```php
<?php
$result = Is::php();
```

### email
```php
<?php
$result = Is::email($email);
```

### chinaCellPhoneNumber
```php
<?php
$result = Is::chinaCellPhoneNumber($number);
```