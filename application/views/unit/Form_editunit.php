<form id="formubahdataunit" method="post">
        <div class="form-group row">

            <label ondragstart="return false;" for="inputorg_unit" class="col-sm-4 col-form-label">Nama Org.Unit</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" disabled id="editunit" value="<?=$dataperunit['org_unit']?>" placeholder="Nama Org.Unit" required>
            <input type="hidden" name="id" id="idunit" value="<?=$dataperunit['id']?>">

            </div>
        </div>
         <div class="form-group row">
            <label ondragstart="return false;" for="inputunitvp" class="col-sm-4 col-form-label">Unit VP</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="editunitvp" value="<?=$dataperunit['unitvp']?>" placeholder="Unit VP" required>
            </div>
        </div>

        <div class="form-group row">
            <label ondragstart="return false;" for="inputlevel" class="col-sm-4 col-form-label">Direktorat</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="editdirektorat" value="<?=$dataperunit['direktorat']?>" placeholder="Direktorat" required>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()">Tutup</button>
        <button type="submit" class="btn btn-primary">Ubah Data Unit</button>
      </div>
</form>
