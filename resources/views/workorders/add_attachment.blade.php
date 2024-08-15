<div class="modal fade" id="add_attachment" tabindex="-1" aria-labelledby="continue_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary"><i class="fa fa-plus"></i> Add Attachment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               @for ($i = 1; $i <= 7; $i++)
                <div class="row mb-2">
                    <div class="col-md-3">
                        <b class="text-dark">Checklist {{$i}}</b>
                    </div>
                    <div class="col-md-7">
                        <input type="file" name="" class="form-control" id="">
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="btn btn-label-danger w-100">
                            <i class="fa fa-times me-2"></i> Remove
                        </a>
                    </div>
                </div>
               @endfor
                
            </div>
            <div class="modal-footer">
                <a href="#" data-bs-dismiss="modal" class="btn btn-label-secondary">Cancel</a>
                <button type="submit" class="btn btn-label-primary btn-submit">
                    <i class="bx bx-save me-2"></i> Save
                </button>
            </div>
        </div>
    </div>
</div>
