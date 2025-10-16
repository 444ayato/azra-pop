<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index()
    {

        $name = "Ivana Azra";
        $birth_date = Carbon::create(2007, 5, 31);
        $tgl_harus_wisuda = Carbon::create(2027, 10, 30);
        $current_semester = 4;


        $my_age = $birth_date->age;


        $time_to_study_left = now()->diffInDays($tgl_harus_wisuda, false);

        $semester_message = $current_semester < 3
            ? "Masih Awal, Kejar TAK"
            : "Jangan main-main, kurang-kurangi main game!";

        $data = [
            'name' => $name,
            'my_age' => $my_age,
            'hobbies' => [
                'Membaca',
                'Menulis',
                'Bermain Musik',
                'Olahraga',
                'Traveling'
            ],
            'tgl_harus_wisuda' => $tgl_harus_wisuda->toDateString(),
            'time_to_study_left' => $time_to_study_left,
            'current_semester' => $current_semester,
            'semester_message' => $semester_message,
            'future_goal' => 'Menjadi Data Scientist handal'
        ];

        return view('pegawai', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
