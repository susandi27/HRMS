@extends('backend_master')
@section('content')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> ခွင့်အမျိုးအစား</h1>
        <p>ခွင့်အမျိုးအစား ထည့်ရန်။</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{ route('departments.index') }}">ခွင့်အမျိုးအစား</a></li>
      </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
            <h3 class="tile-title">ခွင့်အမျိုးအစားထည့်ရန်</h3>
            <div class="tile-body">
                <form class="forms-sample" action="{{ route('leaves.store') }}" method="POST">
                    @csrf
                <div class="form-group row">
                    <label class="control-label col-md-3">ခွင့်အမည်</label>
                    <div class="col-md-8">
                    <input type="text" placeholder="ခွင့်အမည်အပြည့်စုံထည့်ရန်" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>

                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3">မှတ်ချက်</label>
                    <div class="col-md-8">
                    <textarea rows="4" name="remark" class="form-control @error('remark') is-invalid @enderror" value="{{ old('remark') }}" placeholder="ဖော်ပြလိုသည့်အကြောင်းအရာများထည့်ရန်"></textarea>
                        @error('remark')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="tile-footer">
                    <div class="row">
                    <div class="col-md-8 col-md-offset-3">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>
                            ထည့်မည်
                        </button>
                        &nbsp;&nbsp;&nbsp;
                        <button class="btn btn-secondary" type="reset">
                            <i class="fa fa-fw fa-lg fa-times-circle"></i>
                            ရှင်းလင်းမည်
                        </button>
                    </div>
                    </div>
                </div>
                </form>
            </div>

            </div>
        </div>
        <div class="clearix"></div>
    </div>
</main>
@endsection
