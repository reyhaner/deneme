@extends('../layout/' . $layout)

@section('subhead')
    <title>İlçe güncelle</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">İlce güncele</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <form action="{{ route('ilce.update', $ilce->id) }}" method="POST" >
              @csrf
              @method('PUT')

            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">İlçe Adı</label>
                    <input name="name" id="crud-form-1" value="{{ $ilce->name }}" type="text" class="form-control w-full" placeholder="Yazınız">
                </div>

                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">İptal</button>
                    <button type="submit" class="btn btn-primary w-24">Güncelle</button>
                </div>
            </div>
          </from>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection
