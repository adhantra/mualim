@extends('master')

@section('content')

<section id="content-1">
    <div class="col-md-12 col-sm-12 col-xs-12 box-1-alquran">
        <p class="text-title-box">Surah {{ $surah_name }}</p>
        <p class="text-title-box">{{ $total }} Total Ayah</p>
        <br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5px;padding: 0px;">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding-left: 0px;">
                <form action="#" method="GET" id="form_find"> 
                    <input class="form-control urutkan" type="text" name="tags" placeholder="Search By Tags">
                </form>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding-left: 5px;">
                <select id="" class="form-control urutkan">
                    <option value="" selected>Sort</option>
                    <option value="">Number</option>
                    <option value="">Page</option>
                    <option value="">Juz</option>
                </select>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-4 col-xs-6" align="right" style="padding-right: 0px;margin-bottom: 5px;">
                <a class="btn btn-primary" href="/ayah/add/{{ $surah_no }}">Add</a>
            </div>
        </div>
        <p>
            <table class="table table-striped table-bordered">
            <thead">
              <tr style="background-color: #FFF;">
                <th width="2%" rowspan="2">Ayah No.</th>
                <th width="2%" rowspan="2">Page</th>
                <th width="2%" rowspan="2">Juz</th>
                <th colspan="4" class="text-center">Text</th>
                <th width="10%" rowspan="2">Tags</th>
                <th width="10%" rowspan="2">Cause</th>
                <th width="10%" rowspan="2">Option</th>
              </tr>
              <tr>
                <th width="15%">Arab</th>
                <th width="13%">Latin</th>
                <th width="15%">Indonesian</th>
                <th width="15%">Tafsir</th>
              </tr>
            </thead>
            <tbody>
            @foreach($ayah as $a)
              <tr>
                <td>{{ $a->ayah_no }}</td>
                <td>{{ $a->page }}</td>
                <td>{{ $a->juz }}</td>
                <td>{!! \Illuminate\Support\Str::words($a->text_arab, 25,'....')  !!}</td>
                <td>{!! \Illuminate\Support\Str::words($a->text_latin, 10,'....')  !!}</td>
                <td>{!! \Illuminate\Support\Str::words($a->text_indonesia, 10,'....')  !!}</td>
                <td>{!! \Illuminate\Support\Str::words($a->text_tafsir, 10,'....')  !!}</td>
                <td>{{ $a->tags }}</td>
                <td>{{ $a->cause }}</td>
                <td align="center">
                    <a href="/ayah/edit/{{ $a->id }}" class="btn btn-warning btn-sm">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a> 
                    <a href="/ayah/delete/{{ $a->id }}" class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
              </tr>
            @endforeach
            </tbody>
            </table>
            <div align="center"> {{ $ayah->links() }} </div>
        </p>
    </div>
</section>
<!-- Script for Search -->
<script>
document.getElementById('body').onkeyup = function(e) {
if (e.keyCode === 13) {
    document.getElementById('form_find').submit(); // your form has an id="form"
}
    return true;
}
</script>
@endsection