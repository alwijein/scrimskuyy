const crt = document.getElementById('img-cover');
const tmb = document.getElementsByClassName('crt-thumb');

crt.addEventListener('change', function (e) {
    let f = e.target.files[0];
    let url = URL.createObjectURL(f);
    if (!validateImage(f)) return;
    tmb[0].innerHTML = `<img src='${url}' width='100%'>`;
});

function selectImages() {
    crt.click();
}

function validateImage(f) {
    let allowedExten = /^(jpg|jpeg|png|svg)+$/;
    let fileExten = f.name.split(".").pop().toLowerCase();
    // console.log(f.type.split("/").shift());
    if (f.type.split("/").shift() != "image") {
        alert("Gambar Tidak Valid, Kami Hanya Menerima File Gambar Saja");
        return false;
    } else if (allowedExten.test(fileExten) == false) {
        alert("Extensi Tidak Valid, Kami Hanya Menerima JPG|JPEG|PNG|SVG");
        return false;
    } else if (f.size >= 348000) {
        alert("Gambar Terlalu Besar, Ukuran Maximal 3Mb");
        return false;
    }
    return true;
}
