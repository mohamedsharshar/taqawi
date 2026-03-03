# دليل Spatie Packages - Arab Seeds Backend

## ✅ تم تثبيت وإعداد:

### 1. Spatie Laravel Translatable
للترجمة متعددة اللغات (عربي/إنجليزي)

### 2. Spatie Laravel Permission
لإدارة الصلاحيات والأدوار

---

## 📦 Spatie Translatable

### كيف يعمل؟

بدلاً من حقول منفصلة (`title_ar`, `title_en`)، نستخدم حقل واحد JSON:

```php
// قبل
'title_ar' => 'قائمة مالية',
'title_en' => 'Financial Statement',

// بعد (مع Spatie)
'title' => [
    'ar' => 'قائمة مالية',
    'en' => 'Financial Statement',
]
```

### Models المحدثة:

1. **FinancialStatement**
   - `title` (JSON: ar, en)
   - `description` (JSON: ar, en)

2. **MeetingMinute**
   - `title` (JSON: ar, en)
   - `description` (JSON: ar, en)

3. **IrManager**
   - `name` (JSON: ar, en)
   - `position` (JSON: ar, en)

### استخدام الترجمة:

```php
// إنشاء سجل جديد
FinancialStatement::create([
    'title' => [
        'ar' => 'قائمة المركز المالي',
        'en' => 'Balance Sheet',
    ],
    'description' => [
        'ar' => 'وصف بالعربي',
        'en' => 'Description in English',
    ],
    // ... باقي الحقول
]);

// قراءة الترجمة
$statement = FinancialStatement::first();

// الحصول على الترجمة حسب اللغة الحالية
echo $statement->title; // يعتمد على app()->getLocale()

// الحصول على ترجمة محددة
echo $statement->getTranslation('title', 'ar'); // قائمة المركز المالي
echo $statement->getTranslation('title', 'en'); // Balance Sheet

// تغيير اللغة
app()->setLocale('ar');
echo $statement->title; // قائمة المركز المالي

app()->setLocale('en');
echo $statement->title; // Balance Sheet
```

### في API:

```php
// Frontend يرسل
{
    "title": {
        "ar": "قائمة مالية",
        "en": "Financial Statement"
    }
}

// API يرجع
{
    "id": 1,
    "title": {
        "ar": "قائمة مالية",
        "en": "Financial Statement"
    }
}
```

---

## 🔐 Spatie Permission

### الأدوار (Roles):

1. **super-admin** - كل الصلاحيات
2. **admin** - إدارة المحتوى (بدون users/roles)
3. **editor** - إنشاء وتعديل (بدون حذف)
4. **viewer** - قراءة فقط

### الصلاحيات (Permissions):

#### Financial Statements:
- `view financial statements`
- `create financial statements`
- `edit financial statements`
- `delete financial statements`

#### Meeting Minutes:
- `view meeting minutes`
- `create meeting minutes`
- `edit meeting minutes`
- `delete meeting minutes`

#### IR Manager:
- `view ir manager`
- `edit ir manager`

#### Users Management:
- `view users`
- `create users`
- `edit users`
- `delete users`

#### Roles & Permissions:
- `manage roles`
- `manage permissions`

### المستخدمون الافتراضيون:

```
Super Admin:
Email: admin@arabseeds.com
Password: password
Role: super-admin

Admin:
Email: admin.user@arabseeds.com
Password: password
Role: admin

Editor:
Email: editor@arabseeds.com
Password: password
Role: editor
```

### استخدام Permissions:

#### في Controllers:

```php
// تم إضافته بالفعل في Controllers
public function __construct()
{
    $this->middleware('auth:sanctum')->except(['index', 'show']);
    $this->middleware('permission:view financial statements')->only(['index', 'show']);
    $this->middleware('permission:create financial statements')->only('store');
    $this->middleware('permission:edit financial statements')->only('update');
    $this->middleware('permission:delete financial statements')->only('destroy');
}
```

#### في Blade (إذا استخدمت):

```blade
@can('create financial statements')
    <button>إضافة قائمة مالية</button>
@endcan

@role('admin')
    <p>أنت مدير</p>
@endrole
```

#### في Code:

```php
// التحقق من الصلاحية
if ($user->can('create financial statements')) {
    // يمكنه الإنشاء
}

// التحقق من الدور
if ($user->hasRole('admin')) {
    // هو مدير
}

// إعطاء صلاحية
$user->givePermissionTo('create financial statements');

// إعطاء دور
$user->assignRole('admin');

// سحب صلاحية
$user->revokePermissionTo('delete financial statements');

// سحب دور
$user->removeRole('editor');
```

---

## 🚀 خطوات التشغيل

### 1. إنشاء قاعدة البيانات

```sql
CREATE DATABASE arab_seeds CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 2. تشغيل Migrations

```bash
php artisan migrate
```

هذا سيُنشئ:
- جداول Users
- جداول Permissions (roles, permissions, model_has_roles, etc.)
- جداول المشروع (financial_statements, meeting_minutes, ir_managers)

### 3. تشغيل Seeders

```bash
php artisan db:seed
```

هذا سيُنشئ:
- الأدوار والصلاحيات
- 3 مستخدمين (super-admin, admin, editor)
- بيانات تجريبية (قوائم مالية، محاضر، مدير علاقات)

### 4. Storage Link

```bash
php artisan storage:link
```

### 5. تشغيل السيرفر

```bash
php artisan serve
```

---

## 🧪 اختبار API

### بدون مصادقة (Public):

```bash
# عرض القوائم المالية
curl http://localhost:8000/api/v1/financial-statements

# عرض المحاضر
curl http://localhost:8000/api/v1/meeting-minutes

# عرض مدير العلاقات
curl http://localhost:8000/api/v1/ir-manager
```

### مع مصادقة (Protected):

أولاً، سجل دخول للحصول على Token:

```bash
# تحتاج إنشاء Login endpoint أو استخدام Sanctum
POST /api/login
{
    "email": "admin@arabseeds.com",
    "password": "password"
}
```

ثم استخدم Token:

```bash
curl -H "Authorization: Bearer YOUR_TOKEN" \
     -X POST http://localhost:8000/api/v1/financial-statements \
     -F "title[ar]=قائمة جديدة" \
     -F "title[en]=New Statement" \
     -F "file=@statement.pdf"
```

---

## 📝 أمثلة عملية

### إنشاء قائمة مالية جديدة:

```php
$statement = FinancialStatement::create([
    'title' => [
        'ar' => 'قائمة المركز المالي 2026',
        'en' => 'Balance Sheet 2026',
    ],
    'description' => [
        'ar' => 'قائمة المركز المالي للعام 2026',
        'en' => 'Balance sheet for year 2026',
    ],
    'file_path' => 'financial-statements/balance-2026.pdf',
    'file_name' => 'balance-2026.pdf',
    'file_size' => 2048000,
    'statement_date' => '2026-12-31',
    'type' => 'balance_sheet',
    'is_active' => true,
    'order' => 1,
]);
```

### إنشاء مستخدم جديد مع دور:

```php
$user = User::create([
    'name' => 'محمد أحمد',
    'email' => 'mohamed@arabseeds.com',
    'password' => bcrypt('password123'),
]);

$user->assignRole('editor');
```

### التحقق من الصلاحيات:

```php
// في Controller
public function store(Request $request)
{
    // التحقق التلقائي عبر middleware
    // أو يدوياً:
    if (!auth()->user()->can('create financial statements')) {
        return response()->json(['error' => 'Unauthorized'], 403);
    }
    
    // ... باقي الكود
}
```

---

## 🔧 إعدادات إضافية

### تغيير اللغة الافتراضية:

في `.env`:
```env
APP_LOCALE=ar
APP_FALLBACK_LOCALE=en
```

### تغيير guard للـ Permissions:

في `config/permission.php`:
```php
'defaults' => [
    'guard' => 'web', // أو 'api'
],
```

---

## 📚 موارد إضافية

- [Spatie Translatable Docs](https://github.com/spatie/laravel-translatable)
- [Spatie Permission Docs](https://spatie.be/docs/laravel-permission)

---

## ✅ الخلاصة

- ✅ Translatable معد ويعمل (JSON fields)
- ✅ Permissions معد ويعمل (Roles & Permissions)
- ✅ Middleware مضاف للـ Controllers
- ✅ Seeders جاهزة (Users, Roles, Permissions, Data)
- ✅ كل شيء جاهز للاستخدام!

فقط شغل migrations و seeders وابدأ! 🚀
