<x-app-layout>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-blog set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ادارة الاصناف</h2>
                    <br>
                    <a href="./type/create" style="color: #dc3545; font-size: 25px">انشاء صنف</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @foreach($types as $type)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg"></div>
                            <div class="blog__item__text">
                                <span><img src="img/icon/calendar.png" alt="">{{$type->created_at}}</span>
                                <h5>{{$type->name}}</h5>
                                <a href="{{route('type.edit',$type->id)}}">edit</a>
                                <form action="{{route('type.destroy',$type->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a>
                                        <input type="submit" value="DELETE">
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

</x-app-layout>