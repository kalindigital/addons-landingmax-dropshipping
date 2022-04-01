<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
	class Elementor_Produto_Drop extends \Elementor\Widget_Base {

// infos widget
	public function get_name() {
		return 'produto-drop';
	}

	public function get_title() {
		return esc_html__( 'Produto Drop', 'landingmax' );
	}

	public function get_icon() {
		return 'eicon-site-identity';		
	}

	public function get_custom_help_url() {
		return 'https://kalin.digital/doc/widgets-produto-drop/';
	}

	public function get_categories() {
		return [ 'basic' ];

	}

	public function get_keywords() {
		return [ 'produto', 'drop' ];
	}

// infos widget

	protected function register_controls() {

	// seção imagem
		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Imagem', 'landingmax' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'imgproduto',
			[
				'label' => esc_html__( 'Escolha uma imagem', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://kalin.digital/assets/product-mini-camera.jpg',
				],
			]
		);

		$this->end_controls_section();

	// seção imagem

	// seção itens
		$this->start_controls_section(
			'content_section1',
			[
				'label' => esc_html__( 'Itens', 'landingmax' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'icon_lista_item1',
			[
				'label' => esc_html__( 'Icone item 1', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://kalin.digital/assets/icon1.png',
				],
			]
		);

		$this->add_control(
			'icon_lista_item2',
			[
				'label' => esc_html__( 'Icone item 2', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://kalin.digital/assets/icon2.png',
				],
			]
		);

		$this->add_control(
			'text_lista_item1',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Titulo item 1', 'landingmax' ),
				'placeholder' => esc_html__( 'Compra Protegida', 'landingmax' ),
				'default' => esc_html__( 'Compra Protegida', 'landingmax' ),
			]
		);

		
		$this->add_control(
			'desc_lista_item1',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Descrição item 1', 'landingmax' ),
				'placeholder' => esc_html__( 'Garantia de 90 Dias', 'landingmax' ),
				'default' => esc_html__( 'Garantia de 90 Dias', 'landingmax' ),
			]
		);


		$this->add_control(
			'text_lista_item2',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Titulo item 2', 'landingmax' ),
				'placeholder' => esc_html__( 'Troca ou Devolução', 'landingmax' ),
				'default' => esc_html__( 'Troca ou Devolução', 'landingmax' ),
			]
		);

		$this->add_control(
			'desc_lista_item2',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Descrição item 2', 'landingmax' ),
				'placeholder' => esc_html__( '7 dias para trocar ou devolver', 'landingmax' ),
				'default' => esc_html__( '7 dias para trocar ou devolver', 'landingmax' ),
			]
		);

		$this->end_controls_section();

	// seção itens

	// seção produtos
		$this->start_controls_section(
			'content_section3',
			[
				'label' => esc_html__( 'Produto', 'landingmax' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// nome produto
		$this->add_control(
			'nomeprodutodrop',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Nome do produto', 'landingmax' ),
				'placeholder' => esc_html__( 'Mini Câmera Wi-Fi', 'landingmax' ),
				'default' => esc_html__( 'Mini Câmera Wi-Fi', 'landingmax' ),
			]
		);

		// qntd de avaliações
		$this->add_control(
			'avaliacoesprodutodrop',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Quantidade de avaliações', 'landingmax' ),
				'placeholder' => esc_html__( '384', 'landingmax' ),
				'default' => esc_html__( '384', 'landingmax' ),
			]
		);

		// qntd de pedidos
		$this->add_control(
			'pedidosprodutodrop',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Quantidade de pedidos', 'landingmax' ),
				'placeholder' => esc_html__( '746', 'landingmax' ),
				'default' => esc_html__( '746', 'landingmax' ),
			]
		);

		// preço antigo
		$this->add_control(
			'precoantigo',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Preço original', 'landingmax' ),
				'placeholder' => esc_html__( 'R$ 259,90', 'landingmax' ),
				'default' => esc_html__( 'R$ 259,90', 'landingmax' ),
			]
		);

		// preço desconto
		$this->add_control(
			'preconovo',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Preço com desconto', 'landingmax' ),
				'placeholder' => esc_html__( 'R$ 173,90', 'landingmax' ),
				'default' => esc_html__( 'R$ 173,90', 'landingmax' ),
			]
		);

		// qntd de parcelas
		$this->add_control(
			'parcelamentoprodutodrop',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Quantidade de parcelas', 'landingmax' ),
				'placeholder' => esc_html__( '12', 'landingmax' ),
				'default' => esc_html__( '12', 'landingmax' ),
			]
		);

		// valor parcelas
		$this->add_control(
			'valorparcelamentoprodutodrop',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Valor das parcelas', 'landingmax' ),
				'placeholder' => esc_html__( 'R$ 17,93', 'landingmax' ),
				'default' => esc_html__( 'R$ 17,93', 'landingmax' ),
			]
		);

		// frase desconto
		$this->add_control(
			'valordesconto',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Desconto', 'landingmax' ),
				'placeholder' => esc_html__( 'ECONOMIZE R$ 86,00', 'landingmax' ),
				'default' => esc_html__( 'ECONOMIZE R$ 86,00', 'landingmax' ),
			]
		);

		// frase estoque
		$this->add_control(
			'estoqueprodutodrop',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Frase barra de estoque', 'landingmax' ),
				'placeholder' => esc_html__( 'RESTAM 7 EM ESTOQUE', 'landingmax' ),
				'default' => esc_html__( 'RESTAM 7 EM ESTOQUE', 'landingmax' ),
			]
		);

		// link botão
		$this->add_control(
			'link_btn',
			[
				'label' => esc_html__( 'Link do botão', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'https://seu-link.com', 'landingmax' ),
				'default' => [
					'url' => '#',
				],
				
			]
		);
		
		// frase frete
		$this->add_control(
			'frase_frete',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Titulo frete', 'landingmax' ),
				'placeholder' => esc_html__( 'Frete Grátis para', 'landingmax' ),
				'default' => esc_html__( 'Frete Grátis para', 'landingmax' ),
			]
		);

		// selo de pagamento
		$this->add_control(
			'seloproduto',
			[
				'label' => esc_html__( 'Escolha um selo', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => 'https://kalin.digital/assets/selo-1.png',
				],
			]
		);

		$this->end_controls_section();

	// seção produtos

	// seção estilo informações
		$this->start_controls_section(
			'style_section1',
			[
				'label' => esc_html__( 'Informações', 'landingmax' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// padding col info
		$this->add_responsive_control(
			'padding_col_infos',
			[
				'label' => esc_html__( 'Padding informações', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'default' => [
					'top' => '20',
					'unit' => 'px',
					'right' => '20',
					'unit' => 'px',
					'bottom' => '20',
					'unit' => 'px',
					'left' => '20',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .col-info-produto-drop' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		$this->add_responsive_control(
			'padding_img',
			[
				'label' => esc_html__( 'Padding imagem', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'default' => [
					'top' => '0',
					'unit' => 'px',
					'right' => '0',
					'unit' => 'px',
					'bottom' => '0',
					'unit' => 'px',
					'left' => '0',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .imagem-produto-drop-gallery' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);


		// espaçamento fonte nome
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__( 'Fonte nome', 'landingmax' ),
				'name' => 'nome_produto_typography',
				'selector' => '{{WRAPPER}} .nome-produto-drop',
			]
		);

		// cor nome produto
		$this->add_control(
			'cor_nome_produto_drop',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Cor nome', 'landingmax' ),
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .nome-produto-drop' => 'color: {{VALUE}}',
				],
			]
		);

		// espaçamento nome
		$this->add_responsive_control(
			'espacamento_nome',
			[
				'label' => esc_html__( 'Espaçamento nome', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => '10',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '10',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '10',
					'unit' => 'px',
				],
				'size_units' => [ '%', 'px'],
				'range' => [
					'%' => [
						'min' => 1,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .nome-produto-drop' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		// fonte avaliações e pedidos
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__( 'Fonte avaliações e pedidos', 'landingmax' ),
				'name' => 'avaliacoes_produto_typography',
				'selector' => '{{WRAPPER}} .avaliacao-produto-drop',
			]
		);

		// cor avaliações e pedidos
		$this->add_control(
			'cor_avaliacoes_pedidos_produto_drop',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Cor avaliações e pedidos', 'landingmax' ),
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .avaliacao-produto-drop' => 'color: {{VALUE}}',
				],
			]
		);

		// espaçamento avaliações e pedidos
		$this->add_responsive_control(
			'espacamento_avaliacao',
			[
				'label' => esc_html__( 'Espaçamento avaliações', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => '10',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '10',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '10',
					'unit' => 'px',
				],
				'size_units' => [ '%', 'px'],
				'range' => [
					'%' => [
						'min' => 1,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .avaliacao-produto-drop' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		// cor divisorias
		$this->add_control(
			'cor_divisor_produto_drop',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Cor divisor', 'landingmax' ),
				'default' => '#DDDDDD',
				'selectors' => [
					'{{WRAPPER}} .divisor-produto-drop' => 'border-color:{{VALUE}} ',
				],
			]
		);

		// espaçamento divisor
		$this->add_responsive_control(
			'espacamento_divisor',
			[
				'label' => esc_html__( 'Espaçamento divisor', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => '10',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '10',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '10',
					'unit' => 'px',
				],
				'size_units' => [ '%', 'px'],
				'range' => [
					'%' => [
						'min' => 1,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .divisor-produto-drop' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		// fonte preço original 
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__( 'Fonte preço original', 'landingmax' ),
				'name' => 'preco_antigo_produto_typography',
				'selector' => '{{WRAPPER}} .preco-antigo-produto-drop',
			]
		);

		// cor preço original
		$this->add_control(
			'cor_preco_original_produto_drop',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Cor preço original', 'landingmax' ),
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .preco-antigo-produto-drop' => 'color: {{VALUE}}',
				],
			]
		);

		// espaçamento preço original
		$this->add_responsive_control(
			'espacamento_preco_original',
			[
				'label' => esc_html__( 'Espaçamento preço original', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => '0',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '0',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '0',
					'unit' => 'px',
				],
				'size_units' => [ '%', 'px'],
				'range' => [
					'%' => [
						'min' => 1,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .preco-antigo-produto-drop' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		// fonte preço desconto
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__( 'Fonte preço com desconto', 'landingmax' ),
				'name' => 'preco_desconto_produto_typography',
				'selector' => '{{WRAPPER}} .preco-novo-produto-drop',
			]
		);

		// cor preço desconto 
		$this->add_control(
			'cor_preco_desconto_produto_drop',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Cor preço com desconto', 'landingmax' ),
				'default' => '#0ABD4B',
				'selectors' => [
					'{{WRAPPER}} .preco-novo-produto-drop' => 'color: {{VALUE}}',
				],
			]
		);

		

		// fonte preço desconto
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__( 'Fonte bag desconto', 'landingmax' ),
				'name' => 'fonte_desconto_produto_typography',
				'selector' => '{{WRAPPER}} .porcentagem-produto-drop',
			]
		);

		// cor fundo bag
		$this->add_control(
			'cor_bag_desconto_produto_drop',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Fundo bag desconto', 'landingmax' ),
				'default' => '#f37319',
				'selectors' => [
					'{{WRAPPER}} #porcentagem-id-produto-drop' => 'background: {{VALUE}}',
				],
			]
		);

		// cor texto bag
		$this->add_control(
			'cor_texto_bag_desconto_produto_drop',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Cor fonte bag', 'landingmax' ),
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} #porcentagem-id-produto-drop' => 'color: {{VALUE}}',
				],
			]
		);

		// espaçamento preço desconto
		$this->add_responsive_control(
			'espacamento_preco_desconto',
			[
				'label' => esc_html__( 'Espaçamento preço desconto', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => '0',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '0',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '0',
					'unit' => 'px',
				],
				'size_units' => [ '%', 'px'],
				'range' => [
					'%' => [
						'min' => 1,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .preco-novo-produto-drop' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		// fonte parcelamento
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__( 'Fonte parcelamento', 'landingmax' ),
				'name' => 'parcelamento_produto_typography',
				'selector' => '{{WRAPPER}} .parcelamento-produto-drop',
			]
		);

		// cor parcelamento
		$this->add_control(
			'cor_parcelamento_produto_drop',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Cor parcelamento', 'landingmax' ),
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .parcelamento-produto-drop' => 'color: {{VALUE}}',
				],
			]
		);

		// espaçamento parcelamento
		$this->add_responsive_control(
			'espacamento_parcelamento',
			[
				'label' => esc_html__( 'Espaçamento parcelamento', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'size_units' => [ '%', 'px'],
				'range' => [
					'%' => [
						'min' => 1,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .parcelamento-produto-drop' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		// fonte frete
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__( 'Fonte frete', 'landingmax' ),
				'name' => 'frete_produto_typography',
				'selector' => '{{WRAPPER}} .custom-address-produto-drop',
			]
		);

		// cor titulo frete
		$this->add_control(
			'cor_titulo_frete_produto_drop',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Cor título frete', 'landingmax' ),
				'default' => '#0ABD4B',
				'selectors' => [
					'{{WRAPPER}} .custom-address-produto-drop' => 'color: {{VALUE}}',
				],
			]
		);

		// cor fundo frete
		$this->add_control(
			'cor_fundo_frete_produto_drop',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Fundo frete', 'landingmax' ),
				'default' => '#f4f4f4',
				'selectors' => [
					'{{WRAPPER}} .tempofrete' => 'background-color: {{VALUE}}',
				],
			]
		);

		// padding FRETE
		$this->add_responsive_control(
			'padding_col_frete',
			[
				'label' => esc_html__( 'Padding frete', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'default' => [
					'top' => '10',
					'unit' => 'px',
					'right' => '10',
					'unit' => 'px',
					'bottom' => '10',
					'unit' => 'px',
					'left' => '10',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .tempofrete' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				
			]
		);

		// arredondamento bloco frete
		$this->add_control(
			'border_bloco_frete_produto_drop',
			[
				'label' => esc_html__( 'Arredondamento frete', 'landingmax' ),
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
					'{{WRAPPER}} .tempofrete' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// borda bloco
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'borderprodutodropfrete',
				'selector' => '.tempofrete',

			]
		);

		// cor barra estoque
		$this->add_control(
			'cor_barra_estoque_produto_drop',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Cor da barra', 'landingmax' ),
				'default' => '#EF7119',
				'selectors' => [
					'{{WRAPPER}} .progress-bar-inner' => 'background-color: {{VALUE}}',
				],
				'separator' => 'before',
			]
		);

		// cor barra fundo
		$this->add_control(
			'cor_barra_fundo_estoque_produto_drop',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__( 'Cor do fundo da barra', 'landingmax' ),
				'default' => '#cdcdcd',
				'selectors' => [
					'{{WRAPPER}} .progress-bar' => 'background-color: {{VALUE}}',
				],
			]
		);

		// fonte estoque
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__( 'Fonte estoque', 'landingmax' ),
				'name' => 'estoque_produto_typography',
				'selector' => '{{WRAPPER}} .txt029',
			]
		);

		// largura barra frete
		$this->add_responsive_control(
			'largura_barra',
			[
				'label' => esc_html__( 'Largura da barra', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => '40',
					'unit' => '%',
				],
				'tablet_default' => [
					'size' => '60',
					'unit' => '%',
				],
				'mobile_default' => [
					'size' => '70',
					'unit' => '%',
				],
				'size_units' => [ '%', 'px'],
				'range' => [
					'%' => [
						'min' => -20,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .progress-bar-inner' => 'width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		// fonte estimativa
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__( 'Fonte estimativa', 'landingmax' ),
				'name' => 'estimativa_produto_typography',
				'selector' => '{{WRAPPER}} .shipping-estimated-produto-drop',
			]
		);

		// espaçamento frete
		$this->add_responsive_control(
			'espacamento_frete',
			[
				'label' => esc_html__( 'Espaçamento frete', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'size_units' => [ '%', 'px'],
				'range' => [
					'%' => [
						'min' => -20,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .frete-produto-drop' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		// fonte itens
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__( 'Fonte itens', 'landingmax' ),
				'name' => 'item_produto_typography',
				'selector' => '{{WRAPPER}} .font-item-prod',
			]
		);

		// fonte descrição itens
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__( 'Fonte descrições', 'landingmax' ),
				'name' => 'item_desc_produto_typography',
				'selector' => '{{WRAPPER}} .font-desc-prod',
			]
		);


		$this->add_responsive_control(
			'tamanho_item1',
			[
				'label' => esc_html__( 'tamanho icone item 1', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => '100',
					'unit' => '%',
				],
				'tablet_default' => [
					'size' => '100',
					'unit' => '%',
				],
				'mobile_default' => [
					'size' => '100',
					'unit' => '%',
				],
				'size_units' => [ '%'],
				'range' => [
					'%' => [
						'min' => -20,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .img-item-width-1' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'tamanho_item2',
			[
				'label' => esc_html__( 'tamanho icone item 2', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => '100',
					'unit' => '%',
				],
				'tablet_default' => [
					'size' => '100',
					'unit' => '%',
				],
				'mobile_default' => [
					'size' => '100',
					'unit' => '%',
				],
				'size_units' => [ '%'],
				'range' => [
					'%' => [
						'min' => -20,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .img-item-width-2' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// espaçamento itens
		$this->add_responsive_control(
			'espacamento_itens',
			[
				'label' => esc_html__( 'Espaçamento itens', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'size_units' => [ '%', 'px'],
				'range' => [
					'%' => [
						'min' => -20,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .box-lista-produto-drop' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'after',
			]
		);

		

		// espaçamento estoque
		$this->add_responsive_control(
			'espacamento_estoque',
			[
				'label' => esc_html__( 'Espaçamento estoque', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'size_units' => [ '%', 'px'],
				'range' => [
					'%' => [
						'min' => 1,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .estoque-produto-frete' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// alinhamento selo
		$this->add_responsive_control(
			'alinhamento_selo',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Alinhamento do selo', 'landingmax' ),
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'landingmax' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'landingmax' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'landingmax' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'devices' => [ 'desktop', 'tablet','mobile' ],
				'prefix_class' => 'content-align-%s',
				'selectors' => [
					'{{WRAPPER}} .selo-alinhamento' => 'text-align: {{VALUE}};',
				],
			]
		);

		// espaçamento selo
		$this->add_responsive_control(
			'espacamento_selo',
			[
				'label' => esc_html__( 'Espaçamento selo', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => '20',
					'unit' => 'px',
				],
				'size_units' => [ '%', 'px'],
				'range' => [
					'%' => [
						'min' => 1,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .selo-alinhamento' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

	// seção estilo informações

	// seção estilo bloco
		$this->start_controls_section(
			'style_section2',
			[
				'label' => esc_html__( 'Bloco', 'landingmax' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// borda bloco
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'borderprodutodrop',
				'selector' => '.block-produto-drop',
				'separator' => 'before',
			]
		);

		// arredondamento bloco
		$this->add_control(
			'border_radius_produto_drop',
			[
				'label' => esc_html__( 'Arredondamento', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'default' => [
					'top' => '15',
					'unit' => 'px',
					'right' => '15',
					'unit' => 'px',
					'bottom' => '15',
					'unit' => 'px',
					'left' => '15',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .block-produto-drop' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// fundo bloco
		$this->add_control(
			'background_color_produto_drop',
			[
				'label' => esc_html__( 'Fundo do bloco', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .block-produto-drop' => 'background-color: {{VALUE}};',
				],
			]
		);

		// padding bloco
		$this->add_responsive_control(
			'padding_bloco_produto_drop',
			[
				'label' => esc_html__( 'Padding', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'default' => [
					'top' => '0',
					'unit' => 'px',
					'right' => '0',
					'unit' => 'px',
					'bottom' => '0',
					'unit' => 'px',
					'left' => '0',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .block-produto-drop' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

	// seção estilo bloco
	
	// seção estilo botão

		$this->start_controls_section(
			'section_style',
			[
				'label' => esc_html__( 'Botão', 'landingmax' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// largura 100%?
		$this->add_control(
			'btn_full',
			[
				'label' => esc_html__( 'Largura 100%', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'yes', 'landingmax' ),
				'label_off' => esc_html__( 'no', 'landingmax' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		// fonte botão
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'btn_typography',
				'selector' => '{{WRAPPER}} .botao-produto-drop',
			]
		);

		// fonte sombra
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'btn_text_shadow',
				'selector' => '{{WRAPPER}} .botao-produto-drop',
			]
		);

		$this->start_controls_tabs( 'tabs_button_style' );

		$this->start_controls_tab(
			'btn_tab_button_normal',
			[
				'label' => esc_html__( 'Normal', 'landingmax' ),
			]
		);

		$this->add_control(
			'btn_button_text_color',
			[
				'label' => esc_html__( 'Cor do texto', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#FFFFFF',
				'selectors' => [
					'{{WRAPPER}} .botao-produto-drop' => 'fill: {{VALUE}}; color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'btn_background',
				'label' => esc_html__( 'Background', 'landingmax' ),
				'types' => [ 'classic', 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .botao-produto-drop',
				'fields_options' => [
					'background' => [
						'default' => 'classic',
					],
					'color' => [
							'default' => '#0ABD4B',
					],
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_button_hover',
			[
				'label' => esc_html__( 'Hover', 'landingmax' ),
			]
		);

		$this->add_control(
			'btn_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .botao-produto-drop:hover, {{WRAPPER}} .botao-produto-drop:focus' => 'color: {{VALUE}};',
					'{{WRAPPER}} .botao-produto-drop:hover svg, {{WRAPPER}} .botao-produto-drop:focus svg' => 'fill: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'btn_button_background_hover',
				'label' => esc_html__( 'Background', 'landingmax' ),
				'types' => [ 'classic', 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .botao-produto-drop:hover, {{WRAPPER}} .botao-produto-drop:focus',
				'fields_options' => [
					'background' => [
						'default' => 'classic',
					],
				],
			]
		);

		$this->add_control(
			'btn_button_hover_border_color',
			[
				'label' => esc_html__( 'Border Color', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'border_border!' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .botao-produto-drop:hover, {{WRAPPER}} .botao-produto-drop:focus' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'btn_border',
				'selector' => '{{WRAPPER}} .botao-produto-drop',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'btn_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .botao-produto-drop' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'btn_button_box_shadow',
				'selector' => '{{WRAPPER}} .botao-produto-drop',
			]
		);

		$this->add_responsive_control(
			'btn_texto_padding',
			[
				'label' => esc_html__( 'Padding', 'landingmax' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .botao-produto-drop' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

	// seção estilo botão  

}

protected function render() {
?>

<?php $settings = $this->get_settings_for_display(); ?>

<style>
	.block-produto-drop{display:flex} .col-img-produto-drop{width: 50%;} .col-info-produto-drop{width: 50%;} .nome-produto-drop {margin-top:0;} .preco-antigo-produto-drop {margin-top: 0;} .preco-novo-produto-drop{margin-top: 0;} .parcelamento-produto-drop{margin-top: 0;} .avaliacao-produto-drop{margin-top:0;} .frete-produto-drop{margin-top: 0;}
	@media (max-width: 600px) {.block-produto-drop {
		display: block;
	}
	.col-img-produto-drop {
		width: 100%;
	}
	.col-info-produto-drop {
		width: 100%;
	}
.porcentagem-produto-drop {
	font-size: 10pt;
}
}
	</style>

<div class="block-produto-drop" style="backdrop-filter: blur( 10px );">
	<div class="col-img-produto-drop">
		
	<img class="imagem-produto-drop-gallery" src="<?php echo esc_url( $settings['imgproduto']['url'] );?>">
	</div>
	<div class="col-info-produto-drop">
		<h1 class="nome-produto-drop"><?php echo $settings['nomeprodutodrop'];?> </h1>
		<p class="avaliacao-produto-drop">⭐ <strong>4,8</strong> (<?php echo $settings['avaliacoesprodutodrop'];?> avaliações | <?php echo $settings['pedidosprodutodrop'];?> pedidos ) </p>
		<hr class="divisor-produto-drop" style="border-top:0; margin-top:0">
		<p class="preco-antigo-produto-drop" id="valor-antigo-produto-drop"><?php echo $settings['precoantigo'];?> </p>
		<div style="display:flex;">
		<h1 class="preco-novo-produto-drop"><?php echo $settings['preconovo'];?></h1><p class="porcentagem-produto-drop" id="porcentagem-id-produto-drop" style="
    padding: 5px;        border-radius: 5px;    margin-left: 5px;    line-height: 1;    height: 20pt;    font-weight: 600;"><?php echo $settings['valordesconto'];?></p>
		</div>
		<p class="parcelamento-produto-drop">ou em até <?php echo $settings['parcelamentoprodutodrop'];?> de <?php echo $settings['valorparcelamentoprodutodrop'];?></p>
		<div class="frete-produto-drop">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			
		<script>
            function convertDate(inputFormat) {
            function pad(s) { return (s < 10) ? '0' + s : s; }
                var d = new Date(inputFormat);
                return [pad(d.getDate())].join('/');
            }
            function getMesExtenso(mes){
                return this.arrayMes[mes];
            	}
            var arrayMes = new Array(12);
            arrayMes[0] = "janeiro";
            arrayMes[1] = "fevereiro";
            arrayMes[2] = "março";
            arrayMes[3] = "abril";
            arrayMes[4] = "maio";
            arrayMes[5] = "junho";
            arrayMes[6] = "julho";
            arrayMes[7] = "agosto";
            arrayMes[8] = "setembro";
            arrayMes[9] = "outubro";
            arrayMes[10] = "novembro";
            arrayMes[11] = "dezembro";
  			var showMes = "";
            var date = new Date();
            var diax = date.setDate(date.getDate() + 10);
            var diay = date.setDate(date.getDate() + 21);
            var mes = getMesExtenso(date.getMonth());
            function data(data){
              var d = new Date(data);
              return getMesExtenso(d.getMonth());
            	}
					if(data(diax) !== data(diay)){
						showMes = " de " + data(diax);
					}
					$.getJSON( "https://wtfismyip.com/json", function(localizacao) {
						var localizacao = localizacao['YourFuckingLocation'];
						var regiao = localizacao.replace(", Brazil", "");
						$("#custom-address-produto-drop").html("<?php echo $settings['frase_frete'];?> " + regiao + " e Região.");
					$(".shipping-estimated-produto-drop").html("Previsão de Entrega: <strong>" + convertDate(diax) + showMes + " a " + convertDate(diay) + " de " + mes + "</strong>.");
					});
        </script>
              <style>
				.tempofrete {margin-top: 10px;}.tempofrete span:nth-child(1) {color: var(--rawart-color);font-size: 16px;font-weight: 600;}
				.tempofrete span:nth-child(3) {color: var(--rawart3-color);font-size: 14px;}.tempofrete span:nth-child(3) strong {color: var(--rawart2-color);font-size: 14px;}.tempofrete span:nth-child(5) {color: var(--rawart3-color);font-size: 16px;}.tempofrete span:nth-child(7) {
					color: var(--rawart3-color);
					font-size: 16px;}
				
				@media (max-width: 768px) {
				.tempofrete span:nth-child(1) {
					font-size: 14px;
					font-weight: 600;
					
				}.tempofrete span:nth-child(3) {font-size: 13px;}.tempofrete span:nth-child(5) {font-size: 13px;}.tempofrete span:nth-child(7) {font-size: 13px;}
			
				
				.box-lista-produto-drop {display: block !important;}

				.box-lista-prod-1 { width:100% !important;} .box-lista-prod-2 { width:100% !important; margin-top: 10px;}
			}
			   </style>
            
            <div class="tempofrete">
              <span class="custom-address-produto-drop" id="custom-address-produto-drop">Carregando localização...</span><br>
              <span class="shipping-estimated-produto-drop">Carregando...</span><br>
            </div>
		</div>

		<style>
			.icon-prod-drop {width: 12%;} .text-lista-item2 {font-weight: 600;} .text-lista-item1 {font-weight: 600;} .box-lista-produto-drop {display: flex;} .box-lista-prod-1 { width:50%; display: flex;} .box-lista-prod-2 { width:50%; display: flex;}
			</style>

		<div class="box-lista-produto-drop">
			<div class="box-lista-prod-1">
				<div class="icon-prod-drop-1 icon-prod-drop"  style="height: auto; text-align: center; display: -webkit-flex; justify-content: center; align-items: center;">
					<img class="img-item-width-1" style="vertical-align: middle;" src="<?php echo esc_url( $settings['icon_lista_item1']['url'] );?>">
				</div>
				<div class="textos-prod-drop-1" style="padding-left: 5px">
					<p class="text-lista-item1 font-item-prod" style="margin: 0; margin-bottom: -3px;"><?php echo $settings['text_lista_item1'];?></p>
					<p class="desc-lista-item1 font-desc-prod" style="margin: 0;"><?php echo $settings['desc_lista_item1'];?></p>
				</div>
			</div>

			<div class="box-lista-prod-2">
				<div class="icon-prod-drop-2 icon-prod-drop" style="height: auto; text-align: center; display: -webkit-flex; justify-content: center; align-items: center;">
					<img class="img-item-width-2" style="vertical-align: middle;" src="<?php echo esc_url( $settings['icon_lista_item2']['url'] );?>">
				</div>
				<div class="textos-prod-drop-2" style="padding-left: 5px">
					<p class="text-lista-item2 font-item-prod" style="margin: 0; margin-bottom: -3px;"><?php echo $settings['text_lista_item2'];?></p>
					<p class="desc-lista-item2 font-desc-prod" style="margin: 0;"><?php echo $settings['desc_lista_item2'];?></p>
				</div>
			</div>
		</div>

<style>

	.progress-bar { background-color: #cdcdcd; height: 20px; width: auto; border-radius: 50px;}

	.stripes {
		background-size: 30px 30px; background-image: linear-gradient(
			135deg,
			rgba(255, 255, 255, .15) 25%,
			transparent 25%,
			transparent 50%,
			rgba(255, 255, 255, .15) 50%,
			rgba(255, 255, 255, .15) 75%,
			transparent 75%,
			transparent
		);
	}

	@keyframes animate-stripes { 0% { background-position: 0 0; } 100% { background-position: 60px 0; }}

	@keyframes auto-progress { 0% {width: 0%; } 100% { width: 100%; }
	}

	.stripes.animated { animation: animate-stripes 0.6s linear infinite;}

	.stripes.animated.slower {animation-duration: 1.25s;}

	.stripes.reverse {animation-direction: reverse;}

	.progress-bar-inner {display: block; height: 20px; width: 35%; border-radius: 50px; position: relative;}


	.txt029 {text-align: left; vertical-align: middle; color: white; font-size: 10pt; font-weight: 600; padding: 0px 10px;}

</style>

<div>
  <div class="progress-bar estoque-produto-frete">
    <div class="progress-bar-container">
      <span class="progress-bar-inner stripes animated reverse slower"><p class="txt029"><?php echo $settings['estoqueprodutodrop'];?></p></span>
    </div>
  </div>
</div>
		<a  href="<?php echo esc_url( $settings['link_btn']['url'] );?>"><button class="botao-produto-drop" <?php if ( 'yes' === $settings['btn_full'] ) { echo 'style="width: 100%;"';}?>>COMPRAR AGORA</button></a>
		<div class="selo-alinhamento">
			<img src="<?php echo esc_url( $settings['seloproduto']['url'] );?>">
		</div>
	</div>
</div>
<?php 
}
}