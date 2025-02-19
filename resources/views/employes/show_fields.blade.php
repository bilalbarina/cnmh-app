<!-- Etat Civil Id Field -->
<!-- Nom Field -->
<div class="col-sm-12">
    {!! Form::label('nom', __('models/employes.fields.nom').':') !!}
    <p>{{ $employe->nom }}</p>
</div>

<!-- Prenom Field -->
<div class="col-sm-12">
    {!! Form::label('prenom', __('models/employes.fields.prenom').':') !!}
    <p>{{ $employe->prenom }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', __('models/employes.fields.email').':') !!}
    <p>{{ $employe->email }}</p>
</div>

<!-- Telephone Field -->
<div class="col-sm-12">
    {!! Form::label('telephone', __('models/employes.fields.telephone').':') !!}
    <p>{{ $employe->telephone }}</p>
</div>

<!-- Adresse Field -->
<div class="col-sm-12">
    {!! Form::label('adresse', __('models/employes.fields.adresse').':') !!}
    <p>{{ $employe->adresse }}</p>
</div>

<!-- Date Naissance Field -->
<div class="col-sm-12">
    {!! Form::label('date_naissance', __('models/employes.fields.date_naissance').':') !!}
    <p>{{ $employe->date_naissance }}</p>
</div>

<!-- Lieu Naissance Field -->
<div class="col-sm-12">
    {!! Form::label('lieu_naissance', __('models/employes.fields.lieu_naissance').':') !!}
    <p>{{ $employe->lieu_naissance }}</p>
</div>

<!-- Sexe Field -->
<div class="col-sm-12">
    {!! Form::label('sexe', __('models/employes.fields.sexe').':') !!}
    <p>{{ $employe->sexe }}</p>
</div>

<!-- Cin Field -->
<div class="col-sm-12">
    {!! Form::label('cin', __('models/employes.fields.cin').':') !!}
    <p>{{ $employe->cin }}</p>
</div>

<!-- Fonction Field -->
<div class="col-sm-12">
    {!! Form::label('fonction', __('models/employes.fields.fonction').':') !!}
    <p>{{ $employe->fonction }}</p>
</div>

<!-- Date Embauche Field -->
<div class="col-sm-12">
    {!! Form::label('date_embauche', __('models/employes.fields.date_embauche').':') !!}
    <p>{{ $employe->date_embauche }}</p>
</div>

<!-- Date Depart Field -->
<div class="col-sm-12">
    {!! Form::label('date_depart', __('models/employes.fields.date_depart').':') !!}
    <p>{{ $employe->date_depart }}</p>
</div>

<!-- Statut Field -->
<div class="col-sm-12">
    {!! Form::label('statut', __('models/employes.fields.statut').':') !!}
    <p>{{ $employe->statut }}</p>
</div>

