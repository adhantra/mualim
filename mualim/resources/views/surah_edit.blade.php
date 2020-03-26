@extends('master')

@section('content')

<section id="content-1">
    <div class="col-md-12 col-sm-12 col-xs-12 box-1-alquran">
        <p class="text-title-box">Edit Surah Al-Qur'an</p>
        <br>
        <form method="post" action="/surah/update/{{ $surah->id }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group col-lg-4 col-md-4">
                <label for="inputNamaSurah">Surah Name (Arab)</label>
                <input type="text" name="nama_arab" class="form-control" id="inputNamaSurah" value="{{ $surah->nama_arab }}">
            </div>
            <div class="form-group col-lg-4 col-md-4">
                <label for="inputNamaSurah">Surah Name (Latin)</label>
                <input type="text" name="nama_latin" class="form-control" id="inputNamaSurah" value="{{ $surah->nama_latin }}">
            </div>
            <div class="form-group col-lg-4 col-md-4">
                <label for="inputNamaSurah">Surah Name (Indonesian)</label>
                <input type="text" name="nama_indonesia" class="form-control" id="inputNamaSurah" value="{{ $surah->nama_indonesia }}">
            </div>
            <div class="form-group col-lg-2 col-md-2">
                <label for="inputNoSurah">Surah No</label>
                <input type="text" name="surah_no" class="form-control" id="inputNoSurah" value="{{ $surah->id }}" readonly>
            </div>
            <div class="form-group col-lg-4 col-md-4">
                <label for="inputTotalAyah">Total Ayah</label>
                <input type="text" name="total_ayah" class="form-control" id="inputTotalAyah" value="{{ $surah->total_ayah }}">
            </div>
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary">Save</button>
                &nbsp;
                <a href="/surah" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</section>

@endsection