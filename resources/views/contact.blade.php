<x-app-layout>
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            @if(isset($message))
                <h6 class="coupon__code"><span class="icon_tag_alt"></span> {{$message}}</h6>
            @endif
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Information</span>
                            <h2>Contact Us</h2>
                            <p>As you might expect of a company that began as a high-end interiors contractor, we pay
                                strict attention.</p>
                        </div>
                        <ul>
                            <li>
                                <h4>America</h4>
                                <p>195 E Parker Square Dr, Parker, CO 801 <br />+43 982-314-0958</p>
                            </li>
                            <li>
                                <h4>France</h4>
                                <p>109 Avenue Léon, 63 Clermont-Ferrand <br />+12 345-423-9893</p>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form method="POST" action="{{route('note.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input name="name" type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input name="email" type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="content" placeholder="Message"></textarea>
                                    <button type="submit" class="site-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

</x-app-layout>
