@extends('backend_master')
@section( 'content')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Data Table</h1>
        <p>Table to display analytical data effectively</p>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active"><a href="{{ route('departments.create') }}">ဌာနအသစ်ထည့်ရန်</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead class="bg-primary" style="font-size:20px;">
                  <tr>
                    <th>စဉ်</th>
                    <th>ဓါတ်ပုံ</th>
                    <th>ဝန်ထမ်း အမည်</th>
                    <th>လက်ရှိရာထူး</th>
                    <th>ဌာန အမည်</th>
                    <th>ဖော်ပြချက်</th>
                  </tr>
                </thead>
                <tbody style="font-size: 18px; ">
                  @php $i = 1 @endphp
                  @foreach($staff_infos as $staff_info)
                  <tr>
                    <td> {{ $i++ }}</td>
                    <td><img src="{{ $staff_info->photo}}" width="150px" height="150px" alt="profile"></td>
                    <td>{{ $staff_info->user->name }}</td>
                    <td>{{ $staff_info->current_position }}</td>
                    <td>{{ $staff_info->department->name }}</td>
                    <td>
                        <a href="{{ route('staff_infos.edit', $staff_info->id) }}" class="btn btn-primary btn-sm">ပြုပြင်မည်</a>
                        <a href="{{ route('info_detailpage', $staff_info->id) }}" class="btn btn-info btn-sm">အပြည့်အစုံ</a>
                          <form action="{{ route('staff_infos.destroy', $staff_info->id) }}" method="POST" onsubmit="return confirm('ဖျက်မှာသေချာပြီးလား')" class="d-inline-block">
                              @csrf
                              @method('DELETE')
                              <input type="submit" class="btn btn-danger btn-sm" value="ဖျက်မည်" name="btnsubmit">
                          </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
