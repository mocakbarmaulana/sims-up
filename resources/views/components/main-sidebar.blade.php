<div class="text-center">
    @foreach ($menus as $menu)
    <div>
        <a href="#" class="py-2 d-block">{{$menu['label']}}</a>
    </div>
    @endforeach
    {{-- <div>
        <a href="#" class="py-2 d-block active">Course</a>
    </div>
    <div>
        <a href="#" class="py-2 d-block">Order</a>
    </div>
    <div>
        <a href="#" class="py-2 d-block">Logout</a>
    </div> --}}
</div>
