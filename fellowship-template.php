

<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

/*
Template Name: Fellowship
*/

get_header(); ?>

<div class="wrap clearfix">
  <div id="mission">
    <h2>OUR FELLOWSHIP</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in nunc est. Quisque eget nisl eros, congue fermentum ipsum. Donec sollicitudin orci quis justo rutrum ut dapibus neque facilisis. Aliquam gravida, massa ut suscipit euismod, tellus leo faucibus sem, ac malesuada elit arcu sit amet ante</p>
  </div>
  <div id="fellows">
    <h3 class="ttl">Meet a Fellow <a href="#" class="more">Apply for the fellowship</a></h3>
    <ul>
      <li class="first"><img src="<?php bloginfo( 'template_url' ); ?>/images/fellow.jpg" alt="" /> <span><strong>Jane Doe</strong></span></li>
      <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellow.jpg" alt="" /> <span><strong>John Doe</strong></span></li>
      <li><img src="<?php bloginfo( 'template_url' ); ?>/images/fellow.jpg" alt="" /> <span><strong>Jimmy Doe</strong></span></li>
      <li class="last"><img src="<?php bloginfo( 'template_url' ); ?>/images/fellow.jpg" alt="" /> <span><strong>Allison McAllister Kessinger</strong></span></li>
    </ul>
  </div>
</div>
<div class="wrap" id="dots"></div>
<div class="wrap clearfix" id="fellows-wrap">
  <div id="maincontent">
    <h2 class="ttl">Why Become a Fellow? <a href="#" class="red-btn"><span>SHARE THIS +</span></a></h2>
    <ul id="why">
      <li><strong class="number">1</strong> Gov 2.0 Training. You will start with a crash course in municipal government and gain a practical understanding of the vital intersection of politics and technology.</li>
      <li><strong class="number">2</strong> Professional Development. The biggest names in the web industry and the Gov 2.0 movement will provide you unparalleled networking, mentoring, and support.</li>
      <li><strong class="number">3</strong> Alumni Connections. Working closely with other talented individuals, you will develop lasting professional relationships in a face-paced, startup atmosphere.</li>
      <li><strong class="number">4</strong> Employer Partnerships. Multiple leading internet companies have already pledged to guarantee interviews for a full-time position after your CfA experience.</li>
    </ul>
    <div class="box">
      <h3 class="ttl">What Are We looking For? <a href="#" class="more">Read More</a></h3>
      <ul id="what" class="clearfix">
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/looking-for-pic.jpg" alt="" /></li>
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/looking-for-pic.jpg" alt="" /></li>
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/looking-for-pic.jpg" alt="" /></li>
        <li><img src="<?php bloginfo( 'template_url' ); ?>/images/looking-for-pic.jpg" alt="" /></li>
      </ul>
      <p>Anyone with the skills and passion to make cities work better using technology. Many of you will be starting your careers, but others of you will have been working on the web for years and just want a chance to do something important and altruistic. All of you will want to see your work make a difference to cities and change how government works.</p>
    </div>
    <div class="box">
      <h3 class="ttl">The application Process <a href="#" class="more">Read More</a></h3>
      <p>Applications are due August 15th at MIDNIGHT PST, but don’t wait until then to apply. We may ask you for additional information once we see your application, and the more time you give us, the better your chances of being selected. Folks selected for interviews will be contacted by September 1.</p>
    </div>
    <div class="box">
      <h3 class="ttl">The Training <a href="#" class="more">Read More</a></h3>
      <p>The selected fellows come together at the Bay Area headquarters for a month of training, team building, working on internal tools, and project research.  A key element of this portion of the program is the guest speaker series; leaders in both government and the web industry provide inspiration and build the corps’ networks.</p>
    </div>
  </div>
  <div class="right-col">
    <div class="testimonial-wrap">
      <div class="testimonial-content">
        <h4>"Testimonial by a current Code for America Fellow."</h4>
        <p>Aneesh Chopra <span class="position">OSTP Associate Director</span></p>
        <img src="<?php bloginfo( 'template_url' ); ?>/images/Aneesh.jpg" alt="Aneesh Chopra" /> </div>
    </div>
    <ul>
      <li><a href="#">Meet Our Fellows</a></li>
      <li><a href="#">Learn More About the Fellowship</a></li>
      <li><a href="#" class="active">Apply To Be A Fellow</a></li>
    </ul>
    <div id="dates">
      <h3>Dates To Keep In Mind</h3>
      <h4>Contributors</h4>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr class="odd">
          <td>06/01/10</td>
          <th>Application form for all fellows available <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>08/15/10</td>
          <th>Fellow applications due <span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>09/01/10</td>
          <th>First round of applicants notified, interviews <br />
            begin <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>10/01/10</td>
          <th>Final decisions on fellows announced <span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>10/15/10</td>
          <th>Deadline for fellows to commit to the program <span>&raquo;</span></th>
        </tr>
      </table>
      <h4>Fellows</h4>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr class="odd">
          <td>01/10</td>
          <th>Orientation/CFA Institute <span>&raquo;</span></th>
        </tr>
        <tr>
          <td>02/10</td>
          <th>City Tour <span>&raquo;</span></th>
        </tr>
        <tr class="odd">
          <td>03/10 - 08/10</td>
          <th>Development <span>&raquo;</span></th>
        </tr>
      </table>
    </div>
  </div>
</div>
<?php get_footer(); ?>