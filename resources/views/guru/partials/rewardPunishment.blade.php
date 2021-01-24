<div class="row">
    <div class="col-md-5 pr-1">
        <div class="form-group">
            <label>Company (disabled)</label>
            <input type="text" class="form-control" value="{{ config('app.name','Laravel') }}" disabled="" placeholder="Company" value="Creative Code Inc.">
        </div>
    </div>
    <div class="col-md-7 pl-1">
        <div class="form-group">
            <label for="exampleInputEmail1">ID</label>
            <input type="number" name="guru_id" readonly class="form-control" value="{{ $guru }}">
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-8 pr-1">
        <div class="form-group">
            <label>nama</label>
            <select name="siswa" class="form-control" id="siswa">
                @foreach($siswa as $data)
                <option value="{{ $data->user_id }}">{{ $data->nama }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 pr-1">
        <div class="form-group">
            <label>Reward & Punishment</label>
            <select class="form-control" name="tipe">
                <option value="0">--Pilih--</option>
                @foreach($tipe as $data)
                <option value="{{ $data->id }}">{{ $data->tipe }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-4 pl-1">
        <div class="form-group">
            <label>Kode</label>
            <select name="kode" class="form-control" id="kode">
                <option value="0"></option>
            </select>
        </div>
    </div>
    <div class="col-md-4 pl-1">
        <div class="form-group">
            <label>Skor</label>
            <select name="skor" id="skor" class="form-control">
                <option value="0"></option>
            </select>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
<div class="clearfix"></div>
<script>
    $(document).ready(function() {
        $('select[name="tipe"]').on('change click', function() {
            var id = $(this).val();
            $.ajax({
                url: '/menu/guru/ajax/kodeGet/' + id,
                method: 'GET',
                dataType: 'JSON',
                data: {
                    id: id
                },
                success: function(data) {
                    var html = '';
                    $('select[name="kode"]').empty()
                    $.each(data, function(key, value) {
                        html += `<option value=${value.id}>${value.kode}</option>`;
                        $('select[name="kode"]').append(html)
                    });

                }
            })
        })
    })
    $(document).ready(function(){
        $('select[name="kode"]').on('change click', function() {
            var id = $(this).val();
            $.ajax({
                url: '/menu/guru/ajax/skorGet/' + id,
                method: 'GET',
                dataType: 'JSON',
                data: {
                    id: id
                },
                success: function(data1) {
                    var html1 = '';
                    $('select[name="skor"]').empty()
                    console.log(data1);
                    $.each(data1, function(key, value) {
                        html1 += `<option value=${value.id}>${value.skor}</option>`;
                        $('select[name="skor"]').append(html1)
                    });
                }
            })

        })
    })
</script>
</script>
