<form id="formDeleteHki" method="POST" action="{{ route('p_hki.delete_ajax', ['id' => $hki->id_hki]) }}">
    @csrf
    @method('DELETE')
    <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Konfirmasi Hapus HKI</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus HKI dengan nama <strong>{{ $hki->nama_hki }}</strong> dan nomor <strong>{{ $hki->nomor_hki }}</strong>?</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Hapus</button>
    </div>
</form>