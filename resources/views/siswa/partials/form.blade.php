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
            <label>NIS</label>
            <input type="text" class="form-control" name="nis" placeholder="NIS" value="{{ $siswa->nis ?? old('nis') }}">
        </div>
    </div>
    <div class="col-md-6 pl-1">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $siswa->nama ?? old('nama')}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $siswa->alamat ?? old('alamat') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 pr-1">
        <div class="form-group">
            <label>Rombel</label>
            <!-- <input type="text" class="form-control" name="rombel" placeholder="Rombel" value="{{ $siswa->rombel ?? old('rombel') }}"> -->
            <select name="rombel" class="form-control">
                <option value="{{ $siswa->rombel ?? '' }}">{{ $siswa->rombel ?? '--Pilih--' }}</option>
                <option value="RPL XII-1">RPL XII-1</option>
                <option value="TKJ XII-1">TKJ XII-1</option>
                <option value="MMD XXI-1">MMD XII-1</option>
            </select>
        </div>
    </div>
    <div class="col-md-4 px-1">
        <div class="form-group">
            <label>Rayon</label>
            <select name="rayon" class="form-control">
                <option value="{{ $siswa->rayon ?? '' }}">{{ $siswa->rayon ?? '--Pilih--' }}</option>
                <option value="Wikrama 4">Wikrama 4</option>
                <option value="Tajur 1">Tajur 1</option>
                <option value="Cicurug 1">Cicurug 1</option>
            </select>
        </div>
    </div>
    <div class="col-md-4 pl-1">
        <div class="form-group">
            <label>No Telepon</label>
            <input type="text" class="form-control" name="telepon" placeholder="No Telepon" value="{{ $siswa->telepon ?? old('telepon') }}">
        </div>
    </div>
</div>
<button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
<div class="clearfix"></div>
