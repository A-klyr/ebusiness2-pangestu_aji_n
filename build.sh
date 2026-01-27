#!/usr/bin/env bash
# exit on error
set -o errexit

echo "🚀 Starting Build Process..."

# Install and build frontend assets
echo "📦 Installing Node dependencies..."
npm install
echo "🏗️ Building assets..."
npm run build

# Install PHP dependencies
echo "🐘 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

# Run optimizations
echo "⚙️ Optimizing Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Migration (Optional: move to post-deploy if preferred)
echo "🗄️ Running Migrations..."
php artisan migrate --force

echo "🔗 Linking storage..."
# Ensure public/storage exists or is removed before linking
rm -rf public/storage
php artisan storage:link

echo "✅ Build Finished!"
