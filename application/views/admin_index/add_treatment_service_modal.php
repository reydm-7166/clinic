<style>
    label {
        margin-top: 1rem;
        font-size: 20px;
    }
    #exampleModalLabel {
        font-size: 27px;
    }
    #add {
        margin-left: 9.5rem;
    }

</style>
<!-- Button trigger modal -->
<button id="add" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add New</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content pl-3">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Offer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <?php echo form_open_multipart('add');?>
                <label>Name</label>
                <input class="form-control" type="text" placeholder="Treament/Service Name">

                <label>Cost</label>
                <input class="form-control" type="text" placeholder="Treament/Service Cost">

                <label>Select Category</label>
                <select class="form-control" name="category">
                    <option value="1">Treatments</option>
                    <option value="2">Services</option>
                </select>

                <label class="fs-1">Example file input</label>
                <input type="file" class="form-control-file" name="userfile" id="exampleFormControlFile1">
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Add to list</button>
            <?php echo form_close(); ?>
        </div>
    </div>
  </div>
</div>