<?php

/**
 * سكريبت بسيط لإضافة بيانات تجريبية
 * 
 * الاستخدام:
 * php add_sample_data.php
 */

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\FinancialStatement;
use App\Models\MeetingMinute;
use App\Models\IrManager;

echo "🚀 بدء إضافة البيانات...\n\n";

// حذف البيانات القديمة
echo "🗑️  حذف البيانات القديمة...\n";
FinancialStatement::truncate();
MeetingMinute::truncate();
IrManager::truncate();

// إضافة القوائم المالية
echo "📊 إضافة القوائم المالية...\n";

$financialStatements = [
    [
        'title' => [
            'ar' => 'قائمة المركز المالي 30/09/2025',
            'en' => 'Statement of Financial Position 30/09/2025'
        ],
        'description' => [
            'ar' => 'قائمة المركز المالي للتحالف العربي لإنتاج التقاوي - الربع الثالث 2025',
            'en' => 'Arab Alliance for Seeds Production - Statement of Financial Position Q3 2025'
        ],
        'statement_date' => '2025-09-30',
        'file_path' => 'financial_statements/sample.pdf',
        'file_name' => 'financial_position_q3_2025.pdf',
        'file_size' => 1024000,
        'type' => 'balance_sheet',
        'is_active' => true,
        'order' => 1,
    ],
    [
        'title' => [
            'ar' => 'قائمة الدخل 30/09/2025',
            'en' => 'Income Statement 30/09/2025'
        ],
        'description' => [
            'ar' => 'قائمة الدخل للتحالف العربي لإنتاج التقاوي - الربع الثالث 2025',
            'en' => 'Arab Alliance for Seeds Production - Income Statement Q3 2025'
        ],
        'statement_date' => '2025-09-30',
        'file_path' => 'financial_statements/sample.pdf',
        'file_name' => 'income_statement_q3_2025.pdf',
        'file_size' => 1024000,
        'type' => 'income_statement',
        'is_active' => true,
        'order' => 2,
    ],
    [
        'title' => [
            'ar' => 'قائمة المركز المالي 30/06/2025',
            'en' => 'Statement of Financial Position 30/06/2025'
        ],
        'description' => [
            'ar' => 'قائمة المركز المالي للتحالف العربي لإنتاج التقاوي - الربع الثاني 2025',
            'en' => 'Arab Alliance for Seeds Production - Statement of Financial Position Q2 2025'
        ],
        'statement_date' => '2025-06-30',
        'file_path' => 'financial_statements/sample.pdf',
        'file_name' => 'financial_position_q2_2025.pdf',
        'file_size' => 1024000,
        'type' => 'balance_sheet',
        'is_active' => true,
        'order' => 3,
    ],
    [
        'title' => [
            'ar' => 'قائمة الدخل 30/06/2025',
            'en' => 'Income Statement 30/06/2025'
        ],
        'description' => [
            'ar' => 'قائمة الدخل للتحالف العربي لإنتاج التقاوي - الربع الثاني 2025',
            'en' => 'Arab Alliance for Seeds Production - Income Statement Q2 2025'
        ],
        'statement_date' => '2025-06-30',
        'file_path' => 'financial_statements/sample.pdf',
        'file_name' => 'income_statement_q2_2025.pdf',
        'file_size' => 1024000,
        'type' => 'income_statement',
        'is_active' => true,
        'order' => 4,
    ],
];

foreach ($financialStatements as $statement) {
    FinancialStatement::create($statement);
    echo "  ✅ تم إضافة: {$statement['title']['ar']}\n";
}

// إضافة محاضر الاجتماعات
echo "\n📝 إضافة محاضر الاجتماعات...\n";

$meetingMinutes = [
    [
        'title' => [
            'ar' => 'محضر اجتماع الجمعية العامة العادية 2024',
            'en' => 'Ordinary General Assembly Meeting Minutes 2024'
        ],
        'description' => [
            'ar' => 'محضر اجتماع الجمعية العامة العادية للتحالف العربي لإنتاج التقاوي',
            'en' => 'Minutes of the Ordinary General Assembly Meeting'
        ],
        'meeting_date' => '2024-03-20',
        'file_path' => 'meeting_minutes/sample.pdf',
        'file_name' => 'general_assembly_2024.pdf',
        'file_size' => 2048000,
        'type' => 'general_assembly',
        'is_active' => true,
        'order' => 1,
    ],
    [
        'title' => [
            'ar' => 'محضر اجتماع مجلس الإدارة - مارس 2024',
            'en' => 'Board of Directors Meeting - March 2024'
        ],
        'description' => [
            'ar' => 'محضر اجتماع مجلس الإدارة لشهر مارس 2024',
            'en' => 'Board of Directors meeting minutes for March 2024'
        ],
        'meeting_date' => '2024-03-10',
        'file_path' => 'meeting_minutes/sample.pdf',
        'file_name' => 'board_march_2024.pdf',
        'file_size' => 1536000,
        'type' => 'board_meeting',
        'is_active' => true,
        'order' => 2,
    ],
    [
        'title' => [
            'ar' => 'محضر اجتماع مجلس الإدارة - يناير 2024',
            'en' => 'Board of Directors Meeting - January 2024'
        ],
        'description' => [
            'ar' => 'محضر اجتماع مجلس الإدارة لشهر يناير 2024',
            'en' => 'Board of Directors meeting minutes for January 2024'
        ],
        'meeting_date' => '2024-01-15',
        'file_path' => 'meeting_minutes/sample.pdf',
        'file_name' => 'board_january_2024.pdf',
        'file_size' => 1536000,
        'type' => 'board_meeting',
        'is_active' => true,
        'order' => 3,
    ],
];

foreach ($meetingMinutes as $minute) {
    MeetingMinute::create($minute);
    echo "  ✅ تم إضافة: {$minute['title']['ar']}\n";
}

// إضافة مدير علاقات المستثمرين
echo "\n👤 إضافة مدير علاقات المستثمرين...\n";

$irManager = IrManager::create([
    'name' => [
        'ar' => 'قسم علاقات المستثمرين',
        'en' => 'Investor Relations Department'
    ],
    'position' => [
        'ar' => 'إدارة علاقات المستثمرين',
        'en' => 'Investor Relations Management'
    ],
    'email' => 'ir@arabseeds.com.eg',
    'phone' => '+20 2 3854 0123',
    'is_active' => true,
]);

$managerName = json_decode($irManager->name, true);
echo "  ✅ تم إضافة: " . ($managerName['ar'] ?? 'مدير علاقات المستثمرين') . "\n";

echo "\n✨ تم إضافة جميع البيانات بنجاح!\n";
echo "\n📊 الإحصائيات:\n";
echo "  - القوائم المالية: " . FinancialStatement::count() . "\n";
echo "  - محاضر الاجتماعات: " . MeetingMinute::count() . "\n";
echo "  - مديري العلاقات: " . IrManager::count() . "\n";
echo "\n🌐 افتح الموقع: http://localhost:3000/investors\n";
