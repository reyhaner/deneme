<?php
namespace App\Http\Controllers;
use App\Models\ilce;
use App\Models\iller;
use Illuminate\Http\Request;
class ilceController extends Controller
{
      public function index()
    {
$ilces = ilce::latest()->paginate(15);
return view('pages.crud-data-list-ilce', compact('ilces'))
      ->with('i', (request()->input('page', 1) - 1) * 15);
      }
    public function create()
    {
      $illerx = iller::all();
      return view('pages.crud-form-ilce', compact('illerx'));
    }

    public function store(Request $request)
    {
    $request->validate(['name' => 'required']);
        ilce::create($request->all());
        return redirect()->route('ilce.index')
            ->with('success', 'İlçe ekleme işlemi başarılı.');
    }

    public function show(ilce $ilce)
    {
      $ilce = ilce::find($id);
      return view('pages.crud-update-list-ilce',compact('ilce'));
    }
    public function edit($id)
    {
       $ilce = ilce::find($id);
       return view('pages.crud-update-list-ilce',compact('ilce'));

    }

    public function update(Request $request, ilce $ilce)
    {
      $request->validate([
          'name' => 'required',
      ]);

      $ilce->update($request->all());

      return redirect()->route('ilce.index')
                      ->with('success','İlçe başarı ile güncellendi.');
    }

    public function destroy($id)
    {
        ilce::destroy($id);
        return redirect()->route('ilce.index')->with('success','İlçe başarı ile silindi');
    }
}
