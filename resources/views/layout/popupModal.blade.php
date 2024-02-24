<!-- Letakkan ini di dalam file Blade atau HTML Anda -->

<!-- Tambahkan modal -->
<div class="modal" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="successModalLabel">Success</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data berhasil disimpan!
      </div>
    </div>
  </div>
</div>

<!-- Tambahkan script untuk menampilkan modal saat sukses -->
<script>
    // Tampilkan modal saat menerima respons sukses dari server
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('form').submit(function(e){
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(response){
                    $('#successModal').modal('show');
                },
                error: function(error){
                    console.log(error);
                }
            });
        });
    });
</script>
