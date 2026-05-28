# Kata-Examen

### Ejecución con Docker:

```bash
# Construir la imagen
docker build -t examen-php .

# Entrar al contenedor
# Al entrar, si no existe vendor/, se instala automáticamente
docker run -it -v "$(pwd)":/app examen-php bash

# Ejecutar los tests dentro del contenedor
vendor/bin/phpunit
```

### Ejecución local (requiere PHP 8.3+):

```bash
composer install
vendor/bin/phpunit
```
