<div class="jobs-wrapper carrousel">
    @foreach($jobs as $job)
    <div class="card card-border-primary">
        <div class="card-header">
            Vagas
        </div>
        <div class="card-body">
            <div class="row">

                <p>{{$job->company}}</p>

            </div>
        </div>
    </div>
    @endforeach
</div>
