<x-app-layout>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-blog set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ادارة الاقسام</h2>
                    <br>
                    <h6><a href="./category/create" style="color: #dc3545;">انشاء قسم</a></h6>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> {{$category->created_at}}</span>
                            <h5>{{$category->name}}</h5>
                            <a href="{{route('category.edit',$category->id)}}">edit</a>
                            <form action="{{route('category.destroy',$category->id)}}" method="post">
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