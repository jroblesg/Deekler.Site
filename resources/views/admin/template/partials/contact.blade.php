<!-- Contact Us Section -->

    <section class="contact-us-section section-padding" id="contact">
        <div class="container">
            <!-- Contact Us Section Title -->
            <h2 class="section-title contact-title text-center">Contact Us</h2>
            <p class="sub-title contact-subtitle text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, magna aliqua.Ut enim <br> consectetur adipisicing  ad minim veniam</p>

            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="contact-form-section mt-50">
                       
                       
                       {!! Form::open(["route"=>"contact.contact.store", "method"=>"post", "id"=>"contactForm"]) !!}
                           <div class="row">
                                <div class="col-sm-5 col-md-4">
                                    
                                    <!-- Name Field -->
                                    <div class="form-group contact-form-icon">
                                      <i class="fa fa-user"></i>
                                      {!!Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Name', 'required'])!!}
                                    </div>
                                    
                                    
                                     <!-- Email Field -->
                                    <div class="form-group contact-form-icon">
                                      <i class="fa fa-envelope"></i>
                                      {!! Form::email('email',null,['class' => 'form-control', 'placeholder' => 'Email', 'required']) !!}
                                    </div>
                                    
                                    <!-- Name Field -->
                                    <div class="form-group contact-form-icon">
                                      <i class="fa fa-skype"></i>
                                      {!!Form::text('skype',null,['class' => 'form-control', 'placeholder' => 'Skype'])!!}
                                    </div>
                                    
                                    <!-- Email Field -->
                                    <div class="form-group contact-form-icon">
                                        <select name="lang" id="lang" class="form-control">
                                            <option value="English">English</option>
                                            <option value="Español">Espa&ntilde;ol</option>
                                        </select>
                                    </div>
                                    
                                    <input type="text" name="type" value="'Todos los servicios'" class="hidden">
                                    
                                </div>
                                <div class="col-sm-7 col-md-8">
                                    
                                    <!-- Subject Field -->
                                    <div class="form-group contact-form-icon">
                                       {!! Form::label('subjet','Subject',['class'=>'sr-only']) !!}
                                       <i class="fa fa-pencil"></i>
                                       {!! Form::text('subject',null,['class' => 'form-control', 'placeholder' => 'Subject', 'required']) !!}
                                    </div>
                                    
                                    <div class="form-group contact-form-icon">
                                       {!! Form::label('message','Message',['class'=>'sr-only']) !!}
                                       <i class="fa fa-keyboard-o"></i>
                                       <textarea placeholder="Message" rows="7" id="message" class="form-control" name="message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {!! app('captcha')->display(); !!}
                                </div>
                                <div class="col-sm-12 col-md-4 col-md-offset-8 text-center contact-button-padding">
                                    <button class="btn-primary btn-contact btn-block" name="submit" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
                                </div>
                            </div>
                       {!! Form::close() !!}
                       

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Of Contact Us Section -->