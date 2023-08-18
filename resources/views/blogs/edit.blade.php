@extends('layouts.master')
@section('title')
    Edit "{{ $blog->name }}" Blog
@stop

@section('content')
    <div class=" d-flex justify-content-center">
        <div class="card card-warning w-50 mt-3">
            <div class="card-header">
                <h3 class="card-title">تعديل المدونة: <b>{{ $blog->title }}</b></h3>
            </div>
            <div class="card-body">
                <form class="px-5 py-3" action="{{ route('blogs.update', $blog->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">

                    <div class="form-group mb-3">
                        <label for="title">العنوان</label>
                        <input name="title" type="text" class="form-control" value="{{ $blog->title }}" id="title"
                            aria-describedby="titleHelp">
                    </div>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-3">
                        <label for="subTitle">العنوان الفرعي</label>
                        <input name="subTitle" type="text" class="form-control" value="{{ $blog->subTitle }} "
                            id="subTitle" aria-describedby="titleHelp">
                    </div>
                    @error('supTitle')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <div class="">
                        <div class="w-100">
                            <label for="">صورة المدونة </label>
                            <input type="file" class="form-control w-100 bg-dark pt-1" name="image"
                                aria-describedby="fileHelpId" value="{{ old('image', '') }}">
                            <small id="fileHelpId" class="form-text text-muted">فقط : png or jpg</small>
                        </div>
                    </div>
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @if ($blog->image)
                        <img src="{{ url('/imgs/blogs' . $blog->image) }}" alt="blog image" width="50px" height="50px">
                    @endif

                    <div class="form-group mb-3">
                        <label for="description">وصف</label>
                        <textarea name="description" type="text" class="form-control" id="description" aria-describedby="titleHelp">{{ $blog->description }}</textarea>
                    </div>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-warning py-2 px-4">تحديث</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
