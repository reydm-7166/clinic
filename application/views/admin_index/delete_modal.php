
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header btn-info">
            <h4 class="modal-title" id="exampleModalLabel">Confirm Changes</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h5 class="mb-0">Are you sure you want to delete?</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form action="delete/<?= $data['id']; ?>" method="post">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                <input type="submit" class="btn btn-danger" name="Delete" value="Delete">
            </form>
            
        </div>
        </div>
    </div>
</div>
