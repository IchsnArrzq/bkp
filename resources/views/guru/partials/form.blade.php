<div class="row">
    <div class="col-md-5 pr-1">
        <div class="form-group">
            <label>Company (disabled)</label>
            <input type="text" class="form-control" value="{{ config('app.name','Laravel') }}" disabled="" placeholder="Company" value="Creative Code Inc.">
        </div>
    </div>
    <div class="col-md-7 pl-1">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" value="{{ Auth::user()->email ?? '' }}" placeholder="Email">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 pr-1">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $guru->nama ?? old('nis') }}">
        </div>
    </div>
    <div class="col-md-6 pl-1">
        <div class="form-group">
            <label>Mata Pelajaran</label>
            <input type="text" class="form-control" name="mata_pelajaran" placeholder="Mata Pelajaran" value="{{ $guru->mata_pelajaran ?? old('nama')}}">
        </div>
    </div>
</div>
<button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
<div class="clearfix"></div>
