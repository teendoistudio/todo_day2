@extends('layout.master')

@section('content')

    <hr>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                เพิ่มรายการ
            </h4>
        </div>
        <div class="panel-body">
            <form action="/store" role="form" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputName">กรอกชื่อรายการ :: </label>
                    <input type="text" name="name" placeholder="ชื่อรายการ" class="form-control">
                </div>
                <div class="form-group">
                    <label for="selectCategory">เลือกหมวดหมู่ :: </label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> บันทึก</button>
                <a href="/" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
            </form>
        </div>
    </div>


@endsection