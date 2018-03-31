<?php
/*
* Template Name: Add your company
*/
get_header(); ?>
<?php
global $wpdb;
$table = $wpdb->prefix."_companies";
if($_REQUEST['submit']){
$table_attr = array(
    $_POST['firstname'],
    $_POST['lastname'],
    $_POST['title'],
    $_POST['company_name'],
    $_POST['industry'],
    $_POST['address'],
    $_POST['city'],
    $_POST['state'],
    $_POST['zip_code'],
    $_POST['phone_number'],
    $_POST['email'],
    $_POST['companywebsite'],
    $_POST['bussiness_description'],
);
if($_POST['company_name'] !=''){
  $records = $wpdb->get_results("SELECT * FROM $table where company_name='".$_POST['company_name']."'");
  if($records && $wpdb->num_rows>0){
    $meesage = '<div class="alert alert-dismissible alert-success">';
    $meesage .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    $meesage .= '<strong>Oops!</strong>  <a href="#" class="alert-link">'.$_POST['company_name'].'</a> company already exists ';
    $meesage .= '</div>';
    $_result['message'] = $meesage;
  }
  else{
    $asd = $wpdb->insert( $table, $table_attr,array( '%s','%s','%s','%s','%s','%s','%s','%s','%s','%s' ) );
        $wpdb->query( $wpdb->prepare(
        "INSERT INTO $table ( firstname,lastname,title,company_name,industry,address,city,state,zip_code,phone_number,email,companywebsite,bussiness_description) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)", $table_attr));

      $company_url = site_url( '/impact-companies-directory/').'?company='.$_POST['company_name'];
    $meesage = '<div class="alert alert-dismissible alert-success">';
    $meesage .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    $meesage .= 'Your company information has been submitted.You can view the details <a href="'.$company_url.'" class="alert-link">here</a> .';
    $meesage .= '</div>';

      if($_POST['financing']==2){
      $_result['message'] = $meesage;
     }
     else{
      ?>
      <script language="javascript" type="text/javascript">
       document.location = "https://docs.google.com/forms/d/e/1FAIpQLSew8dBeC38hJ5TZmSfRpN1_E7a_CfIavWjm3FCVJTIovjcAgw/viewform";
      </script>
      <?php


     }
  }
}
else{
    $meesage = '<div class="alert alert-dismissible alert-success">';
    $meesage .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    $meesage .= '<strong>Oops!</strong>  Company does not exists ';
    $meesage .= '</div>';
    $_result['message'] = $meesage;
}
}
?>
<div id="content" class="content-area page-wrapper">
<div class="row row-main">
  <div class="large-12 col">
      <div id="message">
        <?php if($_result['message'] !=''){ echo $_result['message']; } ?>
      </div>
      <header class="entry-header">
          <h1 class="entry-title mb uppercase company_heading">Add your Company</h1>
          <hr>
      </header>
      <form action="" method="post" id="add_company_form">
          <div class="container">
              <div class="row">

                  <div class="col medium-4 small-12 large-4">
                      <label for="first"><b>First Name* :</b></label>
                      <input type="text"  name="firstname" id="firstname" required>
                  </div>
                  <div class="col medium-4 small-12 large-4">
                      <label for="last"><b>Last Name* :</b></label>
                      <input type="text"  name="lastname" id="lastname" required>
                  </div>
                  <div class="col medium-4 small-12 large-4">
                      <label for="title"><b>Title* :</b></label>
                      <input type="text"  name="title" id="title" required>
                  </div>
              </div>
              <div class="row">
                  <div class="col medium-6 small-12 large-6">
                      <label for="compnay_name"><b>Company Name* : </b></label>
                      <input type="text"  name="company_name" id="company_name" required>
                  </div>
                  <div class="col medium-6 small-12 large-6">
                      <label for="compnay_name"><b>Industry* : </b></label>
                      <select id="industry" class="ember-view" name="industry">
                       <option value="">Select Industry</option>
                          <option value="47">Accounting</option>
                          <option value="94">Airlines/Aviation</option>
                          <option value="120">Alternative Dispute Resolution</option>
                          <option value="125">Alternative Medicine</option>
                          <option value="127">Animation</option>
                          <option value="19">Apparel &amp; Fashion</option>
                          <option value="50">Architecture &amp; Planning</option>
                          <option value="111">Arts and Crafts</option>
                          <option value="53">Automotive</option>
                          <option value="52">Aviation &amp; Aerospace</option>
                          <option value="41">Banking</option>
                          <option value="12">Biotechnology</option>
                          <option value="36">Broadcast Media</option>
                          <option value="49">Building Materials</option>
                          <option value="138">Business Supplies and Equipment</option>
                          <option value="129">Capital Markets</option>
                          <option value="54">Chemicals</option>
                          <option value="90">Civic &amp; Social Organization</option>
                          <option value="51">Civil Engineering</option>
                          <option value="128">Commercial Real Estate</option>
                          <option value="118">Computer &amp; Network Security</option>
                          <option value="109">Computer Games</option>
                          <option value="3">Computer Hardware</option>
                          <option value="5">Computer Networking</option>
                          <option value="4">Computer Software</option>
                          <option value="48">Construction</option>
                          <option value="24">Consumer Electronics</option>
                          <option value="25">Consumer Goods</option>
                          <option value="91">Consumer Services</option>
                          <option value="18">Cosmetics</option>
                          <option value="65">Dairy</option>
                          <option value="1">Defense &amp; Space</option>
                          <option value="99">Design</option>
                          <option value="69">Education Management</option>
                          <option value="132">E-Learning</option>
                          <option value="112">Electrical/Electronic Manufacturing</option>
                          <option value="28">Entertainment</option>
                          <option value="86">Environmental Services</option>
                          <option value="110">Events Services</option>
                          <option value="76">Executive Office</option>
                          <option value="122">Facilities Services</option>
                          <option value="63">Farming</option>
                          <option value="43">Financial Services</option>
                          <option value="38">Fine Art</option>
                          <option value="66">Fishery</option>
                          <option value="34">Food &amp; Beverages</option>
                          <option value="23">Food Production</option>
                          <option value="101">Fund-Raising</option>
                          <option value="26">Furniture</option>
                          <option value="29">Gambling &amp; Casinos</option>
                          <option value="145">Glass, Ceramics &amp; Concrete</option>
                          <option value="75">Government Administration</option>
                          <option value="148">Government Relations</option>
                          <option value="140">Graphic Design</option>
                          <option value="124">Health, Wellness and Fitness</option>
                          <option value="68">Higher Education</option>
                          <option value="14">Hospital &amp; Health Care</option>
                          <option value="31">Hospitality</option>
                          <option value="137">Human Resources</option>
                          <option value="134">Import and Export</option>
                          <option value="88">Individual &amp; Family Services</option>
                          <option value="147">Industrial Automation</option>
                          <option value="84">Information Services</option>
                          <option value="96">Information Technology and Services</option>
                          <option value="42">Insurance</option>
                          <option value="74">International Affairs</option>
                          <option value="141">International Trade and Development</option>
                          <option value="6">Internet</option>
                          <option value="45">Investment Banking</option>
                          <option value="46">Investment Management</option>
                          <option value="73">Judiciary</option>
                          <option value="77">Law Enforcement</option>
                          <option value="9">Law Practice</option>
                          <option value="10">Legal Services</option>
                          <option value="72">Legislative Office</option>
                          <option value="30">Leisure, Travel &amp; Tourism</option>
                          <option value="85">Libraries</option>
                          <option value="116">Logistics and Supply Chain</option>
                          <option value="143">Luxury Goods &amp; Jewelry</option>
                          <option value="55">Machinery</option>
                          <option value="11">Management Consulting</option>
                          <option value="95">Maritime</option>
                          <option value="80">Marketing and Advertising</option>
                          <option value="97">Market Research</option>
                          <option value="135">Mechanical or Industrial Engineering</option>
                          <option value="126">Media Production</option>
                          <option value="17">Medical Devices</option>
                          <option value="13">Medical Practice</option>
                          <option value="139">Mental Health Care</option>
                          <option value="71">Military</option>
                          <option value="56">Mining &amp; Metals</option>
                          <option value="35">Motion Pictures and Film</option>
                          <option value="37">Museums and Institutions</option>
                          <option value="115">Music</option>
                          <option value="114">Nanotechnology</option>
                          <option value="81">Newspapers</option>
                          <option value="100">Nonprofit Organization Management</option>
                          <option value="57">Oil &amp; Energy</option>
                          <option value="113">Online Media</option>
                          <option value="123">Outsourcing/Offshoring</option>
                          <option value="87">Package/Freight Delivery</option>
                          <option value="146">Packaging and Containers</option>
                          <option value="61">Paper &amp; Forest Products</option>
                          <option value="39">Performing Arts</option>
                          <option value="15">Pharmaceuticals</option>
                          <option value="131">Philanthropy</option>
                          <option value="136">Photography</option>
                          <option value="117">Plastics</option>
                          <option value="107">Political Organization</option>
                          <option value="67">Primary/Secondary Education</option>
                          <option value="83">Printing</option>
                          <option value="105">Professional Training &amp; Coaching</option>
                          <option value="102">Program Development</option>
                          <option value="79">Public Policy</option>
                          <option value="98">Public Relations and Communications</option>
                          <option value="78">Public Safety</option>
                          <option value="82">Publishing</option>
                          <option value="62">Railroad Manufacture</option>
                          <option value="64">Ranching</option>
                          <option value="44">Real Estate</option>
                          <option value="40">Recreational Facilities and Services</option>
                          <option value="89">Religious Institutions</option>
                          <option value="144">Renewables &amp; Environment</option>
                          <option value="70">Research</option>
                          <option value="32">Restaurants</option>
                          <option value="27">Retail</option>
                          <option value="121">Security and Investigations</option>
                          <option value="7">Semiconductors</option>
                          <option value="58">Shipbuilding</option>
                          <option value="20">Sporting Goods</option>
                          <option value="33">Sports</option>
                          <option value="104">Staffing and Recruiting</option>
                          <option value="22">Supermarkets</option>
                          <option value="8">Telecommunications</option>
                          <option value="60">Textiles</option>
                          <option value="130">Think Tanks</option>
                          <option value="21">Tobacco</option>
                          <option value="108">Translation and Localization</option>
                          <option value="92">Transportation/Trucking/Railroad</option>
                          <option value="59">Utilities</option>
                          <option value="106">Venture Capital &amp; Private Equity</option>
                          <option value="16">Veterinary</option>
                          <option value="93">Warehousing</option>
                          <option value="133">Wholesale</option>
                          <option value="142">Wine and Spirits</option>
                          <option value="119">Wireless</option>
                          <option value="103">Writing and Editing</option>
                        </select>
                  </div>
              </div>
              <div class="row">
                  <div class="col medium-12 small-12 large-12">
                      <label for="company_address"><b>Company Address* :</b></label>
                      <div class="row">
                        <div class="col medium-12 small-12 large-12">
                            <input type="text" placeholder="Street Address" name="address" id="address" required>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col medium-4 small-12 large-4">
                              <input type="text" placeholder="City" name="city" id="city" required>
                          </div>
                          <div class="col medium-4 small-12 large-4">
                              <select id="state" class="state-class" name="state">
                                  <option value="">Select State</option>
                                  <option value="AL">Alabama</option>
                                  <option value="AK">Alaska</option>
                                  <option value="AZ">Arizona</option>
                                  <option value="AR">Arkansas</option>
                                  <option value="CA">California</option>
                                  <option value="CO">Colorado</option>
                                  <option value="CT">Connecticut</option>
                                  <option value="DE">Delaware</option>
                                  <option value="DC">District Of Columbia</option>
                                  <option value="FL">Florida</option>
                                  <option value="GA">Georgia</option>
                                  <option value="HI">Hawaii</option>
                                  <option value="ID">Idaho</option>
                                  <option value="IL">Illinois</option>
                                  <option value="IN">Indiana</option>
                                  <option value="IA">Iowa</option>
                                  <option value="KS">Kansas</option>
                                  <option value="KY">Kentucky</option>
                                  <option value="LA">Louisiana</option>
                                  <option value="ME">Maine</option>
                                  <option value="MD">Maryland</option>
                                  <option value="MA">Massachusetts</option>
                                  <option value="MI">Michigan</option>
                                  <option value="MN">Minnesota</option>
                                  <option value="MS">Mississippi</option>
                                  <option value="MO">Missouri</option>
                                  <option value="MT">Montana</option>
                                  <option value="NE">Nebraska</option>
                                  <option value="NV">Nevada</option>
                                  <option value="NH">New Hampshire</option>
                                  <option value="NJ">New Jersey</option>
                                  <option value="NM">New Mexico</option>
                                  <option value="NY">New York</option>
                                  <option value="NC">North Carolina</option>
                                  <option value="ND">North Dakota</option>
                                  <option value="OH">Ohio</option>
                                  <option value="OK">Oklahoma</option>
                                  <option value="OR">Oregon</option>
                                  <option value="PA">Pennsylvania</option>
                                  <option value="RI">Rhode Island</option>
                                  <option value="SC">South Carolina</option>
                                  <option value="SD">South Dakota</option>
                                  <option value="TN">Tennessee</option>
                                  <option value="TX">Texas</option>
                                  <option value="UT">Utah</option>
                                  <option value="VT">Vermont</option>
                                  <option value="VA">Virginia</option>
                                  <option value="WA">Washington</option>
                                  <option value="WV">West Virginia</option>
                                  <option value="WI">Wisconsin</option>
                                  <option value="WY">Wyoming</option>
                                </select>
                          </div>
                          <div class="col medium-4 small-12 large-4">
                              <input type="text" placeholder="Zip Code" name="zip_code" id="zip_code" maxlength="6"  required>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col medium-6 small-12 large-6">
                      <label for="phone_number"><b>Phone Number* :</b></label>
                      <input type="text"  name="phone_number" id="phone_number" placeholder="987-234-4444" maxlength="12" required>
                  </div>

                  <div class="col medium-6 small-12 large-6">
                      <label for="email"><b>Email* :</b></label>
                      <input type="text"  name="email" id="email" required>
                  </div>
              </div>
              <div class="row">
                  <div class="col medium-12 small-12 large-12">
                      <label for="company_website"><b>Company Website* :</b></label>
                      <input type="text"  name="companywebsite" id="companywebsite" required>
                  </div>
              </div>
              <div class="row">
                  <div class="col medium-12 small-12 large-12">
                      <label for="bussinessdescription"><b>Business Description* :</b></label>
                      <textarea rows="4" cols="50" name="bussiness_description" id="bussiness_description" required></textarea>
                  </div>
              </div>
              <div class="row">
                  <div class="col medium-12 small-12 large-12">
                      <span class="financing"><b>Looking for financing?  </b></span>
                      <input type="radio" name="financing" value="1"> Yes
                      <input type="radio" name="financing" value="2"> No
                  </div>
              </div>
              <div class="row button_row ">
                  <div class="clearfix">
                      <input type="submit" name="submit" value="Submit" id="add_company_button">
                  </div>
              </div>

          </div>
      </form>
  </div>
</div>
</div>
<script>

</script>


<?php get_footer(); ?>
