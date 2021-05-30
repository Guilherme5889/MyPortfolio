<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Guilherme Devólio</h1>
      <p>I'm <span class="typed" data-typed-items="Back-end Developer, Mobile Developer, Desktop Developer"></span></p>
    </div>
</section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Sobre</h2>
          <p>Desenvolvedor Back-End , com experiência em PHP/LARAVEL, foco em aplicações de alto nível com escalabilidade seguindo as melhores práticas !</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/<?php echo $config["imagem_perfil"]; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Guilherme Devólio</h3>
            <p class="fst-italic">
              Desenvolvedor Back-End há 4 anos.
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Aniversário:</strong> <span>05/04/2004</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Telefone:</strong> <span> +017 99778-2417</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Cidade:</strong> <span>Votuporanga/SP</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Idade:</strong> <span>17</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Grau:</strong> <span>Ensino Médio</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>dev_guilherme_devolio@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelancer:</strong> <span>Disponível</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">30%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"> Laravel <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfólio</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Web</li>
              <li data-filter=".filter-card">Mobile</li>
              <li data-filter=".filter-web">Desktop</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/uzenir.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="uzenirproject" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
         
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Serviços</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Sistemas Web</a></h4>
            <p class="description">ERPS, Sistema de gestão financeira , Sistemas Escolares</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Landing Page</a></h4>
            <p class="description">Landing Page Pessoal.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Páginas focadas em Marketing e Tráfego Pago</a></h4>
            <p class="description">Uma página 100% focada na venda de seu produto principal, com ótimo <a target="_blank" href="https://pt.wikipedia.org/wiki/Otimiza%C3%A7%C3%A3o_para_motores_de_busca">SEO</a></p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Otimização de SEO</a></h4>
            <p class="description">Precisa aumentar o alcance da sua página ? Podemos resolver isso pra você.</p>
          </div>
          
        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contato</h2>
          <p>Entre em contato comigo , e diga o que está precisando.</p>
        </div>
        <?php
          Mensagem::novaMensagem();
        ?>

        <div class="row" data-aos="fade-in">
          
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form  method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="name">Seu nome</label>
                  <input type="text" name="nome" class="form-control" name="email" id="nome"  required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="name">Seu email</label>
                  <input type="email" name="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="name">Seu telefone</label>
                  <input type="text" name="telefone" class="form-control" name="email" id="telefone" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Mensagem</label>
                <textarea class="form-control" name="conteudo" id="conteudo" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">A mensagem foi enviada com sucesso ! Obrigado</div>
              </div>
              <div class="text-center"><button id="btn-submit" name="mensagem" type="submit">Enviar Mensagem</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $('#btn-submit').click((e) => {
      $('.loading').show();
      e.preventDefault();
      var nome = $('#nome').val();
      var email = $('#email').val();
      var telefone = $('#telefone').val();
      var conteudo = $('#conteudo').val();

      $.ajax({
        url: 'actions/message.php',
        method: 'POST',
        data: {
          mensagem: true,
          nome: nome,
          email: email,
          telefone: telefone,
          conteudo: conteudo
        },
        success: (callback) => {
          var resposta = JSON.parse(callback);
          $('.loading').hide();
          if(resposta.status == "sucesso"){
            $('.sent-message').show();
          }
          if(resposta.status == "erro"){
            $('.error-message').text(resposta.msg);
            $('.error-message').show();
          }
         
        },
        error: () => {
          alert('Ocorreu um erro ao enviar a mensagem');
          console.log(callback);
        }
      })

    });
  
  </script>