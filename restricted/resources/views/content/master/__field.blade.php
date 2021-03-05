<div class="form-group">
    <div id="mapid"></div>
</div>
<div class="form-group">
    <label for="latitude">Latitude</label>
    <input type="text" name="latitude" value="{{ ($model) ? $model->latitude :'' }}" class="form-control" id="latitude" readonly required>
</div>
<div class="form-group">
    <label for="longitude">Longitude</label>
    <input type="text" name="longitude" value="{{ ($model) ? $model->longitude :'' }}" class="form-control" id="longitude" readonly required>
</div>
