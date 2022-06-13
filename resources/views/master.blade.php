<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/app.css">
    <style>
    *{
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    }
    body{
        min-height: 100vh;
    }
    :root{
        --primary: #152c72;
    }
    h1{
        color: var(--primary);
        margin-bottom: 30px;
    }
    h2{
        color: #1d40a7;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    .container{
        width: calc(100vw - 200px);
        margin: auto;
    }
    .navbar{
        padding: 20px 0;
        background-color: var(--primary);
        color: white;
    }
    .navbar nav{
        display: flex;
        justify-content: space-between;
    }
    .navbar h6{
        display: flex;
        align-items: center;
        font-size: 25px;
    }
    .navbar .menu{
        display: flex;
        justify-content: space-between;
        list-style-type: none;
        width: 500px;
    }
    .navbar .menu a{
        display: block;
        border-radius: 50px;
        padding: 10px;
        font-size: 15px;
        color: white;
    }
    .navbar .menu a.active{
        color: var(--primary);
        background-color: white;
    }
    footer{
        background-color: var(--primary);
        margin-top: 50px;
        padding: 20px 0 40px;
        color: white;
    }
    footer .card{
        background-color: var(--primary);
    }
    footer h6{
        font-size: 12px;
    }
    footer p{
        font-size: 12px;
    }
    footer .card img{
        padding-bottom: 10px;
    }
    footer .row{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 80px;
    }
    footer .card .content-card-footer{
        padding-top: 20px;
    }
    footer .card .content-card-footer p{
        margin-bottom: 10px;
    }
    .content{
        margin: 40px 0;
    }
    .show-data-mahasiswa{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
        gap: 40px;
    }
    .show-data-mahasiswa .card{
        display: flex;
        justify-content: space-between;
        padding: 10px;
        border: 1px solid #dedede;
        border-radius: 15px;
    }
    .show-data-mahasiswa .left > *{
        margin: 10px 0;
    }
    .show-data-mahasiswa .left h3{
        margin: 0;
    }
    .show-data-mahasiswa .right{
        padding-right: 30px;
    }
    .btn-group{
        display: flex;
        justify-content: end;
        margin-bottom: 15px;
    }
    .btn-delete{
        width: 40px;
        height: 40px;
        background-color: transparent;
        margin-right: 20px;
        color: red;
        border: 1px solid #dedede;
        border-radius: 50px;
        transition: all .8s;
    }
    .btn-delete:hover{
        cursor: pointer;
        box-shadow: 0 0 10px 5px #dedede;
    }
    .btn-edit:hover{
        cursor: pointer;
        box-shadow: 0 0 10px 5px #dedede;
    }
    .btn-edit{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        background-color: transparent;
        border: 1px solid var(--primary);
        border-radius: 50px;
        color: white;
        background-color: var(--primary);
        transition: all .8s;
    }
    .status{
        display: block;
        width:max-content;
        padding: 10px;
        background-color: var(--primary);
        font-size: 16px;
        color: white;
        font-weight: 600;
    }
    .form-input{
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
        position: relative;
        padding-bottom: 100px;
    }
    .form-input .row{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(450px, 
        1fr));
        gap: 20px;
    }
    .form-input .row label{
        font-weight: 700;
    }
    .form-input .row input, .form-input .row select{
        width: 100%;
        margin-top: 5px;
        padding: 10px;
        border: 1px solid #dedede;
    }
    .btn-submit-data{
        background-color:var(--primary);
        position: absolute;
        right: 0;
        bottom: 0;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        width: max-content;
        border: 1px solid var(--primary);
    }
    .danger{
        color: red;
        font-size: 11px;
    }
    </style>
</head>
<body>
    <main>
    <section class="navbar">
        <div class="container">
            <nav>
                <h6>Simple Siakad</h6>
                <ul class="menu">
                    <li>
                        <a href="/index" {{ $title == "Home" ? 'class=active' : "" }}>Data Mahasiswa</a>
                    </li>
                    <li>
                        <a href="/index/inputdata" {{ $title == "Input" ? 'class=active' : "" }}>Input Data</a>
                    </li>
                    <li>
                        <a href="/index/aboutme" {{ $title == "About" ? 'class=active' : "" }}>About Me</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    @yield('konten')

    <footer>
        <div class="container">
            <div class="row">
                <div class="card">
                    <img src="/img/logo_utm.png" alt="logo utm" width="80">
                    <h6>Jurusan Teknik Informatika</h6>
                    <h6>Universitas Trunojoyo Madura</h6>
                    <p>Jl. Raya Telang, Kecamatan Kamal, Bangkalan 69162</p>
                    <p>Kampus Universitas Trunojoyo Madura</p>
                </div>
                <div class="card">
                    <h6>Contact</h6>
                    <div class="content-card-footer">
                        <p>Telp : 031-3011146</p>
                        <p>Fax : 031-3011506</p>
                        <p>Email : lf.tf@trunojoyo.ac.id</p>
                    </div>
                </div>
                <div class="card">
                    <h6>Layanan</h6>
                    <div class="content-card-footer">
                        <p>Pembayaran UKT</p>
                        <p>Pendaftaran KP</p>
                        <p>Pendaftaran Wisuda</p>
                        <p>Administrasi</p>
                    </div>
                </div>
                <div class="card">
                    <h6>Resource</h6>
                    <div class="content-card-footer">
                        <p>e-Journal</p>
                        <p>Portal Tugas Akhir</p>
                        <p>Website Resmi Kampus</p>
                        <p>Download Administrasi</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>