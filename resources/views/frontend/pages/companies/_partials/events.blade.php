<div class="external_links">

    <div class="links-wrapper py-2">
        <small class="font-weight-bold d-flex mb-1">
            <span class="ml-3 external-link-title">{{ $title }}</span>
        </small>

        @foreach($events as $event)
            <div class="event-data d-flex flex-column p-2 border-bottom">
                <img src="{{$event->banner? $event->banner->getUrl('thumb') : '' }}" alt="" height="120px" width="auto">
                <div class="event-detail d-flex flex-column">
                    <small>{{$event->title}}</small>
                    <small>{{$event->period}}</small>
                    <small>{{$event->location}}</small>
                    <a href="{{$event->link}}" target="_blank">{{$event->link}}</a>
                </div>
            </div>
        @endforeach
        <a href="{{ route('teachers.events.index') }}" class="p-1 btn-block text-right external-button"><span class="mr-3"><i class="fa fa-search"></i>Visualizar Todos</span></a>        
    </div>
</div>
