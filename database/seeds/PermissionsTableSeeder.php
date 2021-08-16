<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'segment_create',
            ],
            [
                'id'    => 18,
                'title' => 'segment_edit',
            ],
            [
                'id'    => 19,
                'title' => 'segment_show',
            ],
            [
                'id'    => 20,
                'title' => 'segment_delete',
            ],
            [
                'id'    => 21,
                'title' => 'segment_access',
            ],
            [
                'id'    => 22,
                'title' => 'category_create',
            ],
            [
                'id'    => 23,
                'title' => 'category_edit',
            ],
            [
                'id'    => 24,
                'title' => 'category_show',
            ],
            [
                'id'    => 25,
                'title' => 'category_delete',
            ],
            [
                'id'    => 26,
                'title' => 'category_access',
            ],
            [
                'id'    => 27,
                'title' => 'country_create',
            ],
            [
                'id'    => 28,
                'title' => 'country_edit',
            ],
            [
                'id'    => 29,
                'title' => 'country_show',
            ],
            [
                'id'    => 30,
                'title' => 'country_delete',
            ],
            [
                'id'    => 31,
                'title' => 'country_access',
            ],
            [
                'id'    => 32,
                'title' => 'event_create',
            ],
            [
                'id'    => 33,
                'title' => 'event_edit',
            ],
            [
                'id'    => 34,
                'title' => 'event_show',
            ],
            [
                'id'    => 35,
                'title' => 'event_delete',
            ],
            [
                'id'    => 36,
                'title' => 'event_access',
            ],
            [
                'id'    => 37,
                'title' => 'headline_create',
            ],
            [
                'id'    => 38,
                'title' => 'headline_edit',
            ],
            [
                'id'    => 39,
                'title' => 'headline_show',
            ],
            [
                'id'    => 40,
                'title' => 'headline_delete',
            ],
            [
                'id'    => 41,
                'title' => 'headline_access',
            ],
            [
                'id'    => 42,
                'title' => 'company_create',
            ],
            [
                'id'    => 43,
                'title' => 'company_edit',
            ],
            [
                'id'    => 44,
                'title' => 'company_show',
            ],
            [
                'id'    => 45,
                'title' => 'company_delete',
            ],
            [
                'id'    => 46,
                'title' => 'company_access',
            ],
            [
                'id'    => 47,
                'title' => 'external_lik_create',
            ],
            [
                'id'    => 48,
                'title' => 'external_lik_edit',
            ],
            [
                'id'    => 49,
                'title' => 'external_lik_show',
            ],
            [
                'id'    => 50,
                'title' => 'external_lik_delete',
            ],
            [
                'id'    => 51,
                'title' => 'external_lik_access',
            ],
            [
                'id'    => 52,
                'title' => 'post_create',
            ],
            [
                'id'    => 53,
                'title' => 'post_edit',
            ],
            [
                'id'    => 54,
                'title' => 'post_show',
            ],
            [
                'id'    => 55,
                'title' => 'post_delete',
            ],
            [
                'id'    => 56,
                'title' => 'post_access',
            ],
            [
                'id'    => 57,
                'title' => 'speaker_create',
            ],
            [
                'id'    => 58,
                'title' => 'speaker_edit',
            ],
            [
                'id'    => 59,
                'title' => 'speaker_show',
            ],
            [
                'id'    => 60,
                'title' => 'speaker_delete',
            ],
            [
                'id'    => 61,
                'title' => 'speaker_access',
            ],
            [
                'id'    => 62,
                'title' => 'promotion_create',
            ],
            [
                'id'    => 63,
                'title' => 'promotion_edit',
            ],
            [
                'id'    => 64,
                'title' => 'promotion_show',
            ],
            [
                'id'    => 65,
                'title' => 'promotion_delete',
            ],
            [
                'id'    => 66,
                'title' => 'promotion_access',
            ],
            [
                'id'    => 67,
                'title' => 'student_profile_create',
            ],
            [
                'id'    => 68,
                'title' => 'student_profile_edit',
            ],
            [
                'id'    => 69,
                'title' => 'student_profile_show',
            ],
            [
                'id'    => 70,
                'title' => 'student_profile_delete',
            ],
            [
                'id'    => 71,
                'title' => 'student_profile_access',
            ],
            [
                'id'    => 72,
                'title' => 'job_create',
            ],
            [
                'id'    => 73,
                'title' => 'job_edit',
            ],
            [
                'id'    => 74,
                'title' => 'job_show',
            ],
            [
                'id'    => 75,
                'title' => 'job_delete',
            ],
            [
                'id'    => 76,
                'title' => 'job_access',
            ],
            [
                'id'    => 77,
                'title' => 'contest_create',
            ],
            [
                'id'    => 78,
                'title' => 'contest_edit',
            ],
            [
                'id'    => 79,
                'title' => 'contest_show',
            ],
            [
                'id'    => 80,
                'title' => 'contest_delete',
            ],
            [
                'id'    => 81,
                'title' => 'contest_access',
            ],
            [
                'id'    => 82,
                'title' => 'area_professor_access',
            ],
            [
                'id'    => 83,
                'title' => 'area_estudante_access',
            ],
            [
                'id'    => 84,
                'title' => 'area_empresa_access',
            ],
            [
                'id'    => 85,
                'title' => 'cadastros_base_access',
            ],
            [
                'id'    => 86,
                'title' => 'advert_create',
            ],
            [
                'id'    => 87,
                'title' => 'advert_edit',
            ],
            [
                'id'    => 88,
                'title' => 'advert_show',
            ],
            [
                'id'    => 89,
                'title' => 'advert_delete',
            ],
            [
                'id'    => 90,
                'title' => 'advert_access',
            ],
            [
                'id'    => 91,
                'title' => 'local_advertisement_create',
            ],
            [
                'id'    => 92,
                'title' => 'local_advertisement_edit',
            ],
            [
                'id'    => 93,
                'title' => 'local_advertisement_show',
            ],
            [
                'id'    => 94,
                'title' => 'local_advertisement_delete',
            ],
            [
                'id'    => 95,
                'title' => 'local_advertisement_access',
            ],
            [
                'id'    => 96,
                'title' => 'publish_call_create',
            ],
            [
                'id'    => 97,
                'title' => 'publish_call_edit',
            ],
            [
                'id'    => 98,
                'title' => 'publish_call_delete',
            ],
            [
                'id'    => 99,
                'title' => 'publish_call_access',
            ],
            [
                'id'    => 100,
                'title' => 'event_call_create',
            ],
            [
                'id'    => 101,
                'title' => 'event_call_edit',
            ],
            [
                'id'    => 102,
                'title' => 'event_call_show',
            ],
            [
                'id'    => 103,
                'title' => 'event_call_delete',
            ],
            [
                'id'    => 104,
                'title' => 'event_call_access',
            ],
            [
                'id'    => 105,
                'title' => 'home_access',
            ],
            [
                'id'    => 106,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
