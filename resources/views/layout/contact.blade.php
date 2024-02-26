<section id="contact" class="contact">
    <div class="section-heading text-center">
        <h2>contact me</h2>
    </div>
    <div class="container">
        <div class="contact-content">
            <div class="row">
                <div class="col-md-offset-1 col-md-5 col-sm-6">
                    <div class="single-contact-box">
                        <div class="contact-form">
                            <form action="/" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                          <input type="text" class="form-control" id="name" placeholder="Name*" name="name">
                                        </div><!--/.form-group-->
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div><!--/.col-->
                                    
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Email*" name="email">
                                        </div><!--/.form-group-->
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div><!--/.col-->
                                </div><!--/.row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                                        </div><!--/.form-group-->
                                    </div><!--/.col-->
                                </div><!--/.row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="8" id="comment" placeholder="Message" name="message"></textarea>
                                        </div><!--/.form-group-->
                                    </div><!--/.col-->
                                </div><!--/.row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="single-contact-btn">
                                            {{-- <a class="contact-btn" href="/send-mail" role="button">submit</a> --}}
                                            <button type="submit" class="contact-btn">submit</button>
                                        </div><!--/.single-single-contact-btn-->
                                        
                                    </div><!--/.col-->
                                </div><!--/.row-->
                            </form><!--/form-->
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="single-contact-btn">
                                        <a class="contact-btn" href="/landing" role="button">form</a>
                                    </div><!--/.single-single-contact-btn-->
                                </div><!--/.col-->
                            </div><!--/.row-->
                            
                        </div><!--/.contact-form-->
                    </div><!--/.single-contact-box-->
                </div><!--/.col-->
                <div class="col-md-offset-1 col-md-5 col-sm-6">
                    <div class="single-contact-box">
                        <div class="contact-adress">
                            <div class="contact-add-head">
                                <h3>Ikhsan Warman</h3>
                                <p>Fullstack programmer</p>
                            </div>
                            <div class="contact-add-info">
                                <div class="single-contact-add-info">
                                    <h3>phone</h3>
                                    <p>+628136975898</p>
                                </div>
                                <div class="single-contact-add-info">
                                    <h3>email</h3>
                                    <p>ikhsanwarman@gmail.com</p>
                                </div>
                                <div class="single-contact-add-info">
                                    <h3>website</h3>
                                    <p>www.brownsine.com</p>
                                </div>
                            </div>
                        </div><!--/.contact-adress-->
                        <div class="hm-foot-icon">
                            <ul>
                                <li><a href="https://www.facebook.com/iksan.warman?locale=id_ID" target="_blank"><i class="fa fa-facebook"></i></a></li><!--/li-->
                                
                                <li><a href="https://twitter.com/snwrmn_" target="_blank"><i class="fa fa-twitter"></i></a></li><!--/li-->
                                <li><a href="https://www.linkedin.com/in/ikhsan-warman-24533b14b/" target="_blank"><i class="fa fa-linkedin"></i></a></li><!--/li-->
                                <li><a href="https://www.instagram.com/ikhsanw_4/" target="_blank"><i class="fa fa-instagram"></i></a></li><!--/li-->
                            </ul><!--/ul-->
                        </div><!--/.hm-foot-icon-->
                    </div><!--/.single-contact-box-->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.contact-content-->
    </div><!--/.container-->

</section><!--/.contact-->