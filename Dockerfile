FROM yiisoftware/yii2-php:7.4-apache

# Copy required files
COPY . .

# Install composer dependencies
RUN ["composer", "install"]

# Initialise project environment
ARG env
RUN php init --env=${env} --overwrite=All

# Change document root for Apache
RUN sed -i -e 's|/app/web|/app/frontend/web|g' /etc/apache2/sites-available/000-default.conf

# Set entry point script
CMD ["sh", "entrypoint.sh"]
