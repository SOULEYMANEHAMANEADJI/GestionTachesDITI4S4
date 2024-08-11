<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="aptitude" class="form-label">{{ __('Aptitude') }}</label>
            <input type="text" name="aptitude" class="form-control @error('aptitude') is-invalid @enderror" value="{{ old('aptitude', $competence?->aptitude) }}" id="aptitude" placeholder="Aptitude">
            {!! $errors->first('aptitude', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>