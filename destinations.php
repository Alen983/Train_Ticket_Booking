<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Trial</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='css/index.css'>
        <link rel='stylesheet' href='css/packageindex.css'>
        <script src='main.js'></script>
        <!--bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

        
    </head>
    <body>
        <!--Php connection-->
        <?php //include("components/connection.php");?>
        <?php include("components/error_reports.php");?>

        <!--Navbar-->
        <?php include("components/navbar.php");?><hr>
           <!-- package section -->
           <br>
           <h2 style="text-align:center;">Destinations</h2>
           <p style="text-align:center;">Places Worth Knowing About.</p>
            
           <div id="container">
            <div class="card">
            <img id="img01" src="Images/mbai.jpg" alt="Lago di Braies">
            <div class="card__details">
                <div class="name">Mumbai</div>
                <p>Mumbai is a mix of iconic old-world charm architecture, strikingly modern high rises, cultural and traditional structures</p> 
                <a href="https://en.wikipedia.org/wiki/Mumbai">
                <button>Read more</button>
                </a>
            </div>
            </div>

            <div class="card">
                <img id="img01" src="Images/mr.jpg" alt="Lago di Braies">
                <div class="card__details">
                <div class="name">Munnar</div>
                <p>Known for its evergreen tea plantations, the hills of Munnar with their rolling beauty and charm can cast a magical spell on the visitors! </p> 
                    <a href="https://www.keralatourism.org/destination/munnar/202">
                <button>Read more</button>
                </a>
                </div>
            </div>

            <div class="card">
                <img id="img01"  src="Images/eklm.jpg" alt="Lago di Braies">
                <div class="card__details">

                <div class="name">Ernakulam</div>
                <p>The district includes Kochi, also known as the commercial capital of Kerala, which is famous for its ancient Churches, Hindu temples, synagogues and mosques. </p> 
                    <a href="https://en.wikipedia.org/wiki/Ernakulam">
                <button>Read more</button>
                </a>
                </div>
            </div>

            <div class="card">
                <img id="img01"  src="Images/goa.jpg" alt="Lago di Braies">
                <div class="card__details">

                <div class="name">Goa</div>
                <p>Goa is one of the most favorite destination among Indian tourists due to its pristine beaches. Dotted with hundreds of impressive beaches</p> 
                    <a href="https://en.wikipedia.org/wiki/Goa">
                <button>Read more</button>
                </a>
                </div>
            </div>

            <div class="card">
                <img id="img01"  src="Images/pkd.jpg" alt="Lago di Braies">
                <div class="card__details">

                <div class="name">Palakkad</div>
                <p>Palakkad is famous for the ancient Palakkad Fort, which is situated at the heart of the city and was captured and rebuilt by Hyder Ali in 1766.</p> 
                    <a href="https://en.wikipedia.org/wiki/Palakkad">
                <button>Read more</button>
                </a>
                </div>
            </div>

            <div class="card">
                <img id="img01"  src="Images/shimla.jpg" alt="Lago di Braies">
                <div class="card__details">

                <div class="name">Shimla</div>
                <p>The town is famous for pleasant walking experiences on hillsides surrounded by pine and oak forests. This capital city of Himachal Pradesh is famous for The Mall, ridge, and toy train.</p> 
                    <a href="https://en.wikipedia.org/wiki/Shimla">
                <button>Read more</button>
                </a>
                </div>
            </div>
        </div>        

        <section style="padding-top: 13em;">
        <div>
        <?php include("components/footer.php");?>
        </div>
        </section>
    </body>
</html>