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
            'name' => [
                'ar' => 'أحمد محمد علي',
                'en' => 'Ahmed Mohamed Ali',
            ],
            'position' => [
                'ar' => 'مدير علاقات المستثمرين',
                'en' => 'Investor Relations Manager',
            ],
            'phone' => '+20 123 456 7890',
            'email' => 'ir@arabseeds.com',
            'is_active' => true,
        ]);

        // Create sample financial statements
        FinancialStatement::create([
            'title' => [
                'ar' => 'قائمة المركز المالي - يونيو 2025',
                'en' => 'Balance Sheet - June 2025',
            ],
            'description' => [
                'ar' => 'قائمة المركز المالي للربع الثاني من عام 2025',
                'en' => 'Balance sheet for Q2 2025',
            ],
            'file_path' => 'financial-statements/sample.pdf',
            'file_name' => 'balance-sheet-june-2025.pdf',
            'file_size' => 1024000,
            'statement_date' => '2025-06-30',
            'type' => 'balance_sheet',
            'is_active' => true,
            'order' => 1,
        ]);

        FinancialStatement::create([
            'title' => [
                'ar' => 'قائمة الدخل - سبتمبر 2025',
                'en' => 'Income Statement - September 2025',
            ],
            'description' => [
                'ar' => 'قائمة الدخل للربع الثالث من عام 2025',
                'en' => 'Income statement for Q3 2025',
            ],
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
            'title' => [
                'ar' => 'محضر اجتماع الجمعية العمومية - يناير 2025',
                'en' => 'General Assembly Meeting Minutes - January 2025',
            ],
            'description' => [
                'ar' => 'محضر اجتماع الجمعية العمومية العادية',
                'en' => 'Regular general assembly meeting minutes',
            ],
            'file_path' => 'meeting-minutes/sample.pdf',
            'file_name' => 'general-assembly-jan-2025.pdf',
            'file_size' => 2048000,
            'meeting_date' => '2025-01-15',
            'type' => 'general_assembly',
            'is_active' => true,
            'order' => 1,
        ]);

        MeetingMinute::create([
            'title' => [
                'ar' => 'محضر اجتماع مجلس الإدارة - مارس 2025',
                'en' => 'Board Meeting Minutes - March 2025',
            ],
            'description' => [
                'ar' => 'محضر اجتماع مجلس الإدارة الدوري',
                'en' => 'Regular board meeting minutes',
            ],
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
