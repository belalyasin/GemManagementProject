@extends('layouts.master')
@section('title', 'عرض معلومات الحصة التدريبية')

@section('content')
    <div class="container p-5">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">معلومات الحصة التدريبية : <b>{{ $session->name }}</b></h3>

                <div class="card-tools row">
                    <div class="col-md-4">
                        <a class="btn btn-tool btn-info" href="{{ route('sessions.edit', $session->id) }}"><i
                                class="fas fa-pencil-alt"></i></a>
                    </div>
                    <form class="col-md-4" action="{{ route('sessions.destroy', $session->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-md btn-info show-alert-delete-box btn-tool"
                            data-toggle="tooltip" title='Delete'><i class="fas fa-times"></i></button>
                    </form>
                </div>
            </div>

            <div class="card-body">
                <p class="card-text text-secondary">الاسم : <span
                        class="text-light font-weight-bold">{{ $session->name }}</span> </p>
                <p class="card-text text-secondary">تبدأ في : <span
                        class="text-light font-weight-bold">{{ date('Y-m-d h:i a', strtotime($session->started_at)) }}</span>
                </p>
                <p class="card-text text-secondary">ينتهي عند : <span
                        class="text-light font-weight-bold">{{ date('Y-m-d h:i a', strtotime($session->finished_at)) }}</span>
                </p>
            </div>

        </div>
    </div>
@stop

@section('script')
    @include('layouts.alertScript')
@stop
