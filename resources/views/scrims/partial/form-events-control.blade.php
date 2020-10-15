{{-- <div class="form-group">
    <label for="logo_squad">Logo Squad</label>
    <input type="file" name="logo_squad" id="logo_squad"
        class="form-control @error('logo_squad') is-invalid @enderror">

    @error('logo_squad')
    <div class="mt-2 text-danger">
        {{ $message }}
    </div>
    @enderror
</div> --}}

<div class="form-group getfile">
    <div class="crt-cover" onclick="selectImages()">
        <div class="crt-thumb">
            <i class="mdi mdi-camera-plus-outline box-text"></i>
            <h6 class="box-text">Masukkan Logo Squad</h6>
        </div>
        <input type="file" name="logo_squad" id="img-cover" hidden>
    </div>
</div>


<div class="form-group">
    <label for="nama_squad">Nama Squad</label>
    <input type="text" name="nama_squad" id="nama_squad"
        class="form-control @error('nama_squad') is-invalid @enderror">

    @error('nama_squad')
    <div class="mt-2 text-danger">
        {{ $message }}
    </div>
    @enderror
</div>

<input type="hidden" name="id_event" value="{{$id_event}}">

<button type="submit" class="btn btn-primary">{{ $submit ?? 'Update' }}</button>


