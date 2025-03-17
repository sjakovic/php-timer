# Jakovic Timer

A simple PHP package for measuring execution time in your applications.

## 🚀 Installation
You can install the package via Composer:

```sh
composer require jakovic/timer
```

## 🔧 Usage
First, import and use the `Timer` class:

```php
use Jakovic\Timer;
```

### ✅ Basic Example

```php
use Jakovic\Timer;

Timer::start();
sleep(5); // Simulate some process
Timer::end();

echo Timer::getSeconds(); // e.g. 5.0032
echo Timer::getMinutes(); // e.g. 0.0833
echo Timer::getHours();   // e.g. 0.0014
echo Timer::total();      // e.g. 00:00:05
```

## 🛠 Methods
- `start()` - Starts the timer
- `end()` - Stops the timer
- `getSeconds()` - Returns elapsed time in seconds (float), e.g., `5.0032`
- `getMinutes()` - Returns elapsed time in minutes (float), e.g., `0.0833`
- `getHours()` - Returns elapsed time in hours (float), e.g., `0.0014`
- `total()` - Returns elapsed time in `H:i:s` format, e.g., `00:00:05`

## 📜 License
This package is open-sourced software licensed under the [MIT License](LICENSE).
