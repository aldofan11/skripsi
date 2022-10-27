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
        Aparatur
      </div>
      <button class="btn btn-success" id="tambah">Tambah</button>
    </div>
  </div>
  <div class="card-body">
    <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns" id="table_data">
      @include('dashboard.aparat.pagination')
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
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="">
          </div>
          <div class="mb-3">
            <label for="position" class="form-label">Jabatan</label>
            <select class="form-select" aria-label="Default select example" id="position" name="position" id="position">
              <option selected disabled>-- Pilih Posisi --</option>
              <option class="position" value="kepala_desa" id="kepala_desa">Kepala Desa</option>
              <option class="position" value="wakil_kepala_desa" id="wakil_kepala_desa">Wakil Kepala Desa</option>
              <option class="position" value="sekretaris" id="sekretaris">Sekretaris</option>
              <option class="position" value="keuangan" id="keuangan">Keuangan</option>
              <option class="position" value="kasi" id="kasi">Kasi Pemerintahan</option>

            </select>
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
  const resetPosition = () => {
    $(".position").each((v,e)=>{
      e.toggleAttribute('disabled', false);
    })
  }
  $("#tambah").click(function() {
    $("#exampleModalLabel").text('Tambah Aparatur');
    $("#submit").text('Tambah');
    $("#exampleModal").modal('show');
    $("#preview").addClass('d-none');
    $("#warn").addClass('d-none');
    formType = "CREATE";
    $("#form")[0].reset();
    resetPosition();
    axios.get("{{route('getjabatan')}}")
    .then(({data})=>{
      data.forEach((v)=>$(`#${v}`).attr('disabled', true));
    })
  })

  const editData = (id) => {
    $("#form")[0].reset();
    $("#inputID").val(id)
    resetPosition();
    formType = "UPDATE";
    $("#exampleModalLabel").text('Update Aparatur');
    $("#submit").text('Update');
    $("#warn").removeClass('d-none');
    axios.get(URL_NOW + `/${id}`)
      .then(({
        data
      }) => {
        const {
          photo,
          name,
          position
        } = data.data;
        const jabatan = data.jabatan;
        jabatan.forEach((v)=>$(`#${v}`).attr('disabled', true));
        $("#preview").removeClass('d-none');
        $("#preview").html(`<img src="${BASE_URL}@getPath(aparats)${photo}" alt="gambar ${name}" class="img-fluid" width="300">`)
        $("input[name='name']").val(name);
        $("#position").val(position)
        $('#exampleModal').modal('show')
      })
  }

  $("#form").on('submit', async (e) => {
    e.preventDefault();
    let FormDataVar = new FormData($("#form")[0]);
    // return;
    $("#exampleModal").LoadingOverlay('hide');
    if (formType === "CREATE") {
      await new Promise((resolve, reject) => {
        axios.post(`{{ route('aparatur.store') }}`, FormDataVar, {
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
              text: 'Aparatur Berhasil Ditambahkan'
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
              text: 'Aparatur Berhasil Diupdate'
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
                  text: 'Aparatur berhasil dihapus'
                })
                refresh_table(URL_NOW)
              })
              .catch(err => {
                let data = err.response.data
                console.error(err);
                swal({
                  icon: 'error',
                  title: 'Gagal',
                  text: 'Aparatur gagal berhasil dihapus'
                })
              })
          })
        }
      })
  };
</script>
@endsection