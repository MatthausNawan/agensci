@extends('layouts.admin')

@section('content')
<div class="content">
    @can('event_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.events.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.event.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.event.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">
                    <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Event">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th>
                                    {{ trans('cruds.event.fields.id') }}
                                </th>
                                <th>
                                    {{ trans('cruds.event.fields.segment') }}
                                </th>
                                <th>
                                    {{ trans('cruds.event.fields.title') }}
                                </th>
                                <th>
                                    {{ trans('cruds.event.fields.start_date') }}
                                </th>
                                <th>
                                    {{ trans('cruds.event.fields.end_date') }}
                                </th>
                                <th>
                                    {{ trans('cruds.event.fields.subscripition_period') }}
                                </th>
                                <th>
                                    {{ trans('cruds.event.fields.banner') }}
                                </th>
                                <th>
                                    {{ trans('cruds.event.fields.enabled') }}
                                </th>
                                <th>
                                    {{ trans('cruds.event.fields.creator') }}
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('event_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.events.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.events.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'segment_name', name: 'segment.name' },
{ data: 'title', name: 'title' },
{ data: 'start_date', name: 'start_date' },
{ data: 'end_date', name: 'end_date' },
{ data: 'subscripition_period', name: 'subscripition_period' },
{ data: 'banner', name: 'banner', sortable: false, searchable: false },
{ data: 'enabled', name: 'enabled' },
{ data: 'creator_name', name: 'creator.name' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Event').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

});

</script>
@endsection
