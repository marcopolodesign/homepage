<?php
  // Checks if form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $from = $_POST['email']; 
    $nombre = $_POST['personName'];
    $company = $_POST['companyname'];
    $phone = $_POST['phone'];
    $budget = $_POST['budget'];
    $clientmessage = $_POST['message'];
    $message = "$nombre at $company dejo el siguiente mensaje:\n\n$clientmessage\n\nFrom: $from\n\nBudget: $budget\nPhone: $phone".PHP_EOL;

    mail(
      "hi@marcopoloca.com", 
      "Contacto por web Marco Polo Creative Agency", 
      $message,
      "From: website@marcopoloca.com"
    );

    header('Location: /thank-you'); 
  }
?>
<?php /* Template Name: Contact */?>

<?php get_header();?>

<div  class="content-area contact-template">
  <main id="main" class="site-main ">

    <div class="bg-black w-100 min-h-100vh">
      <div class="work-container  contact-container flex align-ends">
        <div class="flex justify-between flex-column items-start inview-animate work-titles  contact-titles w-50">
          <h1  class="tungsten ttu contact-title white">Your adventure starts here:</h1>
          <div class="contact-page-info-container flex items-start justify-between">
            <div id="project-waypoint" class="contact-buenos-aires w-50 mt4 flex flex-column">
              <h2 class="tungsten work-description white ttu">Buenos Aires</h2>
              <a class="ttu gt-pressura-mono white">HOLA@MARCOPOLO.AGENCY</a>
              <a class="gt-pressura-mono white">+ 54 9 11 69742032</a>          <a class="gt-pressura-mono white">AV.DEL LIBERTADOR 7766,<br>
              CABA. ARGENTINA</a> 

            </div>
            <div class="contact-miami w-50 flex flex-column mt4">
              <h2 class="tungsten work-description white ttu">Miami</h2>
              <a class="ttu gt-pressura-mono white">Hi@MARCOPOLO.AGENCY</a>
              <a class="gt-pressura-mono white">+1 (305) 389-7885</a>
              <a class="gt-pressura-mono white">7930 NW 36, Miami,<br>
              FL 33166, USA</a> 
            </div>
          </div>
        </div>

        <div class="form-container flex flex-column w-50 inview-animate">
          <form action="" method="POST" id="subForm" class="sign-up form-inner justify-start no-smoothState">
            <div class="flex justify-between ">
                <input placeholder="Name*" id="fieldName" name="personName" type="text" class="mail-input w-45 " required="">
                <input placeholder="Company Name" id="companyName" name="companyname" type="text" class="mail-input w-45">
            </div>
              <div class="flex justify-between mt5">
                <input placeholder="Email*" id="fieldEmail" name="email" type="mail" class="mail-input w-45" required="">
                <input placeholder="Phone*" id="phone" name="phone" type="text" class="mail-input w-45"  >
              </div>
              <input placeholder="Budget Range" id="budget" name="budget" type="numbers" class="mail-input w-45 mt5" >
              <textarea placeholder="Tell us about your project"  id="fieldMessage" name="message" type="text" class="mail-input message-input w-100 mt5"></textarea>
             
              <div class="w-100 button-container flex mt5">
                <button class="no-smoothState"type="submit" class="ttu submit align-end " name="submit">Send</button>
              </div>
          </form>

        </div>

      </div>
    </div>
    <div class="about-contact container">
        <div class="mv6 w-50 center">
              <h2 class="tungsten black">Having second thoughts on contacting us? We’re always open to new projects and collaborations.</h2>
        </div>

        <div class="flex  flex-column w-100 h-100vh">

          <div class="margin-auto">
            <a href="/work">
                <div class="contact-option-1 center tc">
                  <h2 class="tungsten black mv3 ">You like us but don’t know if we can delivery</h2>
                  <h1 class="contact-option-cta soft-transition transition-05s info-featured-h marcopolo-red relative top-0 left-0 convinced">Work</h1>
                </div>
            </a>


            <a href="/about">
                <div class="contact-option-2 mv4 center tc">
                  <h2 class="tungsten black mv3 ">Liked our work. Get to love the way we do it</h2>
                  <h1 class="contact-option-cta soft-transition transition-05s info-featured-h marcopolo-red relative top-0 left-0 convinced not-convinced">About us</h1>
                </div>
            </a>
          </div>
          
          <div class="footer-info flex w-100 justify-between mb4 animate-inview">
            <div class=""fotter-info-ba>
              <div class="flex">
                <p class="marcopolo-light-grey">+54 9 11 6974 2032</p>
                <p class="ml2 marcopolo-light-grey">hola@marcopolo.agency</p>
              </div>
              <p class="mt1 marcopolo-light-grey">Av. Del Libertador 7766,  CABA, Argentina</p>
            </div>

            <div class=""fotter-info-miami>
              <div class="flex">
                <p class="marcopolo-light-grey">+1 (305) 389-7885</p>
                <p class="ml2 marcopolo-light-grey">hi@marcopolo.agency</p>
              </div>
              <p class="mt1 marcopolo-light-grey">7930 NW 36, Miami, FL 33166, USA</p>
            </div>
          </div>
    </div>


  </main>

</div>


<?php get_footer(); ?>
