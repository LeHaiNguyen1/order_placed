<?php

namespace App\Models;

class listing
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'title' => 'Test id 01',
                'description' => 'Test 01'
            ],
            [
                'id' => '2',
                'title' => 'Test id 02',
                'description' => 'Test 02'
            ]
        ];
    }

    public static function find($id)
    {
        // goi phương thức từ thuộc tính hoac phuong thuc 
        $listings = self::all();
        foreach ($listings as $listing) {
            if ($listing['id'] == $id)
                return $listing;
        }
    }
}
