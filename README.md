# Custom Laravel
### SYSTEM REQUIREMENT

* DB
    - MySQL 5.6
* Apache
    - 2.4
* PHP
    - 7.0
* Laravel
    - 8.0
* Composer
    - 1.4.1

### Install

* Permission

```bash
sudo chmod -R 777 bootstrap/cache
sudo chmod -R 777 storage/logs/
sudo chmod -R 777 storage/framework
sudo chmod -R 777 public/media
sudo chmod -R 777 public/tmp_uploads
```

* Run install

```bash
 compose install
 
 php artisan cache:clear
 php artisan config:clear
 php artisan view:clear

 cp .env.example .env
 php artisan key:generate
```
