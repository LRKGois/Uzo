<div class="modal fade" id="<?php echo $nome_tarif; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">RESUMO DO TARIFÁRIO 
                <?php
                    echo $plafond_NET; 
                    if($plafond_oferta != ''){echo " + ", $plafond_oferta;}
                ?>
                </h1>
            </div> 
            <div>
                <?php
                    if($fidelizacao == 0 || $nome_tarif == "Tarifario_B"){
                        echo '<span>';
                        if ($fidelizacao == 0) {
                            echo 'SEM FIDELIZAÇÃO';
                        } 
                        else {
                            if ($nome_tarif == "Tarifario_B") {
                                echo '+10GB EXTRA';
                            }
                        }
                        echo '</span><br>';
                    }
                ?>
                <span>
                    <?php 
                    echo $plafond_NET; 
                    if($plafond_oferta != null){echo " + ", $plafond_oferta;}
                    ?>
                </span>
                <div>
                    <span>€</span>
                    <span><?php echo $preco_tarif; ?>,00</span>
                    <span>/ mês</span>
                </div>
                <span>
                    <span>Inclui <?php echo $vantagem_adesao; 
                        if($vantagem_adesao == "1ª mensalidade") { echo " grátis";}?>
                    </span>
                    <br />
                </span>
            </div>
        <div class="modal-body">
            
            <form method="POST"> <!-- action="form.php?a=form" -->
                <h5>DADOS DE ADESÃO</h5>
                <fieldset class="form-group">
                    <div class="row g-2">
                        <div class="col-md form-floating">
                            <input type="text" class="form-control" id="primeiro-nome" placeholder="José" required>
                            <label for="primeiro-nome">Primeiro nome</label>
                        </div>
                        <div class="col-md form-floating">
                            <input type="text" class="form-control" id="ultimo-nome" placeholder="Silva" required>
                            <label for="ultimo-nome">Último nome</label>                
                        </div>
                    </div>
                </fieldset>
                <div class="row g-2">
                    <div class="form-floating col-md">
                        <input type="tel" class="form-control" id="telemovel" pattern="^(\+?351)?9\d\d{7}$" maxlength="13" placeholder="900000000" required>
                        <label for="telemovel">Telemóvel</label>
                    </div>
                    <div class="form-floating col-md">
                        <input type="email" class="form-control" id="email" placeholder="josesilva@uzo.pt" required>
                        <label for="email">Email address</label>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="form-floating col-md">
                        <input type="text" class="form-control" id="codigo-postal" placeholder="0000-000" pattern="^\d{4}-\d{3}?$" maxlength="8" required>
                        <label for="codigo-postal">Código postal</label>
                        <!-- <button onclick="validarCP()">Validar</button> -->
                    </div>
                    <div class="col-md"><p id="endereco"></p></div>

                </div>
                <br>            
                <h5>DOCUMENTAÇÃO</h5>
                <div class="row g-2">
                    <div class="form-floating col-md">
                        <input type="tel" class="form-control" id="nif" placeholder="Nº de contribuinte" pattern="^\d{9}$" maxlength="9" required>
                        <label for="nif">Nº Contribuinte</label>
                    </div>
                    <div class="form-floating col-md">
                        <input type="tel" class="form-control" id="nip" pattern="^\d{9}$" maxlength="9" placeholder="000000000" required>
                        <label for="nip">Nº de indentificação pessoal</label>
                    </div>
                </div>

                <br>
                <h5 href="#" class="tooltip-test" title="Tooltip">NÚMEROS DE TELEMÓVEL</h5>
                <a href="#" class="tooltip-test" title="Tooltip">This link</a>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-num" checked>
                    <label class="form-check-label" for="save-num">Quero manter o meu número</label>
                </div>
                <div class="row g-2">
                    <div class="form-floating col-md">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>MEO/MOCHE/UZO</option>
                            <option>LYCAMOBILE</option>
                            <option>VECTONE</option>
                            <option>CONTINENTE</option>
                            <option>PHONE-IX</option>
                            <option>NOS COMUNICAÇÕES, S.A. (antes ZON)</option>
                            <option>NOWO (antes Cabovisão)</option>
                            <option>VODAFONE</option>
                            <option>OPTIMUS</option>
                        </select>
                        <label for="exampleFormControlSelect1">Operador atual</label>
                    </div>
                    <div class="form-floating col-md">
                        <input type="tel" class="form-control" id="telemovel1" pattern="^(\+?351)?9\d\d{7}$" placeholder="900000000" maxlength="13" required>
                        <label for="telemovel1">Nº Telemóvel</label>
                    </div>
                </div>

                <br>
                <h5>DADOS DE FATURAÇÃO</h5>
                <div class="row g-2">
                    <div class="form-floating col-md">
                        <input type="email" class="form-control" id="email1" placeholder="josesilva@uzo.pt" required>
                        <label for="email1">Email address</label>
                    </div>
                    <div class="form-floating col-md">
                        <input type="tel" class="form-control" id="telemovel2" pattern="^(\+?351)?9\d\d{7}$" placeholder="900000000" maxlength="13" required>
                        <label for="telemovel2">Telemóvel para notificações</label>
                    </div>
                </div>

                <br>
                <h5>MÉTODO DE PAGAMENTO</h5>
                <div class="form-floating col-md">
                    <input type="text" class="form-control" id="iban" pattern="^PT\d{2}\d{4}\d{4}\d{11}\d{2}$" placeholder="PT500000" maxlength="34">
                    <label for="iban">IBAN (opcional)</label>
                </div>
                <div class="row g-2">
                <div class="form-floating col-lg">
                    <input type="text" class="form-control" id="primeiro-nome1" placeholder="José">
                    <label for="primeiro-nome1">Primeiro nome do titular da conta (opcional)</label>
                </div>
                <div class="form-floating col-lg">
                    <input type="text" class="form-control" id="ultimo-nome1" placeholder="Silva">
                    <label for="ultimo-nome1">Último nome do titular da conta (opcional)</label>
                </div>
                </div>
                
                <div class="form-floating col-md">
                    <input type="text" class="form-control" id="promocode" placeholder="xyz000">
                    <label for="promocode">Código promocional (opcional)</label>
                </div>

                <br>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="cond" required>
                    <label class="form-check-label small" for="cond">Li e aceito os 
                        <a href="https://www.uzo.pt/Documentos/condicoes-utilizacao/condicoes-utilizacao-site.pdf" target="_blank">termos e condições de utilização do site</a>
                        e as 
                        <a href="https://www.uzo.pt/Documentos/condicoes-utilizacao/condicoes-da-oferta.pdf" target="_blank">condições da oferta</a>
                        .
                    </label>
                </div>

                <br>
                <fieldset class="form-group">
                    
                    <label class= "small">Autorizo o tratamento dos meus dados para efeito de comunicações de marketing da MEO.</label>
                    
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio_1" id="radio1" value="option1">
                        <label class="form-check-label" for="radio1">
                            Autorizo
                        </label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio_1" id="radio2" value="option2">
                        <label class="form-check-label" for="radio2">
                            Não Autorizo
                        </label>
                        </div>
                    
                </fieldset>
                
                <br>
                <fieldset class="form-group">
                    
                    <label class="small">Autorizo a partilha dos meus dados a empresas do Grupo Altice Portugal (a) para efeito de comunicações de marketing.</label>
                    
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio_2" id="radio3" value="option1">
                        <label class="form-check-label" for="radio3">
                            Autorizo
                        </label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio_2" id="radio4" value="option2">
                        <label class="form-check-label" for="radio4">
                            Não Autorizo
                        </label>
                        </div>
                    
                </fieldset>

                <!--<button type="submit" class="btn btn-primary" name="submit">Submeter Formulário</button>-->
                <input type="submit" name="submit" value="Submeter Formulário">
            </form>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>


<?php
/*
    if(isset($_POST['submit'])){
        SubmeterForm();
    }

    function SubmeterForm(){

        // Dados do formulário
        $primeiroNome = $_POST['primeiro-nome'];
        $ultimoNome = $_POST['ultimo-nome'];
        $telemovelPessoal = $_POST['telemovel'];
        $email = $_POST['email'];
        $codigoPostal = $_POST['codigo-postal'];
        $contribuinte = $_POST['nif'];
        $cartaoCidadao = $_POST['nip'];
        $manterNumero = isset($_POST['save-num']) ? 1 : 0;
        $telemovelCliente = $_POST['telemovel1'];
        $emailFaturacao = $_POST['email1'];
        $telemovelFaturacao = $_POST['telemovel2'];
        $iban = $_POST['iban'];
        $codPromo = $_POST['promocode'];
        $marketingMEO = isset($_POST['radio_1']) && $_POST['radio_1'] === 'option1' ? 1 : 0;
        $marketingGrupoAltice = isset($_POST['radio_2']) && $_POST['radio_2'] === 'option1' ? 1 : 0;

        //Processar Submissão Form
        include 'bd/config.php';

        $ligacao = new PDO("mysql:dbname=$base_dados;host=$host", $user, $password);

        //Verificar se já existem os mesmos dados
        $motor = $ligacao->prepare("SELECT email FROM form_adesao WHERE email = ?");
        $motor->bindParam(1, $email, PDO::PARAM_STR);
        $motor->execute();

        if($motor->rowCount() != 0){ // significa que encontrou um email igual
            echo '<div class="erro">Este email já está em uso</div>';
            $ligacao = null;
            //ApresentaForm();
            exit;
        }
        else{ // procede com a submissão dos novos dados
            $motor = $ligacao->prepare("SELECT MAX(id_user) AS MaxID FROM form_adesao");
            $motor->execute();
            $id_temp = $motor->fetch(PDO::FETCH_ASSOC)['MaxID']; // buscar IDs
            if($id_temp == null) // caso não haja ainda IDs(ID null), atribui ID 1
                $id_temp = 1;
            else{ // auto incrementa ID
                $id_temp++;
            }

            // Inserir dados na tabela "form_adesao"
            $sql = 
                "INSERT INTO form_adesao (
                datahora_adesao datetime,
                primeiro_nome varchar(255),
                ultimo_nome varchar(255),
                telemovel_pessoal varchar(255),
                email varchar(255),
                codigo_postal varchar(8),
                contribuinte int,
                cartao_cidadao int,
                manter_numero boolean,
                telemovel_cliente varchar(255),
                email_faturacao varchar(255),
                telemovel_faturacao varchar(255),
                iban varchar(34),
                ref_multibanco int,
                cod_promo varchar(255),
                marketing_MEO boolean,
                marketing_GrupoAltice boolean
                )
                VALUES (
                NOW(), // NOW() insere a data e hora atual no respetivo campo, neste caso, no datahora_adesao
                :primeiroNome,
                :ultimoNome,
                :telemovelPessoal,
                :email,
                :codigoPostal,
                :contribuinte,
                :cartaoCidadao,
                :manterNumero,
                :telemovelCliente,
                :emailFaturacao,
                :telemovelFaturacao,
                :iban,
                :codPromo,
                :marketingMEO,
                :marketingGrupoAltice
                )
            ";

            $motor = $ligacao->prepare($sql);
            $motor->bindParam(":id_user", $id_temp, PDO::PARAM_INT);
            $motor->bindParam(':primeiroNome', $primeiroNome, PDO::PARAM_STR);
            $motor->bindParam(':ultimoNome', $ultimoNome, PDO::PARAM_STR);
            $motor->bindParam(':telemovelPessoal', $telemovelPessoal, PDO::PARAM_STR);
            $motor->bindParam(':email', $email, PDO::PARAM_STR);
            $motor->bindParam(':codigoPostal', $codigoPostal, PDO::PARAM_STR);
            $motor->bindParam(':contribuinte', $contribuinte, PDO::PARAM_INT);
            $motor->bindParam(':cartaoCidadao', $cartaoCidadao, PDO::PARAM_INT);
            $motor->bindParam(':manterNumero', $manterNumero, PDO::PARAM_BOOL);
            $motor->bindParam(':telemovelCliente', $telemovelCliente, PDO::PARAM_STR);
            $motor->bindParam(':emailFaturacao', $emailFaturacao, PDO::PARAM_STR);
            $motor->bindParam(':telemovelFaturacao', $telemovelFaturacao, PDO::PARAM_STR);
            $motor->bindParam(':iban', $iban, PDO::PARAM_STR);
            $motor->bindParam(':codPromo', $codPromo, PDO::PARAM_STR);
            $motor->bindParam(':marketingMEO', $marketingMEO, PDO::PARAM_BOOL);
            $motor->bindParam(':marketingGrupoAltice', $marketingGrupoAltice, PDO::PARAM_BOOL);

            try {
                $motor->execute();
                echo "Formulário preenchido com sucesso!";
            } catch (PDOException $e) {
                echo "Erro ao inserir dados: " . $e->getMessage();
                // Exibir detalhes do erro do MySQL:
                var_dump($motor->errorInfo());
            }
        } // fim else -> submissão novos dados
    } // fim function SubmeterForm()
*/
?>

<script>
    // Obtenha referências para os campos de adesão
    var telemovelAdesao = document.getElementById("telemovel");
    var emailAdesao = document.getElementById("email");

    // Obtenha referências para os campos de faturação
    var telemovelManter = document.getElementById("telemovel1");
    var telemovelFaturacao = document.getElementById("telemovel2");
    var emailFaturacao = document.getElementById("email1");

    // Adicione um ouvinte de evento de input ao campo de adesão do telemóvel
    telemovelAdesao.addEventListener("input", function () {
        telemovelManter.value = this.value;
        telemovelFaturacao.value = this.value;
    });

    // Adicione um ouvinte de evento de input ao campo de adesão de email
    emailAdesao.addEventListener("input", function () {
        emailFaturacao.value = this.value;
    });

    /*
    //Validar Código Postal
    function validarCP() {
        var cp = document.getElementById('codigo-postal').value;

        //Fonte de dados
        var dadosCP = {
            '12345-678': 'Rua Exemplo, 123 - Bairro - Cidade'
        };

        if (dadosCP[cp]) {
            document.getElementById('endereco').textContent = `Endereço: ${dadosCP[cp]}`;
        } else {
            document.getElementById('endereco').textContent = 'CP não encontrado.';
        }
    }
    */
</script>