<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = [
            [
                'studentName' => 'Rosyid Eko Nugroho',
                'class' => 'Study Independent - Web Developer',
                'studentID' => '2110631170135',
                'mentor' => 'Hadian Rahmat',
                'academic_year' => '2021',
                'gender' => 'Men',
                'religion' => 'Islam',
                'blood' => 'O',
            ],
        ];
        return view('profile.profile', compact('data'));
    }
}
