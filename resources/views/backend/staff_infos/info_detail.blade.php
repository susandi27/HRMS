@extends('backend_master')
@section( 'content')
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-title p-4">
                    <h1 class="text-center">ဝန်ထမ်းကိုယ်ရေးအချက်အလတ်</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>အမည်</h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->user->name}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>ဌာနအမည် </h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->department->name}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>မွေးသက္ကရာဇ် </h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->birthday}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>ကျား/မ </h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->gender}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>မှတ်ပုံတင်အမှတ် </h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->nrc}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>အဖအမည် </h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->father_name}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>အမိအမည် </h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->mother_name}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>ကိုးကွယ်သည့်ဘာသာ </h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->religion}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>လူမျိုး </h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->nationality}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>အိမ်ထောင် ရှိ/မရှိ </h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->marital_status}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>ဘွဲ့</h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->degree}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>အလုပ်စတင်ဝင်ရောက်သည့်နေ့</h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->start_work_date}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>လက်ရှိရာထူး</h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->current_position}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>လက်ရှိလစာ</h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->salary}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>လက်ရှိရာထူးရသည့်ရက်စွဲ</h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->current_position_date}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>ဖုန်းနံပါတ်</h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->phone}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>အီးမလ်</h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->email}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>အမြဲတမ်းနေရပ်လိပ်စာ</h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->address}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>လက်ရှိနေရပ်လိပ်စာ</h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->current_address}}</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5>မှတ်ချက်</h5>
                                        </div>
                                        <div class="col-md-9 ">
                                            <h5>: {{ $staff_infos->remark}}</h5>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <img src="{{ $staff_infos->photo }}" class="card-img-top" alt="photo" style="border-radius:50%;">
                              </div>
                             <div class="mt-4">
                                <button class="btn btn-primary">ပြုပြင်ရန်</button>
                                <button class="btn btn-danger">ဖျက်ရန်</button>
                             </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
