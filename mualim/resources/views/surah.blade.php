@extends('master')

@section('content')

<section id="content-1">
    <div class="col-md-12 col-sm-12 col-xs-12 box-1-alquran">
        <p class="text-title-box">3 Total Surah</p>
        <br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5px;padding: 0px;">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding-left: 0px;">
                <input class="form-control urutkan" type="text" placeholder="Search">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding-left: 5px;">
                <select id="" class="form-control urutkan">
                    <option value="" selected>Sort</option>
                    <option value="">Number</option>
                    <option value="">Page</option>
                    <option value="">Juz</option>
                    <option value="">Ayah</option>
                </select>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-4 col-xs-6" align="right" style="padding-right: 0px;margin-bottom: 5px;">
                <a class="btn btn-primary" href="/surah/add">Add</a>
            </div>
        </div>
        <p>
            <table class="table table-striped table-bordered">
            <thead">
              <tr>
                <th>No.</th>
                <th>Arab</th>
                <th>Latin</th>
                <th>Indonesian</th>
                <th>Total Ayah</th>
                <th width="10%">Opsi</th>
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

@endsection