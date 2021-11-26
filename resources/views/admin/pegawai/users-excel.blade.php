<table>
    <thead>
        <tr>
            <th>#</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Jam Masuk</th>
            <th>Jam Keluar</th>
            <th>Total Jam</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($presents as $present)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $present->user->nrp }}</td>
                <td>{{ $present->user->nama }}</td>
                <td>{{ $present->keterangan }}</td>
                @if ($present->jam_masuk)
                    <td>{{ date('H:i:s', strtotime($present->jam_masuk)) }}</td>
                @else
                    <td>-</td>
                @endif
                @if($present->jam_keluar)
                    <td>{{ date('H:i:s', strtotime($present->jam_keluar)) }}</td>
                    <td>
                        @if (strtotime($present->jam_keluar) <= strtotime($present->jam_masuk))
                            {{ 21 - (\Carbon\Carbon::parse($present->jam_masuk)->diffInHours(\Carbon\Carbon::parse($present->jam_keluar))) }}
                        @else 
                            @if (strtotime($present->jam_keluar) >= strtotime('19:00:00'))
                                {{ (\Carbon\Carbon::parse($present->jam_masuk)->diffInHours(\Carbon\Carbon::parse($present->jam_keluar))) - 3 }}
                            @else
                                {{ (\Carbon\Carbon::parse($present->jam_masuk)->diffInHours(\Carbon\Carbon::parse($present->jam_keluar))) - 1 }}
                            @endif
                        @endif
                    </td>
                @else
                    <td>-</td>
                    <td>-</td>
                @endif
            </tr>
        @endforeach 
    </tbody>
</table>