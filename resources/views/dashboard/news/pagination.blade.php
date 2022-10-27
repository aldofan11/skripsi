<div class="dataTable-container">
    <table id="datatablesSimple" class="dataTable-table">
      <thead>
        <tr>
          <th style="width: 4.7531%;">No</th>
          <th style="width: 29.321%;">Foto</th>
          <th style="width: 9.7531%;">Judul</th>
          <th style="width: 29.7531%;">Deskripsi</th>
          <th style="width: 8.95062%;">Aksi</th>
        </tr>
      </thead>

      <tbody>
        @forelse ($galeries as $galery)
        <tr>
          <td>{{ ($galeries->currentpage()-1) * $galeries->perpage() + $loop->index + 1 }}</td>
          <td><img style="width: 200px; object-fit: cover; " src="{{ asset('@getPath(news)'.$galery->photo) }}" alt=""></td>
          <td>{{$galery->title}}</td>
          <td>{{$galery->description}}</td>
          <td>
            <button class="btn btn-sm btn-danger" onclick="deleteData('{{ $galery->id }}')">Hapus</button>
            <button class="btn btn-sm btn-warning" onclick="editData('{{ $galery->id }}')">Edit</button>
          </td>
        </tr>

        @empty
        <tr>
          <td colspan="5" class="text-center">Belum ada data</td>
        </tr>
        @endforelse
      </tbody>
    </table>
    {{$galeries->links()}}
  </div>