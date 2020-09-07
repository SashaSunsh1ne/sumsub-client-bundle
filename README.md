# sumsub-client-bundle

Symfony bundle for [alexeevdv/sumsub-client](https://github.com/alexeevdv/sumsub-client)

## Installation

```shell script
composer require alexeevdv/sumsub-client-bundle
```

## Configuration

```php
// config/bundles.php

return [
    // ...
    alexeevdv\Symfony\SumSub\SumSubClientBundle::class => ['all' => true],
    // ...
];
```

```yaml
# config/packages/sumsub_client.yaml 

sumsub_client:
  base_uri: '%env(SUMSUB_BASE_URI)%'
  app_token: '%env(SUMSUB_APP_TOKEN)%'
  secret_key: '%env(SUMSUB_SECRET_KEY)%'
```


