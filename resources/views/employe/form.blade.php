<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nom" class="form-label">{{ __('Nom') }}</label>
            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom', $employe?->nom) }}" id="nom" placeholder="Nom">
            {!! $errors->first('nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="prenom" class="form-label">{{ __('Prenom') }}</label>
            <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom', $employe?->prenom) }}" id="prenom" placeholder="Prenom">
            {!! $errors->first('prenom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="departement" class="form-label">{{ __('Departement') }}</label>
            <input type="text" name="departement" class="form-control @error('departement') is-invalid @enderror" value="{{ old('departement', $employe?->departement) }}" id="departement" placeholder="Departement">
            {!! $errors->first('departement', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="poste" class="form-label">{{ __('Poste') }}</label>
            <input type="text" name="poste" class="form-control @error('poste') is-invalid @enderror" value="{{ old('poste', $employe?->poste) }}" id="poste" placeholder="Poste">
            {!! $errors->first('poste', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tache_id" class="form-label">{{ __('Tache Id') }}</label>
            <input type="text" name="tache_id" class="form-control @error('tache_id') is-invalid @enderror" value="{{ old('tache_id', $employe?->tache_id) }}" id="tache_id" placeholder="Tache Id">
            {!! $errors->first('tache_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>