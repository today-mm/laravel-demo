@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
<div class="row">
  <div class="col-12 mb-4">








            @php
                $i = 1;
            @endphp


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.block.nav')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.block.nav')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.block.footer')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.block.footer')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->

            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            <div>
                                @include('today.site.block.reg-of-interest')
                            </div>
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.block.reg-of-interest')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.block.email-subscribe')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.block.email-subscribe')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.block.contact-form')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.block.contact-form')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.block.section-title')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.block.section-title')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.component.posts')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.component.posts')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.component.post')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.component.post')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.component.faqs')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.component.faqs')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.component.faq')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.component.faq')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.section.welcome')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.section.welcome')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.section.about')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.section.about')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.section.post')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.section.post')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.section.reg-of-interest')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.section.reg-of-interest')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.section.welcome')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.section.welcome')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.site.section.contact')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.site.section.contact')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.dash.localization.widget')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.dash.localization.widget')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.dash.gitlab.widget')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.dash.gitlab.widget')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.dash.admin-tag.crud-read')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.dash.admin-tag.crud-read')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.dash.admin-tag.crud-update')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.dash.admin-tag.crud-update')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.dash.tag.crud-read')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.dash.tag.crud-update')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.dash.image.crud-read')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.dash.image.crud-read')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.dash.image.crud-update')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.dash.image.crud-update')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.dash.menu.crud-read')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.dash.menu.crud-read')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.dash.menu.crud-update')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.dash.menu.crud-update')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.dash.footer.crud-read')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.dash.footer.crud-read')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->


            <!-- Start card -->
            <div class="card card-body mb-2">
                <div class="col-12">
                    <h4 id="advanced-footer" class="anchor-heading mb-4 fw-bold">
                        Blade Subviews
                    </h4>
            
                    <div class="doc-example">
                        <ul class="nav nav-tabs-example justify-content-end" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="footer-advanced-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced{{$i}}" role="tab" aria-controls="footer-advanced{{$i}}" aria-selected="true">Preview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="footer-advanced-html-tab" data-bs-toggle="tab" data-bs-target="#footer-advanced-html{{$i}}" role="tab" aria-controls="footer-advanced-html{{$i}}" aria-selected="false">Code</a>
                        </li>
                        </ul>
                        <div class="tab-content doc-example-content" id="tab-tabContent6" data-label="Example">
                        <div class="tab-pane fade show active" id="footer-advanced{{$i}}" role="tabpanel" aria-labelledby="footer-advanced-tab">
                            @include('today.dash.footer.crud-update')
                        </div>
                        <div class="tab-pane fade" id="footer-advanced-html{{$i++}}" role="tabpanel" aria-labelledby="footer-advanced-html-tab">
                            <div class="doc-clipboard">
                            <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                                Copy
                            </button>
                            </div>
                            <pre class="docs-code">&commat;include('today.dash.footer.crud-update')</pre>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End card -->



    </div>
</div>
@endsection
