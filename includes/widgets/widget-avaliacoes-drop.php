<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

	class Elementor_Avaliacao_Drop extends \Elementor\Widget_Base {
	
	public function get_name() {
		return 'avaliacao-drop';
	}

	public function get_title() {
		return esc_html__( 'Avaliações de Produto', 'widget-blog-lancamento' );
	}

	public function get_icon() {
		return 'eicon-site-identity';		
	}

	public function get_custom_help_url() {
		return 'https://landingmax.com.br/doc/widgets/';
	}

	public function get_categories() {
		return [ 'basic' ];

	}

	public function get_keywords() {
		return [ 'avaliacoes', 'drop', 'produto' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Conteúdo', 'landingmax' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'nomecliente',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Nome do Cliente', 'landingmax' ),
				'placeholder' => esc_html__( 'Nome do Cliente', 'landingmax' ),
				'default' => esc_html__( 'Nome do Cliente', 'landingmax' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'subtituloavaliacao',
			[
				'label' => esc_html__( 'Subtítulo', 'elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__( 'São Paulo/SP', 'elementor' ),
				'default' => esc_html__( 'São Paulo/SP', 'elementor' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'avaliacaodocliente',
			[
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label' => esc_html__( 'Avaliação do cliente', 'landingmax' ),
				'placeholder' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus maximus mattis risus, non imperdiet urna commodo bibendum. Donec sed rhoncus arcu.', 'landingmax' ),
				'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus maximus mattis risus, non imperdiet urna commodo bibendum. Donec sed rhoncus arcu.', 'landingmax' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'notaavaliacao',
			[
				'label' => esc_html__( 'Nota da avaliação', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_html__( '4,8', 'landingmax' ),
				'default' => esc_html__( '4,8', 'landingmax' ),
			]
		);

		$repeater->add_control(
			'imgavaliacoes',
			[
				'label' => esc_html__( 'Imagem da avaliação', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'listadeavaliacoes',
			[
				'label' => esc_html__( 'Avaliações', 'landingmax' ),
				'type' => Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'nomecliente' => esc_html__( 'Nome do Cliente', 'landingmax' ),
						'subtituloavaliacao' => esc_html__( 'São Paulo/SP', 'landingmax' ),
						'avaliacaodocliente' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus maximus mattis risus, non imperdiet urna commodo bibendum. Donec sed rhoncus arcu.', 'landingmax' ),
						'notaavaliacao'=> esc_html__( '4,8', 'landingmax' ),
					],				
				],

				'title_field' => '{{{nomecliente}}}',
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'style_section1',
			[
				'label' => esc_html__( 'Conteúdo', 'landingmax' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'nome_typography',
				'label' => esc_html__( 'Fonte nome', 'landingmax' ),
				'selector' => '{{WRAPPER}} .nome-avaliacao-drop',
			]
		);
		
		$this->add_control(
			'text_color_nome',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Cor nome', 'landingmax' ),
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .nome-avaliacao-drop' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subtitulo_typography',
				'label' => esc_html__( 'Fonte subtítulo', 'landingmax' ),
				'selector' => '{{WRAPPER}} .subtitulo-avaliacao-drop',
			]
		);
		
		$this->add_control(
			'text_color_subtitulo',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Cor subtítulo', 'landingmax' ),
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .subtitulo-avaliacao-drop' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'avaliacao_typography',
				'label' => esc_html__( 'Fonte avaliação', 'landingmax' ),
				'selector' => '{{WRAPPER}} .texto-avaliacao-drop',
			]
		);
		
		$this->add_control(
			'text_color_avaliacao',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Cor avaliação', 'landingmax' ),
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .texto-avaliacao-drop' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'selector' => '#cplwidget',
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'style_section2',
			[
				'label' => esc_html__( 'Bloco', 'landingmax' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'fundo_color_avaliacao',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Fundo blocos', 'landingmax' ),
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .col-avaliacao-drop' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'borderbloco',
				'selector' => '.col-avaliacao-drop',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'border_radius_bloco',
			[
				'label' => esc_html__( 'Arredondamento', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'default' => [
					'top' => '5',
					'unit' => 'px',
					'right' => '5',
					'unit' => 'px',
					'bottom' => '5',
					'unit' => 'px',
					'left' => '5',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .col-avaliacao-drop' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

	}

protected function render() {
	?>

<style>
	.block-avaliacao {
		column-count: 4;
  column-gap: 10px;
	}
	.col-avaliacao-drop {margin: 10px; padding: 10px;   margin: 0;
  display: grid;
  grid-template-rows: 1fr auto;
  margin-bottom: 20px;
  break-inside: avoid;}
  
  .nome-avaliacao-drop {font-size: 1.2em; font-weight: 600; margin: 0; margin-top:15px; }
  .nota-avaliacao-drop{font-weight: 600;  color: black; position: absolute;}
  .img-avaliacao-drop{z-index: 1;   max-width: 100%;
  display: block;}
  .div-nota-drop {
	  padding: 10px 0;
  }

</style>

	<?php
		$settings = $this->get_settings_for_display();
		$id_int = substr( $this->get_id_int(), 0, 3 );
	?>

	<div class="block-avaliacao">
		<?php foreach ( $settings['listadeavaliacoes'] as $index => $item ) :?>	
			<div class="col-avaliacao-drop">
				
				<div class="div-img-avaliacao-drop">
					<img class="img-avaliacao-drop" src="<?php echo esc_url( $item['imgavaliacoes']['url']);?>">
				</div>
				<div class="div-nota-drop">
				<spam class="nota-avaliacao-drop">⭐ <?php echo $item['notaavaliacao'];?></spam>
				</div>
				<p class="nome-avaliacao-drop"><?php echo $item['nomecliente'];?> </p>
				<p class="subtitulo-avaliacao-drop"><?php echo $item['subtituloavaliacao'];?></p>
				<p class="texto-avaliacao-drop"><?php echo $item['avaliacaodocliente'];?></p>
			</div>
		<?php endforeach; ?>
	</div>
<?php 
}
}