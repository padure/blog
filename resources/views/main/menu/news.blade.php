@extends("main.base")
    @section("content")
    <div class="row">
        <div class="col-md-8 news">
            <div class="col-md-12 postare">
                <img src="{{asset("images/admin/postari/home.jpg")}}" >
                <div class="col-md-12">
                    <h3>
                        <b>Title post</b>
                    </h3>
                    <h5>
                        Title description <span class="data-posts">April 7 2017</span>
                    </h5>
                </div>
                <div class="col-md-12">
                    <p class="description-news">
                        Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.
                    </p>
                    <div class="col-n-f">
                        <div class="col-md-12 news-footer">
                            <button class="btn btn-info btn-reg">Citeste</button>
                            <span class="coments">Comentariu<span class="nr-com">0</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 postare">
                <img src="{{asset("images/admin/postari/blog-cia.jpg")}}" >
                <div class="col-md-12">
                    <h3>
                        <b>Title post</b>
                    </h3>
                    <h5>
                        Title description <span class="data-posts">April 7 2017</span>
                    </h5>
                </div>
                <div class="col-md-12">
                    <p class="description-news">
                        Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.
                    </p>
                    <div class="col-n-f">
                        <div class="col-md-12 news-footer">
                            <button class="btn btn-info btn-reg">Citeste</button>
                            <span class="coments">Comentariu<span class="nr-com">0</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 popular">
            <div class="col-md-12 posts-popular">
                <h4>Popular Posts</h4>
                <ul class="popular-list-post">
                    <li> 
                        <div class="col-md-12 reset post">
                            <div class="col-md-2 reset">
                                <img src="{{asset("images/admin/postari/workshop.jpg")}}" >
                            </div>
                            <div class="col-md-10 reset">
                                <div class="col-md-12 reset popular-title">Title</div>
                                <div class="col-md-12 reset popular-description">Description</div>
                            </div>
                        </div>
                    </li>
                    <li> 
                        <div class="col-md-12 reset post">
                            <div class="col-md-2 reset">
                                <img src="{{asset("images/admin/postari/workshop.jpg")}}" >
                            </div>
                            <div class="col-md-10 reset">
                                <div class="col-md-12 reset popular-title">Title</div>
                                <div class="col-md-12 reset popular-description">Description</div>
                            </div>
                        </div>
                    </li>
                    <li> 
                        <div class="col-md-12 reset post">
                            <div class="col-md-2 reset">
                                <img src="{{asset("images/admin/postari/workshop.jpg")}}" >
                            </div>
                            <div class="col-md-10 reset">
                                <div class="col-md-12 reset popular-title">Title</div>
                                <div class="col-md-12 reset popular-description">Description</div>
                            </div>
                        </div>
                    </li>
                    <li> 
                        <div class="col-md-12 reset post">
                            <div class="col-md-2 reset">
                                <img src="{{asset("images/admin/postari/workshop.jpg")}}" >
                            </div>
                            <div class="col-md-10 reset">
                                <div class="col-md-12 reset popular-title">Title</div>
                                <div class="col-md-12 reset popular-description">Description</div>
                            </div>
                        </div>
                    </li>
                    <li> 
                        <div class="col-md-12 reset post">
                            <div class="col-md-2 reset">
                                <img src="{{asset("images/admin/postari/workshop.jpg")}}" >
                            </div>
                            <div class="col-md-10 reset">
                                <div class="col-md-12 reset popular-title">Title</div>
                                <div class="col-md-12 reset popular-description">Description</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
@endsection