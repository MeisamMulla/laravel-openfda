# Laravel OpenFDA

The Laravel OpenFDA package simplifies accessing the openFDA APIs, allowing users to query the API with ease. While this package is designed to be used with Laravel, it can also be used independently.

You can use this API without an API key however you will be limited to 1,000 requests per day. You can get a free API key from [openFDA directly](https://open.fda.gov/apis/authentication/)

## Installation

You can install the Laravel OpenFDA package via Composer by running the following command:

```bash
composer require meisam-mulla/laravel-openfda
```

## Usage

To use the Laravel OpenFDA package, follow the example below:

### With Laravel
```php
$response = OpenFDA::search('tylenol')->get();

// Process the response
```

### Without Laravel

```php
use MeisamMulla\OpenFDA\OpenFDA;

$openFDA = new OpenFDA();

$response = $openFDA->search('tylenol')->get();

// Process the response
```

### Available Methods

The following methods are available for querying the openFDA APIs:

| Method                              | Description                                                                              |
|-------------------------------------|------------------------------------------------------------------------------------------|
| `use(string $endpoint): OpenFDA`    | Set the API endpoint to be used.                                                         |
| `search(string $query): OpenFDA`    | Set the search query.                                                                    |
| `sort(string $sort): OpenFDA`       | Set the sorting criteria.                                                                |
| `count(int $count): OpenFDA`        | Set the number of results to be counted.                                                  |
| `limit(int $limit): OpenFDA`        | Set the maximum number of results to be returned.                                         |
| `skip(int $skip): OpenFDA`          | Set the number of results to skip.                                                        |
| `get(): stdClass`                   | Send the API request and retrieve the response.                                           |
| `resetQuery(): void`                | Reset the query parameters to their default values.                                       |

### Available Endpoints

The Laravel OpenFDA package provides access to the following openFDA API endpoints:

| Endpoint                                 | Description                                                                                                 |
|------------------------------------------|-------------------------------------------------------------------------------------------------------------|
| `ANIMAL_DRUG_EVENT`                      | [Animal and Veterinary Drug Event](https://api.fda.gov/animalandveterinary/event.json)                      |
| `DRUG_EVENT`                             | [Drug Event](https://api.fda.gov/drug/event.json)                                                          |
| `DRUG_LABEL`                             | [Drug Label](https://api.fda.gov/drug/label.json)                                                          |
| `DRUG_NDC`                               | [Drug NDC](https://api.fda.gov/drug/ndc.json)                                                              |
| `DRUG_ENFORCEMENT`                       | [Drug Enforcement](https://api.fda.gov/drug/enforcement.json)                                              |
| `DRUG_FDA`                               | [Drug FDA](https://api.fda.gov/drug/drugsfda.json)                                                          |
| `DEVICE_501K`                            | [Device 510k](https://api.fda.gov/device/510k.json)                                                         |
| `DEVICE_CLASSIFICATION`                  | [Device Classification](https://api.fda.gov/device/classification.json)                                      |
| `DEVICE_ENFORCEMENT`                     | [Device Enforcement](https://api.fda.gov/device/enforcement.json)                                            |
| `DEVICE_EVENT`                           | [Device Event](https://api.fda.gov/device/event.json)                                                        |
| `DEVICE_PMA`                             | [Device PMA](https://api.fda.gov/device/pma.json)                                                            |
| `DEVICE_RECALL`                          | [Device Recall](https://api.fda.gov/device/recall.json)                                                      |
| `DEVICE_REGISTRATION`                    | [Device Registration Listing](https://api.fda.gov/device/registrationlisting.json)                            |
| `DEVICE_COVID19`                         | [Device COVID-19 Serology](https://api.fda.gov/device/covid19serology.json)                                  |
| `DEVICE_UDI`                             | [Device UDI](https://api.fda.gov/device/udi.json)                                                            |
| `FOOD_ENFORCEMENT`                       | [Food Enforcement](https://api.fda.gov/food/enforcement.json)                                                |
| `FOOD_EVENT`                             | [Food Event](https://api.fda.gov/food/event.json)                                                            |
| `TOBACCO_PROBLEM`                        | [Tobacco Problem](https://api.fda.gov/tobacco/problem.json)                                                  |

## Configuration

To configure the package, you can set the `OPENFDA_APIKEY` variable in your `.env` file. If the variable is set, it will be included as an authorization header in the API requests.

You can use this API without an API key however you will be limited to 1,000 requests per day. You can get a free API key from [openFDA directly](https://open.fda.gov/apis/authentication/)

## Contributing

Contributions are welcome! If you encounter any issues or have suggestions for improvements, please [open an issue](https://github.com/meisammulla/laravel-openfda/issues) on GitHub.

## License

The Laravel OpenFDA package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Acknowledgements

This package is built upon the openFDA APIs. We would like to express our gratitude to the openFDA team for providing this valuable resource.

## Contact

If you have any questions or need further assistance, feel free to contact the package maintainer at mmeisam@gmail.com.
