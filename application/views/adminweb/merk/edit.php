<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Edit Merk</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								
								<div id="form_sample_2" class="form-horizontal">
								<div id="box" class="alert alert-success hide">
										Data Berhasil Diupdate
									</div>
									<div id="box_error" class="alert alert-error hide">
										Data Sudah Ada!
									</div>
									<input type="hidden" name="id_merk" id="id_merk" value="<?php echo $id_merk;?>">
									

									<div class="control-group">
										<label class="control-label">Merk</label>
										<div class="controls">
											<input type="text" name="nama_merk" id="nama_merk" class="span6 m-wrap" value="<?php echo $nama_merk;?>"/>
										</div>
									</div>
									
									<div class="form-actions">
										<button type="submit" id="update" class="btn green"><i class="icon-ok"></i> Update</button>
										<a href="<?php echo base_url();?>adminweb/merk" class="btn white"><i class="icon-long-arrow-left"></i> Kembali</a>
										
									</div>
								</div>
								<!-- END FORM-->
							</div>
						</div>
						<!-- END VALIDATION STATES-->
					</div>
				</div>


<script type="text/javascript">
	
	$(document).ready(function(){

		$("#update").click(function(){
			

			var id_merk = $("#id_merk").val();
			var nama_merk = $("#nama_merk").val();
	
	            	$.ajax({
					type:"POST",
					url:"<?php echo base_url();?>adminweb/merk_update",
					data:"id_merk="+id_merk+"&nama_merk="+nama_merk,
					success:function(data) {

						if (data=="1") {
							$("#box_error").show();
						
						}
						else {
							$("#box").show();
						}						
						

					}
				});
            

			
		});

	});
</script>