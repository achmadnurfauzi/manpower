<form id="formubahdatajobcategory" method="post">
        <div class="form-group row">

            <label ondragstart="return false;" for="inputjobtext" class="col-sm-4 col-form-label">Jobtext</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" disabled id="editjobtext" value="<?=$datajobcategory['jobtext']?>" placeholder="Jobtext" required>
            <input type="hidden" name="id" id="idjob" value="<?=$datajobcategory['id']?>">
            </div>
        </div>
         <div class="form-group row">
            <label ondragstart="return false;" for="inputjob" class="col-sm-4 col-form-label">Category</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="editjobcat" value="<?=$datajobcategory['jobcat']?>" placeholder="Jobcat" required>
            </div>
        </div>
        <div class="form-group row">
            <label ondragstart="return false;" for="inputjobclass" class="col-sm-4 col-form-label">Jobclass</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="editjobclass" value="<?=$datajobcategory['jobclass']?>" placeholder="Jobclass" required>
            </div>
        </div>
        <div class="form-group row">
      			<label ondragstart="return false;" for="inputstatus" class="col-sm-4 col-form-label">Status</label>
      			<div class="col-sm-6">
      		<select name="status" id="editstatus" class="form-control">
                  <option value="" <?php if($datajobcategory['status']=='') {echo 'selected';} ?> ></option>
      						<option value="Struktural" <?php if($datajobcategory['status']=='Struktural') {echo 'selected';} ?> >Struktural</option>
      						<option value="Fungsional" <?php if($datajobcategory['status']=='Fungsional') {echo 'selected';} ?> >Fungsional</option>
      						<option value="Crew" <?php if($datajobcategory['status']=='Crew') {echo 'selected';} ?> >Crew</option>
      						<option value="Work Outside GA" <?php if($datajobcategory['status']=='Work Outside GA') {echo 'selected';} ?> >Work Outside GA</option>
      						<option value="Project" <?php if($datajobcategory['status']=='Project') {echo 'selected';} ?> >Project</option>
      			</select>
      			</div>
      	</div>
        <div class="form-group row">
            <label ondragstart="return false;" for="inputlevel" class="col-sm-4 col-form-label">Level</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="editlevel" value="<?=$datajobcategory['level']?>" placeholder="Level" required>
            </div>
        </div>
        <small><a href="<?php echo base_url('Help') ?>">Need More Information?</a></small>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()">Tutup</button>
        <button type="submit" class="btn btn-primary">Ubah Data Jobcategory</button>
      </div>
</form>
