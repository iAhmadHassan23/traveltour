@extends('layouts.master')
@section('title', isset($pageData->meta_title)?$pageData->meta_title:'')
@section('meta_description', isset($pageData->meta_description)?$pageData->meta_description:'')

@section('indexing')
    @if($pageData->index_status == 1)
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    @else
        <meta name="robots" content="noindex">
    @endif
@endsection
@isset($pageData->meta_image)
    @section('ogimage' ,asset('media/'. $pageData->meta_image))
@endisset
@section('style')
    <link rel="stylesheet" href="{{ route('mix.css') }}">
    <link rel="stylesheet" href="/assets/css/service-detail.css">
@endsection

@section('mainContent')

    @if(count($pageData->sections) > 0)
        @foreach($pageData->sections as $key => $section)
            @php
                $section_content = json_decode($section->content, true);
            @endphp
            @if($loop->first)
            @includeIf('components.'. $section->section,
               [
                   'section' => $section,
                   'section_content' => $section_content,
                    'main_tag_name' => 'div'
//                   'bgClass' =>  ($loop->iteration  % 2 == 0) ? 'bgGrey' : '',
//                   'sectionClasses' => 'section-space'. $key,
//                   'records' => json_decode($section->data),
//                   'section_id' => encoded_value($section->id),
//                   'section_row' => $section,
               ])
            @endif
        @endforeach
    @endif

    <section class="ws-service-detail-sec pt-5">
        <div class="container">
            <div class="ws-service-wrappe d-flex">
                <div class="ws-side-bar bg-light position-relative h-100">
                    <h3>All Service</h3>
                    <ul class="list-unstyled side-bar-list mb-0">
                        @forelse($aside_services as $service)
                            <li><a href="{{ route('single.service', $service->slug) }}" class="{{ request()->segment(2) == $service->slug ? 'active' : null }}">{{ $service->name }}</a></li>
                        @empty

                        @endforelse
                    </ul>
                </div>

                    <div class="ws-right-text-wrapper">
                        @if(count($pageData->sections) > 0)
                            @foreach($pageData->sections as $key => $section)
                                @php
                                    $section_content = json_decode($section->content, true);
                                @endphp
                                @if(!$loop->first)
                                    @includeIf('components.'. $section->section,
                                       [
                                           'section' => $section,
                                           'section_content' => $section_content,
                                            'main_tag_name' => 'div',
                                            'length'=> ($section->section == 'section_1' ? 'col-md-12' : '')
                        //                   'bgClass' =>  ($loop->iteration  % 2 == 0) ? 'bgGrey' : '',
                        //                   'sectionClasses' => 'section-space'. $key,
                        //                   'records' => json_decode($section->data),
                        //                   'section_id' => encoded_value($section->id),
                        //                   'section_row' => $section,
                                       ])
                                @endif
                            @endforeach
                        @endif



                    </div>
                
            </div>
        </div>
    </section>



@endsection



@section('js')
@endsection
