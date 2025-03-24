**Pemweb Pertemuan 1**

membahas tentang apa itu websiite dan apa fungsi website dan menganalisa website menggunakan 5w1h dan S.W.O.T

website mempunya sebuah adsres seperti facebook,youtube ,dll.

kita akan memdapatkan project yaitu membuat sebuah company profile yang akan di kontrol mengggunakan user admin

melakukan praktek coding yaitu membuat file sample app beserta isinya secara manual mencakup nginx,, php, db, docke-compose.yml, .env nya
berikut adalah hal yang di buat :

### nginx.conf

    server {
        listen 80;
        server_name localhost;

    location / {
        root /usr/share/nginx/html;
        index index.html;
    }

}

### docker-compose.yml

    version : '3'

    services:

    web:
        image: nginx:latest
        ports:
            - 80:80
        volumes:
            - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf-

### .env

    COMPOSE_PRJECT_NAME = esgul
    REPOSITORY_NAME = Pemweb
    IMAGE_TAG = latest
