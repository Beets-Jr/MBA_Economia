<?php
/**
 * Template Name: Matricula
 */
get_header();
$bg_image = get_post_meta( get_the_ID(), 'mat_custom_bg_image', true ); 
?>  
	<style>
		.mat-img-header  {
		background-image: linear-gradient(rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.5)),
			url('<?php echo esc_url( $bg_image ); ?>');
		}
	</style>
    <!-- Imagem de Cabecalho -->
    <div class="mat-img-header">
        <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'mat_page_title', true)); ?></h1>
        <p id="ins_subtitle">
        <?php echo esc_html(get_post_meta(get_the_ID(), 'mat_page_subtitle', true)); ?>
        </p>
    </div>
    <div class="ins-content">
        <div class="ins-initial-text">
            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'mat_texto_inicial', true)); ?> </p>
        </div>
        <!-- Informacoes Pessoais -->
        <div class="ins-forms">
            <div class="ins-personal-forms">
                <div class="ins-title-line"></div>
                <h2>Informações Pessoais</h2>
                <div class="ins-form"  id="ins-name">
                    <span>Nome completo*</span>
                    <form action="#">
                        <input type="text" name="ins-name" />
                    </form>
                </div>
                <div class="ins-form" id="ins-email">
                    <span>E-mail*</span>
                    <form action="#">
                        <input type="email" name="ins-email" />
                    </form>
                </div>
                <div class="ins-form"  id="ins-birthday">
                    <span>Data de nascimento*</span>
                    <form action="#">
                        <input type="text" name="ins-birthday" placeholder="DD/MM/AAAA" />
                    </form>
                </div>
                <div class="ins-form" id="ins-sex">
                    <span>Sexo*</span>
                    <select name="ins-sex">
                        <option value="male">Masculino</option>
                        <option value="female">Feminino</option>
                        <option value="other">Outro</option>
                        <option value="not-to-say">Prefiro não dizer</option>
                    </select>
                </div>
                <div class="ins-form" id="ins-city">
                    <span>Cidade onde nasceu</span>
                    <form action="#">
                        <input type="text" name="ins-city" />
                    </form>
                </div>
                <div class="ins-form" id="ins-uf">
                    <span>UF*</span>
                    <select name="ins-uf">
                        <option value="acre">AC</option>
                        <option value="alagoas">AL</option>
                        <option value="amapa">AP</option>
                        <option value="amazonas">AM</option>
                        <option value="bahia">BA</option>
                        <option value="ceara">CE</option>
                        <option value="distrito-federal">DF</option>
                        <option value="espirito-santo">ES</option>
                        <option value="goias">GO</option>
                        <option value="maranhao">MA</option>
                        <option value="mato-grosso">MT</option>
                        <option value="mato-grosso-do-sul">MS</option>
                        <option value="minas-gerais">MG</option>
                        <option value="para">PA</option>
                        <option value="paraiba">PB</option>
                        <option value="parana">PR</option>
                        <option value="pernambuco">PE</option>
                        <option value="piaui">PI</option>
                        <option value="rio-de-janeiro">RJ</option>
                        <option value="rio-grande-do-norte">RN</option>
                        <option value="rio-grande-do-sul">RS</option>
                        <option value="rondonia">RO</option>
                        <option value="roraima">RR</option>
                        <option value="santa-catarina">SC</option>
                        <option value="sao-paulo">SP</option>
                        <option value="sergipe">SE</option>
                        <option value="tocantins">TO</option>
                      </select>
                </div>
                <div class="ins-form" id="ins-marital-status">
                    <span>Estado civil*</span>
                    <select name="ins-marital-status">
                        <option value="single">Solteiro</option>
                        <option value="married">Casado</option>
                        <option value="other">Outro</option>
                    </select>
                </div>
                <div class="ins-form" id="ins-rg">
                    <span>RG*</span>
                    <input type="text" name="ins-rg" placeholder="__.___.___-_"" required />
                </div>
                <div class="ins-form ins-form-340 id="ins-cpf"">
                    <span>CPF*</span>
                    <input type="text" id="ins-cpf" name="ins-cpf" placeholder="___.___.___-__" required />
                </div>
            </div>
            <!-- Endereço Residencial -->
            <div class="ins-residential-infos">
                <div class="ins-title-line"></div>
                <h2>Endereço Residencial</h2>
                <div class="ins-form" id="ins-adress">
                    <span>Endereço*</span>
                    <form action="#">
                        <input type="text" name="ins-adress" />
                    </form>
                </div>
                <div class="ins-form" id="ins-complement">
                    <span>Complemento</span>
                    <form action="#">
                        <input type="text" name="ins-complement" />
                    </form>
                </div>
                <div class="ins-form" id="ins-neighborhood">
                    <span>Bairro</span>
                    <form action="#">
                        <input type="text" name="ins-neighborhood" />
                    </form>
                </div>
                <div class="ins-form" id="ins-city">
                    <span>Cidade</span>
                    <form action="#">
                        <input type="text" name="ins-city" />
                    </form>
                </div>
                <div class="ins-form" id="ins-uf">
                    <span>UF</span>
                    <select name="ins-uf">
                        <option value="acre">AC</option>
                        <option value="alagoas">AL</option>
                        <option value="amapa">AP</option>
                        <option value="amazonas">AM</option>
                        <option value="bahia">BA</option>
                        <option value="ceara">CE</option>
                        <option value="distrito-federal">DF</option>
                        <option value="espirito-santo">ES</option>
                        <option value="goias">GO</option>
                        <option value="maranhao">MA</option>
                        <option value="mato-grosso">MT</option>
                        <option value="mato-grosso-do-sul">MS</option>
                        <option value="minas-gerais">MG</option>
                        <option value="para">PA</option>
                        <option value="paraiba">PB</option>
                        <option value="parana">PR</option>
                        <option value="pernambuco">PE</option>
                        <option value="piaui">PI</option>
                        <option value="rio-de-janeiro">RJ</option>
                        <option value="rio-grande-do-norte">RN</option>
                        <option value="rio-grande-do-sul">RS</option>
                        <option value="rondonia">RO</option>
                        <option value="roraima">RR</option>
                        <option value="santa-catarina">SC</option>
                        <option value="sao-paulo">SP</option>
                        <option value="sergipe">SE</option>
                        <option value="tocantins">TO</option>
                      </select>
                </div>
                <div class="ins-form" id="ins-cep">
                    <span>CEP*</span>
                    <input type="text" class="cep-input" name="ins-cep" placeholder="__.___-___" required />
                </div>
                <div class="ins-form" id="ins-phone">
                    <span>Telefone*</span>
                    <input id="phone-input" type="text" value="" name="PhoneIn" aria-label="Por favor insira seu número" placeholder="(__) ____-____" required />
                </div>
                <div class="ins-form">
                    <span>Celular*</span>
                    <input type="text" id="ins-cellphone" name="ins-cellphone" placeholder="(__) _____-____" required />
                </div>
            </div>
            <!-- Formação Profissional -->
            <div class="ins-professional-formation">
                <div class="ins-title-line"></div>
                <h2>Formação Profissional</h2>
                <div class="ins-form">
                    <span>Nome do curso superior*</span>
                    <form action="#">
                        <input type="text" id="ins-course-name" name="ins-course-name" />
                    </form>
                </div>
                <div class="ins-form">
                    <span>Instituição*</span>
                    <form action="#">
                        <input type="text" id="ins-institution" name="ins-institution" />
                    </form>
                </div>
                <div class="ins-form" id="ins-city">
                    <span>Cidade</span>
                    <form action="#">
                        <input type="text" name="ins-city" />
                    </form>
                </div>
                <div class="ins-form" id="ins-uf">
                    <span>UF</span>
                    <select name="ins-uf">
                        <option value="acre">AC</option>
                        <option value="alagoas">AL</option>
                        <option value="amapa">AP</option>
                        <option value="amazonas">AM</option>
                        <option value="bahia">BA</option>
                        <option value="ceara">CE</option>
                        <option value="distrito-federal">DF</option>
                        <option value="espirito-santo">ES</option>
                        <option value="goias">GO</option>
                        <option value="maranhao">MA</option>
                        <option value="mato-grosso">MT</option>
                        <option value="mato-grosso-do-sul">MS</option>
                        <option value="minas-gerais">MG</option>
                        <option value="para">PA</option>
                        <option value="paraiba">PB</option>
                        <option value="parana">PR</option>
                        <option value="pernambuco">PE</option>
                        <option value="piaui">PI</option>
                        <option value="rio-de-janeiro">RJ</option>
                        <option value="rio-grande-do-norte">RN</option>
                        <option value="rio-grande-do-sul">RS</option>
                        <option value="rondonia">RO</option>
                        <option value="roraima">RR</option>
                        <option value="santa-catarina">SC</option>
                        <option value="sao-paulo">SP</option>
                        <option value="sergipe">SE</option>
                        <option value="tocantins">TO</option>
                      </select>
                </div>
                <div class="ins-form">
                    <span>Ano de conclusão</span>
                    <input type="number" id="ins-conclusion-year" name="ins-conclusion-year" size="4" required />
                </div>
            </div>
            <!-- Informações Profissionais -->
            <div class="ins-professional-infos">
                <div class="ins-title-line"></div>
                <h2>Informações Profissionais</h2>
                <div class="ins-form" id="ins-company">
                    <span>Empresa</span>
                    <form action="#">
                        <input type="text" name="ins-company" />
                    </form>
                </div>
                <div class="ins-form" id="ins-role">
                    <span>Cargo</span>
                    <form action="#">
                        <input type="text" name="ins-role" />
                    </form>
                </div>
                <div class="ins-form">
                    <span>Período de atuação</span>
                    <form action="#">
                        <input type="text" id="ins-period" name="ins-period" />
                    </form>
                </div>
                <div class="ins-form" id="ins-adress">
                    <span>Endereço</span>
                    <form action="#">
                        <input type="text" name="ins-adress" />
                    </form>
                </div>
                <div class="ins-form" id="ins-complement">
                    <span>Complemento</span>
                    <form action="#">
                        <input type="text" name="ins-complement" />
                    </form>
                </div>
                <div class="ins-form" id="ins-neighborhood">
                    <span>Bairro</span>
                    <form action="#">
                        <input type="text" name="ins-neighborhood" />
                    </form>
                </div>
                <div class="ins-form" id="ins-city2">
                    <span>Cidade</span>
                    <form action="#">
                        <input type="text" name="ins-city" />
                    </form>
                </div>
                <div class="ins-form" id="ins-uf2">
                    <span>UF</span>
                    <select name="ins-uf">
                        <option value="acre">AC</option>
                        <option value="alagoas">AL</option>
                        <option value="amapa">AP</option>
                        <option value="amazonas">AM</option>
                        <option value="bahia">BA</option>
                        <option value="ceara">CE</option>
                        <option value="distrito-federal">DF</option>
                        <option value="espirito-santo">ES</option>
                        <option value="goias">GO</option>
                        <option value="maranhao">MA</option>
                        <option value="mato-grosso">MT</option>
                        <option value="mato-grosso-do-sul">MS</option>
                        <option value="minas-gerais">MG</option>
                        <option value="para">PA</option>
                        <option value="paraiba">PB</option>
                        <option value="parana">PR</option>
                        <option value="pernambuco">PE</option>
                        <option value="piaui">PI</option>
                        <option value="rio-de-janeiro">RJ</option>
                        <option value="rio-grande-do-norte">RN</option>
                        <option value="rio-grande-do-sul">RS</option>
                        <option value="rondonia">RO</option>
                        <option value="roraima">RR</option>
                        <option value="santa-catarina">SC</option>
                        <option value="sao-paulo">SP</option>
                        <option value="sergipe">SE</option>
                        <option value="tocantins">TO</option>
                      </select>
                </div>
                <div class="ins-form">
                    <span>CEP*</span>
                    <input type="text" class="cep-input" id="ins-cep2" name="ins-cep2" placeholder="__.___-___" required />
                </div>
            </div>
            <button class="ins-send-button">Enviar</button>
        </div>
    </div>
<?php get_footer(); ?>