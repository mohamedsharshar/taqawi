<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\FinancialStatement;
use App\Models\MeetingMinute;
use App\Models\IrManager;
use Illuminate\Http\Request;

class InvestorsController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        
        $financialStatements = FinancialStatement::active()->ordered()->get();
        $meetingMinutes = MeetingMinute::active()->ordered()->get();
        $irManager = IrManager::active()->first();
        
        $data = [
            'title' => $locale == 'ar' ? 'علاقات المستثمرين' : 'Investor Relations',
            'description' => $locale == 'ar' 
                ? 'معلومات مالية وتقارير للمستثمرين'
                : 'Financial information and reports for investors',
            'financialStatements' => [
                'title' => $locale == 'ar' ? 'القوائم المالية' : 'Financial Statements',
                'description' => $locale == 'ar' 
                    ? 'تقارير مالية ربع سنوية وسنوية'
                    : 'Quarterly and annual financial reports',
                'items' => $financialStatements,
            ],
            'meetingMinutes' => [
                'title' => $locale == 'ar' ? 'محاضر الجمعيات ومجالس الإدارة' : 'Meeting Minutes',
                'description' => $locale == 'ar' 
                    ? 'محاضر اجتماعات الجمعية العامة ومجلس الإدارة'
                    : 'General assembly and board of directors meeting minutes',
                'items' => $meetingMinutes,
            ],
            'irManager' => [
                'title' => $locale == 'ar' ? 'مدير علاقات المستثمرين' : 'Investor Relations Manager',
                'data' => $irManager,
                'labels' => [
                    'name' => $locale == 'ar' ? 'الاسم' : 'Name',
                    'phone' => $locale == 'ar' ? 'الهاتف' : 'Phone',
                    'email' => $locale == 'ar' ? 'البريد الإلكتروني' : 'Email',
                ],
            ],
        ];
        
        return view('investors', compact('data', 'locale'));
    }
}
