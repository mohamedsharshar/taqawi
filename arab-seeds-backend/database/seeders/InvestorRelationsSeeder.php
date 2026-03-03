<?php

namespace Database\Seeders;

use App\Models\FinancialStatement;
use App\Models\MeetingMinute;
use App\Models\IrManager;
use Illuminate\Database\Seeder;

class InvestorRelationsSeeder extends Seeder
{
    public function run(): void
    {
        // Create IR Manager
        IrManager::create([
            'name_ar' => 'أحمد محمد علي',
            'name_en' => 'Ahmed Mohamed Ali',
            'position_ar' => 'مدير علاقات المستثمرين',
            'position_en' => 'Investor Relations Manager',
            'phone' => '+20 123 456 7890',
            'email' => 'ir@arabseeds.com',
            'is_active' => true,
        ]);

        // Create sample financial statements
        FinancialStatement::create([
            'title_ar' => 'قائمة المركز المالي - يونيو 2025',
            'title_en' => 'Balance Sheet - June 2025',
            'description_ar' => 'قائمة المركز المالي للربع الثاني من عام 2025',
            'description_en' => 'Balance sheet for Q2 2025',
            'file_path' => 'financial-statements/sample.pdf',
            'file_name' => 'balance-sheet-june-2025.pdf',
            'file_size' => 1024000,
            'statement_date' => '2025-06-30',
            'type' => 'balance_sheet',
            'is_active' => true,
            'order' => 1,
        ]);

        FinancialStatement::create([
            'title_ar' => 'قائمة الدخل - سبتمبر 2025',
            'title_en' => 'Income Statement - September 2025',
            'description_ar' => 'قائمة الدخل للربع الثالث من عام 2025',
            'description_en' => 'Income statement for Q3 2025',
            'file_path' => 'financial-statements/sample.pdf',
            'file_name' => 'income-statement-sept-2025.pdf',
            'file_size' => 1024000,
            'statement_date' => '2025-09-30',
            'type' => 'income_statement',
            'is_active' => true,
            'order' => 2,
        ]);

        // Create sample meeting minutes
        MeetingMinute::create([
            'title_ar' => 'محضر اجتماع الجمعية العمومية - يناير 2025',
            'title_en' => 'General Assembly Meeting Minutes - January 2025',
            'description_ar' => 'محضر اجتماع الجمعية العمومية العادية',
            'description_en' => 'Regular general assembly meeting minutes',
            'file_path' => 'meeting-minutes/sample.pdf',
            'file_name' => 'general-assembly-jan-2025.pdf',
            'file_size' => 2048000,
            'meeting_date' => '2025-01-15',
            'type' => 'general_assembly',
            'is_active' => true,
            'order' => 1,
        ]);

        MeetingMinute::create([
            'title_ar' => 'محضر اجتماع مجلس الإدارة - مارس 2025',
            'title_en' => 'Board Meeting Minutes - March 2025',
            'description_ar' => 'محضر اجتماع مجلس الإدارة الدوري',
            'description_en' => 'Regular board meeting minutes',
            'file_path' => 'meeting-minutes/sample.pdf',
            'file_name' => 'board-meeting-mar-2025.pdf',
            'file_size' => 1536000,
            'meeting_date' => '2025-03-10',
            'type' => 'board_meeting',
            'is_active' => true,
            'order' => 2,
        ]);
    }
}
