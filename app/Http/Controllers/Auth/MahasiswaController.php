<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

/*class MahasiswaController extends Controller
{
    // 1. Insert Biasa (Raw SQL)
    public function insertSql()
    {
        DB::insert("INSERT INTO student (nim, nama, tempat_lahir, tgl_lahir, prodi, ipk, alamat, created_at, updated_at) 
                    VALUES ('2022090909', 'Linus B Torvalds', 'Finlandia', '1971-08-12', 'TRPL', 3.95, 'Jl. Sudirman no.10 Padang', NOW(), NOW())");
        return redirect('/mahasiswa')->with('success', 'Data Linus berhasil di-insert (Raw SQL)');
    }

    // 2. Insert dengan Prepared Statement (?)
    public function insertPrepared()
    {
        DB::insert("INSERT INTO student (nim, nama, tempat_lahir, tgl_lahir, prodi, ipk, alamat, created_at, updated_at) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())", 
                    ['2022090910', 'Taylor Otwell', 'USA', '1985-05-20', 'MI', 4.0, 'Jl. Veteran no.5 Padang']);
        return redirect('/mahasiswa')->with('success', 'Data Taylor berhasil di-insert (Prepared Statement)');
    }

    // 3. Insert dengan Named Binding
    public function insertBinding()
    {
        DB::insert("INSERT INTO student (nim, nama, tempat_lahir, tgl_lahir, prodi, ipk, alamat, created_at, updated_at) 
                    VALUES (:nim, :nama, :tempat_lahir, :tgl_lahir, :prodi, :ipk, :alamat, NOW(), NOW())", [
            'nim'          => '2022090911',
            'nama'         => 'Bill Gates',
            'tempat_lahir' => 'Seattle',
            'tgl_lahir'    => '1965-10-28',
            'prodi'        => 'TI',
            'ipk'          => 3.87,
            'alamat'       => 'Jl. M Yamin no.1 Padang'
        ]);
        return redirect('/mahasiswa')->with('success', 'Data Bill Gates berhasil di-insert (Named Binding)');
    }

    // 4. Update
    public function update()
    {
        DB::update("UPDATE student SET tempat_lahir = ?, ipk = ? WHERE nama = ?", 
                   ['Seattle Washington US', 3.99, 'Bill Gates']);
        return redirect('/mahasiswa')->with('success', 'Data Bill Gates berhasil di-update');
    }

    // 5. Delete
    public function delete()
    {
        DB::delete("DELETE FROM student WHERE nama = ?", ['Linus B Torvalds']);
        return redirect('/mahasiswa')->with('success', 'Data Linus berhasil dihapus');
    }

    // 6. Select semua (untuk debugging)
    public function select()
    {
        $data = DB::select("SELECT * FROM student");
        dd($data);
    }

    // 7. Select Tampil Manual
    public function selectTampil()
    {
        $data = DB::select("SELECT * FROM student");
        foreach ($data as $mhs) {
            echo $mhs->nim . " - " . $mhs->nama . " - " . $mhs->prodi . " (IPK: " . $mhs->ipk . ")<br>";
        }
    }

    // 8. Select + Kirim ke View (paling penting)
    public function selectView()
    {
        $mahasiswas = DB::select("SELECT * FROM student");
        return view('akademik.mahasiswa', compact('mahasiswas'));
    }

    // 9. Select Where
    public function selectWhere()
    {
        $mahasiswas = DB::select("SELECT * FROM student WHERE prodi = ? ORDER BY nama ASC", ['MI']);
        return view('akademik.mahasiswa', compact('mahasiswas'));
    }

    // 10. Statement (TRUNCATE)
    public function statement()
    {
        DB::statement("TRUNCATE student");
        return redirect('/mahasiswa')->with('success', 'Tabel student sudah dikosongkan!');
    }
}*/

class MahasiswaController extends Controller
{
    // 3. Cek Objek
    public function cekObjek()
    {
        $mahasiswa = new Mahasiswa();
        dd($mahasiswa);
    }

    // 4. Insert biasa
    public function insert()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = '2022090909';
        $mahasiswa->nama = 'Linus B Torvalds';
        $mahasiswa->tempat_lahir = 'Finlandia';
        $mahasiswa->tgl_lahir = '1971-08-12';
        $mahasiswa->prodi = 'TRPL';
        $mahasiswa->ipk = 3.95;
        $mahasiswa->alamat = 'Jl. Sudirman no.10 Padang';
        $mahasiswa->save();

        dd($mahasiswa);
    }

    // 5. Mass Assignment
    public function massAssignment()
    {
        Mahasiswa::create([
            'nim' => '2022090910',
            'nama' => 'Taylor Otwell',
            'tempat_lahir' => 'USA',
            'tgl_lahir' => '1985-05-20',
            'prodi' => 'MI',
            'ipk' => 4.0,
            'alamat' => 'Jl. Veteran no.5 Padang'
        ]);

        Mahasiswa::create([
            'nim' => '2022090911',
            'nama' => 'Bill Gates',
            'tempat_lahir' => 'Seattle',
            'tgl_lahir' => '1965-10-28',
            'prodi' => 'TI',
            'ipk' => 3.87,
            'alamat' => 'Jl. M Yamin no.1 Padang'
        ]);

        return redirect('/all-view')->with('success', 'Mass Assignment berhasil');
    }

    // Update
    public function update()
{
    // Ambil data pertama yang ada (paling aman)
    $mahasiswa = Mahasiswa::first();

    if (!$mahasiswa) {
        return redirect('/all-view')->with('error', 'Tidak ada data mahasiswa untuk di-update');
    }

    $mahasiswa->tempat_lahir = 'California';
    $mahasiswa->prodi = 'Teknik Komputer';
    $mahasiswa->save();

    return redirect('/all-view')->with('success', 'Data berhasil di-update');
}

    public function updateWhere()
    {
        $mahasiswa = Mahasiswa::where('nim', '2022090910')->first();
        $mahasiswa->alamat = 'Koto Lalang, Lubuk Kilangan, Padang';
        $mahasiswa->save();

        dd($mahasiswa);
    }

    public function massUpdate()
    {
        Mahasiswa::where('nim', '2022090910')
            ->update([
                'tempat_lahir' => 'Payakumbuh',
                'prodi' => 'Teknik Komputer'
            ]);

        return redirect('/all-view')->with('success', 'Mass Update berhasil');
    }

    // Delete
    public function delete()
    {
        $mahasiswa = Mahasiswa::find(3);   // ubah sesuai id
        $mahasiswa->delete();

        return redirect('/all-view')->with('success', 'Data berhasil dihapus (soft delete)');
    }

    public function destroy()
    {
        Mahasiswa::destroy(3);   // ubah id
        return redirect('/all-view')->with('success', 'Data berhasil di-destroy');
    }

    public function massDelete()
    {
        Mahasiswa::where('prodi', 'Teknik Komputer')->delete();
        return redirect('/all-view')->with('success', 'Mass Delete berhasil');
    }

    // Read
    public function all()
    {
        $mahasiswas = Mahasiswa::all();
        dd($mahasiswas);
    }

    public function allView()
    {
        $mahasiswas = Mahasiswa::all();
        return view('akademik.mahasiswa', compact('mahasiswas'));
    }

    public function getWhere()
    {
        $mahasiswas = Mahasiswa::where('prodi', 'TRPL')
            ->orderBy('nama', 'asc')
            ->get();
        return view('akademik.mahasiswa', compact('mahasiswas'));
    }

    public function first()
    {
        $mahasiswa = Mahasiswa::where('prodi', 'TRPL')->first();
        return view('akademik.mahasiswa', ['mahasiswas' => [$mahasiswa]]);
    }

    public function find()
    {
        $mahasiswa = Mahasiswa::find(2);
        return view('akademik.mahasiswa', ['mahasiswas' => [$mahasiswa]]);
    }

    public function latest()
    {
        $mahasiswas = Mahasiswa::latest()->get();
        return view('akademik.mahasiswa', compact('mahasiswas'));
    }

    public function limit()
    {
        $mahasiswas = Mahasiswa::latest()->limit(2)->get();
        return view('akademik.mahasiswa', compact('mahasiswas'));
    }

    public function skipTake()
    {
        $mahasiswas = Mahasiswa::orderBy('id')->skip(1)->take(2)->get();
        return view('akademik.mahasiswa', compact('mahasiswas'));
    }

    // Soft Delete
    public function softDelete()
    {
        Mahasiswa::where('id', 3)->delete();   // ubah id sesuai data
        return redirect('/all-view')->with('success', 'Soft Delete berhasil');
    }

    public function withTrashed()
    {
        $mahasiswas = Mahasiswa::withTrashed()->get();
        return view('akademik.mahasiswa', compact('mahasiswas'));
    }

    public function restore()
    {
        Mahasiswa::withTrashed()->where('id', 3)->restore();
        return redirect('/all-view')->with('success', 'Data berhasil di-restore');
    }

    public function forceDelete()
    {
        Mahasiswa::where('id', 3)->forceDelete();
        return redirect('/all-view')->with('success', 'Data berhasil dihapus permanen');
    }

    public function index()
{
    $mahasiswas = Mahasiswa::latest()->paginate(10);
    return view('akademik.mahasiswa', compact('mahasiswas'));
}
}