<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <title>Tarifários móveis baratos, sem surpresas na fatura | UZO</title>
    <script src="js/menus.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tarifario.css">
</head>
<body>
    <div class="home-container">
    
      <?php
        include 'components/navbar.php';
      ?>

<div class="tarifrios-hero">
      <div class="tarifrios-hero-image">
        <div class="tarifrios-container01">
          <span class="tarifrios-text03">
            <span>OFERTA DE + 30 GIGAS EM MY UZO</span>
            <br />
          </span>
          <span class="tarifrios-text06">DÁ MAIS UZO AOS TEUS GIGAS</span>
        </div>
      </div>
    </div>

    <?php
    // Conectar ao banco de dados
    include 'bd/config.php';
    $ligacao = new PDO("mysql:dbname=$base_dados;host=$host", $user, $password);

    // Consultar os dados da tabela "tarifario"
    $sql = "SELECT * FROM tarifario";
    $motor = $ligacao->prepare($sql);
    $motor->execute();
    $dadosTarifario = $motor->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="tarifrios-pricing">
      <div class="tarifrios-container02">
        <?php foreach ($dadosTarifario as $tarifario) { 
          //Criação de variáveis para simplificação de código
          $fidelizacao = $tarifario['fidelizacao'];
          $plafond_NET = $tarifario['plafond_NET'];
          $plafond_oferta = $tarifario['plafond_oferta'];
          $plafond_Mins = $tarifario['plafond_Mins'];
          $nome_tarif = $tarifario['nome_tarif'];
          $preco_tarif = $tarifario['preco_tarif'];
          $vantagem_adesao = $tarifario['vantagem_adesao'];
        ?>
          
        <div class="tarifrios-pricing-card">
          <?php
            if($fidelizacao == 0 || $nome_tarif == "Tarifario_B"){
              echo '<span class="tarifrios-text07">';
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
          <span class="tarifrios-text40">
            <?php 
              echo $plafond_NET; 
              if($plafond_oferta != null){echo " + ", $plafond_oferta;}
            ?>
          </span>
          <div class="tarifrios-container03">
            <span class="tarifrios-text08">€</span>
            <span class="tarifrios-text09"><?php echo $preco_tarif; ?>,00</span>
            <span class="tarifrios-text10">/ mês</span>
          </div>
          <span class="tarifrios-text11">
            <span>Inclui <?php echo $vantagem_adesao; 
              if($vantagem_adesao == "1ª mensalidade") { echo " grátis";}?>
            </span>
            <br />
          </span>
          <div class="tarifrios-container04">
            <div class="tarifrios-container05">
              <span class="tarifrios-text14"><?php echo $plafond_NET; ?></span>
              <?php if($plafond_NET == "4GB"){echo '
                  <span class="tarifrios-text15">
                    <span>4GB</span>
                    <span class="tarifrios-text17">1GB</span>
                  </span>
                ';}
              ?>
              <?php 
                if($nome_tarif == "Tarifario_A"){echo '
                  <span class="tarifrios-text18">OFERTA: Mantém o número e recebe +6GB/mês durante 24 meses</span>';
                }
                else if($nome_tarif == "Tarifario_B"){echo '
                  <span class="tarifrios-text18">OFERTA: 10GB adicionais durante 24 meses</span>';
                }
              ?>
            </div>
            <div class="tarifrios-container06">
              <span class="tarifrios-text19"><?php echo $plafond_Mins; ?></span>
            </div>
          </div>
          <button class="tarifrios-button1 button" data-bs-toggle="modal" data-bs-target="#<?php echo $nome_tarif; ?>">ADERIR</button>
        </div>
        <?php  
        include 'components/form.php';
        } //fecho do foreach tarifario
        ?>
      </div>
    </div>

    <?php
    // Fechar a ligação com o banco de dados
    $ligacao = null;
    ?>

    <div class="tarifrios-steps">
      <div class="tarifrios-container15">
        <div class="tarifrios-container16">
          <h1 class="tarifrios-text41">Escolha mais fácil, não há</h1>
        </div>
        <div class="tarifrios-container17">
          <div class="tarifrios-step">
            <div class="tarifrios-container18">
              <div class="tarifrios-container19">
                
                <div class="tarifrios-picture">
                  <img
                    alt="successuzoiconepng1469"
                    src="public/external/successuzoiconepng1469-yb45.png"
                    class="tarifrios-successuzoiconepng"
                  />
                </div>
              </div>
            </div>
            <div class="tarifrios-container20">
              <h1 class="tarifrios-text42">TOTAL LIBERDADE</h1>
              <span class="tarifrios-text43">
                Com ou sem fidelização, é fácil aderir e mudar de tarifário. De
                1GB a 30GB, escolhe e paga só o que UZAS.
              </span>
            </div>
          </div>
          <div class="tarifrios-step1">
            <div class="tarifrios-container21">
              <div class="tarifrios-container22">
                
                <div class="tarifrios-picture1">
                  <img
                    alt="velocidademoveluzoiconepng1470"
                    src="public/external/velocidademoveluzoiconepng1470-w3cp.png"
                    class="tarifrios-velocidademoveluzoiconepng"
                  />
                </div>
              </div>
            </div>
            <div class="tarifrios-container23">
              <h1 class="tarifrios-text44">5G</h1>
              <span class="tarifrios-text45">
                <span>Net móvel 5G incluída em todos os tarifários UZO.</span>
                <br />
              </span>
            </div>
          </div>
          <div class="tarifrios-step2">
            <div class="tarifrios-container24">
              <div class="tarifrios-container25">
                
                <div class="tarifrios-picture2">
                  <img
                    alt="faturaeletronicauzoiconepng1471"
                    src="public/external/faturaeletronicauzoiconepng1471-q6ej.png"
                    class="tarifrios-faturaeletronicauzoiconepng"
                  />
                </div>
              </div>
            </div>
            <div class="tarifrios-container26">
              <h1 class="tarifrios-text48">SEM SURPRESAS NA FATURA</h1>
              <span class="tarifrios-text49">
                <span>
                  Podes pré-definir um valor máximo mensal para consumos não
                  incluídos na mensalidade, a debitar na fatura.
                </span>
                <br />
              </span>
            </div>
          </div>
          <div class="tarifrios-step3">
            <div class="tarifrios-container27">
              <div class="tarifrios-container28">
                
                <div class="tarifrios-picture3">
                  <img
                    alt="consultafaturasuzoiconepng1471"
                    src="public/external/consultafaturasuzoiconepng1471-n61.png"
                    class="tarifrios-consultafaturasuzoiconepng"
                  />
                </div>
              </div>
            </div>
            <div class="tarifrios-container29">
              <h1 class="tarifrios-text52">CONTROLO DE CONSUMOS</h1>
              <span class="tarifrios-text53">
                Recebes SMS de alerta ao atingir 80% e 100% do plafond. Podes
                consultar plafond disponível a qualquer momento, ligando *#123#.
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tarifrios-vantagens-uzo">
      <div class="tarifrios-column">
        <div class="tarifrios-row">
          <h1 class="tarifrios-text54">
            ADERE AO DÉBITO DIRETO COM OFERTA DE 5GB
          </h1>
        </div>
        <div class="tarifrios-row1">
          <div class="tarifrios-stat">
            <img
              alt="image"
              src="public/desconto-euro-uzo-icone.png"
              class="tarifrios-image4"
            />
            <span class="tarifrios-text55">GRÁTIS</span>
            <span class="tarifrios-text56">
              Sem custos de adesão ou manutenção e com oferta de 5GB grátis,
              válidos por 30 dias.
            </span>
          </div>
          <div class="tarifrios-stat1">
            <img
              alt="image"
              src="public/safe-buy-uzo-icone.png"
              class="tarifrios-image5"
            />
            <span class="tarifrios-text57">SEGURO</span>
            <span class="tarifrios-text58">
              Permite conferir antecipadamente o valor e a data do débito, na
              fatura mensal ou definir um prazo para autorização no Multibanco.
            </span>
          </div>
          <div class="tarifrios-stat2">
            <img
              alt="image"
              src="public/consulta-faturas-uzo-icone.png"
              class="tarifrios-image6"
            />
            <span class="tarifrios-text59">FLEXÍVEL</span>
            <span class="tarifrios-text60">
              Permite alterar o valor máximo de débito, ou definir um prazo para
              a autorização, no Multibanco.
            </span>
          </div>
        </div>
      </div>
    </div>

      <?php
        include 'components/footer.php';
      ?>
        
      </div>
    
    
</body>
</html>