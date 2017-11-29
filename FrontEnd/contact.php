<?php include "includes/header.php" ?>
    <div class="login">
       <div class="wrap">
	    <ul class="breadcrumb breadcrumb__t"><a class="home" href="index.php">Inicio</a>  / Contacto</ul>
		   <div class="content-top">
			   <form method="post" id="contactMessage" action="">
					<div class="to">
                     	<input type="text" class="text" name="name" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					 	<input type="text" class="text" name="email" value="Correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left: 10px">
					</div>
					<div class="to">
                     	<input type="text" class="text" name="company" value="Tu compañia" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Website';}">
					 	<input type="text" class="text" name="subject" value="Asunto" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left: 10px">
					</div>
					<div class="text">
	                   <textarea name="message" value="Mensaje:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
	                </div>
	                <div class="submit">
	               		<input type="submit" value="Enviar">
	                </div>
                   <input type="hidden" value="regMens" name="mode">
               </form>
                <div class="map">
					<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">Mira el mapa completo</a></small>
				</div>
            </div>
       </div> 
    </div>
<?php include "includes/footer.php" ?>