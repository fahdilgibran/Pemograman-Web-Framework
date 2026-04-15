<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    // Route utama untuk navbar (/dosen)
    public function index()
{
    $dosens = \App\Models\Dosen::latest()->paginate(10);
    return view('akademik.dosen', compact('dosens'));
}

    // 2. Insert 1 data
    public function insertDosen()
    {
        DB::table('dosens')->insert([
            'nik'       => '1978092800001',
            'nama'      => 'M Rasyid',
            'email'     => 'rasyid@gmail.com',
            'no_telp'   => '0812687687',
            'prodi'     => 'Manajemen Informatika',
            'alamat'    => 'Jl. Rasuna Said no. 5 Padang',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        return redirect('/dosen')->with('success', '1 dosen berhasil di-insert');
    }

    // 3. Insert banyak data
    public function insertBanyakDosen()
    {
        DB::table('dosens')->insert([
            [
                'nik'       => '19800089212',
                'nama'      => 'M Yasid',
                'email'     => 'yasid@gmail.com',
                'no_telp'   => '0821388799',
                'prodi'     => 'TRPL',
                'alamat'    => 'Jl. Sutomo no. 1 Padang',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nik'       => '1982887678',
                'nama'      => 'Deni',
                'email'     => 'deni@gmail.com',
                'no_telp'   => '0811000001',
                'prodi'     => 'Teknik Komputer',
                'alamat'    => 'Jl. M Hatta no. 15 Padang',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
        ]);
        return redirect('/dosen')->with('success', '2 dosen berhasil di-insert');
    }

    public function updateDosen()
    {
        DB::table('dosens')
            ->where('nama', 'Deni')
            ->update([
                'no_telp'   => '0811000001',
                'prodi'     => 'Teknik Komputer',
                'updated_at'=> now(),
            ]);
        return redirect('/dosen')->with('success', 'Data Deni berhasil di-update');
    }

    public function updateWhereDosen()
    {
        DB::table('dosens')
            ->where('nama', 'Deni')
            ->where('prodi', '<>', 'TRPL')
            ->update([
                'email'     => 'deni@mi.ti.ac.id',
                'updated_at'=> now(),
            ]);
        return redirect('/dosen')->with('success', 'Update where berhasil');
    }

    public function updateOrInsert()
    {
        DB::table('dosens')->updateOrInsert(
            ['nik' => '1978092800001'],
            [
                'nama'      => 'Steve Jobs',
                'email'     => 'steve@apple.com',
                'no_telp'   => '08228874444',
                'prodi'     => 'TRPL',
                'alamat'    => 'Jl. M Hatta no. 1 Padang',
                'updated_at'=> now(),
            ]
        );
        return redirect('/dosen')->with('success', 'Update or Insert berhasil');
    }

    public function deleteDosen()
    {
        DB::table('dosens')
            ->where('nik', '1978092800001')
            ->delete();
        return redirect('/dosen')->with('success', 'Data berhasil dihapus');
    }

    public function get()
    {
        $query = DB::table('dosens')->get();
        dd($query);
    }

    public function getTampil()
    {
        $query = DB::table('dosens')->get();
        foreach ($query as $dosen) {
            echo $dosen->nik . " - " . $dosen->nama . " - " . $dosen->prodi . "<br>";
        }
    }

    // ← METHOD INI YANG DIBUTUHKAN UNTUK /get-view
    public function getView()
    {
        $dosens = DB::table('dosens')->get();
        return view('akademik.dosen', compact('dosens'));
    }

    public function getWhere()
    {
        $dosens = DB::table('dosens')
            ->where('prodi', 'TRPL')
            ->orderBy('nama', 'asc')
            ->get();
        return view('akademik.dosen', compact('dosens'));
    }

    public function selectDosen()
    {
        $query = DB::table('dosens')
            ->select('nik', 'nama', 'email')
            ->get();
        dd($query);
    }

    public function take()
    {
        $dosens = DB::table('dosens')
            ->orderBy('nama', 'asc')
            ->skip(1)
            ->take(2)
            ->get();
        return view('akademik.dosen', compact('dosens'));
    }

    public function first()
    {
        $dosen = DB::table('dosens')->where('nama', 'Deni')->first();
        return view('akademik.dosen', ['dosens' => [$dosen]]);
    }

    public function find()
    {
        $dosen = DB::table('dosens')->find(2);
        return view('akademik.dosen', ['dosens' => [$dosen]]);
    }

    public function raw()
    {
        $query = DB::table('dosens')
            ->selectRaw('COUNT(*) as total_dosen')
            ->get();
        echo "Total Dosen: " . $query[0]->total_dosen;
    }
}