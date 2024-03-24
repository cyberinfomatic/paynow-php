# Use official PHP image as base
FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html

# Copy the application code to the container
COPY . .

# Expose port 80
EXPOSE 80
