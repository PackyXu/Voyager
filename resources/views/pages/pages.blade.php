<?php /*$page = TCG\Voyager\Models\Page::first(); */?>

{{--@can('browse',$page)
    You can browse pages.
@endcan--}}


<?php $browsePages = Voyager::can('browse_pages')?>

@if($browsePages)
    You can browse pages?
@else
    You cannot browse pages?
@endif
