## Gereksinimler

Projenin çalışması için aşağıdaki gereksinimlere ihtiyaç vardır:

- PHP 8.1 veya 8.2
- Laravel 10
- Composer version 2.6.5 veya üstü

## Kurulum

1. Projeyi lokal ortamınıza çekmek için terminal veya komut istemcisine şu komutu yazın:

    ```bash
    git clone git@github.com:cenksen/case.git
    ```

2. Proje klasörüne gidin:

    ```bash
    cd case
    ```

3. Bağımlılıkları yüklemek için Composer'ı kullanın:

    ```bash
    composer install
    ```

4. Veritabanını oluşturmak ve tabloları oluşturmak için Laravel migrasyonları kullanın:

    ```bash
    php artisan migrate
    ```

5. Örnek verilerle veritabanını doldurmak için seed komutunu çalıştırın:

    ```bash
    php artisan db:seed
    ```

6. Aşağıdaki komutu çalıştırarak oluşturulan kullanıcılardan admin seçin:

    ```bash
    php artisan shield:install
    ```

