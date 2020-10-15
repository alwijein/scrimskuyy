<div class="form-group getfile">
    <div class="crt-cover" onclick="selectImages()">
        <div class="crt-thumb">
            <i class="mdi mdi-camera-plus-outline box-text"></i>
            <h6 class="box-text">Masukkan Logo Scrims</h6>
        </div>
        <input type="file" name="thumbnail" id="img-cover" hidden>
    </div>
</div>


<div class="form-group">
    <label for="nama_event">Nama events</label>
    <input type="text" name="nama_event" value="{{ old('nama_event') ?? $events->nama_event }}" id="nama_event"
        class="form-control @error('nama_event') is-invalid @enderror">

    @error('nama_event')
    <div class="mt-2 text-danger">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="total_pertandingan">Total Pertandingan</label>
    <input type="text" name="total_pertandingan" value="{{ old('total_pertandingan') ?? $events->nama_event }}" id="total_pertandingan"
        class="form-control @error('total_pertandingan') is-invalid @enderror">

    @error('total_pertandingan')
    <div class="mt-2 text-danger">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="jadwal">Jadwal Scrims</label>
    <input type="date" name="jadwal" value="{{ old('jadwal') ?? $events->nama_event }}" id="jadwal"
        class="form-control @error('jadwal') is-invalid @enderror">

    @error('jadwal')
    <div class="mt-2 text-danger">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="grup_wa">Grup Wa</label>
    <input type="text" name="grup_wa" value="{{ old('grup_wa') ?? $events->grup_wa }}" id="grup_wa"
        class="form-control @error('grup_wa') is-invalid @enderror">

    @error('grup_wa')
    <div class="mt-2 text-danger">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="peraturan">Peraturan</label>
    <textarea type="text" name="peraturan" value="{{ old('peraturan') ?? $events->peraturan }}"class="form-control @error('peraturan') is-invalid @enderror"></textarea>

    @error('peraturan')
    <div class="mt-2 text-danger">
        {{ $message }}
    </div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $submit ?? 'Update' }}</button>
