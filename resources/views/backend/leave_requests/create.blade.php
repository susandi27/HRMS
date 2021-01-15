@extends('backend_master')
@section('content')
<main class="app-content" style="font-size: 18px;">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> ခွင့်တင်ရန်</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{ route('leave_requests.index') }}">ခွင့်စာရင်း</a></li>
      </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
            <h3 class="tile-title">ခွင့်တင်ရန်အချက်အလက်များထည့်ရန်</h3>
            <div class="tile-body">
                <form class="forms-sample" action="{{ route('leave_requests.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">ဝန်ထမ်းအမည်</label>
                                <select id="inputState" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id') }}" name="user_id">
                                    <option selected>ရွေးချယ်ပါ...</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                  </select>
                                  @error('user_id')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">ဌာနအမည်</label>
                                <select id="inputState" class="form-control" name="department_id">
                                    <option selected>ရွေးချယ်ပါ...</option>
                                    @foreach($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">အဖအမည်</label>
                                <input class="form-control" type="text" placeholder="ဦးဘ" name="father_name" value="{{ old('father_name') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">အမိအမည်</label>
                                <input class="form-control" type="text" placeholder="ဒေါ်လှ" name="mother_name" value="{{ old('mother_name') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">ဘွဲ့</label>
                                <input class="form-control" type="text" placeholder="ဘွဲ့အမျိုးအစား" name="degree" value="{{ old('degree') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">အလုပ်စတင်ဝင်ရောက်သည့်နေ့</label>
                                <input class="form-control" type="date" name="start_work_date" value="{{ old('start_work_date') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">ဓါတ်ပုံ</label>
                                <input class="form-control" type="file" name="photo" value="{{ old('photo') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">အီးမေလ်</label>
                                <input class="form-control" type="email" placeholder="uba@gmail.com" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">ဘွဲ့</label>
                                <input class="form-control" type="text" placeholder="ဘွဲ့အမျိုးအစား" name="degree" value="{{ old('degree') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">အလုပ်စတင်ဝင်ရောက်သည့်နေ့</label>
                                <input class="form-control" type="date" name="start_work_date" value="{{ old('start_work_date') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">မှတ်ချက်</label>
                                <textarea name="remark" id="control-label" cols="10" rows="10" class="form-control @error('remark') is-invalid @enderror"" value="{{ old('remark') }}" ></textarea>
                                @error('remark')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
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
