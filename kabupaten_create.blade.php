@extends('template')
@section('content')

<section class="main-section">
    <div class="content">
    <h1>Tambah Kabupaten</h1>
    
    <form action="{{ route('kabupaten.store') }}" method="post">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="nama">ID:</label>
            <input type="text" class="form-control" id="user" name="id">
        </div>
        <div class="form-group">
            <label for="nama">Code:</label>
            <input type="text" class="form-control" id="code" name="code">
        </div>
        <div class="form-group">
            <label for="nama">Description:</label>
            <input type="text" class="form-control" id="desc" name="description">
        </div>
            <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            </div>
        </form>
    </div>
</section>
@endsection