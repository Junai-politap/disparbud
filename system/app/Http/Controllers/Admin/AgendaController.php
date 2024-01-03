<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class AgendaController extends Controller
{
    
    public function index()
    {
        $data['list_agenda'] = Agenda::all();

        return view('admin.agenda.index', $data);
    }

    
    public function create()
    {
        return view('admin.agenda.create');
    }

    
    public function store(Request $request)
    {
        $agenda = New Agenda();
        $agenda->title = request('title');
        $agenda->text = request('text');
        $agenda->nama_bulan = request('nama_bulan');
        $agenda->tanggal_agenda = request('tanggal_agenda');
        $agenda->handleUploadPoto();
        $agenda->save();

        return redirect('admin/agenda')->with('success', 'Data Berhasil di Simpan');
    }

    
    public function show($agenda)
    {
        $data['agenda'] = Agenda::find($agenda);

        return view('admin.agenda.show', $data);
    }

    
    public function edit($agenda)
    {
        $data['agenda'] = Agenda::find($agenda);

        return view('admin.agenda.edit', $data);
    }

    
    public function update($agenda)
    {
        $agenda = Agenda::find($agenda);
        $agenda->title = request('title');
        $agenda->text = request('text');
        $agenda->nama_bulan = request('nama_bulan');
        $agenda->tanggal_agenda = request('tanggal_agenda');
        $agenda->handleUploadPoto();
        $agenda->save();

        return redirect('admin/agenda')->with('success', 'Data Berhasil di Simpan');
    }

    
    public function destroy($agenda)
    {
        Agenda::destroy($agenda);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
