@extends('admin.app');
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-chart">
          <div class="card-body">
            <h4 class="card-title">Statistic</h4>
            <form action="">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input name="from_date" type="date" class="form-control ">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input name="to_date" type="date" class="form-control ">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-primary m-0" type="submit">Filter</button>
                    </div>
                </div>
            </form>
            <div>
              {!! $chart->container() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push("scripts")
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
{!! $chart->script() !!}
@endpush
