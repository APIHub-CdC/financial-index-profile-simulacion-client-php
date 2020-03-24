# financial-index-profile-simulacion-client-php

Permite identificar perfiles de madurez de un cliente dependiendo del tipo, cantidad y profundidad de las relaciones de una persona con el sistema de pagos, para, de esta manera, entender qué tipo de producto o servicio es el más adecuado ofrecer a un determinado perfil de cliente.

## Requisitos

PHP 7.1 ó superior

### Dependencias adicionales

- Se debe contar con las siguientes dependencias de PHP:
  - ext-curl
  - ext-mbstring
- En caso de no ser así, para linux use los siguientes comandos

```sh
#ejemplo con php en versión 7.3 para otra versión colocar php{version}-curl
apt-get install php7.3-curl
apt-get install php7.3-mbstring
```

- Composer [vea como instalar][1]

## Instalación

Ejecutar: `composer install`

## Guía de inicio

### Paso 1. Agregar el producto a la aplicación

Al iniciar sesión seguir os siguientes pasos:

1.  Dar clic en la sección "**Mis aplicaciones**".
2.  Seleccionar la aplicación.
3.  Ir a la pestaña de "**Editar '@tuApp**' ".
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/edit_applications.jpg" width="900">
    </p>
4.  Al abrirse la ventana emergente, seleccionar el producto.
5.  Dar clic en el botón "**Guardar App**":
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/selected_product.jpg" width="400">
    </p>

### Paso 2. Capturar los datos de la petición

Los siguientes datos a modificar se encuentran en **_test/Api/ApiTest.php_**

Es importante contar con el setUp() que se encargará de inicializar la url. Modificar la URL **_('the_url')_** de la petición del objeto **_\$config_**, como se muestra en el siguiente fragmento de código:

```php
public function setUp()
{
    $handler = \GuzzleHttp\HandlerStack::create();
    $config = new \FinancialIndexProfileSimulacion\Client\Configuration();
    $config->setHost('the_url');

    $client = new \GuzzleHttp\Client(['handler' => $handler, 'verify' => false]);
    $this->apiInstance = new MadurezSimulacionApi($client, $config);

    $this->x_api_key = "your_api_key";
}

/**
* Este es el método que se será ejecutado en la prueba ubicado en path/to/repository/test/Api/ApiTest.php
*/
public function testMadurez()
{
    $folioConsulta = "100000000";

    try {
        $result = $this->apiInstance->madurez($this->x_api_key, $folioConsulta);
        print_r($result);
        $this->assertTrue($result->getFolioScore()!==null);
    } catch (Exception $e) {
        echo 'Exception when calling MadurezSimulacionApi->getFolioScore: ', $e->getMessage(), PHP_EOL;
    }
}
```

## Pruebas unitarias

Para ejecutar las pruebas unitarias:

```sh
./vendor/bin/phpunit
```

[1]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos
