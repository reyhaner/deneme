@extends('../layout/' . $layout)

@section('subhead')
    <title>İlce Ekleme</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">İlce Ekleme</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <form action="{{ route('ilce.store') }}" method="POST" >
             @csrf
            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">İlce Adı</label>
                    <input id="crud-form-1" type="text" name="name" class="form-control w-full" placeholder="Yazınız">
                </div>

                <div>
                  <select name="il_id" class="form-select form-select-lg sm:mt-2 sm:mr-2" aria-label=".form-select-lg example">
                    @foreach ($illerx as $iller)
                      <option value="{{ $iller->ilid }}">{{ $iller->iller }}</option>
                  @endforeach
                  </select>
                </div>

                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">İptal</button>
                    <button type="submit" class="btn btn-primary w-24">Kaydet</button>
                </div>
            </div>
          </form>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection

