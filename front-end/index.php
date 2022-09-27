<?php include '..//front-end/include/connection.php';?>
<?php include '..//front-end/include/header.php';?>



        <!-- Slideshow 1 -->
        <div class="my-container">
              <div class="sponsors text-center pt-3">
                <script>
                    googletag.cmd.push(function() {
                      googletag.defineSlot('/1001521/billboardhomea', [970, 250], 'div-gpt-ad-1557998951181-0').addService(googletag.pubads());
                      googletag.pubads().enableSingleRequest();
                      googletag.enableServices();
                    });
                </script> 
                 <div class="sponsors">
                <?php
                    $sql ="SELECT * FROM commercial ORDER BY com_id DESC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    $i=0;
                    while($row = $result->fetch_assoc()) {
                        $i++;
                        $id     = $row['com_id'];
                        $image   = $row['image'];
                    ?>
                <div id="div-gpt-ad-1557998951181-0" style="height:250px; width:970px; margin-left: auto; margin-right: auto;" data-google-query-id="CLPd9MKklvkCFZzDTAIdPaAObg">
                  <?php
                      if($image=='')
                      {
                      echo " <a href='../assets/img/default-150x150.png' data-lightbox='example-set' data-title='No Image'><img src='../assets/img/default-150x150.png' alt='' class='img-circle elevation-2' width='50px' height='50px'></a> ";
                      }
                      else
                      {
                      echo " <a href='../assets/img/$image' data-lightbox='example-set' data-title=''><img src='../assets/img/$image' alt='' class='img-circle elevation-2' width='100%' height='100%'></a> ";
                      }
                      ?>
                      <div id="google_ads_iframe_/1001521/billboardhomea_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/1001521/billboardhomea_0" name="google_ads_iframe_/1001521/billboardhomea_0" title="3rd party ad content" width="970" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" srcdoc="" data-google-container-id="1" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div></div> <div class="sponsors skyscraper-left text-center pt-3">
                      <ins data-revive-zoneid="149" data-revive-id="015d25e957e6ef856e6d5cad1815bf26" data-revive-seq="0" id="revive-0-0" data-revive-loaded="1" style="text-decoration: none;"><div id="beacon_53d1619210" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://banner.khmer24.ws/www/delivery/lg.php?bannerid=0&amp;campaignid=0&amp;zoneid=149&amp;loc=https%3A%2F%2Fwww.khmer24.com%2F&amp;cb=53d1619210" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div></ins>
                      <script async="" src="//banner.khmer24.ws/www/delivery/asyncjs.php"></script></div> <div class="sponsors skyscraper-right text-center pt-3">
                      <ins data-revive-zoneid="148" data-revive-id="015d25e957e6ef856e6d5cad1815bf26" data-revive-seq="1" id="revive-0-1" data-revive-loaded="1" style="text-decoration: none;"><div id="beacon_b2bf8e522f" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://banner.khmer24.ws/www/delivery/lg.php?bannerid=0&amp;campaignid=0&amp;zoneid=148&amp;loc=https%3A%2F%2Fwww.khmer24.com%2F&amp;cb=b2bf8e522f" width="0" height="0" alt="" style="width: 0px; height: 0px;">
                      </div>
                      </ins>
                      <script async="" src="//banner.khmer24.ws/www/delivery/asyncjs.php"></script>
                      </div> 
                      </div>
                    <?php
                        }
                        }
                        ?>
                </div>
              
            </div>
        </div>
        <!-- /Slideshow 1 -->
  
        <!-- my-categories -->
        <section class="mt-3 categories">
          <div class="my-container">
               <!-- welcome -->
              <h1 class="title-page">Welcome to khmer24.com, the biggest online market in Cambodia.</h1>
               <!-- /wecome -->

                <!-- sidebar mega menu    -->
                <div class="row m-0 bg-white rounded border">
                  <div class="col col-3 list-main-categories">
                    <ul class="list-unstyled" id="list-category-items">
                      <li class="popular-category-items active"><a href="#"><span class="fa fa-heart-o"></span><span style="margin-left: 4px;"> Popular Categories </span></a></li>

                            <li class="">
                                  <a href="https://www.khmer24.com/en/c-cars-and-vehicles.html"><span class="fas fa-car-side"></span> Cars and Vehicles</a>
                                <div class="sub-category">
                                  <div class="header">
                                      <span class="fas fa-car-side"></span> <span style="margin-left: 0px;">Cars and Vehicles </span>
                                      <a class="btn btn-outline-primary btn-sm float-right" href="https://www.khmer24.com/en/c-cars-and-vehicles.html">View All</a>
                                  </div>
                                  <div class="content">
                                    <ul class="list-unstyled">
                                      <li><a href="https://www.khmer24.com/en/cars.html">Cars for Sale</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-bicycles.html">Bicycles</a></li>
                                      <li><a href="https://www.khmer24.com/en/motorcycles.html">Motorcycles for Sale</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-vehicles-for-rent.html"> Vehicles for Rent</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-car-maintenance-repair.html">Maintenance &amp; Repair</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-lorries-vans-and-tractors.html">Lorries, Vans &amp; Tractors</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-financing-insurance.html">Financing &amp; Insurance</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-tuk-tuk-and-remork.html">Tuk Tuk &amp; Remork</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-car-parts-accessories.html">Parts &amp; Accessories</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-others-vihicles.html">Others</a></li>
                                    </ul>
                                  </div>
                                </div>
                            </li>
                          
                              <li class="">
                                    <a href="https://www.khmer24.com/en/mobiles.html"><span class="fa fa-mobile-phone"style="font-size:24px"></span><span style="margin-left: 8px;"> Phones &amp; Tablets</a></span>
                                <div class="sub-category">
                                    <div class="header">
                                    <span class="fa fa-mobile-phone"></span> Phones &amp; Tablets 
                                    <a class="btn btn-outline-primary btn-sm float-right" href="https://www.khmer24.com/en/mobiles.html">View All</a>
                                    </div>
                                  <div class="content">
                                    <ul class="list-unstyled">
                                      <li><a href="https://www.khmer24.com/en/mobiles/phones.html">Phones</a></li>
                                      <li><a href="https://www.khmer24.com/en/mobiles/tablets.html">Tablets</a></li>
                                      <li><a href="https://www.khmer24.com/en/mobiles/smart-watches.html">Smart Watches</a></li>
                                      <li><a href="https://www.khmer24.com/en/mobiles/phone-accessories.html">Accessories</a></li>
                                      <li><a href="https://www.khmer24.com/en/mobiles/phone-numbers.html">Phone Numbers</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </li>

                              <li>
                                  <a href="https://www.khmer24.com/en/c-computer-and-accessories.html"><span class="fa fa-laptop"></span><span style="margin-left: 2px;"> Computers &amp; Accessories</a> </span>
                                <div class="sub-category">
                                    <div class="header">
                                    <span class="fa fa-laptop"></span> Computers &amp; Accessories
                                    <a class="btn btn-outline-primary btn-sm float-right" href="https://www.khmer24.com/en/c-computer-and-accessories.html">View All</a>
                                    </div>
                                  <div class="content">
                                    <ul class="list-unstyled">
                                      <li><a href="https://www.khmer24.com/en/c-laptops.html">Laptops</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-desktops.html">Desktops</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-all-in-one-pc.html">All-In-One</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-monitors.html">Monitors</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-printers-and-scanners.html">Printers &amp; Scanners</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-computer-parts-and-accessories.html">Parts &amp; Accessories</a></li>
                                      <li><a href="https://www.khmer24.com/en/c-softwares.html">Softwares</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </li>

                              <li>
                                    <a href="https://www.khmer24.com/en/c-electronics-appliances.html"><span class="fa fa-desktop"></span><span style="margin-left: 5px;"> Electronics &amp; Appliances</a><span>
                                <div class="sub-category">
                                    <div class="header">
                                    <span class="fa fa-desktop"></span> Electronics &amp; Appliances
                                    <a class="btn btn-outline-primary btn-sm float-right" href="https://www.khmer24.com/en/c-electronics-appliances.html">View All</a>
                                    </div>
                                  <div class="content">
                                    <ul class="list-unstyled">
                                    <li><a href="https://www.khmer24.com/en/c-washing-machines-and-dryers.html">Washing Machines &amp; Dryers</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-fridges-and-freezers.html">Fridges &amp; Freezers</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-air-conditioning-and-heating.html">Air Conditioning &amp; Heating</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-tools.html">Tools</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-machinery.html">Machinery</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-consumer-electronics.html">Consumer Electronics</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-security-camera.html">Security Camera</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-lighting.html">Lighting</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-cameras-camcorders.html">Cameras, camcorders</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-tvs-videos-and-audios.html">TVs, Videos and Audios</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-home-appliances.html">Home appliances </a></li>
                                    <li><a href="https://www.khmer24.com/en/c-video-games-consoles-toys.html">Video games, consoles, toys </a></li>
                                    </ul>
                                  </div>
                                </div>
                              </li>

                              <li>
                                  <a href="https://www.khmer24.com/en/property.html"><span class="fa fa-home"></span><span style="margin-left: 5px;"> House &amp; Lands</a></span>
                                <div class="sub-category">
                                  <div class="header">
                                  <span class="fa fa-home"></span> House &amp; Lands
                                  <a class="btn btn-outline-primary btn-sm float-right" href="https://www.khmer24.com/en/property.html">View All</a>
                                    </div>
                                  <div class="content">
                                    <ul class="list-unstyled">
                                      <li><a href="https://www.khmer24.com/en/property/house-for-sale.html">House for Sale</a></li>
                                      <li><a href="https://www.khmer24.com/en/property/house-for-rent.html">House for Rent</a></li>
                                      <li><a href="https://www.khmer24.com/en/property/condo-for-sale.html">Condo for Sale</a></li>
                                      <li><a href="https://www.khmer24.com/en/property/apartment-for-rent.html">Apartment for Rent</a></li>
                                      <li><a href="https://www.khmer24.com/en/property/land-for-sale.html">Land for Sale</a></li>
                                      <li><a href="https://www.khmer24.com/en/property/land-for-rent.html">Land for Rent</a></li>
                                      <li><a href="https://www.khmer24.com/en/property/commercial-properties-for-sale.html">Commercial for Sale</a></li>
                                      <li><a href="https://www.khmer24.com/en/property/commercial-properties-for-rent.html">Commercial for Rent</a></li>
                                      <li><a href="https://www.khmer24.com/en/property/room-for-rent.html">Room for Rent</a></li>
                                      <li><a href="https://www.khmer24.com/en/property/properties-wanted.html">Properties Wanted</a></li>
                                      <li><a href="https://www.khmer24.com/en/property/agent-services.html">Agent Services</a></li>
                                      <li><a href="https://www.khmer24.com/en/property/others-properties.html">Others</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </li>

                              <li>
                                  <a href="https://www.khmer24.com/en/jobs.html"><span class="fa fa-briefcase"></span><span style="margin-left: 5px;"> Jobs</a></span>
                                  <div class="sub-category">
                                    <div class="header">
                                    <span class="fa fa-briefcase"></span> Jobs
                                    <a class="btn btn-outline-primary btn-sm float-right" href="https://www.khmer24.com/en/jobs.html">View All</a>
                                      </div>
                                    <div class="content">
                                      <ul class="list-unstyled">
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-accounting.html">Accounting</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-administration.html">Administration</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-architecture-engineering.html">Architecture/Engineering</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-assistant-secretary.html">Assistant/Secretary</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-audit-taxation.html">Audit/Taxation</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-banking-insurance.html">Banking/Insurance</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-cashier-receptionist.html">Cashier/Receptionist</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-catering-restaurant.html">Catering/Restaurant</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-cleaner-maid.html">Cleaner/Maid</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-consultancy.html">Consultancy</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-customer-service.html">Customer Service</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-design.html">Design</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-education-training.html">Education/Training</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-finance.html">Finance</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-freight-shipping-delivery-warehouse.html">Freight/Shipping /Delivery/Warehouse</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-hotel-hospitality.html">Hotel/Hospitality</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-human-resource.html">Human Resource</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-information-technology.html">Information Technology</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-lawyer-legal-service.html">Lawyer/Legal Service</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-management.html">Management</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-manufacturing.html">Manufacturing</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-marketing.html">Marketing</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-media-advertising.html">Media/Advertising</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-medical-health-nursing.html">Medical/Health/Nursing</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-merchandising-purchasing.html">Merchandising/Purchasing</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-operations.html">Operations</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-project-management.html">Project Management</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-quality-control.html">Quality Control</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-resort-casino.html">Resort/Casino</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-sales.html">Sales</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-security-driver.html">Security/Driver</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-technician.html">Technician</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-telecommunication.html">Telecommunication</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-translation-interpretation.html">Translation/Interpretation</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-travel-agent-ticket-sales.html">Travel Agent/Ticket Sales</a></li>
                                        <li><a href="https://www.khmer24.com/en/jobs/jobs-others.html">Others</a></li>
                                      </ul>
                                    </div>
                                </div>
                              </li>

                            <li>
                                <a href="https://www.khmer24.com/en/c-services.html"><span class="fa fa-key"></span><span style="margin-left: 5px;"> Services</a></span>
                                <div class="sub-category">
                                      <div class="header">
                                      <span class="fa fa-key"></span> Services
                                      <a class="btn btn-outline-primary btn-sm float-right" href="https://www.khmer24.com/en/c-services.html">View All</a>
                                      </div>
                                    <div class="content">
                                      <ul class="list-unstyled">
                                        <li><a href="https://www.khmer24.com/en/c-accounting.html">Accounting</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-financial-services.html">Financial Services</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-travel-and-tourism-services.html">Travel &amp; Tourism</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-automotive.html">Automotive</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-advertising-media.html">Advertising &amp; Media</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-bridal-services.html">Bridal Services</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-cleaning-maid-services.html">Cleaning &amp; Maid Services</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-construction-arch-interiors.html">Construction, Arch. &amp; Interiors</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-education-training.html">Education &amp; Training</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-engineering.html">Engineering</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-insurance.html">Insurance</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-massage-spa.html">Massage &amp; Spa</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-hospitality-travel-tourism.html">Hospitality, Travel &amp; Tourism</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-health-medical-pharma.html">Health, Medical &amp; Pharma</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-it-telecom.html">IT &amp; Telecom</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-interior-design-renovation.html">Interior Design &amp; Renovation</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-legal.html">Legal</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-movers-logistics.html">Movers &amp; Logistics</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-plumbing-electrical.html">Plumbing &amp; Electrical</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-property-real-estate.html">Property &amp; Real Estate</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-science.html">Science</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-supply-chain-logistics.html">Supply Chain &amp; Logistics</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-printing-publishing.html">Printing &amp; Publishing</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-other-services.html">Other Services</a></li>
                                      </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                              <a href="https://www.khmer24.com/en/c-fashion-beauty.html"><span class="fas fa-tshirt"></span><span style="margin-left: 5px;"> Fashion &amp; Beauty</a></span>
                              <div class="sub-category">
                                    <div class="header">
                                    <span class="fas fa-tshirt"></span> Fashion &amp; Beauty
                                    <a class="btn btn-outline-primary btn-sm float-right" href="https://www.khmer24.com/en/c-fashion-beauty.html">View All</a>
                                    </div>
                                <div class="content">
                                  <ul class="list-unstyled">
                                    <li><a href="https://www.khmer24.com/en/c-womens-fashion.html">Women's Fashion</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-mens-fashion.html">Men's Fashion</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-baby-and-kids-fashion.html">Baby &amp; Kids</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-travel-and-luggage.html">Travel and Luggage</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-fashion-accessories.html">Fashion Accessories</a></li>
                                    <li><a href="https://www.khmer24.com/en/c-beauty-healthcare-products.html">Beauty &amp; Healthcare</a></li>
                                  </ul>
                                </div>
                              </div>
                            </li>

                            <li>
                                <a href="https://www.khmer24.com/en/c-furniture-decor.html"><span class="fas fa-chair"></span><span style="margin-left: 5px;"> Furniture &amp; Decor</a> </span>
                                <div class="sub-category">
                                    <div class="header">
                                    <span class="fas fa-chair"></span> Furniture &amp; Decor
                                    <a class="btn btn-outline-primary btn-sm float-right" href="https://www.khmer24.com/en/c-furniture-decor.html">View All</a>
                                    </div>
                                  <div class="content">
                                    <ul class="list-unstyled">
                                        <li><a href="https://www.khmer24.com/en/c-tables-and-desks.html">Tables &amp; Desks</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-chairs-and-sofas.html">Chairs &amp; Sofas</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-wardrobes-and-cabinets.html">Wardrobes &amp; Cabinets</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-shelves-and-drawers.html">Shelves &amp; Drawers</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-beds-and-mattresses.html">Beds &amp; Mattresses</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-curtain-and-carpet.html">Curtain &amp; Carpet</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-other-furniture.html">Other Furniture</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-kitchenware.html">Kitchenware</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-household-items.html">Household Items</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-handicrafts-paintings.html">Handicrafts Paintings</a></li>
                                    </ul>
                                  </div>
                                </div>
                            </li>
                            
                            <li>
                                  <a href="https://www.khmer24.com/en/c-books-sports-hobbies.html"><span class="fa fa-book"></span><span style="margin-left: 5px;"> Books, Sports &amp; Hobbies</a></span>
                                <div class="sub-category">
                                      <div class="header">
                                          <span class="fa fa-book"></span> Books, Sports &amp; Hobbies
                                          <a class="btn btn-outline-primary btn-sm float-right" href="https://www.khmer24.com/en/c-books-sports-hobbies.html">View All</a>
                                      </div>
                                    <div class="content">
                                      <ul class="list-unstyled">
                                        <li><a href="https://www.khmer24.com/en/c-musical-instruments.html">Musical Instruments</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-fishing.html">Fishing</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-hike-and-camp.html">Hike &amp; Camp</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-cds-dvds-vhs.html">CDS, DVDS, VHS</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-books.html">Books</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-sports-equipment.html">Sports Equipment</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-others-buy-sell.html">Others</a></li>
                                      </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                              <a href="https://www.khmer24.com/en/c-pets.html"><span class="fas fa-cat"></span><span style="margin-left: 5px;"> Pets</a></span>
                                <div class="sub-category">
                                      <div class="header">
                                        <span class="fas fa-cat"></span> Pets
                                        <a class="btn btn-outline-primary btn-sm float-right" href="https://www.khmer24.com/en/c-pets.html">View All</a>
                                      </div>
                                  <div class="content">
                                    <ul class="list-unstyled">
                                        <li><a href="https://www.khmer24.com/en/c-dogs.html">Dogs</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-cats.html">Cats</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-birds.html">Birds</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-fish.html">Fish</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-pet-food.html">Pet Food</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-pet-accessories.html">Pet Accessories</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-other-pets.html">Other</a></li>
                                    </ul>
                                  </div>
                                </div>
                            </li>

                            <li>
                              <a href="https://www.khmer24.com/en/c-foods.html"><span class="fas fa-hamburger"></span><span style="margin-left: 5px;"> Foods</a></span>
                              <div class="sub-category">
                                  <div class="header">
                                    <span class="fas fa-hamburger"></span> Foods
                                  <a class="btn btn-outline-primary btn-sm float-right" href="https://www.khmer24.com/en/c-foods.html">View All</a>
                                  </div>
                                  <div class="content">
                                    <ul class="list-unstyled">
                                        <li><a href="https://www.khmer24.com/en/c-meat.html">Meat</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-seafood.html">Seafood</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-fruits.html">Fruits</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-vegetables.html">Vegetables</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-beverages.html">Beverages</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-grocery.html">Grocery</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-bread-and-bakery.html">Bread &amp; Bakery</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-beer-and-wine.html">Beer &amp; Wine</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-rice-and-cereal.html">Rice &amp; Cereal</a></li>
                                        <li><a href="https://www.khmer24.com/en/c-other-foods.html">Other</a></li>
                                    </ul>
                                  </div>
                              </div>
                            </li>
                    </ul>
                  </div>
             
                <!-- /sidebar mega menu -->

                  <!-- category -->
                  <div class="col popular-category-items">
                      <ul id="popular_categories" class="list-inline">
                        <li>
                        <a href="https://www.khmer24.com/en/property.html">
                        <div class="icon ">
                        <span class="house-for-sale"></span>
                        </div>
                        <p class="title">House &amp; Lands</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/cars.html">
                        <div class="icon">
                        <span class="cars-for-sale.png"></span>
                        </div>
                        <p class="title">Cars for Sale</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/motorcycles.html">
                        <div class="icon">
                        <span class="motorcycles-for-sale"></span>
                        </div>
                        <p class="title">Motorcycles for Sale</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/mobiles.html">
                        <div class="icon">
                        <span class="phones-tablets"></span>
                        </div>
                        <p class="title">Phones &amp; Tablets</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/mobiles/phone-accessories.html">
                        <div class="icon">
                        <span class="phone-accessories"></span>
                        </div>
                        <p class="title">Accessories</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/mobiles/phone-numbers.html">
                        <div class="icon">
                        <span class="phone-numbers"></span>
                        </div>
                        <p class="title">Phone Numbers</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/c-computer-and-accessories.html">
                        <div class="icon">
                        <span class="computer-and-accessories"></span>
                        </div>
                        <p class="title">Computers &amp; Accessories</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/c-computer-parts-and-accessories.html">
                        <div class="icon">
                        <span class="computer-accessories"></span>
                        </div>
                        <p class="title">Parts &amp; Accessories</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/c-cameras-camcorders.html">
                        <div class="icon">
                        <span class="cameras-camcorders"></span>
                        </div>
                        <p class="title">Cameras, camcorders</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/c-tvs-videos-and-audios.html">
                        <div class="icon">
                        <span class="tvs-videos-and-audios"></span>
                        </div>
                        <p class="title">TVs, Videos and Audios</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/c-home-appliances.html">
                        <div class="icon">
                        <span class="home-appliances"></span>
                        </div>
                        <p class="title">Home appliances </p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/c-womens-fashion.html">
                        <div class="icon">
                        <span class="clothing-accessories"></span>
                        </div>
                        <p class="title">Women's Fashion</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/c-mens-fashion.html">
                        <div class="icon">
                        <span class="jewellery-watches"></span>
                        </div>
                        <p class="title">Men's Fashion</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/c-beauty-healthcare-products.html">
                        <div class="icon">
                        <span class="beauty-healthcare-products"></span>
                        </div>
                        <p class="title">Beauty &amp; Healthcare</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/c-sports-equipment.html">
                        <div class="icon">
                        <span class="sports-equipment"></span>
                        </div>
                        <p class="title">Sports Equipment</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/c-furniture-decor.html">
                        <div class="icon">
                        <span class="furniture-decor"></span>
                        </div>
                        <p class="title">Furniture &amp; Decor</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/jobs.html">
                        <div class="icon">
                        <span class="jobs"></span>
                        </div>
                        <p class="title">Jobs</p>
                        </a>
                        </li>

                        <li>
                        <a href="https://www.khmer24.com/en/c-pets.html">
                        <div class="icon">
                        <span class="jobs"></span>
                        </div>
                        <p class="title">Pets</p>
                        </a>
                        </li>

                          <li>
                            <a href="https://www.khmer24.com/en/c-foods.html">
                              <div class="icon">
                                <span class="jobs"></span>
                              </div>
                            <p class="title">Foods</p>
                            </a>
                          </li>
                      </ul>
                    </div>
                  </div>
                  <!-- /category -->
          </div>
        </section>
        <!-- /categories -->

                <script type="text/javascript">
                  $(document).ready(function function_name() {
                    $('#list-category-items > li').mouseover(function(){
                      $('#list-category-items > li').removeClass('active');
                      $(this).addClass('active');
                    });
                    $('#list-category-items').mouseout(function(){
                      $('#list-category-items > li').removeClass('active');
                      $('#list-category-items > li:first-child').addClass('active');
                    });
                  });
                </script>

                <!-- Slideshow 2 -->
                <?php
                    $sql ="SELECT * FROM slideshow ORDER BY slide_id DESC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    $i=0;
                    while($row = $result->fetch_assoc()) {
                        $i++;
                        $image   = $row['image'];
                    ?>
                <div id="div-gpt-ad-1557998951181-0" style="height:250px; width:970px; margin-left: auto; margin-right: auto; margin-top: 25px;" data-google-query-id="CLPd9MKklvkCFZzDTAIdPaAObg">
                  <?php
                      if($image=='')
                      {
                      echo " <a href='../assets/img/default-150x150.png' data-lightbox='example-set' data-title='No Image'><img src='../assets/img/default-150x150.png' alt='' class='img-circle elevation-2' width='50px' height='50px'></a> ";
                      }
                      else
                      {
                      echo " <a href='../assets/img/$image' data-lightbox='example-set' data-title=''><img src='../assets/img/$image' alt='' class='img-circle elevation-2' width='100%' height='100%'></a> ";
                      }
                      ?>
                      <div id="google_ads_iframe_/1001521/billboardhomea_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/1001521/billboardhomea_0" name="google_ads_iframe_/1001521/billboardhomea_0" title="3rd party ad content" width="970" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" srcdoc="" data-google-container-id="1" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div></div> <div class="sponsors skyscraper-left text-center pt-3">
                      <ins data-revive-zoneid="149" data-revive-id="015d25e957e6ef856e6d5cad1815bf26" data-revive-seq="0" id="revive-0-0" data-revive-loaded="1" style="text-decoration: none;"><div id="beacon_53d1619210" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://banner.khmer24.ws/www/delivery/lg.php?bannerid=0&amp;campaignid=0&amp;zoneid=149&amp;loc=https%3A%2F%2Fwww.khmer24.com%2F&amp;cb=53d1619210" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div></ins>
                      <script async="" src="//banner.khmer24.ws/www/delivery/asyncjs.php"></script></div> <div class="sponsors skyscraper-right text-center pt-3">
                      <ins data-revive-zoneid="148" data-revive-id="015d25e957e6ef856e6d5cad1815bf26" data-revive-seq="1" id="revive-0-1" data-revive-loaded="1" style="text-decoration: none;"><div id="beacon_b2bf8e522f" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://banner.khmer24.ws/www/delivery/lg.php?bannerid=0&amp;campaignid=0&amp;zoneid=148&amp;loc=https%3A%2F%2Fwww.khmer24.com%2F&amp;cb=b2bf8e522f" width="0" height="0" alt="" style="width: 0px; height: 0px;">
                      </div>
                      </ins>
                      <script async="" src="//banner.khmer24.ws/www/delivery/asyncjs.php"></script>
                      </div> 
                      </div>
                    <?php
                        }
                        }
                        ?>
                <!-- /Slideshow 2 -->

          <!-- container 1-->
          <section class="latest-items pt-4">
            <div class="my-container">
              <div class="columns-items border-bottom pb-4">                
                <?php
                    if(isset($_POST['search']) && ($_POST['search'])!='')
                        {
                            $search = $_POST['search'];
                            ?>
                       <div class="content pt-2">
                          <div class="list-items">
                            <div class="items owl-carousel owl-carousel-culumn-items owl-loaded owl-drag">
                              <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-7037px, 0px, 0px); transition: all 0.25s ease 0s; width: 65590px;">
                        <?php
                        $sql ="SELECT * FROM container WHERE con_name LIKE '%$search%'";
                        $result = mysqli_query($conn, $sql);
                        if($result)
                        {
                            while($row = mysqli_fetch_array($result))
                            {
                              $id = $row['con_id'];
                              $name = $row['con_name'];
                              $img = $row['image'];
                              $cat = $row['con_cat'];
                              $text = $row['con_text'];
                              $int = $row['con_int'];
                        ?>
                                    <div class="owl-item" style="width: 265.5px; margin-right: 16px;">
                                      <div class="item">
                                        <a href="detail.php?detail=<?= $id ?>" title="ដីលក់នៅជាប់ផ្លូវធំ 30ម ទីតាំងដីនៅសង្កាត់ព្រៃសរ ខណ្ឌដង្កោ" class="bg-white border rounded">
                                          <article>
                                            <div class="image ">
                                              <img class="movie-list-item-img" src="../assets/img/<?=$img?>" alt="">
                                            </div>
                                            <div class="detail">
                                              <h3 class="title truncate truncate-2"><?=$name?></h3>
                                              <p class="prices text-red m-0"><span class="price"><?=$int?></span></p>
                                            </div>
                                          </article>
                                        </a>
                                      </div>
                                    </div>
                                  <?php
                          }
                          }
                          ?>
                     </div>
                              </div>
                                      <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                      </div>
                                <div class="owl-dots disabled"></div>
                            </div>
                          </div>
                        </div>
                    <?php  
                    }else
                    {
                          $sqlt ="SELECT * FROM category ORDER BY cat_id DESC";
                          $resultt = $conn->query($sqlt);
                          if ($resultt->num_rows > 0) {
                              while($rowt = $resultt->fetch_assoc()) {
                                  $idc = $rowt['cat_id'];
                                  $namec = $rowt['cat_name'];    
                        ?>
                        <div class="header mb-2"><h2 class="title m-0"><?=$namec?></h2></div>
                          <div class="content pt-2">
                            <div class="list-items">
                              <div class="items owl-carousel owl-carousel-culumn-items owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                  <div class="owl-stage" style="transform: translate3d(-7037px, 0px, 0px); transition: all 0.25s ease 0s; width: 65590px;">
                                      <!-- sql -->
                                      <?php
                                          $sql ="SELECT * FROM container WHERE con_cat=$idc";
                                          $result = mysqli_query($conn, $sql);
                                          if($result)
                                          {
                                              while($row = mysqli_fetch_array($result))
                                              {
                                                  $id = $row['con_id'];
                                                  $name = $row['con_name'];
                                                  $img = $row['image'];
                                                  $cat = $row['con_cat'];
                                                  $text = $row['con_text'];
                                                  $int = $row['con_int'];
                                          ?>
                                        <div class="owl-item" style="width: 265.5px; margin-right: 16px;">
                                          <div class="item">
                                            <a href="detail.php?detail=<?= $id ?>" title="ដីលក់នៅជាប់ផ្លូវធំ 30ម ទីតាំងដីនៅសង្កាត់ព្រៃសរ ខណ្ឌដង្កោ" class="bg-white border rounded">
                                              <article>
                                                <div class="image ">
                                                  <img class="movie-list-item-img" src="../assets/img/<?=$img?>" alt="">
                                                </div>
                                                <div class="detail">
                                                  <h3 class="title truncate truncate-2"><?=$name?></h3>
                                                  <p class="prices text-red m-0"><span class="price"><?=$int?></span></p>
                                                </div>
                                              </article>
                                            </a>
                                          </div>
                                        </div>
                                      <?php
                                            }
                                            }
                                            ?>
                                              <!-- /sql -->
                                      </div>
                                    </div>
                                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                        </div>
                                      <div class="owl-dots disabled"></div>
                            </div>
                          </div>
                        </div>
                        <?php
                        }
                      }  
                    }
                ?>
              </div>                 
            </div>
          </section>
          <p style="text-align: center;">No results found!</p>
             
        <!-- /container 1-->
      <?php include '..//front-end/include/footer.php';?>
    </body>
  </html>