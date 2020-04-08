@extends('master')

@section('content')

<section id="content-1">
    <div class="col-md-12 col-sm-12 col-xs-12 box-1-alquran">
        <p class="text-title-box">Add Ayah Al-Qur'an</p>
        <br>
        <form method="post" action="/ayah/store">
            {{ csrf_field() }}
            <div class="form-group col-lg-2 col-md-2">
                <label for="inputNoSurah">Surah No.</label>
                <input type="text" name="surah_no" class="form-control" id="inputNoSurah" placeholder="" value="{{ $surah_no }}">
            </div>
            <div class="form-group col-lg-2 col-md-2">
                <label for="inputAyat">Ayah No.</label>
                <input type="text" name="ayah_no" class="form-control" id="inputAyat" placeholder="" value="{{ $ayah_no }}">
            </div>
            <div class="form-group col-lg-2 col-md-2">
                <label for="inputHalaman">Page</label>
                <input type="text" name="page" class="form-control" id="inputHalaman" placeholder="">
            </div>
            <div class="form-group col-lg-2 col-md-2">
                <label for="inputJuz">Juz</label>
                <input type="text" name="juz" class="form-control" id="inputJuz" placeholder="">
            </div>
            <div class="form-group col-lg-6 col-md-6">
                <label for="inputArab">Arab</label>
                <br>
                <textarea name="text_arab" id="inputArab" cols="70" rows="3"></textarea>
            </div>
            <div class="form-group col-lg-6 col-md-6">
                <label for="inputLatin">Latin</label>
                <br>
                <textarea name="text_latin" id="inputLatin" cols="70" rows="3"></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="inputIndonesia">Indonesian</label>
                <br>
                <textarea name="text_indonesia" id="inputIndonesia" cols="148" rows="3"></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="inputTafsir">Tafsir</label>
                <br>
                <textarea name="text_tafsir" id="Tafsir" cols="148" rows="15"></textarea>
            </div>
            <div class="form-group col-md-4">
                <label for="inputTag">Tags</label>
                <br>
                <input type="text" name="tags" class="form-control" id="inputTag" placeholder="">
            </div>
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary">Add</button>
                &nbsp;
                <a class="btn btn-danger" onclick="history.back()">Cancel</a>
            </div>
        </form>
    </div>
</section>

@endsection