<?php get_header() ?> 
 
 

 
 <!--Om mig tekst-->


  <main>
    <section id="om-mig">
      <div class="om-mig-overskrift">
        <p>OM MIG</p>
      </div>


      <div class="om-mig-text">
        <p> Mit navn er Hannah Lykke, og jeg er fotograf og multimediedesigner. </p>
        <p>Her på siden kan du gå på opdagelse i mit design af hjemmesider, logoer, plakater og videoer - og se et
          udvalg af mine billeder.</p>
      </div>


  <!--Om mig video og CV-->


      <div class="om-mig-boks">

        <div id="boks-1"> 
          <iframe width="300" height="300" src="https://www.youtube.com/embed/GBZ4ky-DM4M" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>


        <div id="boks-2"> 
        
            <a style="text-decoration:none" href=<?php the_field('cv-page'); ?> download class="cv-page">
            <span id="cv-link">Download CV</span>

           
            <img src="<?php the_field('cv'); ?>" class="cv-img"alt=""/>

          </a>
        </div>




<!--Portfolio-->

    </section>
    <div class="portfolio-overskrift">PORTFOLIO</div>




    <section id="portfolio-1">

      <div class="billeder">
        <p class="tekst-1">

          Haloween poster og facebook post, illustrator.


        </p>

            
        <img src="<?php the_field('haloween_poster'); ?>" alt=""/>

      </div>


      <div class="billeder">
        <p class="tekst-2">

          Fe prinsesse, eventyrligt, smukt, eget billede, photoshop

        </p>

          

        <img src="<?php the_field('aenna_feprinsesse'); ?>" alt=""/>
      </div>

      <div class="billeder">
        <p class="tekst-3">

          Basketball, eget billede, photoshop

        </p>

        <img src="<?php the_field('dean_basketball'); ?>" alt=""/>

      </div>

      <div class="billeder">
        <p class="tekst-4">

          Hotel CMS Royal Hotel, royale farver, luksus, dyrt, Adobe XD

        </p>
        <img src="<?php the_field('cms'); ?>" alt=""/>
      </div>

    </section>


    <section id="portfolio-2">

      <div class="billeder">
        <p class="tekst-5">

          Plakat til Edelsvej wellness, afslapning, varme, illustrator

        </p>
        <img src="<?php the_field('edelsvej_wellness'); ?>" alt=""/>
      </div>

      <div class="billeder">
        <p class="tekst-6">

          Plakat til Edelsvej Wellness med æteriske olier til sauna, illustrator

        </p>

        <img src="<?php the_field('aeteriske_olier'); ?>" alt=""/>
      </div>

      <div class="billeder">
        <p class="tekst-7">

          Logo til vidunderlig krop, kropsbehandling og jordemoderomsorg, illustrator

        </p>
        <img src="<?php the_field('vidunderlig_krop'); ?>" alt=""/>
      </div>

      <div class="billeder">
        <p class="tekst-8">

          Logo Plecx, tømrer og montage firma, illustrator

        </p>
        <img src="<?php the_field('plecx_bil'); ?>" alt=""/>
      </div>

    </section>


    <section id="portfolio-3">

      <div class="billeder">
        <p class="tekst-5">

          Trifolder til Trapholt, Verner Panton tema, indesign + illustrator
        </p>
        <img src="<?php the_field('trifolder'); ?>" alt=""/>
      </div>

      <div class="billeder">
        <p class="tekst-6">

          Plakat, koncept Look Up, lysfestival og droneshow, eget billede, photoshop + illustrator

        </p>

        <img src="<?php the_field('look_up_plakat'); ?>" alt=""/>
      </div>

      <div class="billeder">
        <p class="tekst-7">

          Hybrid kat, photoshop

        </p>
        <img src="<?php the_field('hybrid_kat'); ?>" alt=""/>
      </div>

      <div class="billeder">
        <p class="tekst-8">

          App, koncept Gorge, socialt medie tøj inspiration, XD
          
        </p>

        <img src="<?php the_field('gorge'); ?>" alt=""/>
        </div>
        

    </section>







    <section id="kontakt">




      <!--Kontakt start-->


      <div class="kontakt-overskrift">
        <p>KONTAKT</p>
      </div>


      <div class="kontakt">

      
      
      <img src="<?php the_field('phone'); ?>" class="ikoner"alt=""/>
    

        <p>+45 50 47 63 64</p>

        
        <img src="<?php the_field('email'); ?>" class="ikoner"alt=""/>
       

        <p>hannahlykkefoto@gmail.com</p>

        
        <img src="<?php the_field('linkedin'); ?>" class="ikoner"alt=""/>

        
        

        <p>www.linkedin.com/in/hannah-lykke</p>

        

      </div>

      </div>

    </section>


  </main>


  <?php get_footer() ?>



