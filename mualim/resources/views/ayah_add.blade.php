@extends('master')

@section('content')

<section id="content-1">
    <div class="col-md-12 col-sm-12 col-xs-12 box-1-alquran">
        <p class="text-title-box">Add Ayah Al-Qur'an</p>
        <br>
        <form>
            <div class="form-group col-lg-2 col-md-2">
                <label for="inputNoSurah">Surah No</label>
                <input type="text" class="form-control" id="inputNoSurah" placeholder="">
            </div>
            <div class="form-group col-lg-2 col-md-2">
                <label for="inputAyat">Ayah No</label>
                <input type="text" class="form-control" id="inputAyat" placeholder="">
            </div>
            <div class="form-group col-lg-2 col-md-2">
                <label for="inputHalaman">Page</label>
                <input type="text" class="form-control" id="inputHalaman" placeholder="">
            </div>
            <div class="form-group col-lg-2 col-md-2">
                <label for="inputJuz">Juz</label>
                <input type="text" class="form-control" id="inputJuz" placeholder="">
            </div>
            <div class="form-group col-lg-6 col-md-6">
                <label for="inputArab">Arab</label>
                <br>
                <textarea name="" id="inputArab" cols="70" rows="3"></textarea>
            </div>
            <div class="form-group col-lg-6 col-md-6">
                <label for="inputLatin">Latin</label>
                <br>
                <textarea name="" id="inputLatin" cols="70" rows="3"></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="inputIndonesia">Indonesian</label>
                <br>
                <textarea name="" id="inputIndonesia" cols="148" rows="3"></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="inputTafsir">Tafsir</label>
                <br>
                <textarea name="" id="Tafsir" cols="148" rows="3"></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="inputTag">Tag</label>
                <br>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Sad</label>
                &nbsp;
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Happy</label>
            </div>
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary">Add</button>
                &nbsp;
                <button type="cancel" class="btn btn-danger">Cancel</button>
            </div>
        </form>
    </div>
</section>

@endsection