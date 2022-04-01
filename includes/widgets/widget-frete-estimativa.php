<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

	class Elementor_Frete_Estimativa extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'estimativa-frete';
	}

	public function get_title() {
		return esc_html__( 'Estimativa de Frete', 'landingmax' );
	}

	public function get_icon() {
		return 'eicon-site-identity';		
	}

	public function get_custom_help_url() {
		return 'https://kalin.digital/doc/widgets-estimativa-frete/';
	}

	public function get_categories() {
		return [ 'basic' ];

	}

	public function get_keywords() {
		return [ 'frete', 'estimativa', 'drop' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Lançamento', 'landingmax' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'icone_frete',
			[
				'label' => esc_html__( 'Escolha o icone', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://cdn.shopify.com/s/files/1/0475/7389/3282/files/truck-brasas.svg',
				],
			]
		);

		$this->add_control(
			'descricaofrete',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Descrição', 'landingmax' ),
				'placeholder' => esc_html__( 'Descrição do frete', 'landingmax' ),
				'default' => esc_html__( 'Descrição do frete', 'landingmax' ),
			]
		);

		$this->add_control(
			'categoria_frete',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Categoria de envio', 'landingmax' ),
				'placeholder' => esc_html__( 'Expresso', 'landingmax' ),
				'default' => esc_html__( 'Expresso', 'landingmax' ),
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'icone_lista',
			[
				'label' => esc_html__( 'Escolha o icone', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_control(
			'titulo_lista',
			[
				'label' => esc_html__( 'Título', 'elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__( 'Garantia Total', 'elementor' ),
				'default' => esc_html__( 'Garantia Total', 'elementor' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'descricao_lista',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Descrição', 'landingmax' ),
				'placeholder' => esc_html__( '7 dias para trocas e devoluções.', 'landingmax' ),
				'default' => esc_html__( '7 dias para trocas e devoluções.', 'landingmax' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);


		$this->add_control(
			'listaaulas',
			[
				'label' => esc_html__( 'Lista', 'landingmax' ),
				'type' => Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'titulo_lista' => esc_html__( 'Garantia Total', 'landingmax' ),
						'descricao_lista' => esc_html__( '7 dias para trocas e devoluções.', 'landingmax' ),
					],
					[
						'titulo_lista' => esc_html__( 'Entrega Segura', 'landingmax' ),
						'descricao_lista' => esc_html__( 'Garantia de recebimento ou seu dinheiro de volta.', 'landingmax' ),
					],					
				],

				'title_field' => '{{{titulo_lista}}}',
			]
		);

		$this->end_controls_section();
	}

	// s1BMk73GO1OPD-IL6UQ-SueHj-jnBRnrA3jATdwW7x4

protected function render() {
	?>
	<?php $settings = $this->get_settings_for_display(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
          function convertDate(e) {
              var t, o = new Date(e);
              return [(t = o.getDate(), t < 10 ? "0" + t : t)].join("/")
          }
          function getMesExtenso(e) {
              var t = new Array(12);
              return t[0] = "janeiro", t[1] = "fevereiro", t[2] = "março", t[3] = "abril", t[4] = "maio", t[5] = "junho", t[6] = "julho", t[7] = "agosto", t[8] = "setembro", t[9] = "outubro", t[10] = "novembro", t[11] = "dezembro", t[e]
          }
          jQuery(document).ready(function(e) {
              var t = new Date,
                  n = t.setDate(t.getDate() + 11),
                  o = t.setDate(t.getDate() - 22),
                  r = getMesExtenso(t.getMonth());
              if (convertDate(o) > convertDate(n)) var a = "<strong>" + convertDate(n) + "</strong> e <strong>" + convertDate(o) + " de " + r + "</strong>";
              else {
                  if (null == (s = getMesExtenso(t.getMonth() + 1))) var s = getMesExtenso(t.getMonth() - 11);
                  a = "<strong>" + convertDate(n) + " de " + r + "</strong> e <strong>" + convertDate(o) + " de " + s + "</strong>"
              }
              e.getJSON("https://wtfismyip.com/json", function(t) {
                  var o = (t = t.YourFuckingLocation).replace(", Brazil", "");
                  e(".custom-address").html("<font color='#00a650'><b>Entregamos</b></font> em <strong><font color='#595959'>" + o + "</font></strong>"), 
                    e(".shipping-estimated").html("Confira a estimativa de entrega do seu pedido."), e(".shipping-preview-loading").hide()
                         e("#deliverygarante").html("Estimada entre " + a + "."), e(".shipping-preview-loading").hide() 
              })
              
              $(".shipping-preview-line").click(function () {

	});
          });

</script>

<div class="shipping-preview-line" style="display:flex;border: 1px solid #d9d9d9;border-radius: 10px;background: white;">
	<div style="width: 52px;height: 52px;">
		<img style="height:auto;width:auto;padding: 10px;" src="https://cdn.shopify.com/s/files/1/0475/7389/3282/files/truck-brasas.svg" class="icon-frete">
	</div>
    <div style="width:auto; padding: 4px;">
		<p class="custom-address" style="margin: 0;margin-bottom: -5px;"><font color="#00a650"><b>Entregamos</b></font> em <strong><font color="#595959">Maringá, PR</font></strong></p>
    	<div id="deliverygarante" style="margin: 0; margin-top: -2px;">Estimada entre <strong>01</strong> e <strong>10 de março</strong>.</div>
	</div>

</div>

<?php 
}
}