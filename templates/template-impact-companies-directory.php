<?php
error_reporting(0);
/*
* Template Name: Impact Companies Directory
*/
get_header();
# All states
function state($state) {
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
# All Industries function
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

global $wpdb;
$table    = $wpdb->prefix."companies";
$company  = $_GET['company'];
$industry = $_GET['industry'];
?>
<div id="content" class="container">
    <?php if($company) {
  		$records = $wpdb->get_results("SELECT * FROM $table where company_name='".$company."'");
  		if($records && $wpdb->num_rows>0) { ?>
        <div class="row">
          <?php foreach ($records as $record) { ?>
    	      <div class="personal_information">
    		      <div class="personal_data">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <h1 class="company-name"><?php echo $record->company_name ?></h1>
                  </div>
                  <div class="col-sm-12 col-md-6 float-right-company">
                    <?php if($record->firstname !='' && $record->lastname!=''){ ?>
                      <h2 class="user_fullname"><span><?php echo $record->firstname." ".$record->lastname; ?></span><?php if($record->title!=''){ echo "(".($record->title).")" ; } ?></h2>
                    <?php } ?>
                    <span><a href="mailto:<?php echo $record->email; ?>" target="_top"  class="soical_data">
                    <img src="<?php echo PLUGIN_URL ; ?>/assets/images/mail_icon.png"></a></span>
                    <span><a href="tel:<?php echo $record->phone_number; ?>" class="soical_data"><img src="<?php echo PLUGIN_URL ; ?>/assets/images/iphone.png"></a></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <?php echo $record->address ?></br>
                    <?php echo $record->city ?><?php if($record->state ){ echo ", ".state($record->state); }  ?>, <?php echo $record->zip_code ?></br>
                    <a href="<?php echo $record->companywebsite ; ?>" target="_blank"><?php echo $record->companywebsite ?></a>
                  </div>
                </div>
    		      </div>
              <div class="bussiness_description">
                <h2>Business Description :</h2>
                <hr>
                <p><?php echo $record->bussiness_description; ?></p>
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
      <?php }
      else { ?>
        <div class="row">
          <div id="no_company">No Rocord Found</div>
        </div>
      <?php }
    }
    elseif($industry) { ?>
      <div class="row heading_ind">
        <div class="col-sm-12 col-md-6">
          <h1>Industry</h1>
          <hr>
        </div>
      </div>
      <?php $records = $wpdb->get_results("SELECT * FROM $table WHERE industry='".$industry."'"); ?>
      <div class="row">
        <?php if($records && $wpdb->num_rows>0){ ?>
            <div class="row">
              <?php foreach ($records as $record) { ?>
                <div class="col-sm-12 col-md-4 single-company">
                  <a href="<?php echo site_url( '/impact-companies-directory/').'?company='.$record->company_name; ?>"><?php echo $record->company_name ; ?></a>
                </div>
              <?php } ?>
            </div>
        <?php }
        else { ?>
          <div class="row">
            <div id="no_company">No company found</div>
          </div>
        <?php } ?>
      </div>
    <?php }
    else { ?>
  		<div class="row heading_ind">
        <div class="col-sm-12">
    			<h1>All Companies</h1>
          <hr>
        </div>
      </div>
  	  <?php $records = $wpdb->get_results("SELECT * FROM $table"); ?>
	    <div class="row">
  		  <?php if($records && $wpdb->num_rows>0){?>
          <div class="row">
  		      <?php foreach ($records as $record) {
              $slug = basename(get_permalink());
              ?>
  				  <div class="col-sm-12 col-md-3 single-company">
              <a href="<?php echo site_url( $slug ).'?company='.$record->company_name; ?>"><?php echo $record->company_name ; ?></a>
            </div>
  		  	  <?php } ?>
  	  		</div>
  			<?php }
        else { ?>
          <div class="row">
            <div id="no_company">No company found</div>
          </div>
	      <?php } ?>
      </div>
      <?php } ?>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
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
