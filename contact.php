<?php
    $page = "Argento Desenvolvimento - Sobre";
    include("includes/header.php");
?>
   
   <section id="title-section">
      <div class="row">
          <div class="small-12 column">
              <h1 class="title-header">
                  Contato
               </h1>
               <ul>
                   <li><a href="index.php">Home</a></li>
                   <li class="divider"></li>
                   <li>Contato</li>
                </ul>
          </div>
      </div>
   </section>
   
   <section id="contact">
       <div class="row">
           <div class="small-12 column">
               
           </div>
       </div>
       <div class="row">
           <div class="medium-4 column">
               <h1>Informações de Contato</h1>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quia voluptatem pariatur aut rerum reiciendis sint dignissimos omnis amet mollitia porro necessitatibus velit voluptate officia, consectetur, iusto optio aperiam asperiores!</p>
           </div>
           <div class="medium-8 column">
               <h1>Formulário de Contato</h1>
               <form action="">
                   <input type="text" placeholder="Nome:">
                   <input type="text" placeholder="Email:">
                   <input type="text" placeholder="Telefone:">
                   <textarea name="" id="" rows="10" placeholder="Mensagem:"></textarea>
                   <input type="submit" value="Enviar" class="right">
                   <input type="reset" value="Limpar" class="right">
               </form>
           </div>
       </div>
   </section>
   
   <footer>
      <div class="row">
          <div class="small-10 column">
              <p>© 2014 Argento Desenvolvimento Profissional Todos os direitos reservados.</p>
          </div>
          <div class="small-2 column">
              <i class="fa fa-google-plus"></i>
              <i class="fa fa-facebook"></i>
          </div>
      </div>
       
   </footer>
   
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
