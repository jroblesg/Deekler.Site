<div class="container">
	<div class="col-md-6">
		<div class="col-md-6 col-md-offset-3">
			<img src="/extra/theme/img/services/ecommerce_Icon.png" class="pull-center"> 
		</div>
		<div class="col-md-12">
			<h1 style="border-bottom: dashed 2px #eee;"><b>CRM </b> <small>Customer Relationship Management</small></h1>
			<p>Es una soluciÃ³n informÃ¡tica creada para organizar la estrategia comercial y relaciÃ³n con los clientes o potenciales clientes de una empresa. CRM es una estrategia de negocios dirigida a entender, anticipar y responder a las necesidades de los clientes actuales y potenciales de una empresa para poder hacer crecer el valor de la relaciÃ³n. La metodologÃ­a  del software <br >CRM es Es utilizar la soluciÃ³n de software CRM para poder organizar, automatizar, sincronizar todos aquellos procesos de negocio, <br> principalmente de servicio de atenciÃ³n al cliente, soporte,<br> asÃ­ como para llevar a cabo ventas.</p><br>
			<a href="/">Back to deekler</a>
		</div>	
	
	</div>
	<div class="col-md-6" >
		<div class="col-md-12 ">
			<br>
			<br>
			<br>
			<br>
			<br>
			
			<h1 class="contact-form-t pull-right">
				<b>Contact Us &nbsp &nbsp</b>
			</h1>
		</div>
		

<div class="col-md-8 col-md-offset-3">
    {!! Form::open(["route"=>"contact.contact.store", "method"=>"post", "id"=>"contactForm","class"=>"form-horizontal"]) !!}
	
 <div class="form-group contact-form-icon">
      <div class="col-md-6">
        <i class="fa fa-user"></i>
       <input type="text" class="form-control" id="inputEmail3" placeholder="Name" name ="name">
     </div>
    
     <div class="form-group contact-form-icon">
      <div class="col-md-6">
      <i class="fa fa-envelope"></i>
      <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="email">
    </div>
  </div>
  </div>
  
   <div class="form-group contact-form-icon">
    <div class="col-md-6">
      <i class="fa fa-skype"></i>
      <input type="text" class="form-control" id="inputPassword3" placeholder="skype" name="skype">
    </div>
    
    <div class="col-md-6">

       <select name="lang" id="lang" class="form-control">
                                            <option value="English">English</option>
                                            <option value="Español">Espa&ntilde;ol</option>
                                        </select>
      <input type="text" name="type" value="'CSM'" class="hidden">

    </div>
  </div>
  
   <div class="form-group contact-form-icon">
    <div class="col-md-12">
        <i class="fa fa-pencil"></i>
       <input type="text" class="form-control" id="inputPassword3" placeholder="Subject" name="subject">
    </div>
  </div>

 <div class="form-group contact-form-icon">
     <div class="col-sm-12">
      <i class="fa fa-keyboard-o"></i>
      <textarea class="form-control" rows="4" placeholder="Description..." name="message"></textarea>
    </div>
  </div>


<div class="form-group">
    
    <div class="col-md-12">
         {!! app('captcha')->display(); !!}
    </div>
   </div>
  
  
  <div class="form-group">
    <div class="col-md-12">
      <button type="submit" class="btn btn-default btn-block">Send</button>
    </div>
  </div>

{!! Form::close() !!}
</div>
	</div>
	
</div>

