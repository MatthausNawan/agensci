<div class="agency-card my-2">    
    <span class="agency-card-title text-center">{{$title ?? 'Titulo'}}</span>        
    <div class="my-2">        
        <div class="owl-carousel owl-theme">
            @foreach($contests as $contest)            
                <div class="agency-card mx-1">                    
                    <div class="d-flex flex-column">
                        <span class="foment-value text-center">{{ $contest->title }}</span>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Cargos</span>
                            <span class="foment-value">{{ $contest->occupations }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Remuneração</span>
                            <span class="foment-value">R$ {{ number_format($contest->salary,2,',','.') }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Vagas</span>
                            <span class="foment-value">{{ $contest->vacancies }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label ">Requisitos:</span>
                            <span class="foment-value">{{ $contest->requirements }}</span>
                        </div>
                        <div class="foment-data d-flex flex-row justify-content-start">
                            <span class="foment-label">Edital</span>
                            <span class="foment-value"><a href="{{ $contest->link }}" target="_blank">{{ $contest->link }}</a> </span>
                        </div>
                    </div>                    
                </div>            
            @endforeach          
        </div>
    </div>
</div>
