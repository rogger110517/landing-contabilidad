<!-- Footer -->
<footer class="footer">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 d-flex justify-content-center align-item-center flex-column">
                        <div class="">
                            <img src="https://www.sanjuandelurigancho.com/assets/images/logo/logo_sjlpe_light_2.png" alt="">
                        </div>
                        <div class="politica-container pt-2"> 
                            <p class="politica-container-paragraph">Políticas de Privacidad y Uso de Datos</p>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center align-item-center footer-line">
                        <div class="hour-container">
                            <div>
                                <p class="hour-container-title">HORARIOS DE ATENCIÓN</p>
                                <p class="hour-container-list">9:00 am - 18:00 pm</p>
                                <p class="hour-container-day">Lunes a Viernes</p>
                            </div>
                            <div class="pt-4">
                                <p class="hour-container-title">UBÍCANOS</p>
                                <p class="hour-container-list">Mz c lote 14 Jr los Médicos</p>
                                <p class="hour-container-day">San Juan de lurigancho</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-start align-items-center flex-column footer-line">
                        <div class="telefonica-container">
                            <p class="telefonica-container-title">CENTRAL TELEFÓNICA</p>
                            <a href="javascript:void(0)" class="telefonica-container-number">992-269-551</a>
                        </div>
                        <div class="telefonica-container pt-4">
                            <p class="telefonica-container-title">CENTRAL TELEFÓNICA</p>
                            <a  href="javascript:void(0)" class="telefonica-container-number">940-612-368</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

	<a href="https://api.whatsapp.com/send?phone=51999999999&text=Hola, " target="_blank" class="float-wsp">
		<i class="fab fa-whatsapp fa-3x my-float"></i>
	</a>
	
	<!-- /Footer -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="https://sorgalla.com/lity/dist/lity.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/assets/js/lightbox.js"></script>
	<script>
		addEventListener("DOMContentLoaded",()=>{
			// Validar Menu Responsive
			const btn_menu = document.getElementById("bn-menu");
			const navHeader = document.querySelector("#header .navHeader");
			const header = document.getElementById('header');

			const icon_bar = document.querySelector('#bn-menu .fa-bars');
			const icon_close = document.querySelector('#bn-menu .fa-times');

			btn_menu.addEventListener("click", ()=>{
				navHeader.classList.toggle('active');
				header.classList.add('active');
				icon_bar.classList.toggle('active');
				icon_close.classList.toggle('active');
			});

			// Activar SubMenu
			const submenu = document.querySelector("#menu-header-menu .sub-menu");
			const list_li = document.querySelectorAll("#menu-header-menu .menu-item-has-children");
			
			for (let i = 0; i < list_li.length; i++) {
				list_li[i].addEventListener("click",()=>{
					list_li[i].classList.toggle("active-submenu");
					console.log("list_li[i]");
				});
			}

		});
	</script>									
</body>
</html>