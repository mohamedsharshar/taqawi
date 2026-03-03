# Arab Seeds Backend API

Laravel 12 backend API for Arab Seeds website investor relations section.

## Features

- Financial Statements Management (PDF uploads)
- Meeting Minutes Management (PDF uploads)
- IR Manager Information Management
- RESTful API with JSON responses
- File upload support
- Multi-language support (Arabic/English)
- CORS enabled for React frontend

## Installation

```bash
# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database in .env file
# Then run migrations
php artisan migrate

# Create storage link
php artisan storage:link

# Start development server
php artisan serve
```

## API Endpoints

### Public Endpoints

#### Financial Statements
- `GET /api/v1/financial-statements` - List all active financial statements
- `GET /api/v1/financial-statements/{id}` - Get specific statement

#### Meeting Minutes
- `GET /api/v1/meeting-minutes` - List all active meeting minutes
- `GET /api/v1/meeting-minutes/{id}` - Get specific minute

#### IR Manager
- `GET /api/v1/ir-manager` - Get active IR manager info

### Protected Endpoints (Require Authentication)

#### Financial Statements Management
- `POST /api/v1/financial-statements` - Create new statement
- `POST /api/v1/financial-statements/{id}` - Update statement
- `DELETE /api/v1/financial-statements/{id}` - Delete statement

#### Meeting Minutes Management
- `POST /api/v1/meeting-minutes` - Create new minute
- `POST /api/v1/meeting-minutes/{id}` - Update minute
- `DELETE /api/v1/meeting-minutes/{id}` - Delete minute

#### IR Manager Management
- `POST /api/v1/ir-manager` - Create IR manager
- `POST /api/v1/ir-manager/{id}` - Update IR manager
- `DELETE /api/v1/ir-manager/{id}` - Delete IR manager

## Database Schema

### financial_statements
- id, title_ar, title_en, description_ar, description_en
- file_path, file_name, file_size
- statement_date, type (balance_sheet, income_statement, cash_flow, other)
- is_active, order, timestamps

### meeting_minutes
- id, title_ar, title_en, description_ar, description_en
- file_path, file_name, file_size
- meeting_date, type (general_assembly, board_meeting, other)
- is_active, order, timestamps

### ir_managers
- id, name_ar, name_en, position_ar, position_en
- phone, email, photo
- is_active, timestamps

## File Storage

Files are stored in `storage/app/public/`:
- Financial statements: `financial-statements/`
- Meeting minutes: `meeting-minutes/`
- IR manager photos: `ir-managers/`

## Environment Variables

```env
APP_URL=http://localhost:8000
CORS_ALLOWED_ORIGINS=http://localhost:3000
DB_DATABASE=arab_seeds
```

## Testing

```bash
# Run tests
php artisan test
```

## License

MIT
