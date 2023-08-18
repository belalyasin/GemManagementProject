@extends('layouts.master')
@section('title')
    الدفع
@endsection

@section('content')
    <div class="card card-primary w-50 my-5 mx-auto">

        <div class="card-header bg-success">
            <h3 class="card-title">تأكيد الدفع</h3>
        </div>

        <div class="card-body ">
            <form class="mt-2 w-55 mx-auto " action="{{ route('buyPackage.store') }}" method="post">
                @csrf
                <div class="text-center">
                    <div class=" mb-4" style="font-size:20px">إنها خطوة فقط للانضمام إلى عائلتنا &#128521;</div>
                </div>
                <div class="d-flex justify-content-around mt-3">
                    <button type="submit" class="btn btn-success bg-success py-2 px-4 ">تأكيد</button>
                    <a class="btn btn-danger bg-danger py-2 px-4 " href="{{ route('buyPackage.cancel') }}">رجوع</a>
                </div>
            </form>

        </div>
    </div>

@stop
