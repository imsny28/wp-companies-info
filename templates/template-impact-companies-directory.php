<?php
/*
* Template Name: Impact Companies Directory
*/
get_header();
?>
<?php function state($state){
  $states = array(
    "AL"=>"Alabama",
    "AK"=>"Alaska",
    "AZ"=>"Arizona",
    "AR"=>"Arkansas",
    "CA"=>"California",
    "CO"=>"Colorado",
    "CT"=>"Connecticut",
    "DE"=>"Delaware",
    "DC"=>"District Of Columbia",
    "FL"=>"Florida",
    "GA"=>"Georgia",
    "HI"=>"Hawaii",
    "ID"=>"Idaho",
    "IL"=>"Illinois",
    "IN"=>"Indiana",
    "IA"=>"Iowa",
    "KS"=>"Kansas",
    "KY"=>"Kentucky",
    "LA"=>"Louisiana",
    "ME"=>"Maine",
    "MD"=>"Maryland",
    "MA"=>"Massachusetts",
    "MI"=>"Michigan",
    "MN"=>"Minnesota",
    "MS"=>"Mississippi",
    "MO"=>"Missouri",
    "MT"=>"Montana",
    "NE"=>"Nebraska",
    "NV"=>"Nevada",
    "NH"=>"New Hampshire",
    "NJ"=>"New Jersey",
    "NM"=>"New Mexico",
    "NY"=>"New York",
    "NC"=>"North Carolina",
    "ND"=>"North Dakota",
    "OH"=>"Ohio",
    "OK"=>"Oklahoma",
    "OR"=>"Oregon",
    "PA"=>"Pennsylvania",
    "RI"=>"Rhode Island",
    "SC"=>"South Carolina",
    "SD"=>"South Dakota",
    "TN"=>"Tennessee",
    "TX"=>"Texas",
    "UT"=>"Utah",
    "VT"=>"Vermont",
    "VA"=>"Virginia",
    "WA"=>"Washington",
    "WV"=>"West Virginia",
    "WI"=>"Wisconsin",
    "WY"=>"Wyoming",
  );
  return $states[$state];
}

function industries($industry)
{
	$industries= array(
                  "47"=>'Accounting',
                  "94"=>'Airlines/Aviation',
                  "120"=>'Alternative Dispute Resolution',
                  "125"=>'Alternative Medicine',
                  "127"=>'Animation',
                  "19"=>'Apparel &amp; Fashion',
                  "50"=>'Architecture &amp; Planning',
                  "111"=>'Arts and Crafts',
                  "53"=>'Automotive',
                  "52"=>'Aviation &amp; Aerospace',
                  "41"=>'Banking',
                  "12"=>'Biotechnology',
                  "36"=>'Broadcast Media',
                  "49"=>'Building Materials',
                  "138"=>'Business Supplies and Equipment',
                  "129"=>'Capital Markets',
                  "54"=>'Chemicals',
                  "90"=>'Civic &amp; Social Organization',
                  "51"=>'Civil Engineering',
                  "128"=>'Commercial Real Estate',
                  "118"=>'Computer &amp; Network Security',
                  "109"=>'Computer Games',
                  "3"=>'Computer Hardware',
                  "5"=>'Computer Networking',
                  "4"=>'Computer Software',
                  "48"=>'Construction',
                  "24"=>'Consumer Electronics',
                  "25"=>'Consumer Goods',
                  "91"=>'Consumer Services',
                  "18"=>'Cosmetics',
                  "65"=>'Dairy',
                  "1"=>'Defense &amp; Space',
                  "99"=>'Design',
                  "69"=>'Education Management',
                  "132"=>'E-Learning',
                  "112"=>'Electrical/Electronic Manufacturing',
                  "28"=>'Entertainment',
                  "86"=>'Environmental Services',
                  "110"=>'Events Services',
                  "76"=>'Executive Office',
                  "122"=>'Facilities Services',
                  "63"=>'Farming',
                  "43"=>'Financial Services',
                  "38"=>'Fine Art',
                  "66"=>'Fishery',
                  "34"=>'Food &amp; Beverages',
                  "23"=>'Food Production',
                  "101"=>'Fund-Raising',
                  "26"=>'Furniture',
                  "29"=>'Gambling &amp; Casinos',
                  "145"=>'Glass, Ceramics &amp; Concrete',
                  "75"=>'Government Administration',
                  "148"=>'Government Relations',
                  "140"=>'Graphic Design',
                  "124"=>'Health, Wellness and Fitness',
                  "68"=>'Higher Education',
                  "14"=>'Hospital &amp; Health Care',
                  "31"=>'Hospitality',
                  "137"=>'Human Resources',
                  "134"=>'Import and Export',
                  "88"=>'Individual &amp; Family Services',
                  "147"=>'Industrial Automation',
                  "84"=>'Information Services',
                  "96"=>'Information Technology and Services',
                  "42"=>'Insurance',
                  "74"=>'International Affairs',
                  "141"=>'International Trade and Development',
                  "6"=>'Internet',
                  "45"=>'Investment Banking',
                  "46"=>'Investment Management',
                  "73"=>'Judiciary',
                  "77"=>'Law Enforcement',
                  "9"=>'Law Practice',
                  "10"=>'Legal Services',
                  "72"=>'Legislative Office',
                  "30"=>'Leisure, Travel &amp; Tourism',
                  "85"=>'Libraries',
                  "116"=>'Logistics and Supply Chain',
                  "143"=>'Luxury Goods &amp; Jewelry',
                  "55"=>'Machinery',
                  "11"=>'Management Consulting',
                  "95"=>'Maritime',
                  "80"=>'Marketing and Advertising',
                  "97"=>'Market Research',
                  "135"=>'Mechanical or Industrial Engineering',
                  "126"=>'Media Production',
                  "17"=>'Medical Devices',
                  "13"=>'Medical Practice',
                  "139"=>'Mental Health Care',
                  "71"=>'Military',
                  "56"=>'Mining &amp; Metals',
                  "35"=>'Motion Pictures and Film',
                  "37"=>'Museums and Institutions',
                  "115"=>'Music',
                  "114"=>'Nanotechnology',
                  "81"=>'Newspapers',
                  "100"=>'Nonprofit Organization Management',
                  "57"=>'Oil &amp; Energy',
                  "113"=>'Online Media',
                  "123"=>'Outsourcing/Offshoring',
                  "87"=>'Package/Freight Delivery',
                  "146"=>'Packaging and Containers',
                  "61"=>'Paper &amp; Forest Products',
                  "39"=>'Performing Arts',
                  "15"=>'Pharmaceuticals',
                  "131"=>'Philanthropy',
                  "136"=>'Photography',
                  "117"=>'Plastics',
                  "107"=>'Political Organization',
                  "67"=>'Primary/Secondary Education',
                  "83"=>'Printing',
                  "105"=>'Professional Training &amp; Coaching',
                  "102"=>'Program Development',
                  "79"=>"Public Policy",
                  "98"=>'Public Relations and Communications',
                  "78"=>'Public Safety',
                  "82"=>'Publishing',
                  "62"=>'Railroad Manufacture',
                  "64"=>'Ranching',
                  "44"=>'Real Estate',
                  "40"=>'Recreational Facilities and Services',
                  "89"=>'Religious Institutions',
                  "144"=>'Renewables &amp; Environment',
                  "70"=>'Research',
                  "32"=>'Restaurants',
                  "27"=>'Retail',
                  "121"=>'Security and Investigations',
                  "7"=>'Semiconductors',
                  "58"=>'Shipbuilding',
                  "20"=>'Sporting Goods',
                  "33"=>'Sports',
                  "104"=>'Staffing and Recruiting',
                  "22"=>'Supermarkets',
                  "8"=>'Telecommunications',
                  "60"=>'Textiles',
                  "130"=>'Think Tanks',
                  "21"=>'Tobacco',
                  "108"=>'Translation and Localization',
                  "92"=>'Transportation/Trucking/Railroad',
                  "59"=>'Utilities',
                  "106"=>'Venture Capital &amp; Private Equity',
                  "16"=>'Veterinary',
                  "93"=>'Warehousing',
                  "133"=>'Wholesale',
                  "142"=>'Wine and Spirits',
                  "119"=>'Wireless',
                  "103"=>'Writing and Editing',
                  );
	return $industries[$industry];
	}
?>
<?php global $wpdb;
$table = $wpdb->prefix."_companies";
$company=$_GET['company'];
$industry = $_GET['industry'];

?>
<div id="content" class="content-area page-wrapper">
    <div class="row row-main">
        <div class="large-12 col">
            <div class="container">
                <?php if($company){
					$records = $wpdb->get_results("SELECT * FROM $table where company_name='".$company."'");
					if($records && $wpdb->num_rows>0){ ?>
                    <div class="row">
                    <?php foreach ($records as $record) { ?>
	                    <div class="personal_information">
		                    <div class="personal_data">
		                    	<div class="row">
		                        <div class="col medium-6 small-12 large-6">
			                    <h1 class="company-name"><?php echo $record->company_name ?></h1>
			                    	 <?php echo $record->address ?></br>
			                        <?php echo $record->city ?><?php if($record->state ){ echo ", ".state($record->state); }  ?>, <?php echo $record->zip_code ?></br>

			                	 <a href="<?php echo $record->companywebsite ; ?>" target="_blank"><?php echo $record->companywebsite ?></a>
			                	</div>
			                	<div class="col medium-6 small-12 large-6 float-right-company">
			                    <?php if($record->firstname !='' && $record->lastname!=''){?>
		                    	 <h2 class="user_fullname"><span><?php echo $record->firstname." ".$record->lastname; ?></span><?php if($record->title!=''){ echo "(".($record->title).")" ; } ?></h2>
		                    	 <?php }?>
		                       	<span><a href="mailto:<?php echo $record->email; ?>" target="_top"  class="soical_data">
		                       	<img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2018/03/mail_icon.png"></a></span>
		                       <span><a href="tel:<?php echo $record->phone_number; ?>" class="soical_data"><img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2018/03/iphone.png"></a></span>

			                	</div>
			                	</div>
		                    </div>
		                    <div class="bussiness_description">
		                        <h2>Business Description :</h2>
		                        <hr>
		                        <p> <?php echo $record->bussiness_description; ?></p>
		                    </div>
	                    </div>
                      <script>
                        jQuery(document).ready(function(){
                          var user_fullname = jQuery(".user_fullname span").text();
                          var company_name = jQuery(".company-name").text();
                          jQuery("title").text(user_fullname+" "+company_name+"- Buckhill Credit");
                        });
                      </script>
                        <?php } ?>
                	</div>

                	<?php  } else{ ?>
                        <div class="row"> <div id="no_company">No Rocord Found</div></div>
                        <?php  }
                }
                elseif($industry){
                    ?>
                   <div class="row heading_ind">
                        <div class="col medium-6 small-12 large-6">
                           <h1>Industry</h1>
                        </div>
                        <div class="col medium-6 small-12 large-6" >
                            <!--select name="topcard-industry" id="industry" class="all-company-industry" name="industry">
	                            <option value="">Choose an industry…</option>
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
                              </select-->
                        </div>
                        <hr>
                    </div>
                    <?php
                    $records = $wpdb->get_results("SELECT * FROM $table WHERE industry='".$industry."'"); ?>
                    <div class="row">
                        <?php if($records && $wpdb->num_rows>0){?>
                            <div class="row">
                            <?php foreach ($records as $record) { ?>
                                    <div class="col medium-3 small-12 large-3 single-company">
                                        <a href="<?php echo site_url( '/impact-companies-directory/').'?company='.$record->company_name; ?>"><?php echo $record->company_name ; ?></a>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php } else{ ?>
                            <div id="no_company">No company found</div>
                        <?php } ?>
                    </div>

               <?php } else{ ?>
  					<div class="row heading_ind">
                        <div class="col medium-6 small-12 large-6">
    					   <h1>All Companies</h1>
                        </div>
                        <!--div class="col medium-6 small-12 large-6">
                            <select name="topcard-industry" id="industry" class="all-company-industry" name="industry">
                            	<option value="">Choose an industry…</option>
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
                              </select-->
                        </div>
                        <hr>
  					</div>
  					<?php
	  				$records = $wpdb->get_results("SELECT * FROM $table"); ?>
	                <div class="row">
		                <?php if($records && $wpdb->num_rows>0){?>
                			<div class="row">
		                	<?php foreach ($records as $record) { ?>
				                    <div class="col medium-3 small-12 large-3 single-company">
				                        <a href="<?php echo site_url( '/impact-companies-directory/').'?company='.$record->company_name; ?>"><?php echo $record->company_name ; ?></a>
				                    </div>
							  	<?php } ?>
					  		</div>
					  		<?php
					  }
					  	else{ ?>
	                        <div id="no_company">No company found</div>
	                    <?php } ?>
	                </div>
                <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery(document).on("change",".all-company-industry",function() {
                var industry = jQuery(this).val();
                industry_redirect(industry);
            });
        });
        function industry_redirect(industry) {
            window.location.href = "<?php echo site_url( '/impact-companies-directory/').'?industry='; ?>"+industry;
        }

        </script>

        <?php get_footer(); ?>
