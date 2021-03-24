@extends('layouts.expert')

@section('head')
<title>Expert | Show Course</title>
<link rel="stylesheet" href="{{asset('assets/css/expert/expert.css')}}">
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <img src="{{asset('storage/assets/images/course/'.$course->image_course)}}" width="100%" height="100%" alt="">
    </div>
    <div class="col-6">
        <h2>{{$course->name}}</h2>
        <ul class="list-unstyled">
            <li>
                <b>Event Price :</b><br>
                ${{$course->price}}
            </li>
            <li>
                <b>Event :</b><br>
                {{$course->event}}
            </li>
        </ul>
        <div class="row">
            @foreach ($detailcourse as $item)
            <div class="col">
                <h5 class="text-center">Event ke-{{$loop->iteration}}</h5>
                <ul class="list-group">
                    <li class="list-group-item">
                        <b>Event Quota :</b><br>
                        {{$item->quota}}
                    </li>
                    <li class="list-group-item">
                        <b>Event Date :</b><br>
                        {{$item->event_date}}
                    </li>
                    <li class="list-group-item">
                        <b>Event Time:</b><br>
                        {{$item->event_time}} WIB
                    </li>
                    @if ($course->event == 'offline')
                    <li class="list-group-item">
                        <b>Event Location:</b><br>
                        {{$item->event_location}}
                    </li>
                    @else
                    <li class="list-group-item">
                        <b>Event Link:</b><br>
                        {{$item->link}}
                    </li>
                    @endif
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="row my-3">
    <div class="col">
        <b>Description :</b>
        <p>{{$course->description}}</p>
    </div>
</div>

{{-- Member Layout --}}
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">List Member</div>
            <div class="card-body p-0 px-1">
                <nav class="mt-3">
                    <div class="container text-center">
                        <div class="nav nav-tabs row" id="nav-tab" role="tablist">
                            <a class="nav-link active col" id="nav-event-1-tab" data-toggle="tab" href="#nav-event-1"
                                role="tab" aria-controls="nav-event-1" aria-selected="true">Event
                                1</a>
                            <a class="nav-link col" id="nav-event-2-tab" data-toggle="tab" href="#nav-event-2"
                                role="tab" aria-controls="nav-event-2" aria-selected="false">Event 2</a>
                        </div>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-event-1" role="tabpanel">
                        @if (!$order->isEmpty())
                        @if (!empty($order[0]))
                        <table class="table table-bordered table-striped">
                            <thead class="">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order[0]->orders as $item)
                                <tr>
                                    <td style="width: 30px">{{$loop->index + 1}}.</td>
                                    <td>{{$item->student->name}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-info my-2" role="alert">
                            Tidak Ada Event 1
                        </div>
                        @endif
                        @else
                        <div class="alert alert-info my-2" role="alert">
                            Belum ada member
                        </div>
                        @endif
                    </div>
                    <div class="tab-pane fade" id="nav-event-2" role="tabpanel">
                        @if (!$order->isEmpty())
                        @if (!empty($order[1]))
                        <table class="table table-bordered table-striped">
                            <thead class="">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($order[1]->orders as $itemtwo)
                                <tr>
                                    <td style="width: 30px">{{$loop->index + 1}}.</td>
                                    <td>{{$itemtwo->student->name}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-info my-2" role="alert">
                            Tidak Ada Event 2
                        </div>
                        @endif
                        @else
                        <div class="alert alert-info my-2" role="alert">
                            Belum ada member
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
