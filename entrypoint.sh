#!/bin/sh

# Migrate database
php yii migrate/up --interactive 0

# Start the apache process
apache2-foreground
