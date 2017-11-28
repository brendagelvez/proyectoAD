<?php include "includes/header.php" ?>
<div class="mens">    
  <div class="main">
     <div class="wrap">
     	<ul class="breadcrumb breadcrumb__t"><a class="home" href="index.php">Inicio</a> / <a href="productos.php">Productos</a> / Lorem ipsum dolor sit amet</ul>
		<div class="cont span_2_of_3">
		  	<div class="grid singleResize images_3_of_2">
        		<img class="etalage_source_image" src="images/carton.jpg" class="img-responsive" title="" />
		     	 <div class="clearfix"></div>
            </div>
		         <div class="desc1 span_3_of_2">
		         	<h3 class="m_3">Carton 12x12 huevos criollos</h3>

                     <form action="/action_page.php" id="numform" onchange="x.value=parseInt(a.value)*parseInt(b.value)">
                         <table>
                         <tr>
                             <th><p class="m_5">$</p></th>
                         <th>
                         <input class="m_5" type="number" id="a" name="a" value="12000" disabled>
                         </th>

                         </tr>
                         </table>
                         <div class="quantity">
                             <p>Seleccione una  cantidad</p>
                             <input type="number" id="b" name="b" min="1" max="9" step="1" value="1">

                         </div>


                     </form>
                     <p class="m_5">Total:</p>
                     <table>
                         <tr>
                             <th><p class="m_5">$</p></th>
                             <th>
                                 <output class="m_5" form="numform" name="x" for="a b">0</output>
                             </th>

                         </tr>
                     </table>


                     <br>
                     <div class="ajustar btn_form">
                         <form>
                             <input type="submit" value="Agregar al carrito" title="">
                         </form>
                     </div>




			     </div>

			   <div class="clear"></div>	
	    <div class="clients">
	    <h3 class="m_3">5 Otros productos en la misma categoria</h3>
		 <ul id="flexiselDemo3">

			<li><img src="images/s6.jpg" /><a href="#">Huevos</a><p>Criollos</p></li>
			<li><img src="images/s7.jpg" /><a href="#">Huevos</a><p>Criollos</p></li>
			<li><img src="images/s8.jpg" /><a href="#">Huevos</a><p>Criollos</p></li>
			<li><img src="images/s9.jpg" /><a href="#">Huevos</a><p>Criollos</p></li>
		 </ul>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
     </div>
     <div class="toogle">
     	<h3 class="m_3">Detalles del producto</h3>
     	<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
     </div>

      </div>
         <div class="rsingle span_1_of_single">
             <h5 class="m_1">Categorias</h5>
             <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
                 <option value="1">Regulares</option>
                 <option value="2">Especial</option>
                 <option value="3">Normal</option>

             </select>

             <ul class="kids">
                 <li><a href="#">Jumbo</a></li>
                 <li class="last"><a href="#">Doble A</a></li>
                 <li><a href="#">A</a></li>
                 <li><a href="#">B</a></li>
                 <li><a href="#">C</a></li>
                 <li><a href="#">D</a></li>
             </ul>
             <section  class="sky-form">
                 <h4>Precio</h4>
                 <div class="row row1 scroll-pane">
                     <div class="col col-4">
                         <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Rs 500 - Rs 700</label>
                     </div>
                     <div class="col col-4">
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 11700 - Rs 20000</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 21000 - Rs 31500</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 31500 - Rs 42000</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 42000 - Rs 52500</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Rs 52500 - Rs 63000</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 63500 - Rs 74000</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 74000 - Rs 84500</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 84500 - Rs 95000</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 95000 - Rs 105500</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 105500 - Rs 116000</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 126000 - Rs 136500</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 136500 - Rs 147000</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 147000 - Rs 157500</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 157500 - Rs 168000</label>
                         <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 168000 - Rs 178500</label>
                     </div>
                 </div>
             </section>



         </div>
			 <div class="clear"></div>
		   </div>
		</div>
<?php include "includes/footer.php" ?>