1- build image from dockerfile:
    docker build -t my-php-app:v1 .
2- run container from image:
    docker run -it --rm --name my-running-app my-php-app:v1
