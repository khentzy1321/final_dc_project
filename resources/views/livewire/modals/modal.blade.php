<div>
    {{-- Modal post Features --}}
<div wire.ignore.self class="modal fade" id="click" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content " id="modall">
        <div class="modal-header text-start">
            <h5 class="modal-title title1 text-secondary" id="exampleModalLabel">Creating talk...</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <select name="title" class="form-select" wire:model.defer="title">
            <option hidden="true">Select Categories</option>
            <option selected disabled>Select Categories</option>
            <option value="">None</option>
            <option value="Business">Business</option>
            <option value="Education">Education</option>
            <option value="Comedy">Comedy</option>
            <option value="Drama">Drama</option>
            <option value="Horror">Horror</option>
            <option value="Politics">Politics</option>
            <option value="Religion">Religion</option>
            <option value="Romance">Romance</option>

        </select>
        <div class="modal-body text-dark    ">
            <textarea name="content" id="text-area" cols="50" rows="5" placeholder="Write something..." wire:model.defer="content"></textarea>
        </div>
        {{-- <div class="modal-footer">
                <button type="button" id="submit-button" class="btn form-control text-white" style="background-color: #719e3a" wire:click="addPost()">Post</button>
        </div> --}}
        <div class="modal-footer">
            <button type="button" id="submit-button" class="btn btn-primary form-control" wire:click="addPost()">Submit</button>
        </div>
      </div>
    </div>
</div>
{{-- delete post --}}
<div wire:ignore.self class="modal fade" id="click-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" id="modall">
        <div class="modal-header">
            <h5 class="modal-title title3 text-dark" id="exampleModalLabel">Are you sure you want to delete this talk?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-footer">
            <button type="button" id="submit-button" class="btn btn-danger form-control" wire:click="deletePost()">Delete Talk</button>
        </div>
        </div>
    </div>
</div>

{{-- Modal edit feature --}}
<div wire:ignore.self class="modal fade" id="click-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" id="modall">
        <div class="modal-header">
            <h5 class="modal-title title2 text-dark" id="exampleModalLabel">Editing talk...</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <select name="title" class="form-select" wire:model.defer="title">
            <option hidden="true">Select Categories</option>
            <option selected disabled>Select Categories</option>
            <option value="">None</option>
            <option value="Business">Business</option>
            <option value="Education">Education</option>
            <option value="Comedy">Comedy</option>
            <option value="Drama">Drama</option>
            <option value="Horror">Horror</option>
            <option value="Politics">Politics</option>
            <option value="Religion">Religion</option>
            <option value="Romance">Romance</option>
        </select>
        <div class="modal-body">
            <textarea name="content" id="text-area" cols="50" rows="5" placeholder="Express your feelings" wire:model.defer="content"></textarea>
        </div>
        <div class="modal-footer">
            <button type="button" id="submit-button" class="btn btn-success form-control" wire:click="updatePosts()">Update Talk</button>
        </div>
        </div>
    </div>
</div>
</div>
