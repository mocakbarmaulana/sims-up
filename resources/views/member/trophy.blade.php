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
                    <tr>
                        <td>Mark</td>
                        <td>1</td>

                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Larry</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
