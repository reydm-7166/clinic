<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-white bg-danger">
            <h4 class="modal-title" id="exampleModalLabel">Confirm Deletion</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h5 class="mb-0">Are you sure you want to delete this user?</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            <?php $_SESSION['id'] = $_SESSION['id'] ?> <a href="deleteusers/<?= $_SESSION['id'] ?>"><input type="submit" class="btn btn-danger" name="Save" value="Save"></a> <?= $_SESSION['id'] ?>
        </div>
        </div>
    </div>
</div>



