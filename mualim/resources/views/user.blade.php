@extends('master')

@section('content')

<section id="content-1">
    <div class="col-md-12 col-sm-12 col-xs-12 box-1-alquran">
        <p class="text-title-box">1 Total User</p>
        <br>
        <p><a href="">Today</a> &nbsp; <a href="">Week</a> &nbsp; <a href="">Month</a> &nbsp; <a href="">Year</a></p>
        <p class="text-subtitle">Total Sentiment</p>
    </div>
</section>
<section id="content-4">
    <div class="col-md-12 col-sm-12 col-xs-12 box-4-bawah">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5px;padding: 0px;">
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-left: 0px;">
                <input class="form-control urutkan" type="text" placeholder="Search">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-left: 5px;padding-right: 5px;margin-bottom:5px;">
                <select id="" class="form-control urutkan">
                    <option value="" selected>Sort</option>
                    <option value="">Name</option>
                    <option value="">Age</option>
                </select>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <select id="" class="form-control urutkan">
                    <option value="" selected>Sentiment</option>
                    <option value="">Positive</option>
                    <option value="">Negative</option>
                </select>
            </div>
            
        </div>
        <p>
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th width="5%">No.</th>
                <th width="20%">Name</th>
                <th width="10%">Religion</th>
                <th width="10%">Age</th>
                <th width="12%">Gender</th>
                <th width="23%">Address</th>
                <th width="10%">Sentiment</th>
                <th width="10%">Option</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Agung Ramadhan Putra</td>
                <td>Muslim</td>
                <td>22</td>
                <td>Male</td>
                <td>Bengkulu</td>
                <td>Positive</td>
                <td align="center">
                    <a href="#" class="btn btn-warning btn-sm">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a> 
                    <a href="#" class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
              </tr>
            </tbody>
        </table>
        </p>
    </div>
</section>

@endsection