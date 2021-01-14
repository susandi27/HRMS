@extends('backend_master')
@section( 'content')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i>ခွင့်အမျိုးအစား</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item active"><a href="{{ route('leaves.create') }}">ခွင့်အမျိုးအစားထည့်ရန်</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead class="" style="font-size: 20px;">
                  <tr>
                    <th>အမှတ်စဉ်</th>
                    <th>ခွင့်အမည်</th>
                    <th>မှတ်ချက်</th>
                    <th>ဖော်ပြချက်</th>
                  </tr>
                </thead>
                <tbody style="font-size: 18px;">
                    @php
                        $x = 1;
                    @endphp
                 @foreach($leaves as $leave)
                 <tr>
                    <td>{{ $x++ }}</td>
                    <td>{{ $leave->name }}</td>
                    <td>{{ $leave->remark }}</td>
                    <td>
                        <a href="{{ route('leaves.edit', $leave->id) }}" class="btn btn-primary btn-sm">ပြုပြင်မည်</a>
                          <form action="{{ route('leaves.destroy', $leave->id) }}" method="POST" onsubmit="return confirm('ဖျက်မှာသေချာပြီးလား')" class="d-inline-block">
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
