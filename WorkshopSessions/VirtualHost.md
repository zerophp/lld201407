# Virtual Host 

## Creación de un Virtual Host en apache

### Abrir archivo /apache/conf/httdp.conf

Copiar las directivas de directorio
   
	<Directory "C:\www">
		Options Indexes FollowSymLinks
		AllowOverride All
		Order allow,deny
		Allow from all
	</Directory>
	
### Abrir archivo /apache/conf/extra/httpd-vhost.conf

	<VirtualHost *:80>
	    ServerAdmin agustincl@gmail.com
	    DocumentRoot "C:\www"
	    ServerName localhost
	    ErrorLog "logs/localhost-error.log"
	    CustomLog "logs/localhost-access.log" common
		<Directory "C:\www">
	    		Options Indexes FollowSymLinks
	    		AllowOverride All
	    		Order allow,deny
	    		Allow from all
		</Directory>
	</VirtualHost>
	
### Abrir el archivo hosts (/Windows/system32/drivers/etc/hosts)

	Agregar el domain
	127.0.0.1  localhost
	127.0.0.1  domain.local