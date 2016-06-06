{"changed":true,"filter":false,"title":"mobile_app.blade.php","tooltip":"/resources/views/admin/template/partials/mobile_app.blade.php","value":"<div class=\"container\">\n\t<div class=\"col-md-6\">\n\t\t<div class=\"col-md-6 col-md-offset-3\">\n\t\t\t<img src=\"/extra/theme/img/services/Mobile_Icon.png\" class=\"pull-center\"> \n\t\t</div>\n\t\t<div class=\"col-md-12\">\n\t\t\n\n\t\t\t<h1 style=\"border-bottom: dashed 2px #eee;\"><b>CRM </b> <small>Customer Relationship Management</small></h1>\n\t\t\t<p>Es una soluciòn informatica creada para organizar la estrategia comercial y relaciÃ³n con los clientes o potenciales clientes de una empresa. CRM es una estrategia de negocios dirigida a entender, anticipar y responder a las necesidades de los clientes actuales y potenciales de una empresa para poder hacer crecer el valor de la relaciÃ³n. La metodologÃ­a  del software <br >CRM es Es utilizar la soluciÃ³n de software CRM para poder organizar, automatizar, sincronizar todos aquellos procesos de negocio, <br> principalmente de servicio de atenciÃ³n al cliente, soporte,<br> asÃ­ como para llevar a cabo ventas.</p><br>\n\t\t\t<a href=\"/\">Back to deekler</a>\n\t\t</div>\t\n\t\n\t</div>\n\t<div class=\"col-md-6\" >\n\t\t<div class=\"col-md-12 \">\n\t\t\t<br>\n\t\t\t<br>\n\t\t\t<br>\n\t\t\t<br>\n\t\t\t<br>\n\t\t\t\n\t\t\t<h1 class=\"contact-form-t pull-right\">\n\t\t\t\t<b>Contact Us &nbsp &nbsp</b>\n\t\t\t</h1>\n\t\t</div>\n\t\t\n<div class=\"col-md-8 col-md-offset-3\">\n    {!! Form::open([\"route\"=>\"contact.contact.store\", \"method\"=>\"post\", \"id\"=>\"contactForm\",\"class\"=>\"form-horizontal\"]) !!}\n\t\n  <div class=\"form-group contact-form-icon\">\n      <div class=\"col-md-6\">\n      <i class=\"fa fa-user\"></i>\n     </i> <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Name\" name =\"name\">\n      </div>\n  \n  \n    <div class=\"form-group contact-form-icon\">\n      <div class=\"col-md-6\">\n      <i class=\"fa fa-envelope\"></i>\n      <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\" name=\"email\">\n      </div>\n    </div>\n  </div>\n    \n    <div class=\"form-group contact-form-icon\">\n    <div class=\"col-md-6\">\n      <i class=\"fa fa-skype\"></i>\n      <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"skype\" name=\"skype\">\n    </div>\n    \n    <div class=\"col-md-6\">\n\n       <select name=\"lang\" id=\"lang\" class=\"form-control\">\n                                            <option value=\"English\">English</option>\n                                            <option value=\"Español\">Espa&ntilde;ol</option>\n                                        </select>\n      <input type=\"text\" name=\"type\" value=\"'Aplicaciones móviles'\" class=\"hidden\">\n\n    </div>\n  </div>\n  \n  <div class=\"form-group contact-form-icon\">\n    <div class=\"col-md-12\">\n        <i class=\"fa fa-pencil\"></i>\n       <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Subject\" name=\"subject\">\n    </div>\n  </div>\n\n  <div class=\"form-group contact-form-icon\">\n     <div class=\"col-sm-12\">\n      <i class=\"fa fa-keyboard-o\"></i>\n      <textarea class=\"form-control\" rows=\"4\" placeholder=\"Description...\" name=\"message\"></textarea>\n    </div>\n  </div>\n  \n <div class=\"form-group\">\n    \n    <div class=\"col-md-12\">\n         {!! app('captcha')->display(); !!}\n    </div>\n   </div>\n  \n  <div class=\"form-group\">\n    <div class=\"col-md-12\">\n      <button type=\"submit\" class=\"btn btn-default btn-block\">Send</button>\n    </div>\n  </div>\n\n{!! Form::close() !!}\n</div>\n\t</div>\n\t\n</div>\n\n","undoManager":{"mark":45,"position":45,"stack":[[{"start":{"row":71,"column":0},"end":{"row":71,"column":2},"action":"insert","lines":["  "],"id":2}],[{"start":{"row":71,"column":2},"end":{"row":71,"column":4},"action":"insert","lines":["  "],"id":3}],[{"start":{"row":71,"column":4},"end":{"row":73,"column":38},"action":"insert","lines":["<div class=\"col-md-12\">","                                    {!! app('captcha')->display(); !!}","                                </div>"],"id":4}],[{"start":{"row":72,"column":32},"end":{"row":72,"column":33},"action":"remove","lines":[" "],"id":5}],[{"start":{"row":72,"column":30},"end":{"row":72,"column":32},"action":"remove","lines":["  "],"id":6}],[{"start":{"row":72,"column":28},"end":{"row":72,"column":30},"action":"remove","lines":["  "],"id":7}],[{"start":{"row":72,"column":26},"end":{"row":72,"column":28},"action":"remove","lines":["  "],"id":8}],[{"start":{"row":72,"column":24},"end":{"row":72,"column":26},"action":"remove","lines":["  "],"id":9}],[{"start":{"row":72,"column":22},"end":{"row":72,"column":24},"action":"remove","lines":["  "],"id":10}],[{"start":{"row":72,"column":20},"end":{"row":72,"column":22},"action":"remove","lines":["  "],"id":11}],[{"start":{"row":72,"column":18},"end":{"row":72,"column":20},"action":"remove","lines":["  "],"id":12}],[{"start":{"row":72,"column":16},"end":{"row":72,"column":18},"action":"remove","lines":["  "],"id":13}],[{"start":{"row":72,"column":14},"end":{"row":72,"column":16},"action":"remove","lines":["  "],"id":14}],[{"start":{"row":72,"column":12},"end":{"row":72,"column":14},"action":"remove","lines":["  "],"id":15}],[{"start":{"row":72,"column":10},"end":{"row":72,"column":12},"action":"remove","lines":["  "],"id":16}],[{"start":{"row":72,"column":8},"end":{"row":72,"column":10},"action":"remove","lines":["  "],"id":17}],[{"start":{"row":72,"column":6},"end":{"row":72,"column":8},"action":"remove","lines":["  "],"id":18}],[{"start":{"row":73,"column":28},"end":{"row":73,"column":30},"action":"remove","lines":["  "],"id":19}],[{"start":{"row":73,"column":26},"end":{"row":73,"column":28},"action":"remove","lines":["  "],"id":20}],[{"start":{"row":73,"column":24},"end":{"row":73,"column":26},"action":"remove","lines":["  "],"id":21}],[{"start":{"row":73,"column":22},"end":{"row":73,"column":24},"action":"remove","lines":["  "],"id":22}],[{"start":{"row":73,"column":20},"end":{"row":73,"column":22},"action":"remove","lines":["  "],"id":23}],[{"start":{"row":73,"column":18},"end":{"row":73,"column":20},"action":"remove","lines":["  "],"id":24}],[{"start":{"row":73,"column":16},"end":{"row":73,"column":18},"action":"remove","lines":["  "],"id":25}],[{"start":{"row":73,"column":14},"end":{"row":73,"column":16},"action":"remove","lines":["  "],"id":26}],[{"start":{"row":73,"column":12},"end":{"row":73,"column":14},"action":"remove","lines":["  "],"id":27}],[{"start":{"row":73,"column":10},"end":{"row":73,"column":12},"action":"remove","lines":["  "],"id":28}],[{"start":{"row":73,"column":8},"end":{"row":73,"column":10},"action":"remove","lines":["  "],"id":29}],[{"start":{"row":73,"column":6},"end":{"row":73,"column":8},"action":"remove","lines":["  "],"id":30}],[{"start":{"row":73,"column":4},"end":{"row":73,"column":6},"action":"remove","lines":["  "],"id":31}],[{"start":{"row":73,"column":4},"end":{"row":73,"column":6},"action":"remove","lines":["  "],"id":32}],[{"start":{"row":70,"column":0},"end":{"row":71,"column":4},"action":"insert","lines":[" <div class=\"form-group\">","    "],"id":33}],[{"start":{"row":69,"column":8},"end":{"row":70,"column":0},"action":"insert","lines":["",""],"id":34},{"start":{"row":70,"column":0},"end":{"row":70,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":76,"column":2},"end":{"row":76,"column":9},"action":"insert","lines":[" </div>"],"id":35}],[{"start":{"row":73,"column":24},"end":{"row":73,"column":25},"action":"remove","lines":["2"],"id":36}],[{"start":{"row":73,"column":23},"end":{"row":73,"column":24},"action":"remove","lines":["1"],"id":37}],[{"start":{"row":73,"column":23},"end":{"row":73,"column":24},"action":"insert","lines":["6"],"id":38}],[{"start":{"row":73,"column":23},"end":{"row":73,"column":24},"action":"remove","lines":["6"],"id":39}],[{"start":{"row":73,"column":23},"end":{"row":73,"column":24},"action":"insert","lines":["6"],"id":40}],[{"start":{"row":73,"column":23},"end":{"row":73,"column":24},"action":"remove","lines":["6"],"id":41}],[{"start":{"row":73,"column":23},"end":{"row":73,"column":24},"action":"insert","lines":["1"],"id":42}],[{"start":{"row":73,"column":24},"end":{"row":73,"column":25},"action":"insert","lines":["2"],"id":43}],[{"start":{"row":73,"column":21},"end":{"row":73,"column":22},"action":"remove","lines":["d"],"id":44}],[{"start":{"row":73,"column":21},"end":{"row":73,"column":22},"action":"insert","lines":["e"],"id":45}],[{"start":{"row":73,"column":21},"end":{"row":73,"column":22},"action":"remove","lines":["e"],"id":46}],[{"start":{"row":73,"column":21},"end":{"row":73,"column":22},"action":"insert","lines":["d"],"id":47}]]},"ace":{"folds":[],"scrolltop":680,"scrollleft":0,"selection":{"start":{"row":69,"column":2},"end":{"row":71,"column":38},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":191,"mode":"ace/mode/php"}},"timestamp":1461278073000}