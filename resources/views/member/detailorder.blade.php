@extends('layouts.member')

@section('head')
<title>Detail Order</title>
{{-- <link rel="stylesheet" href="{{asset('assets/css/member/detailorder.css')}}"> --}}
<link rel="stylesheet" href="{{asset('assets/css/member/order.css')}}">
@endsection

@section('content')
<div class="py-4">
    <div class="row">
        <div class="col-7">
            <div class="px-2">
                <img src="{{asset('storage/assets/images/course/'.$order->course->image_course)}}" alt="image-course"
                    class="img-thumbnail" style="height: 470px">
            </div>
        </div>
        <div class="col pl-0">
            <ul class="list-unstyled rounded pt-0 px-2 mb-3">
                <li class="my-3">
                    <h5>{{$order->course->name}}</h5>
                </li>
                <li class="my-3">
                    <p class="m-0"><strong>Description : </strong></p>
                    <span>{{$order->course->description}}</span>
                </li>
                <li class="my-3">
                    <p class="m-0"><strong>Invoice : </strong></p>
                    <span>{{$order->invoice}}</span>
                </li>
                <li class="my-3">
                    <p class="m-0"><strong>Price : </strong></p>
                    <span>IDR. {{number_format($order->subtotal)}}</span>
                </li>
                <li class="my-3">
                    <p class="m-0"><strong>Date Invoice : </strong></p>
                    <span>{{ date_format($order->created_at, 'd-m-Y')}}</span>
                </li>
                <li class="my-3">
                    <p class="m-0"><strong>Status : </strong></p>
                    @if ($order->status == 1)
                    <span><i class="far fa-check-circle text-success"></i> Belum Dibayar</span>
                    @else
                    <span><i class="far fa-times-circle text-danger"></i> Belum Dibayar</span>
                    @endif
                </li>
            </ul>

            <div class="px-2">
                <button class="btn btn-block bg-green-mint order-filter font-weight-bold">See Course</button>
                <button class="btn btn-block btn-warning font-weight-bold" data-toggle="modal"
                    data-target="#staticBackdrop">Confirm Payment</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="staticBackdropLabel">Confirm Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <form>
                            <div class="form-group">
                                <label>Invoice</label>
                                <input class="form-control" type="text" placeholder="{{$order->invoice}}" readonly>
                            </div>
                            <label for="name">Name</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="numberBank">Number Bank</label>
                                <input type="text" class="form-control" id="numberBank">
                            </div>
                            <div class="form-group">
                                <label for="nameBank">Name Bank</label>
                                <input type="text" class="form-control" id="nameBank">
                            </div>
                            <div class="form-group">
                                <label for="dateTransfer">Date Transfer</label>
                                <input type="date" class="form-control" id="dateTransfer">
                            </div>
                    </div>
                    <div class="col-6">
                        <img src="{{asset('assets/images/no-image.png')}}" alt="img-prove" style="height: 320px"
                            width="100%" class="image-preview">
                        <div class="form-group mt-4">
                            <label for="imgProve">Image Proove</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="imgProve" required>
                                <label class="custom-file-label image-text" for="imgProve">Choose file...</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn bg-green-mint order-filter">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $("#imgProve").change(function(){
const name = $(this.files[0])[0].name;
$(".image-text").text(name);
readUrlImage($(this));
});


function readUrlImage(input){
let reader = new FileReader();

console.log(reader);

reader.onload = function(e){
$(".image-preview").attr('src', e.target.result);
// {{-- console.log(e); --}}
}

reader.readAsDataURL(input[0].files[0]);
// {{-- console.log(input[0].files[0]); --}}
}
</script>
@endsection
