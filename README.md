### Laravel8 Docker Image
- Nginx
- Laravel 8
- PHP 8 FPM
- Supervisor

### How to build this Image
docker build -t  solarmart .

docker run -p 8085:80 -d solarmart

docker ps