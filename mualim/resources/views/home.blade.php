@extends('master')

@section('content')

<!-- Alquran - Surah -->
<section id="content-1">
    <div class="col-md-3 col-sm-3 col-xs-12 box-1">
        <p class="text-center text-title-box-home">{{ $total_surah }}</p>
        <p class="text-center text-title">Qur'an Surah</p>
    </div>
</section>
<!-- End of Alquran -->

<!-- Alquran - Ayah -->
<section id="content-1">
    <div class="col-md-3 col-sm-3 col-xs-12 box-1">
        <p class="text-center text-title-box-home">{{ $total_ayah }}</p>
        <p class="text-center text-title">Qur'an Ayah</p>
    </div>
</section>
<!-- End of Alquran -->

<!-- Users -->
<section id="content-3">
    <div class="col-md-3 col-sm-3 col-xs-12 box-3">
        <p class="text-center text-title-box-home">1</p>
        <p class="text-center text-title">Users</p>
    </div>
</section>
<!-- End of Users -->

<!-- Users -->
<section id="content-3">
    <div class="col-md-3 col-sm-3 col-xs-12 box-3">
        <p class="text-center text-title-box-home">{{ $total_feedback }}</p>
        <p class="text-center text-title">Feedback</p>
    </div>
</section>
<!-- End of Users -->

<!-- Sentiment
<section id="content-4">
    <div class="col-md-12 col-sm-12 col-xs-12 box-4">
        <p><a href="">Today</a> &nbsp; <a href="">Week</a> &nbsp; <a href="">Month</a> &nbsp; <a href="">Year</a></p>
        <p class="text-subtitle">Total Sentiment</p>
    </div>
</section>
 End of Sentiment -->
<section id="content-1">
    <div class="col-md-4 col-sm-4 col-xs-12 box-1-alquran-home">
        <p class="text-title-box-home">Surah</p>
        <p>
            <table class="table table-striped table-bordered">
            <thead">
              <tr style="background-color: #FFF;">
                <th width="2%" rowspan="2">Surah No.</th>
                <th colspan="2" class="text-center">Text</th>
                <th width="8%" rowspan="2">Total Ayah</th>
              </tr>
              <tr>
                <th>Arab</th>
                <th>Latin</th>
              </tr>
            </thead>
            <tbody>
              @foreach($surah as $s)
              <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->nama_arab }}</td>
                <td>{{ $s->nama_latin }}</td>
                <td>{{ $s->total_ayah }}</td>
              </tr>
              @endforeach
            </tbody>
            </table>
        </p>
    </div>

    <div class="col-md-8 col-sm-8 col-xs-12 box-1-alquran-home">
        <p class="text-title-box-home">Feedback</p>
        <p>
            <table class="table table-striped table-bordered">
            <thead">
              <tr style="background-color: #FFF;">
                <th width="3%">Time</th>
                <th width="10%">From</th>
                <th width="8%">Title</th>
                <th width="20%">Text</th>
              </tr>
            </thead>
            <tbody>
              @foreach($feedback as $f)
              <tr>
                <td>{{ $f->created_at }}</td>
                <td>{{ $f->from }}</td>
                <td>{{ $f->title }}</td>
                <td>{{ $f->text }}</td>
              </tr>
              @endforeach
            </tbody>
            </table>
            <div align="center"> {{ $feedback->links() }} </div>
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