# Pest Testing Project

## Requirements

- PHP 8.0+
- Composer

## Installation

1. Clone the repository
2. In the project directory, run

```bash
composer install
```

This will install all the dependencies required for the project.

## Configuration

1. Copy the `.env.example` file to `.env`

```bash
cp .env.example .env
```

2. Open the `.env` file and SET the `CORE_PATH` variable to the path of the core project.

```bash
CORE_PATH=/path/to/core
```

Ensure the path is correct and points to your core project.

## Running Tests

To run the tests, simply use (you can also use `composer test`):

```bash
./vendor/bin/pest
```

This will run all the tests in the `tests/` directory.

### Running Specific Tests

To run a specific test file (e.g. `tests/Feature/ExampleTest.php`), use:

```bash
./vendor/bin/pest tests/Feature/ExampleTest.php
```

This will run only the tests in the specified file.
To run a specific test method (e.g. `test_example` in `tests/Feature/ExampleTest.php`), use:

```bash
./vendor/bin/pest tests/Feature/ExampleTest.php --filter test_example
```