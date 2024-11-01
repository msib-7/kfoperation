@extends('cms.layout.cms')
@section('cms-content')
<div class="col-sm-12 col-lg-6">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div class="h1 mb-3">News 1 ( HCO )</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <div id="carousel-home" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php $no=1;?>
                            @foreach ($dataCarousel as $data)
                            <div class="carousel-item <?php if($no == 1){echo 'active'; $no++;}?>">
                                <img class="d-block w-100" alt=""
                                    src="{{asset('assets/img/carousel/'.$data->carousel_img)}}">
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carousel-home" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-home" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Form Add Carousel --}}
        <div class="col-12">
            <div class="card-body d-flex flex-column flex-row justify-content-center">
                <div id="image-preview" class="max-w-sm items-center mx-auto text-center cursor-pointer">
                </div>
                <form action="{{url('/add-carousel')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-2">
                        <div class="form-label">Insert Image Here</div>
                        <div class="col-auto">
                            <input type="file" class="form-control" id="upload" name="carouselhome_img" />
                            <input type="hidden" id="filename" />
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-icon btn-success">
                                <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-upload">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                    <path d="M7 9l5 -5l5 5" />
                                    <path d="M12 4l0 12" /></svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12 col-lg-6">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="h1 mb-3">Latest News (QS)</div>
                </div>
            </div>
            <div class="card-body">
                <div id="carousel-news" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php $no=1;?>
                        @foreach ($dataNews as $data)
                        <div class="carousel-item <?php if($no == 1){echo 'active'; $no++;}?>">
                            <img class="d-block w-100" alt="" src="{{asset('assets/img/carousel/'.$data->news_img)}}">
                            <div class="d-flex flex-column">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <a href="#" class="btn btn-outline-info w-100">
                                            View Caption
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <a href="#" class="btn btn-outline-danger w-100">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carousel-news" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-news" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
        {{-- Form Add --}}
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="accordion" id="accordion-example">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="false">
                                    Add News
                                </button>
                            </h2>
                            <div id="collapse-1" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-example">
                                <div class="accordion-body pt-0">
                                    <div id="image-preview"
                                        class="max-w-sm items-center mx-auto text-center cursor-pointer">
                                    </div>
                                    <form action="{{url('/add-news')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-2 mb-4">
                                            <div class="form-label">Insert Image Here</div>
                                            <div class="col-auto">
                                                <input type="file" class="form-control" id="upload" name="news_img" />
                                                <input type="hidden" id="filename" />
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-icon btn-success">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-upload">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                                        <path d="M7 9l5 -5l5 5" />
                                                        <path d="M12 4l0 12" /></svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-label">Add Caption</div>
                                            <div class="col-12">
                                                <textarea id="tinymce-mytextarea" name="news_caption"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
