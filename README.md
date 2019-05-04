# ussd
API usage and database design for a ussd application that collects user names, and surnames


### Setup instructions

```bash
# Clone Laradock
git clone https://github.com/laradock/laradock
# Clone this repository
git clone https://github.com/noondaysun/ussd
# Copy the required nginx files to the right place
cp ussd/config/nginx/ussd.test.conf laradock/nginx/sites/
sudo echo '127.0.0.1 ussd.test ussd' >> /etc/hosts
docker-compose up -d --build nginx mysql redis
```

You should now be able to browse to http://ussd.test in your browser :)