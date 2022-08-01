LOCKED_2004_BOX_VERSION = "20211026.0.0"
WORDPRESS_VM_SSH_PORT = 10322


Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/focal64"
  config.vm.box_version = LOCKED_2004_BOX_VERSION
  config.vm.box_check_update = false
  config.vm.hostname = "wordpressvm"
  config.vm.network :forwarded_port, guest: 80, host: 8381
  config.vm.network :forwarded_port, guest: 443, host: 8541
  config.vm.network :forwarded_port, guest: 22, host: WORDPRESS_VM_SSH_PORT, id: 'ssh'

  config.vm.provision "shell", inline: <<-SHELL
apt-get update
# php-imagick and php-gd are the choices for automatic resizing of uploaded
# media. imagick is bigger but better.
apt-get install -y apache2 \
                   ghostscript \
                   libapache2-mod-php \
                   mysql-server \
                   php \
                   php-bcmath \
                   php-curl \
                   php-intl \
                   php-json \
                   php-mbstring \
                   php-mysql \
                   php-xml \
                   php-zip


mkdir -p /srv/www
chown www-data: /srv/www
curl https://en-gb.wordpress.org/wordpress-5.8.2-en_GB.tar.gz | sudo -u www-data tar zx -C /srv/www
openssl req -new -newkey ec -pkeyopt ec_paramgen_curve:prime256v1 -days 365 -nodes -x509 \
    -subj "/CN=localhost" \
    -keyout /etc/ssl/private/apache-selfsigned.key -out /etc/ssl/certs/apache-selfsigned.crt
cp /vagrant/ssl-params.conf /etc/apache2/conf-available/ssl-params.conf
cp /vagrant/wordpress.conf /etc/apache2/sites-available/wordpress.conf
a2enmod ssl
a2enmod headers
a2enmod rewrite
a2ensite wordpress
a2enconf ssl-params
a2dissite 000-default
systemctl reload apache2

ufw allow OpenSSH
echo =============
cat /etc/default/ufw
# Default should already be these (cat /etc/default/ufw):
ufw default allow outgoing
ufw default deny incoming
ufw allow 'Apache Full'
ufw delete allow 'Apache'
echo "y" | ufw enable

mysql -u root < /vagrant/wpdbsetup.sql
sudo -u www-data cp /vagrant/wp-config.php /srv/www/wordpress/wp-config.php
SHELL

  config.vm.provision "shell", privileged: false, inline: <<-SHELL
echo "colo ron" > ~/.vimrc
SHELL
end

