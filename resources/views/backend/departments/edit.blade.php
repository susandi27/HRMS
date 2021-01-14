@extends('backend_master')
@section('content')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i>ဌာန ပြင်စင်ရန်</h1>
        <p>ဌာနများကို့ ပြင်စင်ရန်</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{ route('departments.index') }}">ဌာနစာရင်း</a></li>
      </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
            <h3 class="tile-title">ဌာနထည့်ရန်</h3>
            <div class="tile-body">
                <form class="forms-sample" action="{{ route('departments.update', $department->id) }}" method="POST">
                    @csrf
                    @method('put')
                <div class="form-group row">
                    <label class="control-label col-md-3">ဌာနအမည်</label>
                    <div class="col-md-8">
                    <input  type="text"  name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $department->name }}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3">မှတ်ချက်</label>
                    <div class="col-md-8">
                    <textarea class="form-control @error('remark') is-invalid @enderror"  rows="4" name="remark">{{ $department->remark }}
                    </textarea>
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
                            ပြင်စင်ရန်
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
