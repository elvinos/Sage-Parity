<?php
/*
 * Template Name: Home
 */
?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="container-fluid big-logo-row">
  <!-- <div class="container">
    <div class="row">
      <div class="col-xs-12 big-logo-container"> -->
        <!-- <div class="bird-box container-fluid">
          <div class="logo"></div>
        </div> -->

     <div class="container">
       <div class="row">
         <div class="col-xs-12 big-logo-container">
           <h1 class="big-logo"></h1>
         </div><!--/.col-xs-12 -->
       </div><!--/.row -->
     </div><!--/.container -->
   </div><!--/.container-fluid -->

    <div class="container-fluid" id="carousel">


          <?php
              $vargs = array(
                'post_type' => 'post',
              );

              $the_query1 = new WP_Query( $vargs );
          ?>

          <div id="carousel-example" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php if ( have_posts() ) : while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?>
        <li data-target="#carousel-example" data-slide-to="<?php echo $the_query1->current_post; ?>" class="<?php if( $the_query1->current_post == 0 ):?>active<?php endif; ?>"></li>
        <?php endwhile; endif; ?>
      </ol>
    <?php rewind_posts(); ?>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <?php if ( have_posts() ) : while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?>

        <div class="item <?php if( $the_query1->current_post == 0 ):?>active<?php endif; ?>">

          <?php
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'full', true );
            $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
          ?>
          <a href="<?php the_permalink(); ?>"><div style="background:url(<?php echo $thumbnail_url[0]; ?>) center center;
              background-size:cover;" class="slider-size" id="loadimage">
              </div></a>
    </div>

    <?php endwhile; endif; ?>
      </div>

          <!-- Controls -->
          <a class="left carousel-control" href="javascript:void(0)"
               data-slide="prev" data-target="#carousel-example">
          <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="javascript:void(0)"
               data-slide="next" data-target="#carousel-example">
          <span class="glyphicon glyphicon-chevron-right"></span>
          </a>

        </div>
    </div>

 <div class="container">
   <div class="row">
     <div class="col-lg-5 col-md-6 col-sm-8">
       <h2>Lorem ipsum</h2>
       <p>Dolor sit amet, consectetur adipisicing elit. Id maxime repellat repellendus porro voluptas laudantium similique eveniet quis perferendis beatae commodi sunt ullam provident dolorum doloribus esse accusamus dolores. Corrupti.</p>
       <p>Consectetur incidunt voluptatibus ipsa nisi esse eos deleniti repudiandae at quo sit praesentium nemo optio perspiciatis sequi quaerat voluptates minus reprehenderit doloremque accusamus et quisquam nesciunt sunt consequatur explicabo excepturi!</p>
       <p>Sequi facilis ea dolor asperiores quibusdam eveniet optio corporis et accusantium voluptatem architecto quis iste recusandae molestias dolorem soluta ex blanditiis illo impedit laborum iusto? Iure sapiente eos molestiae est?</p>
       <p>Numquam delectus recusandae nesciunt rem itaque harum corporis maxime hic iste molestias adipisci excepturi ullam libero necessitatibus cum eum modi minus obcaecati est nemo quia velit earum perferendis consectetur porro?</p>
       <p>Accusamus dicta consequatur quos ipsum rerum tempora assumenda ex excepturi itaque soluta magnam debitis voluptatibus neque eos porro. Neque tempora ea beatae delectus facere quas voluptas accusamus maxime enim consequuntur.</p>
       <p>Saepe obcaecati facilis dolore numquam nam quod laudantium. Rerum esse voluptas eum aut porro beatae adipisci exercitationem ab voluptatum corporis quas placeat sapiente nisi ut officia eaque debitis. Corrupti eveniet!</p>
       <p>Eius natus numquam tempore alias ipsam commodi aut similique corporis beatae velit maxime obcaecati voluptatibus cum repudiandae minus inventore doloremque optio saepe nihil eum reprehenderit quas consequuntur perspiciatis quo quam.</p>
       <p>Ea perspiciatis incidunt unde ipsam cupiditate necessitatibus magnam quod odit. Beatae adipisci non praesentium tenetur dolores fugit repellat consequuntur unde aperiam eligendi ipsa doloribus corporis officiis ipsam quod numquam assumenda!</p>
       <p>Ullam ut ex cum corporis numquam quia hic aut nisi itaque laboriosam eaque earum commodi nulla magni voluptate reiciendis laborum esse odit blanditiis aperiam veniam eos velit similique eveniet ad.</p>
       <p>Esse veritatis inventore explicabo hic consequuntur ex autem praesentium quaerat blanditiis illo deleniti dolorum porro tenetur. Repellat sed repellendus natus cum molestias numquam vitae vel eum voluptatem praesentium tempora quae.</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est nostrum consequatur odit eius blanditiis sit mollitia ut porro cumque nam repudiandae accusantium nisi excepturi corporis incidunt inventore ipsam? Officiis eum!</p>
       <p>Nostrum minus dicta quod totam autem ipsum illo velit labore obcaecati est ducimus ullam sit iusto ea pariatur sint nulla perferendis modi dolorum cumque non laboriosam ratione maiores possimus numquam!</p>
       <p>Deserunt ex dolor atque sapiente suscipit aspernatur et iste necessitatibus enim magni blanditiis quaerat rerum perspiciatis expedita magnam nihil neque natus quos quidem veritatis eligendi dolorem itaque laboriosam beatae dolores!</p>
       <p>Nostrum tenetur rem cum tempora sapiente at possimus assumenda ex quos illum facilis quibusdam facere voluptatum. Necessitatibus tempore animi earum inventore quaerat sit velit totam rem nulla consequuntur dolorem architecto!</p>
       <p>Illum doloremque ipsa magni fugiat explicabo nam officiis expedita architecto voluptatem beatae deserunt optio iusto nostrum facere voluptatum. Tempora dolore quasi vero aut voluptatem eaque nobis iusto enim dignissimos molestias!</p>
     </div><!--/.col-xs-12 -->
   </div><!--/.row -->
 </div><!--/.container -->

<?php the_posts_navigation(); ?>
