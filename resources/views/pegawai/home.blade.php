<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pegawai Dashboard | Home</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                 <h4>Pegawai Dashboard</h4><hr>
                 <table class="table table-striped table-inverse table-responsive">
                     <thead class="thead-inverse">
                         <tr>
                             <th>Nama</th>
                             <th>Email</th>
                             <th>Jabatan</th>
                             <th>Action</th>
                         </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td scope="row">{{ Auth::guard('pegawai')->user()->nama }}</td>
                                 <td>{{ Auth::guard('pegawai')->user()->email }}</td>
                                 <td>{{ Auth::guard('pegawai')->user()->jabatan }}</td>
                                 <td>
                                     <a href="{{ route('pegawai.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                     <form action="{{ route('pegawai.logout') }}" id="logout-form" method="post">@csrf</form>
                                 </td>
                             </tr>
                         </tbody>
                 </table>
            </div>
        </div>
    </div>
    
</body>
</html>