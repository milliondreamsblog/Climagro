# Use official PHP 8 image
FROM php:8.1-cli

# Set working directory
WORKDIR /var/www/html

# Copy everything into container
COPY . .

# Expose the web server port
EXPOSE 10000

# Start built-in PHP server
CMD ["php", "-S", "0.0.0.0:10000", "index.php"]
