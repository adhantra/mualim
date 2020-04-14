@extends('master')

@section('content')

<section id="content-1">
    <div class="col-md-12 col-sm-12 col-xs-12 box-1-alquran">
        <p class="text-title-box">Feedback</p>
        <p class="text-title-box">{{ $total }} Total Feedback</p>
        <br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5px;padding: 0px;">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding-left: 0px;">
                <form action="/feedback/find" method="GET" id="form_find"> 
                    <input class="form-control urutkan" type="text" name="title" placeholder="Search Title">
                </form>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="padding-left: 5px;">
                <select id="" class="form-control urutkan">
                    <option value="" selected>Sort</option>
                    <option value="title">title</option>
                    <option value="date">Date</option>
                </select>
            </div>
        </div>
        <p>
            <table class="table table-striped table-bordered">
            <thead">
              <tr style="background-color: #FFF;">
                <th width="2%">No.</th>
                <th width="3%">Time</th>
                <th width="10%">From</th>
                <th width="8%">Title</th>
                <th width="20%">Text</th>
                <th width="10%">Option</th>
              </tr>
            </thead>
            <tbody>
              @foreach($feedback as $f)
              <tr>
                <td>{{ $f->id }}</td>
                <td>{{ $f->time }}</td>
                <td>{{ $f->from }}</td>
                <td>{{ $f->title }}</td>
                <td>{{ $f->text }}</td>
                <td align="center">
                    <a href="/feedback/delete/{{ $f->id }}" class="btn btn-danger btn-sm">
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