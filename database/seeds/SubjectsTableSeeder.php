<?php

use Illuminate\Database\Seeder;
use App\Subject;
use App\Year;
use Illuminate\Support\Facades\File;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $subjects_1 = [

            'math',
            'science',
            'quran',
            'quran_memorize',
            'doctrine',
            'unification',
            'language',
            'sports',
            'family_education',
            'art_education',
            'computer'

        ];
        $subjects_1_displayNames = [

            'الرياضيات',
            'علوم',
            'قرآن',
            'قرأن - تحفيظ',
            'فقه',
            'توحيد',
            'لغتى',
            'التربيه الرياضيه',
            'تربيه اسريه',
            'تربيه فنيه',
            'حاسب آلي'

        ];

        foreach ($subjects_1 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_1_displayNames[$i],
                'year_id' => 1,
                'year_name' => 'primary_1'

            ]);

            \File::makeDirectory(public_path('/data/primary_1/' . $sub->name), 0775, true);


        }


        $subjects_2 = [

            'math',
            'science',
            'quran',
            'quran_memorize',
            'doctrine',
            'unification',
            'language',
            'sports',
            'family_education',
            'art_education',
            'computer'

        ];
        $subjects_2_displayNames = [

            'الرياضيات',
            'علوم',
            'قرآن',
            'قرأن - تحفيظ',
            'فقه',
            'توحيد',
            'لغتى',
            'التربيه الرياضيه',
            'تربيه اسريه',
            'تربيه فنيه',
            'حاسب آلي'

        ];

        foreach ($subjects_2 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_2_displayNames[$i],
                'year_id' => 2,
                'year_name' => 'primary_2'

            ]);

            \File::makeDirectory(public_path('/data/primary_2/' . $sub->name), 0775, true);


        }

        $subjects_3 = [

            'math',
            'science',
            'quran',
            'quran_memorize',
            'doctrine',
            'unification',
            'language',
            'sports',
            'family_education',
            'art_education',
            'computer',
            'dictation'

        ];
        $subjects_3_displayNames = [

            'الرياضيات',
            'علوم',
            'قرآن',
            'قرأن - تحفيظ',
            'فقه',
            'توحيد',
            'لغتى',
            'التربيه الرياضيه',
            'تربيه اسريه',
            'تربيه فنيه',
            'حاسب آلي',
            'الإملاء'

        ];

        foreach ($subjects_3 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_3_displayNames[$i],
                'year_id' => 3,
                'year_name' => 'primary_3'

            ]);

            \File::makeDirectory(public_path('/data/primary_3/' . $sub->name), 0775, true);


        }


        $subjects_4 = [

            'math',
            'science',
            'socials',
            'quran',
            'quran_memorize',
            'doctrine',
            'unification',
            'language',
            'sports',
            'family_education',
            'art_education',
            'computer',
            'hadith',
            'we_can',
            'smart_class',
            'get_ready'

        ];
        $subjects_4_displayNames = [

            'الرياضيات',
            'علوم',
            'اجتماعيات',
            'قرآن',
            'قرأن - تحفيظ',
            'فقه',
            'توحيد',
            'لغتى',
            'التربيه الرياضيه',
            'تربيه اسريه',
            'تربيه فنيه',
            'حاسب آلي',
            'حديث',
            'We Can',
            'smart class',
            'Get Ready'

        ];

        foreach ($subjects_4 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_4_displayNames[$i],
                'year_id' => 4,
                'year_name' => 'primary_4'

            ]);

            \File::makeDirectory(public_path('/data/primary_4/' . $sub->name), 0775, true);


        }

        $subjects_5 = [

            'math',
            'science',
            'socials',
            'quran_tajweed',
            'quran_memorize',
            'doctrine',
            'unification',
            'language',
            'sports',
            'family_education',
            'art_education',
            'computer',
            'hadith',
            'we_can',
            'smart_class',
            'get_ready',
            'quran_tlawah'

        ];
        $subjects_5_displayNames = [

            'الرياضيات',
            'علوم',
            'اجتماعيات',
            'القرآن الكريم وتجويده',
            'القرآن الكريم (تحفيظ)',
            'فقه',
            'توحيد',
            'لغتى',
            'التربيه الرياضيه',
            'تربيه اسريه',
            'تربيه فنيه',
            'حاسب آلي',
            'حديث',
            'We Can',
            'smart class',
            'Get Ready',
            'القرآن الكريم (تلاوة)'

        ];

        foreach ($subjects_5 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_5_displayNames[$i],
                'year_id' => 5,
                'year_name' => 'primary_5'

            ]);

            \File::makeDirectory(public_path('/data/primary_5/' . $sub->name), 0775, true);


        }

        $subjects_6 = [

            'math',
            'science',
            'socials',
            'quran_tajweed',
            'quran_memorize',
            'doctrine',
            'unification',
            'language',
            'sports',
            'family_education',
            'art_education',
            'computer',
            'hadith',
            'we_can',
            'smart_class',
            'get_ready',

        ];
        $subjects_6_displayNames = [

            'الرياضيات',
            'علوم',
            'اجتماعيات',
            'القرآن الكريم وتجويده',
            'قرأن - تحفيظ',
            'فقه',
            'توحيد',
            'لغتى',
            'التربيه الرياضيه',
            'تربيه اسريه',
            'تربيه فنيه',
            'حاسب آلي',
            'حديث',
            'We Can',
            'smart class',
            'Get Ready',

        ];

        foreach ($subjects_6 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_6_displayNames[$i],
                'year_id' => 6,
                'year_name' => 'primary_6'

            ]);

            \File::makeDirectory(public_path('/data/primary_6/' . $sub->name), 0775, true);


        }

        $subjects_7 = [

            'math',
            'science',
            'socials',
            'quran',
            'quran_memorize',
            'doctrine',
            'unification',
            'language',
            'sports',
            'family_education',
            'art_education',
            'computer',
            'hadith',
            'explanation',
            'full_blast',
            'super_goal',
            'lift_off'

        ];
        $subjects_7_displayNames = [

            'الرياضيات',
            'علوم',
            'اجتماعيات',
            'قرآن',
            'تحفيظ القران والتجويد',
            'فقه',
            'توحيد',
            'لغتى',
            'التربيه الرياضيه',
            'تربيه اسريه',
            'تربيه فنيه',
            'حاسب آلي',
            'حديث',
            'تفسير',
            'full blast',
            'Super Goal',
            'lift off'

        ];

        foreach ($subjects_7 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_7_displayNames[$i],
                'year_id' => 7,
                'year_name' => 'intermediate_1'

            ]);

            \File::makeDirectory(public_path('/data/intermediate_1/' . $sub->name), 0775, true);


        }

        $subjects_8 = [

            'math',
            'science',
            'socials',
            'quran',
            'quran_memorize',
            'doctrine',
            'unification',
            'language',
            'sports',
            'family_education',
            'art_education',
            'computer',
            'hadith',
            'explanation',
            'full_blast',
            'super_goal',
            'lift_off'

        ];
        $subjects_8_displayNames = [

            'الرياضيات',
            'علوم',
            'اجتماعيات',
            'قرآن',
            'تحفيظ القران والتجويد',
            'فقه',
            'توحيد',
            'لغتى',
            'التربيه الرياضيه',
            'تربيه اسريه',
            'تربيه فنيه',
            'حاسب آلي',
            'حديث',
            'تفسير',
            'full blast',
            'Super Goal',
            'lift off'

        ];

        foreach ($subjects_8 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_8_displayNames[$i],
                'year_id' => 8,
                'year_name' => 'intermediate_2'

            ]);

            \File::makeDirectory(public_path('/data/intermediate_2/' . $sub->name), 0775, true);


        }

        $subjects_9 = [

            'math',
            'science',
            'socials',
            'quran',
            'quran_memorize',
            'doctrine',
            'unification',
            'language',
            'sports',
            'family_education',
            'art_education',
            'computer',
            'hadith',
            'explanation',
            'full_blast',
            'super_goal',
            'lift_off'

        ];
        $subjects_9_displayNames = [

            'الرياضيات',
            'علوم',
            'اجتماعيات',
            'قرآن',
            'تحفيظ القران والتجويد',
            'فقه',
            'توحيد',
            'لغتى',
            'التربيه الرياضيه',
            'تربيه اسريه',
            'تربيه فنيه',
            'حاسب آلي',
            'حديث',
            'تفسير',
            'full blast',
            'Super Goal',
            'lift off'

        ];

        foreach ($subjects_9 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_9_displayNames[$i],
                'year_id' => 9,
                'year_name' => 'intermediate_3'

            ]);

            \File::makeDirectory(public_path('/data/intermediate_3/' . $sub->name), 0775, true);


        }

        $subjects_10 = [

            'math',
            'religious_science',
            'language',
            'life_skills',
            'quran'

        ];
        $subjects_10_displayNames = [

            'الرياضيات',
            'علوم دينية',
            'لغتى',
            'مهارات حياتيه',
            'قرآن'
        ];

        foreach ($subjects_10 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_10_displayNames[$i],
                'year_id' => 10,
                'year_name' => 'female_1'

            ]);

            \File::makeDirectory(public_path('/data/female_1/' . $sub->name), 0775, true);


        }

        $subjects_11 = [

            'math',
            'religious_science',
            'language',
            'life_skills',
            'quran',
            'socials',
            'economy_science',
            'english'

        ];
        $subjects_11_displayNames = [

            'الرياضيات',
            'علوم دينية',
            'لغتى',
            'مهارات حياتيه',
            'قرآن',
            'اجتماعيات',
            'علوم واقتصاد',
            'انجليزى',

        ];

        foreach ($subjects_11 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_11_displayNames[$i],
                'year_id' => 11,
                'year_name' => 'female_2'

            ]);

            \File::makeDirectory(public_path('/data/female_2/' . $sub->name), 0775, true);


        }

        $subjects_12 = [

            'math',
            'religious_science',
            'language',
            'life_skills',
            'quran',
            'socials',
            'economy_science',
            'english',
            'computer'

        ];
        $subjects_12_displayNames = [

            'الرياضيات',
            'علوم دينية',
            'لغتى',
            'مهارات حياتيه',
            'قرآن',
            'اجتماعيات',
            'علوم واقتصاد',
            'انجليزى',
            'حاسب الى'

        ];

        foreach ($subjects_12 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_12_displayNames[$i],
                'year_id' => 12,
                'year_name' => 'female_3'

            ]);

            \File::makeDirectory(public_path('/data/female_3/' . $sub->name), 0775, true);


        }

        $subjects_13 = [

            'math',
            'religious_science',
            'reading_writing',
            'quran'
            

        ];
        $subjects_13_displayNames = [

            'الرياضيات',
            'علوم دينية',
            'القراءة والكتابة',
            'قرآن'

        ];

        foreach ($subjects_13 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_13_displayNames[$i],
                'year_id' => 13,
                'year_name' => 'anti_illiteracy'

            ]);

            \File::makeDirectory(public_path('/data/anti_illiteracy/' . $sub->name), 0775, true);


        }

        $subjects_14 = [

            'arabic_literature',
            'fiqh',
            'earth_science',
            'quran_memorize',
            'explanation_literary',
            'family_health_education',
            'quran_science',
            'biology',
            'physical_health_education',
            'explanation_science',
            'arabic',
            'quran_literary',
            'physics',
            'rhetoric_criticism',
            'administration_science',
            'history_national_ducation',
            'grammer',
            'reading_language_communication',
            'computer_science',
            'math',
            'chemistry',
            'managerial_skills',
            'fiqh_science',
            'psycho_skills', 
            'reading-memorizes'           

        ];
        $subjects_14_displayNames = [

            'الادب العربي',
            'الفقه ( المسار الادبي والتحفيظ )',
            'علم الارض',
            'قرآن تحفيظ',
            'تفسير (أدبي)',
            'التربية الاسرية والصحية',
            'القران الكريم علمي',
            'احياء',
            'التربية البدنية والصحية',
            'تفسير (علمي)',
            'اللغة العربية ( المسار العلمي والاداري )',
            'القران الكريم ادبي',
            'فيزياء',
            'البلاغة والنقد',
            'العلوم الادارية',
            'التاريخ والتربية الوطنية',
            'النحو والصرف',
            'القراءة والتواصل اللغوي',
            'الحاسب وتقنية المعلومات',
            'رياضيات',
            'كيمياء',
            'مهارات ادارية',
            'الفقه ( المسار العلمي )',
            'المهارات النفسية والاجتماعية',
            'قراءات تحفيظ'


        ];

        foreach ($subjects_14 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_14_displayNames[$i],
                'year_id' => 14,
                'year_name' => 'sixth_level'

            ]);

            \File::makeDirectory(public_path('/data/sixth_level/' . $sub->name), 0775, true);


        }

        $subjects_15 = [

            'flying_high_1',
            'flying_high_2',
            'flying_high_3',
            'flying_high_4',
            'flying_high_5',
            'flying_high_6',
            'mega_goal_1',
            'mega_goal_2',
            'mega_goal_3',
            'mega_goal_4',
            'mega_goal_5',
            'mega_goal_6',
            'traveller_1',
            'traveller_2',
            'traveller_3',
            'traveller_4',
            'traveller_5',
            'traveller_6',
            'biology 1',
            'biology 2',
            'biology 3',
            'socials',
            'search_skills',
            'feminist_health_education',
            'vocational_education',
            'math 1',
            'math 2',
            'math 3',
            'math 4',
            'math 5',
            'math 6',
            'psycho_studies',
            'management_science',
            'language_competencies 1',
            'language_competencies 2',
            'language_competencies 3',
            'language_competencies 4',
            'language_competencies 5',
            'AR_literary_studies',
            'AR_rhetorical_critical_studies',
            'AR_linguistic_studies',
            'life_skills',
            'history',
            'explanation 1',
            'explanation 2',
            'unification 1',
            'unification 2',
            'geography',
            'hadith 1',
            'hadith 2',
            'earth_science',
            'env_science',
            'doctrine 1',
            'doctrine 2',
            'doctrine 3',
            'physics 1',
            'physics 2',
            'physics 3',
            'physics 4',
            'chemistry 1',
            'chemistry 2',
            'chemistry 3',
            'chemistry 4',
            'quran 1',
            'quran 2',
            'computer  1',
            'computer  2',
            'computer  3',
            'manage_science 2',
            'art_education',
            'manage_skills',
            'sports',
            'life_laws',
            'readings 1',
            'readings 2',
            'quran_science 1'                

        ];
        $subjects_15_displayNames = [

            'flying high 1',
            'flying high 2',
            'flying high 3',
            'flying high 4',
            'flying high 5',
            'flying high 6',
            'MEGA GOAL 1',
            'MEGA GOAL 2',
            'MEGA GOAL 3',
            'MEGA GOAL 4',
            'MEGA GOAL 5',
            'MEGA GOAL 6',
            'TRAVELLER 1',
            'TRAVELLER 2',
            'TRAVELLER 3',
            'TRAVELLER 4',
            'TRAVELLER 5',
            'TRAVELLER 6',
            'احياء 1',
            'احياء 2',
            'احياء 3',
            'الاجتماعيات مقررات',
            'مهارات البحث ومصادر المعلومات',
            'التربيه الصحية والنسوية',
            'التربية المهنيه',
            'الرياضيات 1',
            'الرياضيات 2',
            'الرياضيات 3',
            'الرياضيات 4',
            'الرياضيات 5',
            'الرياضيات 6',
            'الدراسات النفسية والاجتماعية',
            'العلوم الاداريه 1 - مبادئ الاداره',
            'الكفايات اللغويه 1',
            'الكفايات اللغويه 2',
            'الكفايات اللغويه 3',
            'الكفايات اللغويه 4',
            'الكفايات اللغويه 5',
            'اللغه العربيه 5 الدراسات الادبيه',
            'اللغه العربيه 6 دراسات بلاغيه ونقديه',
            'اللغة العربية 7 الدرسات اللغويه',
            'المهارات الحياتيه والتربيه الاسريه',
            'تاريخ',
            'تفسير 1',
            'تفسير 2',
            'توحيد 1',
            'توحيد 2',
            'جغرافيا',
            'حديث 1',
            'حديث 2',
            'علم الارض',
            'علم البيئه والتربيه البيئيه',
            'فقه 1',
            'فقه 2',
            'فقه 3',
            'فيزياء 1',
            'فيزياء 2',
            'فيزياء 3',
            'فيزياء 4',
            'كيمياء 1',
            'كيمياء 2',
            'كيمياء 3',
            'كيمياء 4',
            'قرآن 1',
            'قرآن 2',
            'الحاسب الالي  1',
            'الحاسب الالي  2',
            'الحاسب الالي  3',
            'العلوم الاداريه  2',
            'تربية فنية',
            'مهارات ادارية',
            'التربية البدنية',
            'القانون فى حياتنا',
            'قراءات 1',
            'قراءات 2',
            'علوم قرآن 1',

        ];

        foreach ($subjects_15 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_15_displayNames[$i],
                'year_id' => 15,
                'year_name' => 'all_subjects'

            ]);

            \File::makeDirectory(public_path('/data/all_subjects/' . $sub->name), 0775, true);
          

        }


        $subjects_16 = [

            'kindergarten_all_units'

        ];
        $subjects_16_displayNames = [

            'جميع وحدات رياض الأطفال ( 46 وحدة )'


        ];

        foreach ($subjects_16 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_16_displayNames[$i],
                'year_id' => 16,
                'year_name' => 'all_units'

            ]);

            \File::makeDirectory(public_path('/data/all_units/' . $sub->name), 0775, true);


        }

        $subjects_17 = [

            'social_edu_boys',
            'sports',
            'art_education',
            'family_education',
            'math',
            'language',
            'unification',
            'fiqh',
            'quran'

        ];

        $subjects_17_displayNames = [

            'التربية الأجتماعية ( بنين )',
            'التربية البدنية',
            'التربية الفنية',
            'التربية الاسرية',
            'رياضيات',
            'لغتي',
            'التوحيد',
            'الفقه',
            'قرآن كريم'

        ];

        foreach ($subjects_17 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_17_displayNames[$i],
                'year_id' => 17,
                'year_name' => 'primary_2_1'

            ]);

            \File::makeDirectory(public_path('/data/primary_2_1/' . $sub->name), 0775, true);


        }

        $subjects_18 = [

            'social_edu',
            'sports',
            'art_education',
            'family_education',
            'math',
            'language',
            'unification',
            'fiqh',
            'quran',
            'science'

        ];
        
        $subjects_18_displayNames = [

            'التربية الأجتماعية',
            'التربية البدنية',
            'التربية الفنية',
            'التربية الاسرية',
            'رياضيات',
            'لغتي',
            'التوحيد',
            'الفقه',
            'قرآن كريم',
            'علوم'

        ];

        foreach ($subjects_18 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_18_displayNames[$i],
                'year_id' => 18,
                'year_name' => 'primary_2_2'

            ]);

            \File::makeDirectory(public_path('/data/primary_2_2/' . $sub->name), 0775, true);


        }

        $subjects_19 = [

            'social_edu',
            'sports',
            'art_education',
            'family_education',
            'math',
            'language',
            'unification',
            'fiqh',
            'quran',
            'science'

        ];
        
        $subjects_19_displayNames = [

            'التربية الأجتماعية',
            'التربية البدنية',
            'التربية الفنية',
            'التربية الاسرية',
            'رياضيات',
            'لغتي',
            'التوحيد',
            'الفقه',
            'قرآن كريم',
            'علوم'

        ];

        foreach ($subjects_19 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_19_displayNames[$i],
                'year_id' => 19,
                'year_name' => 'primary_2_3'

            ]);

            \File::makeDirectory(public_path('/data/primary_2_3/' . $sub->name), 0775, true);


        }

        $subjects_20= [

            'social_edu',
            'sports',
            'art_education',
            'family_education',
            'math',
            'language',
            'unification',
            'fiqh',
            'quran',
            'science'

        ];
        
        $subjects_20_displayNames = [

            'التربية الأجتماعية',
            'التربية البدنية',
            'التربية الفنية',
            'التربية الاسرية',
            'رياضيات',
            'لغتي',
            'التوحيد',
            'الفقه',
            'قرآن كريم',
            'علوم'

        ];

        foreach ($subjects_20 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_20_displayNames[$i],
                'year_id' => 20,
                'year_name' => 'primary_2_4'

            ]);

            \File::makeDirectory(public_path('/data/primary_2_4/' . $sub->name), 0775, true);


        }

        $subjects_21 = [

            'social_edu',
            'sports',
            'art_education',
            'family_education',
            'math',
            'language',
            'unification',
            'fiqh',
            'quran',
            'science'

        ];
        
        $subjects_21_displayNames = [

            'التربية الأجتماعية',
            'التربية البدنية',
            'التربية الفنية',
            'التربية الاسرية',
            'رياضيات',
            'لغتي',
            'التوحيد',
            'الفقه',
            'قرآن كريم',
            'علوم'

        ];

        foreach ($subjects_21 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_21_displayNames[$i],
                'year_id' => 21,
                'year_name' => 'primary_2_5'

            ]);

            \File::makeDirectory(public_path('/data/primary_2_5/' . $sub->name), 0775, true);


        }

        $subjects_22 = [

            'social_edu',
            'sports',
            'art_education',
            'family_education',
            'math',
            'language',
            'unification',
            'fiqh',
            'quran',
            'science'

        ];
        
        $subjects_22_displayNames = [

            'التربية الأجتماعية',
            'التربية البدنية',
            'التربية الفنية',
            'التربية الاسرية',
            'رياضيات',
            'لغتي',
            'التوحيد',
            'الفقه',
            'قرآن كريم',
            'علوم'

        ];

        foreach ($subjects_22 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_22_displayNames[$i],
                'year_id' => 22,
                'year_name' => 'primary_2_6'

            ]);

            \File::makeDirectory(public_path('/data/primary_2_6/' . $sub->name), 0775, true);


        }

        $subjects_23 = [

            'social_edu',
            'family_education_girls',
            'sports',
            'art_education',
            'vocational_edu_girls',
            'vocational_education_boys',
            'computer',
            'math',
            'science',
            'language',
            'unification',
            'fiqh',
            'quran'

        ];
        
        $subjects_23_displayNames = [

            'التربية الأجتماعية',
            'التربية الاسرية بنات',
            'التربية البدنية',
            'التربية الفنية',
            'التربية المهنية بنات',
            'التربية المهنية بنين',
            'الحاسب الآلى',
            'رياضيات',
            'علوم',
            'لغتى',
            'التوحيد',
            'الفقه',
            'القرآن الكريم'

        ];

        foreach ($subjects_23 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_23_displayNames[$i],
                'year_id' => 23,
                'year_name' => 'intermediate_2_1'

            ]);

            \File::makeDirectory(public_path('/data/intermediate_2_1/' . $sub->name), 0775, true);


        }

        $subjects_24 = [

            'social_edu',
            'family_education_girls',
            'sports',
            'art_education',
            'vocational_edu_girls',
            'vocational_education_boys',
            'computer',
            'math',
            'science',
            'language',
            'unification',
            'fiqh',
            'quran'

        ];
        
        $subjects_24_displayNames = [

            'التربية الأجتماعية',
            'التربية الاسرية بنات',
            'التربية البدنية',
            'التربية الفنية',
            'التربية المهنية بنات',
            'التربية المهنية بنين',
            'الحاسب الآلى',
            'رياضيات',
            'علوم',
            'لغتى',
            'التوحيد',
            'الفقه',
            'القرآن الكريم'

        ];

        foreach ($subjects_24 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_24_displayNames[$i],
                'year_id' => 24,
                'year_name' => 'intermediate_2_2'

            ]);

            \File::makeDirectory(public_path('/data/intermediate_2_2/' . $sub->name), 0775, true);


        }

        $subjects_25 = [

            'social_edu',
            'family_education_girls',
            'sports',
            'art_education',
            'vocational_edu_girls',
            'vocational_education_boys',
            'computer',
            'math',
            'science',
            'language',
            'unification',
            'fiqh',
            'quran'

        ];
        
        $subjects_25_displayNames = [

            'التربية الأجتماعية',
            'التربية الاسرية بنات',
            'التربية البدنية',
            'التربية الفنية',
            'التربية المهنية بنات',
            'التربية المهنية بنين',
            'الحاسب الآلى',
            'رياضيات',
            'علوم',
            'لغتى',
            'التوحيد',
            'الفقه',
            'القرآن الكريم'

        ];

        foreach ($subjects_25 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_25_displayNames[$i],
                'year_id' => 25,
                'year_name' => 'intermediate_2_3'

            ]);

            \File::makeDirectory(public_path('/data/intermediate_2_3/' . $sub->name), 0775, true);


        }

        $subjects_26 = [

            'unification',
            'fiqh',
            'social_edu_boys',
            'math',
            'vocational_edu_girls',
            'vocational_edu_boys',
            'computer',
            'language',
            'family_education_girls',
            'sports',
            'art_education',
            'quran'

        ];
        
        $subjects_26_displayNames = [

            'التوحيد',
            'الفقه',
            'التربية الاجتماعية (بنين)',
            'رياضيات',
            'التربية المهنية بنات',
            'التربية المهنية بنين',
            'الحاسب الآلى',
            'لغتي',
            'التربية الأسرية (بنات)',
            'التربية البدنية',
            'التربية الفنية',
            'القرآن الكريم'

        ];

        foreach ($subjects_26 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_26_displayNames[$i],
                'year_id' => 26,
                'year_name' => 'secondary_1'

            ]);

            \File::makeDirectory(public_path('/data/secondary_1/' . $sub->name), 0775, true);


        }

        $subjects_27 = [

            'unification',
            'fiqh',
            'social_edu_boys',
            'math',
            'vocational_edu_girls',
            'vocational_edu_boys',
            'computer',
            'language',
            'family_education_girls',
            'sports',
            'art_education',
            'quran'

        ];
        
        $subjects_27_displayNames = [

            'التوحيد',
            'الفقه',
            'التربية الاجتماعية (بنين)',
            'رياضيات',
            'التربية المهنية بنات',
            'التربية المهنية بنين',
            'الحاسب الآلى',
            'لغتي',
            'التربية الأسرية (بنات)',
            'التربية البدنية',
            'التربية الفنية',
            'القرآن الكريم'

        ];

        foreach ($subjects_27 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_27_displayNames[$i],
                'year_id' => 27,
                'year_name' => 'secondary_2'

            ]);

            \File::makeDirectory(public_path('/data/secondary_2/' . $sub->name), 0775, true);


        }

        $subjects_28 = [

            'unification',
            'fiqh',
            'social_edu_boys',
            'math',
            'vocational_edu_girls',
            'computer',
            'language',
            'family_education_girls',
            'sports',
            'art_education',
            'quran'

        ];
        
        $subjects_28_displayNames = [

            'التوحيد',
            'الفقه',
            'التربية الاجتماعية (بنين)',
            'رياضيات',
            'التربية المهنية بنات',
            'الحاسب الآلى',
            'لغتي',
            'التربية الأسرية (بنات)',
            'التربية البدنية',
            'التربية الفنية',
            'القرآن الكريم'

        ];

        foreach ($subjects_28 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_28_displayNames[$i],
                'year_id' => 28,
                'year_name' => 'secondary_3'

            ]);

            \File::makeDirectory(public_path('/data/secondary_3/' . $sub->name), 0775, true);


        }

        $subjects_29 = [

            'courses',
            'activity_pioneer',
            'student_guide',
            'director_agent',
            'radio',
            'vision_2030',
            'national_day_2019',
            'teacher_day',
            'safety_security'
        ];
        
        $subjects_29_displayNames = [

            'دورات تدريبية',
            'رائد النشاط',
            'المرشد الطلابي',
            'المدير والوكيل',
            'الإذاعة',
            'رؤية 2030',
            'اليوم الوطنى 2019',
            'يوم المعلم',
            'الأمن والسلامة'

        ];

        foreach ($subjects_29 as $i => $subject) {

            $sub = Subject::create([

                'name' => $subject,
                'display_name' => $subjects_29_displayNames[$i],
                'year_id' => 29,
                'year_name' => 'all_unities'

            ]);

            \File::makeDirectory(public_path('/data/all_unities/' . $sub->name), 0775, true);


        }



    }
}
