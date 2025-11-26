#!/bin/bash
set -e

# Check if dependencies are already installed
if ! command -v git &> /dev/null; then
    echo "Installing system dependencies..."
    apt-get update && apt-get install -y \
        git \
        curl \
        zip \
        unzip \
        libzip-dev \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        && apt-get clean \
        && rm -rf /var/lib/apt/lists/*
    
    echo "Installing PHP extensions..."
    docker-php-ext-install zip mbstring exif pcntl bcmath gd
    
    echo "Dependencies installed successfully!"
fi

# Execute the main command
exec "$@"

