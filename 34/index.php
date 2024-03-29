<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ajax - Jquery Bootstrap PHP</title>

</head>
<body>

            <div class="container">
    <div class="row mt-4">
    <h1>Belajar Ajax Jquery Bootstrap PHP</h1>
        <div class="col">
         <div class= "row">
            <h2>Input Data Pelanggan</h2>
         </div>
         <div class = "row">
            <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pelanggan</label>
                        <input type="email" class="form-control" id="pelanggan" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Harus di isi.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat">
                        <div id="emailHelp" class="form-text">Harus di isi.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Telp</label>
                        <input type="text" class="form-control" id="telp">
                        <div id="emailHelp" class="form-text">Harus di isi.</div>
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
        </div>
        <div class="col">
            <div class="row">
                <h2>Data Pelanggan</h2>
            </div>
            <div class="row">
                                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    
</body>
</html>