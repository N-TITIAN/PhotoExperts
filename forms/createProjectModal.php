
<!-- Create Task Modal -->
<div class="modal fade" id="createTaskModal" tabindex="-1" role="dialog" aria-labelledby="createTaskModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createTaskModalLabel">Create Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to create a new project -->
                <form action="../action.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="projectTitle">Title</label>
                        <input type="text" name="title" class="form-control" id="projectTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="projectDate">Date</label>
                        <input type="date" name="date" class="form-control" id="projecDate" required>
                    </div>
                    <div class="form-group">
                        <label for="projectDescription">Description</label>
                        <textarea name="description" class="form-control" id="projectDescription" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="projectCategory">Category</label>
                        <select name="category" class="form-control" id="projectCategory">
                            <option value="nature">nature</option>
                            <option value="people">people</option>
                            <option value="acrhitecture">architecture</option>
                            <option value="animal">animal</option>
                            <option value="sports">sports</option>
                            <option value="travel">travel</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="photos">Select a photos to upload:</label>
                        <input type="file" name="photos[]" multiple="multiple" id="photos " accept=".png,.jpeg,.jpgm,.GIF">
                    </div>
                      <div class="form-group">
                        <label for="projectUrl">External Url</label>
                        
                        <input type="text" name="url" class="form-control" id="projecUrl" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-get-started-outline" data-dismiss="modal">Close</button>
                        <button name="action" value="create-project" type="submit" class="btn-get-started">Upload project</button>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>