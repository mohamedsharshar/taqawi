#!/bin/bash

# Script to copy custom files to a fresh Laravel installation

echo "🚀 Copying custom files to Laravel project..."

# Check if target directory exists
if [ ! -d "arab-seeds-backend-new" ]; then
    echo "❌ Error: arab-seeds-backend-new directory not found!"
    echo "Please create a fresh Laravel project first:"
    echo "composer create-project laravel/laravel arab-seeds-backend-new"
    exit 1
fi

# Create directories if they don't exist
mkdir -p arab-seeds-backend-new/app/Http/Controllers/Api

# Copy Models
echo "📦 Copying Models..."
cp arab-seeds-backend/app/Models/FinancialStatement.php arab-seeds-backend-new/app/Models/
cp arab-seeds-backend/app/Models/MeetingMinute.php arab-seeds-backend-new/app/Models/
cp arab-seeds-backend/app/Models/IrManager.php arab-seeds-backend-new/app/Models/

# Copy Controllers
echo "🎮 Copying Controllers..."
cp arab-seeds-backend/app/Http/Controllers/Api/FinancialStatementController.php arab-seeds-backend-new/app/Http/Controllers/Api/
cp arab-seeds-backend/app/Http/Controllers/Api/MeetingMinuteController.php arab-seeds-backend-new/app/Http/Controllers/Api/
cp arab-seeds-backend/app/Http/Controllers/Api/IrManagerController.php arab-seeds-backend-new/app/Http/Controllers/Api/

# Copy Migrations
echo "🗄️  Copying Migrations..."
cp arab-seeds-backend/database/migrations/2024_01_01_000001_create_financial_statements_table.php arab-seeds-backend-new/database/migrations/
cp arab-seeds-backend/database/migrations/2024_01_01_000002_create_meeting_minutes_table.php arab-seeds-backend-new/database/migrations/
cp arab-seeds-backend/database/migrations/2024_01_01_000003_create_ir_managers_table.php arab-seeds-backend-new/database/migrations/

# Copy Seeders
echo "🌱 Copying Seeders..."
cp arab-seeds-backend/database/seeders/InvestorRelationsSeeder.php arab-seeds-backend-new/database/seeders/
cp arab-seeds-backend/database/seeders/DatabaseSeeder.php arab-seeds-backend-new/database/seeders/

# Copy Routes
echo "🛣️  Copying Routes..."
cp arab-seeds-backend/routes/api.php arab-seeds-backend-new/routes/

# Copy Config
echo "⚙️  Copying Config..."
cp arab-seeds-backend/config/cors.php arab-seeds-backend-new/config/

# Copy .env.example
echo "📝 Copying .env.example..."
cp arab-seeds-backend/.env.example arab-seeds-backend-new/.env.example

echo ""
echo "✅ All custom files copied successfully!"
echo ""
echo "Next steps:"
echo "1. cd arab-seeds-backend-new"
echo "2. cp .env.example .env"
echo "3. php artisan key:generate"
echo "4. Update .env with your database credentials"
echo "5. php artisan migrate"
echo "6. php artisan db:seed"
echo "7. php artisan storage:link"
echo "8. php artisan serve"
echo ""
echo "🎉 Done!"
