<?php require_once 'header.php'; ?>

        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>Forms</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Item Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Item Name" required>
									</div>

								</div>


								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Category</label>
									<div class="col-sm-8">
										<div class="checkbox-inline1"><label><input type="checkbox"> Unchecked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" checked=""> Checked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>


								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Item Description</label>
									<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="20" rows="10" class="form-control1"></textarea></div>
								</div>


								<div class="form-group">
									<label for="smallinput" class="col-sm-2 control-label label-input-sm">Price</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-sm" id="smallinput" placeholder="125K" required>
									</div>
								</div>

                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                    <input type="file" accept="image/*">
                </div>
                <div class="panel-footer">
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <button class="btn-success btn">Submit</button>
                  <button class="btn-default btn">Cancel</button>
                  <button class="btn-inverse btn">Reset</button>
                </div>
              </div>
							</form>
						</div>
					</div>



	 </div>

  </div>
  </div>
  <?php require_once 'footer.php'; ?>
