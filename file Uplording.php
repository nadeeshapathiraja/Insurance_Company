<div class="form-group">
    <label for="file">Choose File</label>
    <input type="file"
           id="file"
           (change)="handleFileInput($event.target.files)">
</div>