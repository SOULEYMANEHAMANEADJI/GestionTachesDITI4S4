<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nom" class="form-label">{{ __('Nom') }}</label>
            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom', $tach?->nom) }}" id="nom" placeholder="Nom">
            {!! $errors->first('nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $tach?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="niveau_complexite" class="form-label">{{ __('Niveau Complexite') }}</label>
            <input type="text" name="niveau_complexite" class="form-control @error('niveau_complexite') is-invalid @enderror" value="{{ old('niveau_complexite', $tach?->niveau_complexite) }}" id="niveau_complexite" placeholder="Niveau Complexite">
            {!! $errors->first('niveau_complexite', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>