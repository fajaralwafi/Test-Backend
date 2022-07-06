<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Exception;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Karyawan::all();

        if ($data) {
            return ApiFormatter::createApi(200, 'success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nik' => 'required',
                'nama' => 'required',
                'ttl' => 'required',
                'alamat' => 'required',
                'id_jabatan' => 'required',
            ]);

            $karyawan = Karyawan::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'ttl' => $request->ttl,
                'alamat' => $request->alamat,
                'id_jabatan' => $request->id_jabatan,
            ]);

            $data = Karyawan::where('id_karyawan', '=', $karyawan->id_karyawan)->get();
            if ($data) {
                return ApiFormatter::createApi(200, 'success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Karyawan::where('id_karyawan', '=', $id)->get();
        if ($data) {
            return ApiFormatter::createApi(200, 'success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nik' => 'required',
                'nama' => 'required',
                'ttl' => 'required',
                'alamat' => 'required',
                'id_jabatan' => 'required',
            ]);

            $karyawan = Karyawan::findOrFail($id);

            $karyawan->update([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'ttl' => $request->ttl,
                'alamat' => $request->alamat,
                'id_jabatan' => $request->id_jabatan,
            ]);

            $data = Karyawan::where('id_karyawan', '=', $karyawan->id_karyawan)->get();
            if ($data) {
                return ApiFormatter::createApi(200, 'success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);

        $data = $karyawan->delete();

        try {
            if ($data) {
                return ApiFormatter::createApi(200, 'success destroy data');
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }
}
