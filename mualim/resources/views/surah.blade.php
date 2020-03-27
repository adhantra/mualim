@extends('master')

@section('content')

<section id="content-1">
    <div class="col-md-12 col-sm-12 col-xs-12 box-1-alquran">
        <p class="text-title-box">{{ $total }} Total Surah</p>
        <br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5px;padding: 0px;">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding-left: 0px;">
                <form action="/surah/find" method="GET" id="form_find"> 
                    <input class="form-control urutkan" type="text" name="nama" placeholder="Search Name">
                </form>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding-left: 5px;">
                <select id="" class="form-control urutkan">
                    <option value="" selected>Sort</option>
                    <option value="number">Number</option>
                    <option value="total_ayah">Total Ayah</option>
                </select>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-4 col-xs-6" align="right" style="padding-right: 0px;margin-bottom: 5px;">
                <a class="btn btn-primary" href="/surah/add">Add</a>
            </div>
        </div>
        <p>
            <table class="table table-striped table-bordered">
            <thead">
              <tr style="background-color: #FFF;">
                <th width="2%" rowspan="2">Surah No.</th>
                <th colspan="3" class="text-center">Text</th>
                <th width="8%" rowspan="2">Total Ayah</th>
                <th width="10%" rowspan="2">Option</th>
              </tr>
              <tr>
                <th>Arab</th>
                <th>Latin</th>
                <th>Indonesian</th>
              </tr>
            </thead>
            <tbody>
              @foreach($surah as $s)
              <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->nama_arab }}</td>
                <td>{{ $s->nama_latin }}</td>
                <td>{{ $s->nama_indonesia }}</td>
                <td>{{ $s->total_ayah }}</td>
                <td align="center">
                    <a href="/surah/edit/{{ $s->id }}" class="btn btn-warning btn-sm">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a> 
                    <a href="/surah/delete/{{ $s->id }}" class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>
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