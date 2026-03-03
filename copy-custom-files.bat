@echo off
REM Script to copy custom files to a fresh Laravel installation (Windows)

echo 🚀 Copying custom files to Laravel project...

REM Check if target directory exists
if not exist "arab-seeds-backend-new" (
    echo ❌ Error: arab-seeds-backend-new directory not found!
    echo Please create a fresh Laravel project first:
    echo composer create-project laravel/laravel arab-seeds-backend-new
    exit /b 1
)

REM Create directories if they don't exist
if not exist "arab-seeds-backend-new\app\Http\Controllers\Api" mkdir "arab-seeds-backend-new\app\Http\Controllers\Api"

REM Copy Models
echo 📦 Copying Models...
copy "arab-seeds-backend\app\Models\FinancialStatement.php" "arab-seeds-backend-new\app\Models\"
copy "arab-seeds-backend\app\Models\MeetingMinute.php" "arab-seeds-backend-new\app\Models\"
copy "arab-seeds-backend\app\Models\IrManager.php" "arab-seeds-backend-new\app\Models\"

REM Copy Controllers
echo 🎮 Copying Controllers...
copy "arab-seeds-backend\app\Http\Controllers\Api\FinancialStatementController.php" "arab-seeds-backend-new\app\Http\Controllers\Api\"
copy "arab-seeds-backend\app\Http\Controllers\Api\MeetingMinuteController.php" "arab-seeds-backend-new\app\Http\Controllers\Api\"
copy "arab-seeds-backend\app\Http\Controllers\Api\IrManagerController.php" "arab-seeds-backend-new\app\Http\Controllers\Api\"

REM Copy Migrations
echo 🗄️  Copying Migrations...
copy "arab-seeds-backend\database\migrations\2024_01_01_000001_create_financial_statements_table.php" "arab-seeds-backend-new\database\migrations\"
copy "arab-seeds-backend\database\migrations\2024_01_01_000002_create_meeting_minutes_table.php" "arab-seeds-backend-new\database\migrations\"
copy "arab-seeds-backend\database\migrations\2024_01_01_000003_create_ir_managers_table.php" "arab-seeds-backend-new\database\migrations\"

REM Copy Seeders
echo 🌱 Copying Seeders...
copy "arab-seeds-backend\database\seeders\InvestorRelationsSeeder.php" "arab-seeds-backend-new\database\seeders\"
copy "arab-seeds-backend\database\seeders\DatabaseSeeder.php" "arab-seeds-backend-new\database\seeders\"

REM Copy Routes
echo 🛣️  Copying Routes...
copy "arab-seeds-backend\routes\api.php" "arab-seeds-backend-new\routes\"

REM Copy Config
echo ⚙️  Copying Config...
copy "arab-seeds-backend\config\cors.php" "arab-seeds-backend-new\config\"

REM Copy .env.example
echo 📝 Copying .env.example...
copy "arab-seeds-backend\.env.example" "arab-seeds-backend-new\.env.example"

echo.
echo ✅ All custom files copied successfully!
echo.
echo Next steps:
echo 1. cd arab-seeds-backend-new
echo 2. copy .env.example .env
echo 3. php artisan key:generate
echo 4. Update .env with your database credentials
echo 5. php artisan migrate
echo 6. php artisan db:seed
echo 7. php artisan storage:link
echo 8. php artisan serve
echo.
echo 🎉 Done!
pause
