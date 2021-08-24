@extends('layouts.frontend')
@section('content')
@include('frontend.pages.companies._partials.menu')
</div>

<div class="row my-4">
    <div class="col-lg-6 offset-3">
        <div class="links-wrapper">            
            <div class="card-body">
                <h3>Colaboração Acadêmica:</h3>
                <small>Sinalize aqui se sua empresa está disposta a Apoiar, Patrocinar ou ser Parceira dos Eventos.</small>                

                <form action="{{ route('companies.profile.collaborate.update') }}" method="post">
                    @csrf
                    <div class="form-check mt-2">
                        <input type="hidden" name="is_partner" value="0">                        
                        <input type="checkbox" class="form-check-input" value="1" name="is_partner" {{ $profile->is_partner || old('is_partner', 0) === 1 ? 'checked' : '' }}>
                        <label for="" class="form-check-label">Quero ser uma empresa <strong class="text-danger">PARCEIRA</strong></label>                        
                    </div>

                    <div class="form-check mt-2">       
                        <input type="hidden" name="is_supporter" value="0">                     
                        <input type="checkbox" class="form-check-input" value="1" name="is_supporter"  {{ $profile->is_supporter || old('is_supporter', 0) === 1 ? 'checked' : '' }}>
                        <label for="" class="form-check-label">Quero ser uma empresa <strong class="text-danger">APOIADORA</strong></label>                        
                    </div>

                    <div class="form-check mt-2">                        
                        <input type="hidden" name="is_sponsorship" value="0">    
                        <input type="checkbox" class="form-check-input" value="1" name="is_sponsorship"  {{ $profile->is_sponsorship || old('is_sponsorship', 0) === 1 ? 'checked' : '' }}>
                        <label for="" class="form-check-label">Quero ser uma empresa <strong class="text-danger">PATROCINADORA</strong></label>                        
                    </div>

                    <button type="submit" class="btn text-black border rounded">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
