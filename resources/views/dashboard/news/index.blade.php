@extends('dashboard.layout')
@section('content')
<div class="card mb-4">
  <div class="card-header">
    <div class="d-flex justify-content-between">
      <div>
        <svg class="svg-inline--fa fa-table me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
          <path fill="currentColor" d="M448 32C483.3 32 512 60.65 512 96V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H448zM224 256V160H64V256H224zM64 320V416H224V320H64zM288 416H448V320H288V416zM448 256V160H288V256H448z">
          </path>
        </svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
        Berita
      </div>
      <button class="btn btn-success" id="tambah">Tambah</button>
    </div>
  </div>
  <div class="card-body">
    <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns" id="table_data">
      @include('dashboard.news.pagination')
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" id="form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" id="inputID">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="description" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="badge bg-warning text-dark" id="warn">kosongkan foto jika tidak ingin mengubah</div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Foto</label>
            <input type="file" class="form-control" accept="image/png, image/jpeg, image/jpg" name="photo" id="exampleFormControlInput1">
          </div>
          <div class="mb-2" id="preview" class="d-none"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="submit">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('js')
<script>
  let formType = "CREATE";
  $("#tambah").click(function() {
    $("#exampleModalLabel").text('Tambah Berita');
    $("#submit").text('Tambah');
    $("#exampleModal").modal('show');
    $("#preview").addClass('d-none');
    $("#warn").addClass('d-none');
    formType = "CREATE";
    $("#form")[0].reset();
  })

  const editData = (id) => {
    $("#form")[0].reset();
    $("#inputID").val(id)
    formType = "UPDATE";
    $("#exampleModalLabel").text('Update Berita');
    $("#submit").text('Update');
    $("#warn").removeClass('d-none');
    axios.get(URL_NOW + `/${id}`)
      .then(({
        data
      }) => {
        const {
          photo,
          title,
          description
        } = data;
        $("#preview").removeClass('d-none');
        $("#preview").html(`<img src="${BASE_URL}@getPath(news)${photo}" alt="gambar ${title}" class="img-fluid" width="300">`)
        $("input[name='title']").val(title);
        $("input[name='description']").val(description);
        $('#exampleModal').modal('show')
      })
  }

  $("#form").on('submit', async (e) => {
    e.preventDefault();
    let FormDataVar = new FormData($("#form")[0]);
    console.log($("#form").serialize())
    // return;
    $("#exampleModal").LoadingOverlay('hide');
    console.log('submitting...');
    if (formType === "CREATE") {
      await new Promise((resolve, reject) => {
        axios.post(`{{ route('berita.store') }}`, FormDataVar, {
            headers: {
              'contentType': false,
              'processData': false
            }
          })
          .then(({
            data
          }) => {
            $("#exampleModal").LoadingOverlay('hide');
            $('#exampleModal').modal('hide')
            refresh_table(URL_NOW)
            swal({
              icon: 'success',
              title: 'Berhasil',
              text: 'Berita Berhasil Ditambahkan'
            });
          })
          .catch(err => {
            console.log(err.response);
            $("#exampleModal").LoadingOverlay('hide');
            throwErr(err.response)
          })
      })
    } else {
      let id = $("#inputID").val()
      FormDataVar.append('_method', 'PUT')
      await new Promise((resolve, reject) => {
        axios.post(`${URL_NOW}/${id}`, FormDataVar, {
            headers: {
              'contentType': false,
              'processData': false
            }
          })
          .then(({
            data
          }) => {
            $("#exampleModal").LoadingOverlay('hide');
            $('#exampleModal').modal('hide')
            swal({
              icon: 'success',
              title: 'Berhasil',
              text: 'Berita Berhasil Diupdate'
            });
            refresh_table(URL_NOW)
            // data.message.body
          })
          .catch(err => {
            $("#exampleModal").LoadingOverlay('hide');
            console.log(err)
            throwErr(err)
          })
      })
    }
    $("#exampleModal").LoadingOverlay('hide');
  })

  const deleteData = id => {
    swal({
        title: 'Yakin?',
        text: "Ingin menghapus data ini!",
        buttons: true,
        dangerMode: true,
      })
      .then((result) => {
        if (result) {
          new Promise((resolve, reject) => {
            axios.delete(`${URL_NOW}/${id}`)
              .then(({
                data
              }) => {
                swal({
                  icon: 'success',
                  title: 'Berhasil',
                  text: 'Berita berhasil dihapus'
                })
                refresh_table(URL_NOW)
              })
              .catch(err => {
                let data = err.response.data
                console.error(err);
                swal({
                  icon: 'error',
                  title: 'Gagal',
                  text: 'Berita gagal berhasil dihapus'
                })
              })
          })
        }
      })
  };
</script>
@endsection