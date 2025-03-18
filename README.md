# Jakovic Timer

A simple PHP package for measuring execution time in your applications.

## 🚀 Installation
You can install the package via Composer:

```sh
composer require jakovic/timer
```

## 🔧 Usage
First, import and create an instance of the `Timer` class:

```php
use Jakovic\Timer;
```

### ✅ Basic Example

```php
use Jakovic\Timer;

$timer = new Timer();
$timer->start();
sleep(5); // Simulate some process
$timer->end();

echo $timer->getSeconds(); // e.g. 5.0032
echo $timer->getMinutes(); // e.g. 0.0833
echo $timer->getHours();   // e.g. 0.0014
echo $timer->total();      // e.g. 00:00:05
```

### ✅ Multiple Timers Example

```php
$timer1 = new Timer();
$timer2 = new Timer();

$timer1->start();
sleep(3);
$timer1->end();

$timer2->start();
sleep(5);
$timer2->end();

echo "Timer 1: " . $timer1->total() . "\n"; // 00:00:03
echo "Timer 2: " . $timer2->total() . "\n"; // 00:00:05
```

## 🛠 Methods

- `$timer->start()` - Starts the timer
- `$timer->end()` - Stops the timer
- `$timer->getSeconds()` - Returns elapsed time in seconds (float), e.g., `5.0032`
- `$timer->getMinutes()` - Returns elapsed time in minutes (float), e.g., `0.0833`
- `$timer->getHours()` - Returns elapsed time in hours (float), e.g., `0.0014`
- `$timer->total()` - Returns elapsed time in `H:i:s` format, e.g., `00:00:05`

## 📜 License
This package is open-sourced software licensed under the [MIT License](./LICENSE).
