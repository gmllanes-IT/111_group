<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Immigration = ServiceCategory::create([
            'en_name' => 'Immigration',
            'ar_name' => 'الهجرة',
        ]);

        $Legal = ServiceCategory::create([
            'en_name' => 'Legal',
            'ar_name' => 'استشارات قانونية',
        ]);

        $service = Service::create([
            'en_name' => 'Alternate Dispute Resolution',
            'ar_name' => 'الحل البديل للنزاعات',
            'category_id' =>$Legal->id
        ]);

        $service = Service::create([
            'en_name' => 'Arbitration and Mediation',
            'ar_name' => 'التحكيم والوساطة',
            'category_id' =>$Legal->id
        ]);
        $service = Service::create([
            'en_name' => 'Citizenship by Investment',
            'ar_name' => 'المواطنة عن طريق الاستثمار',
            'category_id' =>$Immigration->id
        ]);
        $service = Service::create([
            'en_name' => 'Competition Law and Anti-Trust',
            'ar_name' => 'قانون المنافسة ومكافحة الاحتكار',
            'category_id' =>$Legal->id
        ]);
        $service = Service::create([
            'en_name' => 'Corporate / M&A',
            'ar_name' => 'الشركات / عمليات الاندماج والاستحواذ',
            'category_id' =>$Legal->id
        ]);
        $service = Service::create([
            'en_name' => 'Document Attestation',
            'ar_name' => 'تصديق الوثائق',
            'category_id' =>$Immigration->id
        ]);
        $service = Service::create([
            'en_name' => 'Employment & Administrative Law',
            'ar_name' => 'العمل والقانون الإداري',
            'category_id' =>$Legal->id
        ]);
        $service = Service::create([
            'en_name' => 'Immigration',
            'ar_name' => 'الهجرة',
            'category_id' =>$Immigration->id
        ]);
        $service = Service::create([
            'en_name' => 'Intellectual Property',
            'ar_name' => 'الملكية الفكرية',
            'category_id' =>$Legal->id
        ]);
        $service = Service::create([
            'en_name' => 'Personal Data Protection & Privacy law',
            'ar_name' => 'قانون حماية البيانات الشخصية والخصوصية',
            'category_id' =>$Legal->id
        ]);
        $service = Service::create([
            'en_name' => 'Post Citizenship',
            'ar_name' => 'ما بعد المواطنة',
            'category_id' =>$Immigration->id
        ]);
        $service = Service::create([
            'en_name' => 'Private Wealth & Family Business',
            'ar_name' => 'الثروة الخاصة والشركات العائلية',
            'category_id' =>$Legal->id
        ]);
        $service = Service::create([
            'en_name' => 'Real Estate',
            'ar_name' => 'العقارات',
            'category_id' =>$Legal->id
        ]);
        $service = Service::create([
            'en_name' => 'Regulatory Compliance & Enforcement',
            'ar_name' => 'الامتثال التنظيمي والتنفيذ',
            'category_id' =>$Legal->id
        ]);
        $service = Service::create([
            'en_name' => 'Residency by Investment',
            'ar_name' => 'الإقامة عن طريق الاستثمار',
            'category_id' =>$Immigration->id
        ]);
        $service = Service::create([
            'en_name' => 'Shipping and Maritime',
            'ar_name' => 'الشحن والبحرية',
            'category_id' =>$Legal->id
        ]);
        $service = Service::create([
            'en_name' => 'Tax and Revenue',
            'ar_name' => 'الضرائب والإيرادات',
            'category_id' =>$Legal->id
        ]);
        $service = Service::create([
            'en_name' => 'Technology, Media & Telco',
            'ar_name' => 'التكنولوجيا والإعلام والاتصالات',
            'category_id' =>$Legal->id
        ]);
    }
}
