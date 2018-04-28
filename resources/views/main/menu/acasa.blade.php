@extends("main.base")
    @section("content")
    <div class="row">
        <div class="col-md-12 home" style="">
            <!--div class="col-md-12 home-post">
                <img src="{{asset("images/admin/home/Blog-2015_0.jpg")}}" >
            </div-->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset("images/admin/home/carosel1.jpg")}}" class="img-carosel" style="height: 400px;">
                    </div>
                    <div class="item">
                        <img src="{{asset("images/admin/home/carosel2.jpg")}}" class="img-carosel" style="height: 400px;">
                    </div>
                    <div class="item">
                        <img src="{{asset("images/admin/home/carosel3.jpg")}}" class="img-carosel" style="height: 400px;">
                    </div>
                </div>  
              </div>
        </div>
    </div>
@endsection
