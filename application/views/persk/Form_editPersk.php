<form id="formubahdatapersk" method="post">
        <div class="form-group row">

            <label ondragstart="return false;" for="inputpersk" class="col-sm-4 col-form-label">Persk</label>
            <div class="col-sm-6">
            <input type="text" disabled class="form-control" id="editpersk" value="<?=$datapersk['persk']?>" placeholder="Persk" required>
            <input type="hidden" name="id" id="idpersk" value="<?=$datapersk['id']?>">
            </div>
        </div>
         <div class="form-group row">
            <label ondragstart="return false;" for="inputcategory" class="col-sm-4 col-form-label">Category</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="editcategory" value="<?=$datapersk['category']?>" placeholder="Category" required>
            </div>
        </div>
        <div class="form-group row">
           <label ondragstart="return false;" for="inputlevel" class="col-sm-4 col-form-label">Level</label>
           <div class="col-sm-6">
           <input type="text" class="form-control" id="editlevel" value="<?=$datapersk['level']?>" placeholder="level" required>
           </div>
       </div>
       <small><a href="<?php echo base_url('Help') ?>">Need More Information?</a></small>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()">Tutup</button>
        <button type="submit" class="btn btn-primary">Ubah Data PERSK</button>
      </div>
</form>
