<div class="external_links">
    <div class="links-wrapper py-2">
        @if(isset($title))
            <small class="font-weight-bold d-flex mb-1">
                <span class="ml-3 external-link-title">{{ $title }}</span>
            </small>
        @endif
        @foreach($jobs as $job)
        <div class="image m-2 d-flex flex-row border-bottom">
            <a href="{{$job->site }}" target="_blank">
                <img src="{{$job->companyJob->logo ? $job->companyJob->logo->getUrl() : ''}}" alt="{{$job->name}}" height="60px" width="60px" class="img-responsive">
            </a>
            <div class="job-details d-flex flex-column ml-2">
                <span>{{$job->company }}</span>
                <span>{{$job->ocuppation }}</span>
                <span>R$ {{ number_format($job->salary,2,'.',',') }}</span>
                <a href="{{ $job->link }}">{{ $job->link}}</a>
            </div>
        </div>
        @endforeach         
    </div>
</div>
