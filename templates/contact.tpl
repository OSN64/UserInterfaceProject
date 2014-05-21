{extends "layout.tpl"}

{block "title"}
  Antonio's Pasta | Contact Us
{/block}

{block "nav-links"}
  <li><a href="index.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="recipes.php">Recipes</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li class="active"><a href="contact.php">Contact</a></li>
{/block}

{block "content"}
  <div class="container">
      
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Contact <small>We'd Love to Hear From You!</small></h1>
        </div>
        <div class="col-lg-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28183.887404867084!2d153.3501464!3d-27.994327!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b911afec71b6fcb%3A0x1153e617105dfcca!2sCreative+Pizza!5e0!3m2!1sen!2sau!4v1400675314054" width="100%" height="400px" scrolling="no" frameborder="0"  marginheight="0" marginwidth="0" style="border:0"></iframe>
        </div>
      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Let's Get In Touch!</h3>
          <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <form  id="contactus" role="form" method="POST" action="">
              <div class="row">
                <div class="form-group col-lg-4">
                  <label for="input1">Name</label>
                  <input type="text" name="name" class="form-control" id="input1" placeholder="eg: Dave Goldstene" required >
                </div>
                <div class="form-group col-lg-4">
                  <label for="input2">Email Address</label>
                  <input type="email" name="email" class="form-control" id="input2" placeholder="eg: Dave@techthrones.com" required >
                </div>
                <div class="form-group col-lg-4">
                  <label for="input3">Phone Number</label>
                  <input type="number" name="number" class="form-control" id="input3" placeholder="eg: 2323243" required >
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-12">
                  <label for="input4">Message</label>
                  <textarea name="message" class="form-control" rows="6" id="input4" placeholder="Tell us what you want" required ></textarea>
                </div>
                <div class="form-group col-lg-12">
                  <input type="hidden" name="save" value="contact">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Modern Business</h3>
          <h4>A Start Bootstrap Template</h4>
          <p>
            5555 44th Street N.<br>
            Bootstrapville, CA 32323<br>
          </p>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: (555) 984-3600</p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a></p>
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
          </ul>
        </div>

      </div><!-- /.row -->

    </div>

    
{/block}