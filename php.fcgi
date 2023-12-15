#!/bin/bash
DEFAULTPHPINI="/home/terramonrs/public_html/php72-fcgi.ini"
exec /opt/cpanel/ea-php72/root/usr/bin/php-cgi -c ${DEFAULTPHPINI}