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
                    <th>အမှတ်စဉ်</th>
                    <th>ဌာန အမည်</th>
                    <th>အကြောင်းအရာ</th>
                    <th>ဖော်ပြချက်</th>
                  </tr>
                </thead>
                <tbody style="font-size: 18px; ">
                  @php $i = 1 @endphp
                  @foreach($departments as $department)
                  <tr>
                    <td> {{ $i++ }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->remark }}</td>
                    <td>
                        <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-primary btn-sm">ပြုပြင်မည်</a>
                          <form action="{{ route('departments.destroy', $department->id) }}" method="POST" onsubmit="return confirm('ဖျက်မှာသေချာပြီးလား')" class="d-inline-block">
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
