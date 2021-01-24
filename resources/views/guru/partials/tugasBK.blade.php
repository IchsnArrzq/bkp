<div class="row">
    <div class="col-md-5 pr-1">
        <div class="form-group">
            <label>Company (disabled)</label>
            <input type="text" class="form-control" value="{{ config('app.name','Laravel') }}" disabled="" placeholder="Company" value="Creative Code Inc.">
        </div>
    </div>
    <div class="col-md-7 pl-1">
        <div class="form-group">
            <label for="exampleInputEmail1">Guru_id</label>
            <input type="number" class="form-control" value="{{ $guru_id }}" name="guru_id">
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-5 pl-1">
        <div class="form-group">
            <label for="kkm">KKM</label>
            <input type="number" id="kkm" class="form-control" name="kkm" value="0">
        </div>
    </div>
    <div class="col-md-5 pl-1">
        <div class="form-group">
            <label for="date">Deadline</label>
            <input type="date" class="form-control" id="date" name="deadline" name="kkm">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 pr-1">
        <div class="form-group">
            <label for="tugas">Tugas</label>
            <textarea name="tugas" class="form-control" id="tugas" cols="30" rows="10"></textarea>
        </div>
    </div>
    <div class="col-md-6 pr-1">
        <div class="form-group">
            <label for="file">File</label>
            <input type="file" class="form-control" id="file" name="file">
        </div>
    </div>
</div>
<button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
<div class="clearfix"></div>
