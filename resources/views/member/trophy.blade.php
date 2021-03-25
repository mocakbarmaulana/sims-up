@extends('layouts.member')

@section('head')
<title>Order</title>
<link rel="stylesheet" href="{{asset('assets/css/member/member.css')}}">
@endsection

@section('content')
<div class="p-4">
    <div class="row mb-3">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Skill</th>
                        <th scope="col" style="width: 20px">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trophys as $trophy)
                    <tr>
                        <td>{{$trophy->name_skill}}</td>
                        <td>{{$trophy->total}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
