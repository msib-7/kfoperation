@extends('cms.layout.cms')
@section('cms-content')
<div class="col-sm-12 col-lg-7">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div class="h1 mb-3">News 2</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <div id="carousel-news" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php $no=1;?>
                            @foreach ($dataNews as $data)
                            <div class="carousel-item <?php if($no == 1){echo 'active'; $no++;}?>">
                                <img class="d-block w-100 mb-2" alt=""
                                    src="{{asset('assets/img/carousel/'.$data->news_img)}}">
                                <div class="d-flex flex-column">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <button class="btn btn-outline-info w-100" data-id="{{$data->id}}" id="btn-view-caption" data-bs-toggle="modal" data-bs-target="#modal-caption">
                                                View Caption
                                            </button>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <a href="{{url('del-news/'.$data->news_img)}}"
                                                class="btn btn-outline-danger w-100">
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
        </div>
    </div>
</div>
<div class="col-sm-12 col-lg-5">
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
                        <div id="collapse-1" class="accordion-collapse collapse" data-bs-parent="#accordion-example">
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

<div class="modal modal-blur fade" id="modal-caption" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Caption</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span id="text-caption"></span>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<script>
    //button create post event
    $('body').on('click', '#btn-view-caption', function () {
        function removeHtmlTags(input) {
            return input.replace(/<[^>]*>/g, '');
        }

        let news_id = $(this).data('id');

        //fetch detail post with ajax
        $.ajax({
            url: `/view-caption/${news_id}`,
            type: "GET",
            cache: false,
            success: function (response) {
                const cleanedString = removeHtmlTags(response.data.caption);
                $('#text-caption').text(cleanedString);
            }
        });
    });
</script>
@endsection
