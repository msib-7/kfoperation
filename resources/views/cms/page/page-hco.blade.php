@extends('cms.layout.cms')
@section('cms-content')
<div class="col-sm-12 col-lg-7">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div class="h2">News 1</div>
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
                                <img class="d-block w-100 mb-2" style="width:100%; height:100%; max-height:500px; object-fit:cover;"
                                    src="{{asset('assets/img/carousel/'.$data->carousel_img)}}">
                                <div class="d-flex flex-column">
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="{{url('del-carousel/'.$data->carousel_img)}}" class="btn btn-outline-danger w-100">
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
    </div>
</div>
<div class="col-sm-12 col-lg-5">
    {{-- Form Add --}}
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="h3">upload new Image</div>
                </div>
            </div>
            <div class="card-body">
                <div id="image-preview" class="max-w-sm items-center mx-auto text-center cursor-pointer" style="width:100%; height:100%; max-height:500px; object-fit:cover;">
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
</div>
@endsection
