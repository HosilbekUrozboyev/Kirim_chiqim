<?php

return [
    'userManagement'    => [
        'title'          => 'Foydalanuvchi boshqaruvi',
        'title_singular' => 'Foydalanuvchi boshqaruvi',
    ],
    'permission'        => [
        'title'          => 'Ruxsatlar',
        'title_singular' => 'Ruxsat',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Sarlavha',
            'title_helper'      => '',
            'created_at'        => 'Yaratilgan vaqti',
            'created_at_helper' => '',
            'updated_at'        => 'Yangilangan vaqti',
            'updated_at_helper' => '',
            'deleted_at'        => 'O\'chirilgan vaqti',
            'deleted_at_helper' => '',
        ],
    ],
    'role'              => [
        'title'          => 'Rollar',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Sarlavha',
            'title_helper'       => '',
            'permissions'        => 'Ruxsatlar',
            'permissions_helper' => '',
            'created_at'         => 'Yaratilgan vaqti',
            'created_at_helper'  => '',
            'updated_at'         => 'Yangilangan vaqti',
            'updated_at_helper'  => '',
            'deleted_at'         => 'O\'chirilgan vaqti',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'              => [
        'title'          => 'Foydalanuvchilar',
        'title_singular' => 'Foydalanuvchi',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Ism',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Emailni tasdiqlangan vaqti',
            'email_verified_at_helper' => '',
            'password'                 => 'Parol',
            'password_helper'          => '',
            'roles'                    => 'Rollar',
            'roles_helper'             => '',
            'remember_token'           => 'Eslab qolish belgisi',
            'remember_token_helper'    => '',
            'created_at'               => 'Yaratilgan vaqti',
            'created_at_helper'        => '',
            'updated_at'               => 'Yangilangan vaqti',
            'updated_at_helper'        => '',
            'deleted_at'               => 'O\'chirilgan vaqti',
            'deleted_at_helper'        => '',
        ],
    ],
    'expenseManagement' => [
        'title'          => 'Xarajatni boshqarish',
        'title_singular' => 'Xarajatlarni boshqarish',
    ],
    'expenseCategory'   => [
        'title'          => 'Xarajat kategoriyalarini',
        'title_singular' => 'Xarajat kategoriyasini',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nomi',
            'name_helper'       => '',
            'created_at'        => 'Yaratilgan vaqti',
            'created_at_helper' => '',
            'updated_at'        => 'Yangilangan vaqti',
            'updated_at_helper' => '',
            'deleted_at'        => 'O\'chirilgan vaqti',
            'deleted_at_helper' => '',
            'created_by'        => 'Yaratgan',
            'created_by_helper' => '',
        ],
    ],
    'incomeCategory'    => [
        'title'          => 'Daromad kategoriyalarini',
        'title_singular' => 'Daromad kategoriyasini',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nomi',
            'name_helper'       => '',
            'created_at'        => 'Yaratilgan vaqti',
            'created_at_helper' => '',
            'updated_at'        => 'Yangilangan vaqti',
            'updated_at_helper' => '',
            'deleted_at'        => 'O\'chirilgan vaqti',
            'deleted_at_helper' => '',
            'created_by'        => 'Yaratgan',
            'created_by_helper' => '',
        ],
    ],
    'expense'           => [
        'title'          => 'Xarajatlar',
        'title_singular' => 'Xarajat',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'expense_category'        => 'Xarajat kategoriyasi',
            'expense_category_helper' => '',
            'entry_date'              => 'Kiritilgan sana',
            'entry_date_helper'       => '',
            'amount'                  => 'Miqdori',
            'amount_helper'           => '',
            'description'             => 'Izoh',
            'description_helper'      => '',
            'created_at'              => 'Yaratilgan vaqti',
            'created_at_helper'       => '',
            'updated_at'              => 'Yangilangan vaqti',
            'updated_at_helper'       => '',
            'deleted_at'              => 'O\'chirilgan vaqti',
            'deleted_at_helper'       => '',
            'created_by'              => 'Yaratgan',
            'created_by_helper'       => '',
        ],
    ],
    'income'            => [
        'title'          => 'Daromad',
        'title_singular' => 'Daromad',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => '',
            'income_category'        => 'Daromad kategoriyasi',
            'income_category_helper' => '',
            'entry_date'             => 'Kiritilgan sana',
            'entry_date_helper'      => '',
            'amount'                 => 'Miqdori',
            'amount_helper'          => '',
            'description'            => 'Izoh',
            'description_helper'     => '',
            'created_at'             => 'Yaratilgan vaqti',
            'created_at_helper'      => '',
            'updated_at'             => 'Yangilangan vaqti',
            'updated_at_helper'      => '',
            'deleted_at'             => 'O\'chirilgan vaqti',
            'deleted_at_helper'      => '',
            'created_by'             => 'Yaratgan',
            'created_by_helper'      => '',
        ],
    ],
    'expenseReport'     => [
        'title'          => 'Oylik hisobot',
        'title_singular' => 'Oylik hisobotlar',
        'reports'        => [
            'title'             => 'Hisobotlar',
            'title_singular'    => 'Hisobot',
            'incomeReport'      => 'Daromadlar hisoboti',
            'incomeByCategory'  => 'Daromadlar turiga ko\'ra',
            'expenseByCategory' => 'Xarajatlar turiga ko\'ra',
            'income'            => 'Daromad',
            'expense'           => 'Xarajat',
            'profit'            => 'Foyda',
        ],
    ],
];
