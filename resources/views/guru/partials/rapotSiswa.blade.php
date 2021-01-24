<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="id">Email</label>
            <input type="text" id="id" name="id" class="form-control" readonly value="{{ auth()->user()->email }}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="user_id">User Id</label>
            <select id="user_id" name="user_id" class="form-control">
                <option value="0">--Pilih--</option>
                @foreach($siswa as $data)
                    <option value="{{ $data->user_id }}">{{ $data->nama }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Guru id</label>
            <input type="text" id="guru_id" name="guru_id" readonly class="form-control" value="{{ $guru_id }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nilai">Nilai</label>
            <input type="number" name="nilai" id="nilai" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="kkm">Kkm</label>
            <input type="number" name="kkm" id="kkm" class="form-control">
        </div>
    </div>
</div>

<button type="submit" class="btn btn-info btn-fill pull-right">Store Nilai</button>
<div class="clearfix"></div>
