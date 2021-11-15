<!DOCTYPE html>
    <html lang="en"><head>
    <title>Form Peminjaman Buku</title>
        </head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='style.css' type='text/css' />
        <script src="javascript.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            #body {
    padding-top: 1rem;
    padding-bottom: 700px;
  }

  #identitas {
    padding-left: 280px;
  }

  h1 {
    padding-left: 300px;
  }

  #form {
    padding-left: 120px;
  }

  form li {
    list-style: none;
    margin-bottom: 5px;
    text-align: center;
  }

  form ul li label {
    float: left;
    clear: left;
    width: 180px;
    text-align: left;
    margin-left: 200px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 14px;
  }

  form span {
    margin-right: 30px;
  }

  form input {
    width: 200px;
  }

  select {
    width: 200px;
  }

  form ul li input,
  select,
  span {
    float: left;
    margin-bottom: 10px;
  }

  [type="submit"] {
    clear: left;
    margin: 20px 0 0 196px;
    font-size: 16px;
  }

  [type="reset"] {
    clear: center;
    margin: 20px 0 0 30px;
    font-size: 16px;
  }

  p {
    margin-left: 60px;
    font-weight: bold;
  }
        </style>
            <body id="body">
                <p><br /></p>
                <p>Muhammad 'Adlillah Aqsha Hibatul Haqqi</p>
                <p>Aqsha</p>
                <p>5026201001</p>

                <p><br /></p>

                <div class="container">
                <h1>Form Input Peminjaman Buku</h4>
                <form id="form" name="pinjam" action="">
                <ul>
                <div>
                <li><label for="title">Judul Buku</label></li>
                <span>:</span>
                <li><input type="text" name="title" size="30" /></li>
                </div>

                <div>
                <li><label for="number">No Buku</label></li>
                <span id="titik">:</span>
                <li><input type="text" name="number" size="5" /></li>
                </div>

                <div>
                <li><label for="borrow">Jenis Peminjaman</label></li>
                <span id="titik">:</span>
                <li>
                <select name="borrow">
                <option hidden></option>
                <option>Biasa</option>
                <option>Kilat</option>
                <option>Lama</option>
                </select>
                </li>
                </div>

                <div>
                <li><label for="date">Tanggal Peminjaman</label></li>
                <span id="titik">:</span>
                <li><input type="date" name="date" /></li>
                </div>

                <div id="tombol">
                <li><input type="submit" name="Simpan" value="Submit" /></li>
                <li><input type="reset" name="Reset" value="Reset" /></li>
                </div>
                </ul>
                </form>
                </div>
                <script>
                    function validationForm() {
    var judul = document.registration.judul;
    var no = document.registration.no;
    var jenis = document.registration.jenis;
    var datepicker = document.registration.datepicker;

    if (judul_valid(judul)) {
        if (no_valid(no)) {
             if (jenis_valid(jenis)) {
                if (datepicker_valid(datepicker)) {
                    return true;
                }
            }
        }

    }
    return false;
}

function judul_valid(judul) {
    var judul_len = judul.value.length;
    if (judul_len == 0) {
        alert("Judul tidak boleh kosong");
        return false;
    }

    else if (judul_len <= 9) {
        alert("Judul buku minimal 10 karakter");
        return false;
    }

    else {
        judul.focus();
        return true;
    }
}

function no_valid(no) {
    var numbers = /^[0-9]+$/;
    var num_len = no.value.length;
    if (num_len == 0) {
        alert("No Buku tidak boleh kosong");
        return false;
    }

    else if (num_len != 5) {
        alert("No Buku harus angka dan 5 digit");
        return false;
    }

    else if (no.value.match(numbers)) {
        no.focus();
        return true;
    }
}

function jenis_valid(jenis) {
    if (jenis.selectedIndex < 1) {
        alert("Pilih jenis buku");
        jenis.focus();
        return false;
    }
    else {
        return true;
    }
}

function datepicker_valid(datepicker) {
    var datepicker_len = datepicker.value.length;
    if (datepicker_len == 0) {
        alert("Pilih tanggal pengembalian");
        return false;
    }

    else {
        datepicker.focus();
        return true;
    }
}
                </script>
            </body>
    </html>
