@extends('master')

@section('content')

<section id="content-1">
    <div class="col-md-12 col-sm-12 col-xs-12 box-1-alquran">
        <p class="text-title-box">Edit Ayah Al-Qur'an</p>
        <br>
        <form method="post" action="/ayah/update/{{ $ayah->id }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group col-lg-2 col-md-2">
                <label for="inputNoSurah">Surah No.</label>
                <input type="text" name="surah_no" class="form-control" id="inputNoSurah" value="{{ $ayah->surah_id }}">
            </div>
            <div class="form-group col-lg-2 col-md-2">
                <label for="inputAyat">Ayah No.</label>
                <input type="text" name="ayah_no" class="form-control" id="inputAyat" value="{{ $ayah->ayah_no }}">
            </div>
            <div class="form-group col-lg-2 col-md-2">
                <label for="inputHalaman">Page</label>
                <input type="text" name="page" class="form-control" id="inputHalaman" value="{{ $ayah->page }}">
            </div>
            <div class="form-group col-lg-2 col-md-2">
                <label for="inputJuz">Juz</label>
                <input type="text" name="juz" class="form-control" id="inputJuz" value="{{ $ayah->juz }}">
            </div>
            <div class="form-group col-lg-6 col-md-6">
                <label for="inputArab">Arab</label>
                <br>
                <textarea name="text_arab" id="inputArab" cols="70" rows="3">{{ $ayah->text_arab }}</textarea>
            </div>
            <div class="form-group col-lg-6 col-md-6">
                <label for="inputLatin">Latin</label>
                <br>
                <textarea name="text_latin" id="inputLatin" cols="70" rows="3">{{ $ayah->text_latin }}</textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="inputIndonesia">Indonesian</label>
                <br>
                <textarea name="text_indonesia" id="inputIndonesia" cols="148" rows="3">{{ $ayah->text_indonesia }}</textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="inputTafsir">Tafsir</label>
                <br>
                <textarea name="text_tafsir" id="Tafsir" cols="148" rows="3">{{ $ayah->text_tafsir }}</textarea>
            </div>
            <div class="form-group col-md-4">
                <label for="inputTag">Tag</label>
                <br>
                <input type="text" name="tags" class="form-control" id="inputTag" value="{{ $ayah->tags }}">
            </div>
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary">Save</button>
                &nbsp;
                <a href="/ayah" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</section>

@endsection