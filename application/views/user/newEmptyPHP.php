<?php
/* 
Template Name: Resultss
*/

get_currentuserinfo(); 

if((current_user_can('administrator') || $current_user->ID==7 && $current_user->user_login=="propscan")) {
$mss="";

?>
<link id="bootstrap-style" href="<?php echo site_url(); ?>/wp-content/themes/agentpress-two/assets/bootstrssaap.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<link id="bootstrap-style" href="<?php echo site_url(); ?>/wp-content/themes/agentpress-two/assets/bootstrap.css" rel="stylesheet">
<link id="base-style" href="<?php echo site_url(); ?>/wp-content/themes/agentpress-two/assets/style.css" rel="stylesheet">
<link id="base-style" href="<?php echo site_url(); ?>/wp-content/themes/agentpress-two/assets/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo site_url(); ?>/wp-content/themes/agentpress-two/assets/flexigrid/css/flexigrid.css" rel="stylesheet">
<script type="text/javascript" language="javascript" src="<?php echo site_url(); ?>/wp-content/themes/agentpress-two/assets/jquery_002.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo site_url(); ?>/wp-content/themes/agentpress-two/assets/columnfilter.js"> </script>
<div id="">
<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.js"> </script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/themes/Cupertino/jquery-ui.css">
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<style>  
.sidebar{ 
display:none;
}
#sidebar{ 
display:none;
}
.hfeed{

display:none;
}
#dsidx-profile-header{
display:none;
}
.dsidx-top-actions {
display:none;
}
#tabs-plain{
background: #0C3443 !important;
width:1157px;
height: 67px;
margin-bottom:12px;
}
article a:nth-child(1) {
background: linear-gradient(to bottom, #3775DD 0px, #3455C1 100%) repeat scroll 0 0 #3261C3 !important;
border: 1px solid #053496 !important;
box-shadow: 0 1px 3px 0 rgba(92, 195, 244, 0.8) inset !important;    
}
article a:nth-child(2)
{
background: linear-gradient(to bottom, #3586A0 0px, #307289 100%) repeat scroll 0 0 #3586A0;
border: 1px solid #224654;
box-shadow: 0 1px 3px 0 #27B1C5 inset;
}
article a:nth-child(3)
{
background: linear-gradient(to bottom, #3586A0 0px, #307289 100%) repeat scroll 0 0 #3586A0;
border: 1px solid #224654;
box-shadow: 0 1px 3px 0 #27B1C5 inset;
}
article a:nth-child(4)
{
background: linear-gradient(to bottom, #3586A0 0px, #307289 100%) repeat scroll 0 0 #3586A0;
border: 1px solid #224654;
box-shadow: 0 1px 3px 0 #27B1C5 inset;
}
article a:nth-child(5)
{
background: linear-gradient(to bottom, #3586A0 0px, #307289 100%) repeat scroll 0 0 #3586A0;
border: 1px solid #224654;
box-shadow: 0 1px 3px 0 #27B1C5 inset;
}
article a:nth-child(6)
{
background: linear-gradient(to bottom, #3586A0 0px, #307289 100%) repeat scroll 0 0 #3586A0;
border: 1px solid #224654;
box-shadow: 0 1px 3px 0 #27B1C5 inset;
}
article a:nth-child(7)
{
background: linear-gradient(to bottom, #3586A0 0px, #307289 100%) repeat scroll 0 0 #3586A0;
border: 1px solid #224654;
box-shadow: 0 1px 3px 0 #27B1C5 inset;
}
article a:nth-child(8)
{
background: linear-gradient(to bottom, #3586A0 0px, #307289 100%) repeat scroll 0 0 #3586A0;
border: 1px solid #224654;
box-shadow: 0 1px 3px 0 #27B1C5 inset;
}
article a:nth-child(9)
{
background: linear-gradient(to bottom, #3586A0 0px, #307289 100%) repeat scroll 0 0 #3586A0;
border: 1px solid #224654;
box-shadow: 0 1px 3px 0 #27B1C5 inset;

}
article a:nth-child(10)
{
background: linear-gradient(to bottom, #3586A0 0px, #307289 100%) repeat scroll 0 0 #3586A0;
border: 1px solid #224654;
box-shadow: 0 1px 3px 0 #27B1C5 inset;

}
article a:nth-child(12)
{
background: linear-gradient(to bottom, #3586A0 0px, #307289 100%) repeat scroll 0 0 #3586A0;
border: 1px solid #224654;
box-shadow: 0 1px 3px 0 #27B1C5 inset;

}
article a:nth-child(11)
{
background: linear-gradient(to bottom, #3586A0 0px, #307289 100%) repeat scroll 0 0 #3586A0;
border: 1px solid #224654;
box-shadow: 0 1px 3px 0 #27B1C5 inset;
display:none;
}
article a:nth-child(13)
{
background: linear-gradient(to bottom, #3586A0 0px, #307289 100%) repeat scroll 0 0 #3586A0;
border: 1px solid #224654;
box-shadow: 0 1px 3px 0 #27B1C5 inset;
display:none;
}
select {
background-color: #FFFFFF;
border: 1px solid #CCCCCC;
width: 66px !important;
}
</style>

<TITLE> 

<?PHP

$str=$_SERVER['REQUEST_URI'];
if(stripos($str,"FREMONT")!==FALSE)
{
echo "FREMONT";
}
elseif(stripos($str,"LOS+ANGELES+COUNTY")!==FALSE)
{
echo "LOS ANGELES";
}
elseif(stripos($str,"HAYWARD")!==FALSE)
{
echo "HAYWARD";
}elseif(stripos($str,"NEWARK")!==FALSE)
{
echo "NEWARK";
}elseif(stripos($str,"CASTRO+VALLEY")!==FALSE)
{
echo "CASTRO VALLEY";
}elseif(stripos($str,"SAN+LEANDRO")!==FALSE)
{
echo "SAN LEANDRO";
}elseif(stripos($str,"SAN+LORENZO")!==FALSE)
{
echo "SAN LORENZO";
}elseif(stripos($str,"UNION+CITY")!==FALSE)
{
echo "UNION CITY";
}elseif(stripos($str,"SAN+FRANCISCO")!==FALSE)
{
echo "SAN FRANCISCO";
}elseif(stripos($str,"ATHERTON")!==FALSE)
{
echo "ATHERTON";
}elseif(stripos($str,"BELMONT")!==FALSE)
{
echo "BELMONT";
}

elseif(stripos($str,"FOSTER+CITY")!==FALSE)
{
echo "FOSTER CITY";
}
elseif(stripos($str,"EL+GRANADA")!==FALSE)
{
echo "EL GRANADA";
}
elseif(stripos($str,"EAST+PALO+ALTO")!==FALSE)
{
echo "EAST PALO ALTO";
}
elseif(stripos($str,"DALY+CITY")!==FALSE)
{
echo "DALY CITY";
}
elseif(stripos($str,"COLMA")!==FALSE)
{
echo "COLMA";
}

elseif(stripos($str,"BURLINGAME")!==FALSE)
{
echo "BURLINGAME";
}

elseif(stripos($str,"BRISBANE")!==FALSE)
{
echo "BRISBANE";
}

elseif(stripos($str,"HALF+MOON+BAY")!==FALSE)
{
echo "HALF MOON BAY";
}

elseif(stripos($str,"HILLSBOROUGH")!==FALSE)
{
echo "HILLSBOROUGH";
}

elseif(stripos($str,"LA+HONDA")!==FALSE)
{
echo "LA HONDA";
}

elseif(stripos($str,"LOMA+MAR")!==FALSE)
{
echo "LOMA MAR";
}
elseif(stripos($str,"MENLO+PARK")!==FALSE)
{
echo "MENLO PARK";
}

elseif(stripos($str,"MILLBRAE")!==FALSE)
{
echo "MILLBRAE";
}

elseif(stripos($str,"MONTARA")!==FALSE)
{
echo "MONTARA";
}

elseif(stripos($str,"MOSS+BEACH")!==FALSE)
{
echo "MOSS BEACH";
}

elseif(stripos($str,"PACIFICA")!==FALSE)
{
echo "PACIFICA";
}

elseif(stripos($str,"PESCADERO")!==FALSE)
{
echo "PESCADERO";
}

elseif(stripos($str,"PORTOLA+VALLEY")!==FALSE)
{
echo "PORTOLA VALLEY";
}

elseif(stripos($str,"REDWOOD+CITY")!==FALSE)
{
echo "REDWOOD+CITY";
}

elseif(stripos($str,"REDWOOD+SHORES")!==FALSE)
{
echo "REDWOOD SHORES";
}

elseif(stripos($str,"SAN+BRUNO")!==FALSE)
{
echo "SAN BRUNO";
}
elseif(stripos($str,"SAN+CARLOS")!==FALSE)
{
echo "SAN CARLOS";
}
elseif(stripos($str,"SAN+GREGORIO")!==FALSE){echo "SAN GREGORIO";}
elseif(stripos($str,"SAN+MATEO")!==FALSE){echo "SAN MATEO";}
elseif(stripos($str,"SUNNYVALE")!==FALSE){echo "SUNNYVALE";}
elseif(stripos($str,"SARATOGA")!==FALSE){echo "SARATOGA";}
elseif(stripos($str,"SANTA+CLARA")!==FALSE){echo "SANTA CLARA";}
elseif(stripos($str,"SAN+MARTIN")!==FALSE){echo "SAN MARTIN";}
elseif(stripos($str,"SAN+JOSE")!==FALSE){echo "SAN JOSE";}
elseif(stripos($str,"PALO+ALTO")!==FALSE){ echo "PALO ALTO"; }
elseif(stripos($str,"MOUNTAIN+VIEW")!==FALSE){ echo "MOUNTAIN VIEW"; }
elseif(stripos($str,"MORGAN+HILL")!==FALSE){ echo "MORGAN HILL"; }
elseif(stripos($str,"MILPITAS")!==FALSE){ echo "MILPITAS"; }
elseif(stripos($str,"LOS+ALTOS+HILLS")!==FALSE){ echo "LOS ALTOS HILLS"; }

elseif(stripos($str,"LOS+ALTOS")!==FALSE){ echo "LOS ALTOS"; }
elseif(stripos($str,"LOS+GATOS+MOUNTAINS")!==FALSE){echo "LOS GATOS MOUNTAINS";}

elseif(stripos($str,"LOS+GATOS")!==FALSE){ echo "LOS GATOS"; }
elseif(stripos($str,"GILROY")!==FALSE){echo "GILROY";}
elseif(stripos($str,"CUPERTINO")!==FALSE){echo "CUPERTINO";}
elseif(stripos($str,"CAMPBELL")!==FALSE){echo "CAMPBELL";}
elseif(stripos($str,"WOODSIDE")!==FALSE){echo "WOODSIDE";}
elseif(stripos($str,"SOUTH+SAN+FRANCISCO")!==FALSE){echo "SOUTH SAN FRANCISCO";}
elseif(stripos($str,"SANTA+CRUZ+COUNTY")!==FALSE) {echo "SANTA CRUZ COUNTY"; }
elseif(stripos($str,"ALAMEDA+COUNTY")!==FALSE) {echo "ALAMEDA COUNTY"; }

elseif(stripos($str,"SAN+MATEO+COUNTY")!==FALSE) {echo "SAN MATEO COUNTY"; }

elseif(stripos($str,"SAN+MATEO+COUNTY")!==FALSE) {echo "SAN MATEO COUNTY"; }

elseif(stripos($str,"SANTA+CLARA+COUNTY")!==FALSE) {echo "SANTA CLARA COUNTY"; }

elseif(stripos($str,"SAN+FRANCISCO+COUNTY")!==FALSE) {echo "SAN FRANCISCO COUNTY"; }
elseif(stripos($str,"faver"))
{
echo "FAVORITES";
}
elseif(stripos($str,"APTOS")!==FALSE) { echo "APTOS";} 
elseif(stripos($str,"CAPITOLA")!==FALSE) { echo "CAPITOLA"; }
elseif(stripos($str,"EAST+OF+HIWAY+17")!==FALSE) { echo "EAST OF HIWAY 17"; }
elseif(stripos($str,"EAST+SANTA+CRUZ+COUNTY")!==FALSE) { echo "EAST SANTA CRUZ COUNTY"; }
elseif(stripos($str,"LA+SELVA+BEACH")!==FALSE) { echo "LA SELVA BEACH";}
elseif(stripos($str,"LOS+GATOS+MTNS")!==FALSE) { echo "LOS GATOS MTNS";}
elseif(stripos($str,"RIO+DEL+MAR/SEASCAPE")!==FALSE) { echo "RIO DEL MAR/SEASCAPE";}
elseif(stripos($str,"SAN+LORENZO+VALLEY")!==FALSE) { echo "SAN LORENZO VALLEY";}
elseif(stripos($str,"SANTA+CRUZ")!==FALSE) { echo "SANTA CRUZ";}
elseif(stripos($str,"SCOTTS+VALLEY")!==FALSE) { echo "SCOTTS VALLEY";}
elseif(stripos($str,"SEACLIFF")!==FALSE) { echo "SEACLIFF";}
elseif(stripos($str,"SOQUEL")!==FALSE) { echo "SOQUEL"; }

elseif(stripos($str,"ACTON")!==FALSE) { echo "ACTON"; }
elseif(stripos($str,"AGOURA")!==FALSE) { echo "AGOURA"; }
elseif(stripos($str,"AGOURA HILLS")!==FALSE) { echo "AGOURA HILLS"; }
elseif(stripos($str,"AGUA DULCE")!==FALSE) { echo "AGUA DULCE"; }
elseif(stripos($str,"ALHAMBRA")!==FALSE) { echo "ALHAMBRA"; }
elseif(stripos($str,"ALPINE BUTTE")!==FALSE) { echo "ALPINE BUTTE"; }
elseif(stripos($str,"ALTADENA")!==FALSE) { echo "ALTADENA"; }
elseif(stripos($str,"ANAHEIM")!==FALSE) { echo "ANAHEIM"; }
elseif(stripos($str,"ANAVERDE")!==FALSE) { echo "ANAVERDE"; }
elseif(stripos($str,"ANTELOPE ACRES")!==FALSE) { echo "ANTELOPE ACRES"; }
elseif(stripos($str,"ARCADIA")!==FALSE) { echo "ARCADIA"; }
elseif(stripos($str,"ARLETA")!==FALSE) { echo "ARLETA"; }
elseif(stripos($str,"ARTESIA")!==FALSE) { echo "ARTESIA"; }
elseif(stripos($str,"AVALON")!==FALSE) { echo "AVALON"; }
elseif(stripos($str,"AZUSA")!==FALSE) { echo "AZUSA"; }
elseif(stripos($str,"BALDWIN PARK")!==FALSE) { echo "BALDWIN PARK"; }
elseif(stripos($str,"BASSETT")!==FALSE) { echo "BASSETT"; }
elseif(stripos($str,"BELL")!==FALSE) { echo "BELL"; }
elseif(stripos($str,"BELL GARDENS")!==FALSE) { echo "BELL GARDENS"; }
elseif(stripos($str,"BELLFLOWER")!==FALSE) { echo "BELLFLOWER"; }
elseif(stripos($str,"BEVERLY HILLS")!==FALSE) { echo "BEVERLY HILLS"; }
elseif(stripos($str,"BLACK BUTTE")!==FALSE) { echo "BLACK BUTTE"; }
elseif(stripos($str,"BRADBURY")!==FALSE) { echo "BRADBURY"; }
elseif(stripos($str,"BREA")!==FALSE) { echo "BREA"; }
elseif(stripos($str,"BRENTWOOD")!==FALSE) { echo "BRENTWOOD"; }
elseif(stripos($str,"BURBANK")!==FALSE) { echo "BURBANK"; }
elseif(stripos($str,"BUTTE VALLEY")!==FALSE) { echo "BUTTE VALLEY"; }
elseif(stripos($str,"CALABASAS")!==FALSE) { echo "CALABASAS"; }
elseif(stripos($str,"CALABASAS HILLS")!==FALSE) { echo "CALABASAS HILLS"; }
elseif(stripos($str,"CALABASAS HLS")!==FALSE) { echo "CALABASAS HLS"; }
elseif(stripos($str,"CALICHE")!==FALSE) { echo "CALICHE"; }
elseif(stripos($str,"CANOGA PARK")!==FALSE) { echo "CANOGA PARK"; }
elseif(stripos($str,"CANYON CNTRY")!==FALSE) { echo "CANYON CNTRY"; }
elseif(stripos($str,"CANYON COUNTRY")!==FALSE) { echo "CANYON COUNTRY"; }
elseif(stripos($str,"CARSON")!==FALSE) { echo "CARSON"; }
elseif(stripos($str,"CASTAIC")!==FALSE) { echo "CASTAIC"; }
elseif(stripos($str,"CERRITOS")!==FALSE) { echo "CERRITOS"; }
elseif(stripos($str,"CHATSWORTH")!==FALSE) { echo "CHATSWORTH"; }
elseif(stripos($str,"CHINO HILLS")!==FALSE) { echo "CHINO HILLS"; }
elseif(stripos($str,"CITY INDUSTRY")!==FALSE) { echo "CITY INDUSTRY"; }
elseif(stripos($str,"CITY OF INDUSTRY")!==FALSE) { echo "CITY OF INDUSTRY"; }
elseif(stripos($str,"CLAREMONT")!==FALSE) { echo "CLAREMONT"; }
elseif(stripos($str,"COMMERCE")!==FALSE) { echo "COMMERCE"; }
elseif(stripos($str,"COMPTON")!==FALSE) { echo "COMPTON"; }
elseif(stripos($str,"CORNELL")!==FALSE) { echo "CORNELL"; }
elseif(stripos($str,"COVINA")!==FALSE) { echo "COVINA"; }
elseif(stripos($str,"CRYSTALAIRE")!==FALSE) { echo "CRYSTALAIRE"; }
elseif(stripos($str,"CUDAHY")!==FALSE) { echo "CUDAHY"; }
elseif(stripos($str,"CULVER CITY")!==FALSE) { echo "CULVER CITY"; }
elseif(stripos($str,"CYPRESS")!==FALSE) { echo "CYPRESS"; }
elseif(stripos($str,"DEL SUR")!==FALSE) { echo "DEL SUR"; }
elseif(stripos($str,"DIAMOND BAR")!==FALSE) { echo "DIAMOND BAR"; }
elseif(stripos($str,"DOWNEY")!==FALSE) { echo "DOWNEY"; }
elseif(stripos($str,"DUARTE")!==FALSE) { echo "DUARTE"; }
elseif(stripos($str,"EAST LOS ANGELES")!==FALSE) { echo "EAST LOS ANGELES"; }
elseif(stripos($str,"EAST RANCHO DOMINGUEZ")!==FALSE) { echo "EAST RANCHO DOMINGUEZ"; }
elseif(stripos($str,"EL MONTE")!==FALSE) { echo "EL MONTE"; }
elseif(stripos($str,"EL SEGUNDO")!==FALSE) { echo "EL SEGUNDO"; }
elseif(stripos($str,"ELIZABETH LAKE")!==FALSE) { echo "ELIZABETH LAKE"; }
elseif(stripos($str,"ELIZABETH LK")!==FALSE) { echo "ELIZABETH LK"; }
elseif(stripos($str,"ENCINO")!==FALSE) { echo "ENCINO"; }
elseif(stripos($str,"FAIRMONT")!==FALSE) { echo "FAIRMONT"; }
elseif(stripos($str,"FLINTRIDGE")!==FALSE) { echo "FLINTRIDGE"; }
elseif(stripos($str,"FOOTHILL")!==FALSE) { echo "FOOTHILL"; }
elseif(stripos($str,"GARDENA")!==FALSE) { echo "GARDENA"; }
elseif(stripos($str,"GLENDALE")!==FALSE) { echo "GLENDALE"; }
elseif(stripos($str,"GLENDORA")!==FALSE) { echo "GLENDORA"; }
elseif(stripos($str,"GORMAN")!==FALSE) { echo "GORMAN"; }
elseif(stripos($str,"GRANADA HILLS")!==FALSE) { echo "GRANADA HILLS"; }
elseif(stripos($str,"GREEN VALLEY")!==FALSE) { echo "GREEN VALLEY"; }
elseif(stripos($str,"HACIENDA HEIGHTS")!==FALSE) { echo "HACIENDA HEIGHTS"; }
elseif(stripos($str,"HACIENDA HTS")!==FALSE) { echo "HACIENDA HTS"; }
elseif(stripos($str,"HARBOR CITY")!==FALSE) { echo "HARBOR CITY"; }
elseif(stripos($str,"HAWAIIAN GARDENS")!==FALSE) { echo "HAWAIIAN GARDENS"; }
elseif(stripos($str,"HAWTHORNE")!==FALSE) { echo "HAWTHORNE"; }
elseif(stripos($str,"HERMOSA BEACH")!==FALSE) { echo "HERMOSA BEACH"; }
elseif(stripos($str,"HI VISTA")!==FALSE) { echo "HI VISTA"; }
elseif(stripos($str,"HIDDEN HILLS")!==FALSE) { echo "HIDDEN HILLS"; }
elseif(stripos($str,"HOLLYWOOD")!==FALSE) { echo "HOLLYWOOD"; }
elseif(stripos($str,"HUNTINGTON PARK")!==FALSE) { echo "HUNTINGTON PARK"; }
elseif(stripos($str,"HUNTINGTON PK")!==FALSE) { echo "HUNTINGTON PK"; }
elseif(stripos($str,"INGLEWOOD")!==FALSE) { echo "INGLEWOOD"; }
elseif(stripos($str,"IRWINDALE")!==FALSE) { echo "IRWINDALE"; }
elseif(stripos($str,"JUNIPER HILLS")!==FALSE) { echo "JUNIPER HILLS"; }
elseif(stripos($str,"LA CANADA")!==FALSE) { echo "LA CANADA"; }
elseif(stripos($str,"LA CANADA FLINTRIDGE")!==FALSE) { echo "LA CANADA FLINTRIDGE"; }
elseif(stripos($str,"LA CANADA FLT")!==FALSE) { echo "LA CANADA FLT"; }
elseif(stripos($str,"LA CRESCENTA")!==FALSE) { echo "LA CRESCENTA"; }
elseif(stripos($str,"LA HABRA")!==FALSE) { echo "LA HABRA"; }
elseif(stripos($str,"LA HABRA HEIGHTS")!==FALSE) { echo "LA HABRA HEIGHTS"; }
elseif(stripos($str,"LA MIRADA")!==FALSE) { echo "LA MIRADA"; }
elseif(stripos($str,"LA PALMA")!==FALSE) { echo "LA PALMA"; }
elseif(stripos($str,"LA PUENTE")!==FALSE) { echo "LA PUENTE"; }
elseif(stripos($str,"LA VERNE")!==FALSE) { echo "LA VERNE"; }
elseif(stripos($str,"LAKE BALBOA")!==FALSE) { echo "LAKE BALBOA"; }
elseif(stripos($str,"LAKE HUGHES")!==FALSE) { echo "LAKE HUGHES"; }
elseif(stripos($str,"LAKE LA")!==FALSE) { echo "LAKE LA"; }
elseif(stripos($str,"LAKE LOS ANGELES")!==FALSE) { echo "LAKE LOS ANGELES"; }
elseif(stripos($str,"LAKE VIEW TER")!==FALSE) { echo "LAKE VIEW TER"; }
elseif(stripos($str,"LAKE VIEW TERRACE")!==FALSE) { echo "LAKE VIEW TERRACE"; }
elseif(stripos($str,"LAKEWOOD")!==FALSE) { echo "LAKEWOOD"; }
elseif(stripos($str,"LANCASTER")!==FALSE) { echo "LANCASTER"; }
elseif(stripos($str,"LANCASTER CAL")!==FALSE) { echo "LANCASTER CAL"; }
elseif(stripos($str,"LAWNDALE")!==FALSE) { echo "LAWNDALE"; }
elseif(stripos($str,"LEBEC")!==FALSE) { echo "LEBEC"; }
elseif(stripos($str,"LENNOX")!==FALSE) { echo "LENNOX"; }
elseif(stripos($str,"LEONA VALLEY")!==FALSE) { echo "LEONA VALLEY"; }
elseif(stripos($str,"LITTLEROCK")!==FALSE) { echo "LITTLEROCK"; }
elseif(stripos($str,"LLAMO")!==FALSE) { echo "LLAMO"; }
elseif(stripos($str,"LLANO")!==FALSE) { echo "LLANO"; }
elseif(stripos($str,"LOMITA")!==FALSE) { echo "LOMITA"; }
elseif(stripos($str,"LONG BEACH")!==FALSE) { echo "LONG BEACH"; }
elseif(stripos($str,"LOS ANGELES")!==FALSE) { echo "LOS ANGELES"; }
elseif(stripos($str,"LOS ANGELES 28")!==FALSE) { echo "LOS ANGELES 28"; }
elseif(stripos($str,"LOS NIETOS")!==FALSE) { echo "LOS NIETOS"; }
elseif(stripos($str,"LYNWOOD")!==FALSE) { echo "LYNWOOD"; }
elseif(stripos($str,"MALIBU")!==FALSE) { echo "MALIBU"; }
elseif(stripos($str,"MANHATTAN BEACH")!==FALSE) { echo "MANHATTAN BEACH"; }
elseif(stripos($str,"MARINA DEL REY")!==FALSE) { echo "MARINA DEL REY"; }
elseif(stripos($str,"MAYWOOD")!==FALSE) { echo "MAYWOOD"; }
elseif(stripos($str,"MISSION HILLS")!==FALSE) { echo "MISSION HILLS"; }
elseif(stripos($str,"MONROVIA")!==FALSE) { echo "MONROVIA"; }
elseif(stripos($str,"MONTE NIDO")!==FALSE) { echo "MONTE NIDO"; }
elseif(stripos($str,"MONTEBELLO")!==FALSE) { echo "MONTEBELLO"; }
elseif(stripos($str,"MONTEREY PARK")!==FALSE) { echo "MONTEREY PARK"; }
elseif(stripos($str,"MONTROSE")!==FALSE) { echo "MONTROSE"; }
elseif(stripos($str,"MOUNT GLEASON")!==FALSE) { echo "MOUNT GLEASON"; }
elseif(stripos($str,"MOUNT WATERMAN")!==FALSE) { echo "MOUNT WATERMAN"; }
elseif(stripos($str,"MOUNT WILSON")!==FALSE) { echo "MOUNT WILSON"; }
elseif(stripos($str,"MT BALDY")!==FALSE) { echo "MT BALDY"; }
elseif(stripos($str,"N HOLLYWOOD")!==FALSE) { echo "N HOLLYWOOD"; }
elseif(stripos($str,"N. LAS VEGAS")!==FALSE) { echo "N. LAS VEGAS"; }
elseif(stripos($str,"NEWHALL")!==FALSE) { echo "NEWHALL"; }
elseif(stripos($str,"NORTH HILLS")!==FALSE) { echo "NORTH HILLS"; }
elseif(stripos($str,"NORTH HOLLYWOOD")!==FALSE) { echo "NORTH HOLLYWOOD"; }
elseif(stripos($str,"NORTHRIDGE")!==FALSE) { echo "NORTHRIDGE"; }
elseif(stripos($str,"NORWALK")!==FALSE) { echo "NORWALK"; }
elseif(stripos($str,"PACIFIC PALISADES")!==FALSE) { echo "PACIFIC PALISADES"; }
elseif(stripos($str,"PACIFIC PLSDS")!==FALSE) { echo "PACIFIC PLSDS"; }
elseif(stripos($str,"PACOIMA")!==FALSE) { echo "PACOIMA"; }
elseif(stripos($str,"PALMDALE")!==FALSE) { echo "PALMDALE"; }
elseif(stripos($str,"PALOS VERDEPENINSULA")!==FALSE) { echo "PALOS VERDEPENINSULA"; }
elseif(stripos($str,"PALOS VERDES ESTATES")!==FALSE) { echo "PALOS VERDES ESTATES"; }
elseif(stripos($str,"PALOS VERDES PENINSULA C")!==FALSE) { echo "PALOS VERDES PENINSULA C"; }
elseif(stripos($str,"PALOS VERDES PNS")!==FALSE) { echo "PALOS VERDES PNS"; }
elseif(stripos($str,"PANORAMA CITY")!==FALSE) { echo "PANORAMA CITY"; }
elseif(stripos($str,"PARAMOUNT")!==FALSE) { echo "PARAMOUNT"; }
elseif(stripos($str,"PASADENA")!==FALSE) { echo "PASADENA"; }
elseif(stripos($str,"PEARBLOSSOM")!==FALSE) { echo "PEARBLOSSOM"; }
elseif(stripos($str,"PICO RIVERA")!==FALSE) { echo "PICO RIVERA"; }
elseif(stripos($str,"PLAYA DEL REY")!==FALSE) { echo "PLAYA DEL REY"; }
elseif(stripos($str,"PLS VRDS PNSL")!==FALSE) { echo "PLS VRDS PNSL"; }
elseif(stripos($str,"POMONA")!==FALSE) { echo "POMONA"; }
elseif(stripos($str,"PORTER RANCH")!==FALSE) { echo "PORTER RANCH"; }
elseif(stripos($str,"QUARTZ HILL")!==FALSE) { echo "QUARTZ HILL"; }
elseif(stripos($str,"RANCHO DOMINGUEZ")!==FALSE) { echo "RANCHO DOMINGUEZ"; }
elseif(stripos($str,"RANCHO PALOS VERDES")!==FALSE) { echo "RANCHO PALOS VERDES"; }
elseif(stripos($str,"RCH PALOS VRD")!==FALSE) { echo "RCH PALOS VRD"; }
elseif(stripos($str,"RCHO STA MARGARITA")!==FALSE) { echo "RCHO STA MARGARITA"; }
elseif(stripos($str,"REDMAN")!==FALSE) { echo "REDMAN"; }
elseif(stripos($str,"REDONDO BEACH")!==FALSE) { echo "REDONDO BEACH"; }
elseif(stripos($str,"RESEDA")!==FALSE) { echo "RESEDA"; }
elseif(stripos($str,"ROLLING HILLS")!==FALSE) { echo "ROLLING HILLS"; }
elseif(stripos($str,"ROLLING HILLS ES")!==FALSE) { echo "ROLLING HILLS ES"; }
elseif(stripos($str,"ROLLING HILLS ESTATE")!==FALSE) { echo "ROLLING HILLS ESTATE"; }
elseif(stripos($str,"ROLLING HILLS ESTATES")!==FALSE) { echo "ROLLING HILLS ESTATES"; }
elseif(stripos($str,"ROOSEVELT")!==FALSE) { echo "ROOSEVELT"; }
elseif(stripos($str,"ROOSEVELT CORNER")!==FALSE) { echo "ROOSEVELT CORNER"; }
elseif(stripos($str,"ROSAMOND")!==FALSE) { echo "ROSAMOND"; }
elseif(stripos($str,"ROSEMEAD")!==FALSE) { echo "ROSEMEAD"; }
elseif(stripos($str,"ROSEWOOD")!==FALSE) { echo "ROSEWOOD"; }
elseif(stripos($str,"ROWLAND HEIGHTS")!==FALSE) { echo "ROWLAND HEIGHTS"; }
elseif(stripos($str,"ROWLAND HGHTS")!==FALSE) { echo "ROWLAND HGHTS"; }
elseif(stripos($str,"S EL MONTE")!==FALSE) { echo "S EL MONTE"; }
elseif(stripos($str,"S PASADENA")!==FALSE) { echo "S PASADENA"; }
elseif(stripos($str,"S. LAKE TAHOE")!==FALSE) { echo "S. LAKE TAHOE"; }
elseif(stripos($str,"SAN DIMAS")!==FALSE) { echo "SAN DIMAS"; }
elseif(stripos($str,"SAN FERNANDO")!==FALSE) { echo "SAN FERNANDO"; }
elseif(stripos($str,"SAN GABRIEL")!==FALSE) { echo "SAN GABRIEL"; }
elseif(stripos($str,"SAN MARINO")!==FALSE) { echo "SAN MARINO"; }
elseif(stripos($str,"SAN PEDRO")!==FALSE) { echo "SAN PEDRO"; }
elseif(stripos($str,"SANTA CLARITA")!==FALSE) { echo "SANTA CLARITA"; }
elseif(stripos($str,"SANTA FE SPRINGS")!==FALSE) { echo "SANTA FE SPRINGS"; }
elseif(stripos($str,"SANTA MONICA")!==FALSE) { echo "SANTA MONICA"; }
elseif(stripos($str,"SAUGUS")!==FALSE) { echo "SAUGUS"; }
elseif(stripos($str,"SAWMILL MOUNTAIN")!==FALSE) { echo "SAWMILL MOUNTAIN"; }
elseif(stripos($str,"SAWVILLE MT")!==FALSE) { echo "SAWVILLE MT"; }
elseif(stripos($str,"SEPULVEDA")!==FALSE) { echo "SEPULVEDA"; }
elseif(stripos($str,"SHADOW HILLS")!==FALSE) { echo "SHADOW HILLS"; }
elseif(stripos($str,"SHERMAN OAKS")!==FALSE) { echo "SHERMAN OAKS"; }
elseif(stripos($str,"SHERWOOD FOREST")!==FALSE) { echo "SHERWOOD FOREST"; }
elseif(stripos($str,"SIERRA MADRE")!==FALSE) { echo "SIERRA MADRE"; }
elseif(stripos($str,"SIGNAL HILL")!==FALSE) { echo "SIGNAL HILL"; }
elseif(stripos($str,"SIMI VALLEY")!==FALSE) { echo "SIMI VALLEY"; }
elseif(stripos($str,"SITE ADDRESS CITY")!==FALSE) { echo "SITE ADDRESS CITY"; }
elseif(stripos($str,"SOUTH EL MONTE")!==FALSE) { echo "SOUTH EL MONTE"; }
elseif(stripos($str,"SOUTH GATE")!==FALSE) { echo "SOUTH GATE"; }
elseif(stripos($str,"SOUTH PASADENA")!==FALSE) { echo "SOUTH PASADENA"; }
elseif(stripos($str,"STEVENSON RANCH")!==FALSE) { echo "STEVENSON RANCH"; }
elseif(stripos($str,"STEVENSON RNH")!==FALSE) { echo "STEVENSON RNH"; }
elseif(stripos($str,"STUDIO CITY")!==FALSE) { echo "STUDIO CITY"; }
elseif(stripos($str,"SUN VALLEY")!==FALSE) { echo "SUN VALLEY"; }
elseif(stripos($str,"SUN VILLAGE")!==FALSE) { echo "SUN VILLAGE"; }
elseif(stripos($str,"SUNLAND")!==FALSE) { echo "SUNLAND"; }
elseif(stripos($str,"SYLMAR")!==FALSE) { echo "SYLMAR"; }
elseif(stripos($str,"TARZANA")!==FALSE) { echo "TARZANA"; }
elseif(stripos($str,"TEMPLE CITY")!==FALSE) { echo "TEMPLE CITY"; }
elseif(stripos($str,"THOUSAND OAKS")!==FALSE) { echo "THOUSAND OAKS"; }
elseif(stripos($str,"TOLUCA LAKE")!==FALSE) { echo "TOLUCA LAKE"; }
elseif(stripos($str,"TOPANGA")!==FALSE) { echo "TOPANGA"; }
elseif(stripos($str,"TORRANCE")!==FALSE) { echo "TORRANCE"; }
elseif(stripos($str,"TUJUNGA")!==FALSE) { echo "TUJUNGA"; }
elseif(stripos($str,"UNIVERSAL CITY")!==FALSE) { echo "UNIVERSAL CITY"; }
elseif(stripos($str,"UPLAND")!==FALSE) { echo "UPLAND"; }
elseif(stripos($str,"VAL VERDE")!==FALSE) { echo "VAL VERDE"; }
elseif(stripos($str,"VALENCIA")!==FALSE) { echo "VALENCIA"; }
elseif(stripos($str,"VALLEY GLEN")!==FALSE) { echo "VALLEY GLEN"; }
elseif(stripos($str,"VALLEY VILLAGE")!==FALSE) { echo "VALLEY VILLAGE"; }
elseif(stripos($str,"VALLEY VLG")!==FALSE) { echo "VALLEY VLG"; }
elseif(stripos($str,"VALYERMO")!==FALSE) { echo "VALYERMO"; }
elseif(stripos($str,"VAN NUYS")!==FALSE) { echo "VAN NUYS"; }
elseif(stripos($str,"VENICE")!==FALSE) { echo "VENICE"; }
elseif(stripos($str,"VERDUGO CITY")!==FALSE) { echo "VERDUGO CITY"; }
elseif(stripos($str,"VERNON")!==FALSE) { echo "VERNON"; }
elseif(stripos($str,"W HOLLYWOOD")!==FALSE) { echo "W HOLLYWOOD"; }
elseif(stripos($str,"WALNUT")!==FALSE) { echo "WALNUT"; }
elseif(stripos($str,"WALNUT PARK")!==FALSE) { echo "WALNUT PARK"; }
elseif(stripos($str,"WEST COVINA")!==FALSE) { echo "WEST COVINA"; }
elseif(stripos($str,"WEST HILLS")!==FALSE) { echo "WEST HILLS"; }
elseif(stripos($str,"WEST HOLLYWOOD")!==FALSE) { echo "WEST HOLLYWOOD"; }
elseif(stripos($str,"WESTLAKE VILLAGE")!==FALSE) { echo "WESTLAKE VILLAGE"; }
elseif(stripos($str,"WESTLAKE VLG")!==FALSE) { echo "WESTLAKE VLG"; }
elseif(stripos($str,"WHITTIER")!==FALSE) { echo "WHITTIER"; }
elseif(stripos($str,"WILMINGTON")!==FALSE) { echo "WILMINGTON"; }
elseif(stripos($str,"WINNETKA")!==FALSE) { echo "WINNETKA"; }
elseif(stripos($str,"WOODLAND HILLS")!==FALSE) { echo "WOODLAND HILLS"; }
elseif(stripos($str,"WOODLAND HLS")!==FALSE) { echo "WOODLAND HLS"; }
elseif(stripos($str,"WRIGHTWOOD")!==FALSE) { echo "WRIGHTWOOD"; }

else
{
}
?>
</TITLE> 

<?php //End of the Title tag ?>
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<?php

if(strpos($_SERVER['REQUEST_URI'],'+COUNTY') !==FALSE)
{?>

<style>
#city_title { display:none !important;}
</style>
<?php }
remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
add_action( 'genesis_site_title', 'child_seo_site_title' );
/**
* Remove title, add <span> inbetween Buzz.
* Then add title back to header.
*
* @author Greg Rickaby
* @since 1.0.0
*/
function child_seo_site_title() { }
genesis_set_default_layout( 'full-width-content' );	
add_action( 'genesis_after_content', 'table_heading' );
add_action('genesis_before_content','before_po');
function before_po()
{ ?>


<style>
.button{
font:15px Calibri, Arial, sans-serif;

/* A semi-transparent text shadow */

/* Overriding the default underline styling of the links */
text-decoration:none !important;
white-space:nowrap;

display:inline-block;
vertical-align:baseline;
position:relative;
cursor:pointer;
padding:10px 20px;

background-repeat:no-repeat;

/* The following two rules are fallbacks, in case
the browser does not support multiple backgrounds. */

background-position:bottom left;
background-image:url('button_bg.png');

/* Multiple backgrounds version. The background images
are defined individually in color classes */

background-position:bottom left, top right, 0 0, 0 0;
background-clip:border-box;

/* Applying a default border raidus of 8px */

-moz-border-radius:8px;
-webkit-border-radius:8px;
border-radius:8px;

/* A 1px highlight inside of the button */

-moz-box-shadow:0 0 1px #fff inset;
-webkit-box-shadow:0 0 1px #fff inset;
box-shadow:0 0 1px #fff inset;

/* Animating the background positions with CSS3 */
/* Currently works only in Safari/Chrome */

-webkit-transition:background-position 1s;
-moz-transition:background-position 1s;
transition:background-position 1s;
}
.button:hover{

/* The first rule is a fallback, in case the browser
does not support multiple backgrounds
*/

background-position:top left;
background-position:top left, bottom right, 0 0, 0 0;
}
.button:active{
/* Moving the button 1px to the bottom when clicked */
bottom:-1px;
}
/* The three buttons sizes */

.button.big		{ font-size:30px;}
.button.medium	{ font-size:18px;}
.button.small	{ font-size:13px;}

/* A more rounded button */

.button.rounded{
-moz-border-radius:4em;
-webkit-border-radius:4em;
border-radius:4em;
}/* Defining four button colors *//* BlueButton */

.blue.button{
color:white !important;

border:0px solid #84acc3 !important;

/* A fallback background color */
background-color: #48b5f2;

/* Specifying a version with gradients according to */

background-image:	url('button_bg.png'), url('button_bg.png'),
-moz-radial-gradient(	center bottom, circle,
				rgba(89,208,244,1) 0,rgba(89,208,244,0) 100px),
-moz-linear-gradient(#4fbbf7, #3faeeb);

background-image:	url('button_bg.png'), url('button_bg.png'),
-webkit-gradient(	radial, 50% 100%, 0, 50% 100%, 100,
			from(rgba(89,208,244,1)), to(rgba(89,208,244,0))),
-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4fbbf7), to(#3faeeb));
}

.blue.button:hover{
background-color:#63c7fe;

background-image:	url('button_bg.png'), url('button_bg.png'),
-moz-radial-gradient(	center bottom, circle,
				rgba(109,217,250,1) 0,rgba(109,217,250,0) 100px),
-moz-linear-gradient(#63c7fe, #58bef7);

background-image:	url('button_bg.png'), url('button_bg.png'),
-webkit-gradient(	radial, 50% 100%, 0, 50% 100%, 100,
			from(rgba(109,217,250,1)), to(rgba(109,217,250,0))),
-webkit-gradient(linear, 0% 0%, 0% 100%, from(#63c7fe), to(#58bef7));
}

/* Green Button */

.green.button{
color:White !important;
border:0px solid #96a37b !important;	
background-color: dodgerblue !important;
height: 6px;
width: 14px;
}
#yucs-top-bar {
background-color: #E9E9F2;
float: left;
line-height: 16px;
min-width: 970px;
width: 100%;
z-index: 15000;
}
.yog-page #yog-hd.yog-grid #yucs, #yucsHead {
background: -moz-linear-gradient(left center , #114B60 0px, #196F8D 15%, #0C3443 60%) repeat scroll 0 0 #0C3443 !important;
}
#yucs-search_button {
background: linear-gradient(to bottom, #3775DD 0px, #3455C1 100%) repeat scroll 0 0 #3261C3;
border: 1px solid #053496;
box-shadow: 0 1px 3px 0 rgba(92, 195, 244, 0.8) inset;
color: white;
left: 0;
position: absolute;
top: 0;
}
#yucs #yucs-search .yucs-button_theme {
background: linear-gradient(to bottom, #3586A0 0px, #307289 100%) repeat scroll 0 0 #3586A0;
border: 1px solid #224654;
box-shadow: 0 1px 3px 0 #27B1C5 inset;
}
.green.button:hover{
background-color:#89d228;

background-image:url('button_bg.png'), url('button_bg.png'), -moz-radial-gradient(center bottom, circle, rgba(183,229,45,1) 0,rgba(183,229,45,0) 100px),-moz-linear-gradient(#90de31, #7fc01e);
background-image:url('button_bg.png'), url('button_bg.png'), -webkit-gradient(radial, 50% 100%, 0, 50% 100%, 100, from(rgba(183,229,45,1)), to(rgba(183,229,45,0))),-webkit-gradient(linear, 0% 0%, 0% 100%, from(#90de31), to(#7fc01e));
}

/* Orange Button */

.orange.button{
color:#693e0a !important;
border:1px solid #bea280 !important;	
background-color: #e38d27;

background-image:url('button_bg.png'), url('button_bg.png'), -moz-radial-gradient(center bottom, circle, rgba(232,189,45,1) 0,rgba(232,189,45,0) 100px),-moz-linear-gradient(#f1982f, #d4821f);
background-image:url('button_bg.png'), url('button_bg.png'), -webkit-gradient(radial, 50% 100%, 0, 50% 100%, 100, from(rgba(232,189,45,1)), to(rgba(232,189,45,0))),-webkit-gradient(linear, 0% 0%, 0% 100%, from(#f1982f), to(#d4821f));
}

.orange.button:hover{
background-color:#ec9732;

background-image:url('button_bg.png'), url('button_bg.png'), -moz-radial-gradient(center bottom, circle, rgba(241,192,52,1) 0,rgba(241,192,52,0) 100px),-moz-linear-gradient(#f9a746, #e18f2b);
background-image:url('button_bg.png'), url('button_bg.png'), -webkit-gradient(radial, 50% 100%, 0, 50% 100%, 100, from(rgba(241,192,52,1)), to(rgba(241,192,52,0))),-webkit-gradient(linear, 0% 0%, 0% 100%, from(#f9a746), to(#e18f2b));
}

.gray.button{
color:#525252 !important;
border:1px solid #a5a5a5 !important;	
background-color: #a9adb1;

background-image:url('button_bg.png'), url('button_bg.png'), -moz-radial-gradient(center bottom, circle, rgba(197,199,202,1) 0,rgba(197,199,202,0) 100px),-moz-linear-gradient(#c5c7ca, #92989c);
background-image:url('button_bg.png'), url('button_bg.png'), -webkit-gradient(radial, 50% 100%, 0, 50% 100%, 100, from(rgba(197,199,202,1)), to(rgba(197,199,202,0))),-webkit-gradient(linear, 0% 0%, 0% 100%, from(#c5c7ca), to(#92989c));
}

.gray.button:hover{
background-color:#b6bbc0;

background-image:url('button_bg.png'), url('button_bg.png'), -moz-radial-gradient(center bottom, circle, rgba(202,205,208,1) 0,rgba(202,205,208,0) 100px),-moz-linear-gradient(#d1d3d6, #9fa5a9);
background-image:url('button_bg.png'), url('button_bg.png'), -webkit-gradient(radial, 50% 100%, 0, 50% 100%, 100, from(rgba(202,205,208,1)), to(rgba(202,205,208,0))),-webkit-gradient(linear, 0% 0%, 0% 100%, from(#d1d3d6), to(#9fa5a9));
}
.button.rounded {
border-radius: 0em 0em 0em 0em !important;
}
.dataTables_wrapper {
clear: both;
position: relative;
}
.dataTables_processing {
background-color: white;
border: 1px solid #DDDDDD;
color: #999999;
font-size: 14px;
height: 30px;
left: 50%;
margin-left: -125px;
margin-top: -15px;
padding: 14px 0 2px;
position: absolute;
text-align: center;
top: 50%;
width: 250px;
}
.dataTables_length {
float: left;
width: 40%;
}
#example1 .dataTables_filter {
float: right;
text-align: right;
margin-top: -15px !important;

}
.dataTables_filter {
float: right;
text-align: right;
margin-top: -15px !important;
display:none;
}
#example1 .dataTables_filter {
float: right;
text-align: right;
margin-top: -15px !important;
display:inline;

}
.dsidx-sorting-control
{
display:none;
}
.dataTables_info {
float: left;
width: 60%;
}
.dataTables_paginate {
float: right;
text-align: right;
}
.paginate_disabled_previous, .paginate_enabled_previous, .paginate_disabled_next, .paginate_enabled_next {
color: #111111 !important;
cursor: pointer;
float: left;
height: 19px;
}
.paginate_disabled_previous:hover, .paginate_enabled_previous:hover, .paginate_disabled_next:hover, .paginate_enabled_next:hover {
text-decoration: none !important;
}
.paginate_disabled_previous:active, .paginate_enabled_previous:active, .paginate_disabled_next:active, .paginate_enabled_next:active {
outline: medium none;
}
.paginate_disabled_previous, .paginate_disabled_next {
color: #666666 !important;
}
.paginate_disabled_previous, .paginate_enabled_previous {
padding-left: 23px;
}
.paginate_disabled_next, .paginate_enabled_next {
margin-left: 10px;
padding-right: 23px;
}
.paginate_disabled_previous {
background: url("../images/back_disabled.png") no-repeat scroll left top transparent;
}
.paginate_enabled_previous {
background: url("../images/back_enabled.png") no-repeat scroll left top transparent;
}
.paginate_enabled_previous:hover {
background: url("../images/back_enabled_hover.png") no-repeat scroll left top transparent;
}
.paginate_disabled_next {
background: url("../images/forward_disabled.png") no-repeat scroll right top transparent;
}
.paginate_enabled_next {
background: url("../images/forward_enabled.png") no-repeat scroll right top transparent;
}
.paginate_enabled_next:hover {
background: url("../images/forward_enabled_hover.png") no-repeat scroll right top transparent;
}
table.display {
clear: both;
margin: 0 auto;
width: 100%;
}
table.display thead th {
border-bottom: 1px solid black;
cursor: pointer;
font-weight: bold;
padding: 3px 18px 3px 10px;
}
table.display tfoot th {
border-top: 1px solid black;
font-weight: bold;
padding: 3px 18px 3px 10px;
}
table.display tr.heading2 td {
border-bottom: 1px solid #AAAAAA;
}
table.display td {
padding: 3px 10px;
}
table.display td.center {
text-align: center;
}
.sorting_asc {
background: url("../images/sort_asc.png") no-repeat scroll right center transparent;
}
.sorting_desc {
background: url("../images/sort_desc.png") no-repeat scroll right center transparent;
}
.sorting {
background: url("../images/sort_both.png") no-repeat scroll right center transparent;
}
.sorting_asc_disabled {
background: url("../images/sort_asc_disabled.png") no-repeat scroll right center transparent;
} 
.sorting_desc_disabled {
background: url("../images/sort_desc_disabled.png") no-repeat scroll right center transparent;
}
table.display thead th:active, table.display thead td:active {
outline: medium none;
}
table.display tr.odd.gradeA {
background-color: #DDFFDD;
}
table.display tr.even.gradeA {
background-color: #EEFFEE;
}
table.display tr.odd.gradeC {
background-color: #DDDDFF;
}
table.display tr.even.gradeC {
background-color: #EEEEFF;
}
table.display tr.odd.gradeX {
background-color: #FFDDDD;
}
table.display tr.even.gradeX {
background-color: #FFEEEE;
}
table.display tr.odd.gradeU {
background-color: #DDDDDD;
}
table.display tr.even.gradeU {
background-color: #EEEEEE;
}
tr.odd {
background-color: #E2E4FF;
}
tr.even {
background-color: white;
}
.dataTables_scroll {
clear: both;
}
.dataTables_scrollBody {
}
.top, .bottom {
background-color: #F5F5F5;
border: 1px solid #CCCCCC;
padding: 15px;
}
.top .dataTables_info {
float: none;
}
.clear {
clear: both;
}
.dataTables_empty {
text-align: center;
}
tfoot input {
color: #444444;
margin: 0.5em 0;
width: 100%;
}
tfoot input.search_init {
color: #999999;
}
td.group {
background-color: #D1CFD0;
border-bottom: 2px solid #A19B9E;
border-top: 2px solid #A19B9E;
}
td.details {
background-color: #D1CFD0;
border: 2px solid #A19B9E;
}
.example_alt_pagination div.dataTables_info {
width: 40%;
}
.paging_full_numbers {
height: 22px;
line-height: 22px;
width: 400px;
}
.paging_full_numbers a:active {
outline: medium none;
}
.paging_full_numbers a:hover {
text-decoration: none;
}
.paging_full_numbers a.paginate_button, .paging_full_numbers a.paginate_active {
border: 1px solid #AAAAAA;
color: #333333 !important;
cursor: pointer;
margin: 0 3px;
padding: 2px 5px;
}
.paging_full_numbers a.paginate_button {
background-color: #DDDDDD;
}
.paging_full_numbers a.paginate_button:hover {
background-color: #CCCCCC;
text-decoration: none !important;
}
.paging_full_numbers a.paginate_active {
background-color: #99B3FF;
}
table.display tr.even.row_selected td {
background-color: #B0BED9;
}
div.box {
background-color: #E5E5FF;
border: 1px solid #8080FF;
height: 100px;
overflow: auto;
padding: 10px;
}
.content-sidebar #content, .sidebar-content #content {
width: 1067px !imortant;
}
#nav
{
display:none;

}
.widget-wrap
{
display:none;
}

#dsidx-disclaimer
{
display:none;
}
#wrap {
margin: 0 auto;
overflow: hidden;
width: 1361px;
}
body.custom-background {
background-color: mediumaquamarine;
} 

#dsidx-listings
{

display:none;
}
.footer { display:none; }

.dsidx-results ul li:nth-child(1) { display: none; }
.dsidx-results ul li:nth-child(3) { display: none; }
.dsidx-results ul li:nth-child(2) { display: none; }
.entry-content{ display:none; }

body.custom-background {
}
body.custom-background {
}
body {
background: url("../images/noise2.png") repeat scroll 50% 0 #FFFFFF;
padding-top: 1px;
}
body {
background-color: #FFFFFF;
color: #333333;
font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
font-size: 14px;
line-height: 20px;
margin: 0;
}
#header { display:none; }
table {
}
td{
overflow:hidden;
text-overflow: elipsis;
}
.content-sidebar #content, .sidebar-content #content
{
width:787px !important;
}
.sidebar {
background: none repeat scroll 0 0 #FFFFFF;
display: inline;
float: none;
font-size: 13px;
line-height: 20px;
padding: 15px 15px 5px;
width: 250px;
}

#tabs-plain ul a {  
width:63px;
font-size:12px;
}
.entry-title {  display:none; }
.dsidx-content-header{ display:none; }
#example_info
{
display:none;	
}
#example_paginate
{	
display:none;	
}
#dsidx-listings {    
overflow: hidden !important;
padding-top: 15px !important;
width: 806px !important;
}
td
{ 
white-space: nowrap;
overflow: hidden; 
width: 10px;
height: 25px;
}
#example_length
{
display:none;
}
.save {
margin-left: 195px !important;
width: 777px;
}
a {

color: blue !important;
}
.green.button {
    background-color: #1E90FF !important;
    border: 0 solid #96A37B !important;
    color: #FFFFFF !important;
    height: 6px;
    width: 2px;
	padding-right: 43 !important;
    padding-left: 3 !important;
}


</style>

<script>

jQuery(function() {
jQuery('article.tabs').tabs();
}); 
 if ( jQuery.support.boxModel )
{
data = data.replace(/>\s+(?=<\/?(t|c)[hardfob])/gm,'>');
}
</script>

<?php 
//CITY AND COUNTY Tabs

if(strpos($_SERVER['REQUEST_URI'],'SANTA+CLARA+COUNTY')!==FALSE)
{ ?>
<article id="tabs-plain" class="tabsSS">
<ul>
<a  class="button small blue rounded" href="#SANTA-CLARA"> SANTA-CLARA </a> 

<a  class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SANTA+CRUZ+COUNTY"> SANTACRUZ</a>
<a  class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=ALAMEDA+COUNTY"> ALAMEDA </a> 
<a   class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+FRANCISCO+COUNTY"> SAN-FRANCISCO </a>
<a   class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+MATEO+COUNTY"> SAN-MATEO </a>
<a  class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=LOS+ANGELES+COUNTY">Los Angeles </a>  
<a target="_blank" class="button small green rounded "  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=Monterey+COUNTY">Monterey </a>   
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=faver"> Favorites </a> 
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=TUFF"> TUFF </a>  
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=ded"> Ded</a>     
<a class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/datagrid/">Tax Records</a>	
</ul>
<div id="SANTA-CLARA">
<p>    
<ol>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<span style="color:white;">Select County:</span>
<select name="menud2" id="menud2">
<option value="#"> None </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=1000&idx-q-Counties<0>=SANTA+CRUZ+COUNTY"> SANTACRUZ</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+MATEO+COUNTY"> SAN-MATEO </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SANTA+CLARA+COUNTY" > SANTA-CLARA </option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+FRANCISCO+COUNTY"> SAN-FRANCISCO </option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=ALAMEDA+COUNTY"> ALAMEDA </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=LOS+ANGELES+COUNTY">Los Angeles </option> 
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=Monterey+COUNTY">Monterey </option> 
  

</select>  



&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  	   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<span style="color:white;">Select City:</span>
<select name="menu2" id="menu2">
<option>None</option>
<option value="SANTA-CLARA">  ALL </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CAMPBELL">CA</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CUPERTINO">CU</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=GILROY">GY</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOS+ALTOS">LA</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOS+ALTOS+HILLS">LAH</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOS+GATOS">LG</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOS+GATOS+MOUNTAINS">LGM</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MORGAN+HILL">MH</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MILPITAS">MI</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+MARTIN">SM</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MOUNTAIN+VIEW">MV</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PALO+ALTO">PA</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SARATOGA">SA</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SANTA+CLARA">SC</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=San+Jose">SJ</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SUNNYVALE">SU</option>
</select>     

	<span style="color:white;">  Select Pubfact: </span>
	<select id="select_fav" name="select_fav">
	<option>None </option>		  
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/?faver=faver"> Favorites </option> 
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/?faver=TUFF"> TUFF </option>  
	<option  class="button small green rounded" target="_blank" value="http://menloathertonrealty.com/datagrid/?faver=ded"> Ded</option>     
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/">Tax Records</option>	
	</select>

	<script type="text/javascript">
	var urlmenus = document.getElementById( 'select_fav' );
	urlmenus.onchange = function() {
	open(this.options[ this.selectedIndex ].value,'_blank');	 
	};
	</script>

<script type="text/javascript">
var urlmenus = document.getElementById( 'menud2' );
urlmenus.onchange = function() {
open(this.options[ this.selectedIndex ].value,'mywindowQ','width=1920,height=1200');	 
};
</script>
<script type="text/javascript">
var urlmenu = document.getElementById( 'menu2' );
urlmenu.onchange = function() {
if(this.options[ this.selectedIndex ].value=="SANTA-CLARA")
{
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CAMPBELL",'my','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CUPERTINO",'myw','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=GILROY",'mywi','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOS+ALTOS",'m','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOS+ALTOS+HILLS",'mg','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOS+GATOS",'mywinv','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOS+GATOS+MOUNTAINS",'mfQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MORGAN+HILL",'mywindovwQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MILPITAS",'mywinddowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+MARTIN",'mywindddowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MOUNTAIN+VIEW",'mywfsindowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PALO+ALTO",'mydswindowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SARATOGA",'msydswindowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SUNNYVALE",'myawdsindowQ','width=1920,height=1200');

}else
{
open(this.options[ this.selectedIndex ].value,'mi','width=1920,height=1200');
}
};
</script>
</ol>
</p>
</div>

</article>
<?php } ?>
<?php if(strpos($_SERVER['REQUEST_URI'],'SAN+MATEO+COUNTY')!==FALSE)
{ ?>
<article id="tabs-plain" class="tabsSS">
<ul>
<a class="button small blue rounded" href="#SAN-MATEO"> SAN-MATEO </a></li>
<a class="button small green rounded" href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SANTA+CLARA+COUNTY" target="_blank"> SANTA-CLARA</a> 
<a  class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=1000&idx-q-Counties<0>=SANTA+CRUZ+COUNTY"> SANTACRUZ</a>
<a class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=ALAMEDA+COUNTY"> ALAMEDA </a> 
<a class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+FRANCISCO+COUNTY"> SAN-FRANCISCO </a> 
<a  class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=LOS+ANGELES+COUNTY">Los Angeles </a>    
<a  target="_blank" class="button small green rounded "  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=Monterey+COUNTY">Monterey </a> 
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=faver"> Favorites </a> 
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=TUFF"> TUFF </a>  
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=ded"> Ded</a>   
<a class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/datagrid/">Tax Records</a>	
</ul>
<div id="SAN-MATEO">
<p> 
<ol>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<span style="color:white;">Select County:</span>
<select name="menud2" id="menud2">
<option value="#"> None </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=1000&idx-q-Counties<0>=SANTA+CRUZ+COUNTY"> SANTACRUZ</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+MATEO+COUNTY"> SAN-MATEO </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SANTA+CLARA+COUNTY" > SANTA-CLARA </option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+FRANCISCO+COUNTY"> SAN-FRANCISCO </option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=ALAMEDA+COUNTY"> ALAMEDA </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=LOS+ANGELES+COUNTY">Los Angeles </option>  
 <option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=Monterey+COUNTY">Monterey </option> 


</select>  	   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  	   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<span style="color:white;">Select City:</span>
<select name="menu1" id="menu1">
<option>None</option>
<option value="SAN-MATEO">  ALL </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ATHERTON">AT</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BRISBANE">BRI</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BELMONT">BEL</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BURLINGAME">BUR</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=COLMA">COL</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=DALY+CITY">DC</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=EAST+PALO+ALTO">EP</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=EL+GRANADA">ELG</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=FOSTER+CITY">FC</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HALF+MOON+BAY">HMB</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HILLSBOROUGH">HIL</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+HONDA">LH</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOMA+MAR">LM</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MENLO+PARK">MP</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MILLBRAE">MIL</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MONTARA">MON</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MOSS+BEACH">MOS</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PACIFICA">PAC</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PESCADERO">PES</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PORTOLA+VALLEY">PV</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=REDWOOD+CITY">RC</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=REDWOOD+SHORES">RS</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+BRUNO">SB</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+CARLOS">SCL</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+GREGORIO">SGR</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+MATEO">SM</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SOUTH+SAN+FRANCISCO">SSF</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WOODSIDE">WOD</option>
</select>

	<span style="color:white;">  Select Pubfact: </span>
	<select id="select_fav" name="select_fav">
	<option>None </option>		  
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/?faver=faver"> Favorites </option> 
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/?faver=TUFF"> TUFF </option>  
	<option  class="button small green rounded" target="_blank" value="http://menloathertonrealty.com/datagrid/?faver=ded"> Ded</option>     
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/">Tax Records</option>	
	</select>

	<script type="text/javascript">
	var urlmenus = document.getElementById( 'select_fav' );
	urlmenus.onchange = function() {
	open(this.options[ this.selectedIndex ].value,'_blank');	 
	};
	</script>

<script type="text/javascript">
var urlmenus = document.getElementById( 'menud2' );
urlmenus.onchange = function() {
open(this.options[ this.selectedIndex ].value,'myoo','width=1920,height=1200');	 
};
</script>

<script type="text/javascript">
var urlmenu = document.getElementById( 'menu1' );
urlmenu.onchange = function() {
if(this.options[ this.selectedIndex ].value=="SAN-MATEO")
{
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ATHERTON",'xcmyawdsindowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BRISBANE",'xc','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BELMONT",'mplk,','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BURLINGAME",'myawdsmmm','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=COLMA",'tyuud','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=DALY+CITY",'ytr','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=EAST+PALO+ALTO",'ttttt','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=EL+GRANADA",'myiuop','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=FOSTER+CITY",'mpiop','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HALF+MOON+BAY",'miip','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HILLSBOROUGH",'myot','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+HONDA",'poio','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOMA+MAR",'mopo','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MENLO+PARK",'myiu','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MILLBRAE",'mpoi','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MONTARA",'myof','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MOSS+BEACH",'myawdsty','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PACIFICA",'myawdsindowQz','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PESCADERO",'myawdsinndowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PORTOLA+VALLEY",'myawdsibndowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=REDWOOD+CITY",'mzyawdsindowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=REDWOOD+SHORES",'mqyawdsindowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+BRUNO",'mwyawdsindowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+CARLOS",'mywindowZ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+GREGORIO",'mywindowY','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SOUTH+SAN+FRANCISCO",'mywindowD','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WOODSIDE",'mywindowS','width=1920,height=1200');

}else
{
open(this.options[ this.selectedIndex ].value,'zxc','width=1920,height=1200');
}
};
</script>
</ol>
</p>
</div>



</article>
<?php } ?>
<?php if(strpos($_SERVER['REQUEST_URI'],'SAN+FRANCISCO+COUNTY')!==FALSE)
{ 
    
}
?>
<article id="tabs-plain" class="tabssss">
<ul>
<a class="button small blue rounded" href="#SAN-FRANCISCO"> SAN-FRANCISCO </a>
<a  class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+MATEO+COUNTY"> SAN-MATEO </a>
<a class="button small green rounded"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SANTA+CLARA+COUNTY" target="_blank"> SANTA-CLARA </a>
<a  class="button small green rounded"  target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=1000&idx-q-Counties<0>=SANTA+CRUZ+COUNTY"> SANTACRUZ</a>
<a class="button small green rounded"  target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=ALAMEDA+COUNTY"> ALAMEDA </a> 
<a  class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=LOS+ANGELES+COUNTY">Los Angeles </a>    
<a  target="_blank" class="button small green rounded "  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=Monterey+COUNTY">Monterey </a> 

<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=faver"> Favorites </a> 
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=TUFF"> TUFF </a>  
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=ded"> Ded</a>       
<a class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/datagrid/">Tax Records</a>		</ul>
<div id="SAN-FRANCISCO">
<p>
<ol>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<span style="color:white;">Select County:</span>
<select name="menud2" id="menud2">
<option value="#"> None </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=1000&idx-q-Counties<0>=SANTA+CRUZ+COUNTY"> SANTACRUZ</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+MATEO+COUNTY"> SAN-MATEO </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SANTA+CLARA+COUNTY" > SANTA-CLARA </option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+FRANCISCO+COUNTY"> SAN-FRANCISCO </option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=ALAMEDA+COUNTY"> ALAMEDA </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=LOS+ANGELES+COUNTY">Los Angeles </option>    
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=Monterey+COUNTY">Monterey </option> 


</select>  	   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  	   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<select id="meno02" name="menu02">
<option>None</option>
<option value="SAN-FRANSC">  ALL </option>
</select>
	<span style="color:white;">  Select Pubfact: </span>
	<select id="select_fav" name="select_fav">
	<option>None </option>		  
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/?faver=faver"> Favorites </option> 
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/?faver=TUFF"> TUFF </option>  
	<option  class="button small green rounded" target="_blank" value="http://menloathertonrealty.com/datagrid/?faver=ded"> Ded</option>     
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/">Tax Records</option>	
	</select>

	<script type="text/javascript">
	var urlmenus = document.getElementById( 'select_fav' );
	urlmenus.onchange = function() {
	open(this.options[ this.selectedIndex ].value,'_blank');	 
	};
	</script>

<script type="text/javascript">
var urlmenus = document.getElementById( 'menud2' );
urlmenus.onchange = function() {
open(this.options[ this.selectedIndex ].value,'zxcv','width=1920,height=1200');	 
};
</script>
<script type="text/javascript">
var urlmenu = document.getElementById( 'menu02' );
urlmenu.onchange = function() {
if(this.options[ this.selectedIndex ].value=="SAN-FRANSC")
{
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+FRANCISCO+COUNTY",'mkklf','width=1920,height=1200');
}
};
</script>
</ol>
</p>
</div>
</div>




</article>


<?php } ?>

<style>

#yelpbar {  display:none; }

</style>
<?php if(strpos($_SERVER['REQUEST_URI'],'SANTA+CRUZ+COUNTY')!==FALSE)
{ ?>
<article id="tabs-plain" class="tabss">
<ul>
<a class="button small blue rounded" href="#SANTACRUZ"> SANTACRUZ</a>
<a  class="button small green rounded"  target="_blank" href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+MATEO+COUNTY"> SAN-MATEO </a>
<a class="button small green rounded"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SANTA+CLARA+COUNTY" target="_blank"> SANTA-CLARA </a>
<a class="button small green rounded"  target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+FRANCISCO+COUNTY"> SAN-FRANCISCO </a> 
<a class="button small green rounded"  target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=ALAMEDA+COUNTY"> ALAMEDA </a> 
<a  class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=LOS+ANGELES+COUNTY">Los Angeles </a> 
<a  target="_blank" class="button small green rounded "  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=Monterey+COUNTY">Monterey </a> 
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=faver"> Favorites </a> 
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=TUFF"> TUFF </a>  
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=ded"> Ded</a> 
<a class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/datagrid/">Tax Records</a>		</ul>


</ul>
<div id="SANTACRUZ">
<p>
<ol>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<span style="color:white;">Select County:</span>
<select name="menud2" id="menud2">
<option value="#"> None </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=1000&idx-q-Counties<0>=SANTA+CRUZ+COUNTY"> SANTACRUZ</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+MATEO+COUNTY"> SAN-MATEO </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SANTA+CLARA+COUNTY" > SANTA-CLARA </option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+FRANCISCO+COUNTY"> SAN-FRANCISCO </option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=ALAMEDA+COUNTY"> ALAMEDA </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=LOS+ANGELES+COUNTY">Los Angeles </a>    
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=Monterey+COUNTY">Monterey </option> 

</select>  	   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  	   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<span style="color:white;">Select City:</span>
<select id="menu20" name="menu20">
<option>None</option>
<option value="SANTA-CRUZ">  ALL </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=APTOS">APT</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CAPITOLA">CAP</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=EAST+OF+HIWAY+17">EST</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=EAST+SANTA+CRUZ+COUNTY">SZE</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+SELVA+BEACH">LSB</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOS+GATOS+MTNS">LGM</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=RIO+DEL+MAR/SEASCAPE">RIO</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+LORENZO+VALLEY">SLV</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SANTA+CRUZ">SZ</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SCOTTS+VALLEY">SV</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SEACLIFF">SCF</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SOQUEL">SOQ</option>

</select>

	<span style="color:white;">  Select Pubfact: </span>
	<select id="select_fav" name="select_fav">
	<option>None </option>		  
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/?faver=faver"> Favorites </option> 
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/?faver=TUFF"> TUFF </option>  
	<option  class="button small green rounded" target="_blank" value="http://menloathertonrealty.com/datagrid/?faver=ded"> Ded</option>     
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/">Tax Records</option>	
	</select>

	<script type="text/javascript">
	var urlmenus = document.getElementById( 'select_fav' );
	urlmenus.onchange = function() {
	open(this.options[ this.selectedIndex ].value,'_blank');	 
	};
	</script>

<script type="text/javascript">
var urlmenus = document.getElementById( 'menud2' );
urlmenus.onchange = function() {
open(this.options[ this.selectedIndex ].value,'mtrysw','width=1920,height=1200');	 
};
</script>
<script type="text/javascript">
var urlmenu = document.getElementById( 'menu20' );
urlmenu.onchange = function() {
if(this.options[ this.selectedIndex ].value=="SANTA-CRUZ")
{
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=1000&idx-q-Counties<0>=SANTA+CRUZ+COUNTY",'myawdsingfgdowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=APTOS",'mtryswss','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CAPITOLA",'mtryswas','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=EAST+OF+HIWAY+17",'mtryswds','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=EAST+SANTA+CRUZ+COUNTY",'mtrysasw','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+SELVA+BEACH",'mstarysw','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOS+GATOS+MTNS",'smtdrysw','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=RIO+DEL+MAR/SEASCAPE",'mdtsrysw','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+LORENZO+VALLEY",'mstrydsw','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SANTA+CRUZ",'msdtrysw','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SCOTTS+VALLEY",'mtdsrysw','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SEACLIFF",'mtsrydssw','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SOQUEL",'mtrayssaw','width=1920,height=1200');

}
else {
open(this.options[ this.selectedIndex ].value,'myawdsingfgdowQ','width=1920,height=1200');

}
};
</script>
</ol>
</p>
</div>
</article>
<?php } ?>


<?php if(strpos($_SERVER['REQUEST_URI'],'LOS+ANGELES+COUNTY')!==FALSE)
{ ?>
<article id="tabs-plain" class="tabss">
<ul>

<a  class="button small green rounded" >Los Angeles </a>    
<a  class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SANTA+CRUZ+COUNTY"> SANTACRUZ</a>

<a  class="button small green rounded"  target="_blank" href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+MATEO+COUNTY"> SAN-MATEO </a>
<a class="button small green rounded"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SANTA+CLARA+COUNTY" target="_blank"> SANTA-CLARA </a>
<a class="button small green rounded"  target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+FRANCISCO+COUNTY"> SAN-FRANCISCO </a> 
<a class="button small green rounded"  target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=ALAMEDA+COUNTY"> ALAMEDA </a> 
<a target="_blank" class="button small green rounded "  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=Monterey+COUNTY">Monterey </a>
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=faver"> Favorites </a> 
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=TUFF"> TUFF </a>  
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=ded"> Ded</a> 
<a class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/datagrid/">Tax Records</a>		</ul>
</ul>
<div id="LOS-Ang">


<p>
<ol>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<span style="color:white;">Select County:</span>
<select name="menud2" id="menud2">
<option value="#"> None </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=1000&idx-q-Counties<0>=SANTA+CRUZ+COUNTY"> SANTACRUZ</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+MATEO+COUNTY"> SAN-MATEO </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SANTA+CLARA+COUNTY" > SANTA-CLARA </option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+FRANCISCO+COUNTY"> SAN-FRANCISCO </option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=ALAMEDA+COUNTY"> ALAMEDA </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=LOS+ANGELES+COUNTY">Los Angeles </a>    
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=Monterey+COUNTY">Monterey </option> 

</select>  	   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  	   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<span style="color:white;">Select City:</span>
<select id="menu20" name="menu20">
<option>None</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ACTON"> ACTON</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=AGOURA"> AGOURA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=AGOURA+HILLS"> AGOURA HILLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=AGUA+DULCE"> AGUA DULCE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ALHAMBRA"> ALHAMBRA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ALPINE+BUTTE"> ALPINE BUTTE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ALTADENA"> ALTADENA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ANAHEIM"> ANAHEIM</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ANAVERDE"> ANAVERDE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ANTELOPE+ACRES"> ANTELOPE ACRES</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ARCADIA"> ARCADIA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ARLETA"> ARLETA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ARTESIA"> ARTESIA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=AVALON"> AVALON</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=AZUSA"> AZUSA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BALDWIN+PARK"> BALDWIN PARK</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BASSETT"> BASSETT</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BELL"> BELL</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BELL+GARDENS"> BELL GARDENS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BELLFLOWER"> BELLFLOWER</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BEVERLY+HILLS"> BEVERLY HILLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BLACK+BUTTE"> BLACK BUTTE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BRADBURY"> BRADBURY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BREA"> BREA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BRENTWOOD"> BRENTWOOD</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BURBANK"> BURBANK</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=BUTTE+VALLEY"> BUTTE VALLEY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CALABASAS"> CALABASAS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CALABASAS+HILLS"> CALABASAS HILLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CALABASAS+HLS"> CALABASAS HLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CALICHE"> CALICHE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CANOGA+PARK"> CANOGA PARK</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CANYON+CNTRY"> CANYON CNTRY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CANYON+COUNTRY"> CANYON COUNTRY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CARSON"> CARSON</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CASTAIC"> CASTAIC</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CERRITOS"> CERRITOS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CHATSWORTH"> CHATSWORTH</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CHINO+HILLS"> CHINO HILLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CITY+INDUSTRY"> CITY INDUSTRY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CITY+OF+INDUSTRY"> CITY OF INDUSTRY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CLAREMONT"> CLAREMONT</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=COMMERCE"> COMMERCE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=COMPTON"> COMPTON</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CORNELL"> CORNELL</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=COVINA"> COVINA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CRYSTALAIRE"> CRYSTALAIRE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CUDAHY"> CUDAHY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CULVER+CITY"> CULVER CITY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CYPRESS"> CYPRESS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=DEL+SUR"> DEL SUR</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=DIAMOND+BAR"> DIAMOND BAR</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=DOWNEY"> DOWNEY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=DUARTE"> DUARTE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=EAST+LOS+ANGELES"> EAST LOS ANGELES</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=EAST+RANCHO+DOMINGUEZ"> EAST RANCHO DOMINGUEZ</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=EL+MONTE"> EL MONTE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=EL+SEGUNDO"> EL SEGUNDO</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ELIZABETH+LAKE"> ELIZABETH LAKE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ELIZABETH+LK"> ELIZABETH LK</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ENCINO"> ENCINO</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=FAIRMONT"> FAIRMONT</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=FLINTRIDGE"> FLINTRIDGE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=FOOTHILL"> FOOTHILL</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=GARDENA"> GARDENA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=GLENDALE"> GLENDALE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=GLENDORA"> GLENDORA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=GORMAN"> GORMAN</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=GRANADA+HILLS"> GRANADA HILLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=GREEN+VALLEY"> GREEN VALLEY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HACIENDA+HEIGHTS"> HACIENDA HEIGHTS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HACIENDA+HTS"> HACIENDA HTS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HARBOR+CITY"> HARBOR CITY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HAWAIIAN+GARDENS"> HAWAIIAN GARDENS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HAWTHORNE"> HAWTHORNE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HERMOSA+BEACH"> HERMOSA BEACH</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HI+VISTA"> HI VISTA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HIDDEN+HILLS"> HIDDEN HILLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HOLLYWOOD"> HOLLYWOOD</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HUNTINGTON+PARK"> HUNTINGTON PARK</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HUNTINGTON+PK"> HUNTINGTON PK</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=INGLEWOOD"> INGLEWOOD</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=IRWINDALE"> IRWINDALE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=JUNIPER+HILLS"> JUNIPER HILLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+CANADA"> LA CANADA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+CANADA+FLINTRIDGE"> LA CANADA FLINTRIDGE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+CANADA+FLT"> LA CANADA FLT</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+CRESCENTA"> LA CRESCENTA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+HABRA"> LA HABRA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+HABRA+HEIGHTS"> LA HABRA HEIGHTS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+MIRADA"> LA MIRADA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+PALMA"> LA PALMA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+PUENTE"> LA PUENTE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LA+VERNE"> LA VERNE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LAKE+BALBOA"> LAKE BALBOA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LAKE+HUGHES"> LAKE HUGHES</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LAKE+LA"> LAKE LA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LAKE+LOS+ANGELES"> LAKE LOS ANGELES</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LAKE+VIEW+TER"> LAKE VIEW TER</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LAKE+VIEW+TERRACE"> LAKE VIEW TERRACE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LAKEWOOD"> LAKEWOOD</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LANCASTER"> LANCASTER</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LANCASTER+CAL"> LANCASTER CAL</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LAWNDALE"> LAWNDALE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LEBEC"> LEBEC</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LENNOX"> LENNOX</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LEONA+VALLEY"> LEONA VALLEY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LITTLEROCK"> LITTLEROCK</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LLAMO"> LLAMO</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LLANO"> LLANO</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOMITA"> LOMITA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LONG+BEACH"> LONG BEACH</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOS+ANGELES"> LOS ANGELES</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOS+ANGELES+28"> LOS ANGELES 28</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LOS+NIETOS"> LOS NIETOS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=LYNWOOD"> LYNWOOD</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MALIBU"> MALIBU</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MANHATTAN+BEACH"> MANHATTAN BEACH</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MARINA+DEL+REY"> MARINA DEL REY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MAYWOOD"> MAYWOOD</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MISSION+HILLS"> MISSION HILLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MONROVIA"> MONROVIA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MONTE+NIDO"> MONTE NIDO</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MONTEBELLO"> MONTEBELLO</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MONTEREY+PARK"> MONTEREY PARK</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MONTROSE"> MONTROSE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MOUNT+GLEASON"> MOUNT GLEASON</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MOUNT+WATERMAN"> MOUNT WATERMAN</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MOUNT+WILSON"> MOUNT WILSON</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=MT+BALDY"> MT BALDY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=N+HOLLYWOOD"> N HOLLYWOOD</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=N.+LAS+VEGAS"> N. LAS VEGAS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=NEWHALL"> NEWHALL</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=NORTH+HILLS"> NORTH HILLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=NORTH+HOLLYWOOD"> NORTH HOLLYWOOD</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=NORTHRIDGE"> NORTHRIDGE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=NORWALK"> NORWALK</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PACIFIC+PALISADES"> PACIFIC PALISADES</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PACIFIC+PLSDS"> PACIFIC PLSDS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PACOIMA"> PACOIMA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PALMDALE"> PALMDALE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PALOS+VERDEPENINSULA"> PALOS VERDEPENINSULA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PALOS+VERDES+ESTATES"> PALOS VERDES ESTATES</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PALOS+VERDES+PENINSULA+C"> PALOS VERDES PENINSULA C</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PALOS+VERDES+PNS"> PALOS VERDES PNS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PANORAMA+CITY"> PANORAMA CITY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PARAMOUNT"> PARAMOUNT</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PASADENA"> PASADENA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PEARBLOSSOM"> PEARBLOSSOM</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PICO+RIVERA"> PICO RIVERA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PLAYA+DEL+REY"> PLAYA DEL REY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PLS+VRDS+PNSL"> PLS VRDS PNSL</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=POMONA"> POMONA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=PORTER+RANCH"> PORTER RANCH</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=QUARTZ+HILL"> QUARTZ HILL</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=RANCHO+DOMINGUEZ"> RANCHO DOMINGUEZ</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=RANCHO+PALOS+VERDES"> RANCHO PALOS VERDES</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=RCH+PALOS+VRD"> RCH PALOS VRD</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=RCHO+STA+MARGARITA"> RCHO STA MARGARITA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=REDMAN"> REDMAN</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=REDONDO+BEACH"> REDONDO BEACH</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=RESEDA"> RESEDA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ROLLING+HILLS"> ROLLING HILLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ROLLING+HILLS+ES"> ROLLING HILLS ES</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ROLLING+HILLS+ESTATE"> ROLLING HILLS ESTATE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ROLLING+HILLS+ESTATES"> ROLLING HILLS ESTATES</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ROOSEVELT"> ROOSEVELT</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ROOSEVELT+CORNER"> ROOSEVELT CORNER</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ROSAMOND"> ROSAMOND</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ROSEMEAD"> ROSEMEAD</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ROSEWOOD"> ROSEWOOD</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ROWLAND+HEIGHTS"> ROWLAND HEIGHTS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=ROWLAND+HGHTS"> ROWLAND HGHTS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=S+EL+MONTE"> S EL MONTE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=S+PASADENA"> S PASADENA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=S.+LAKE+TAHOE"> S. LAKE TAHOE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+DIMAS"> SAN DIMAS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+FERNANDO"> SAN FERNANDO</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+GABRIEL"> SAN GABRIEL</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+MARINO"> SAN MARINO</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+PEDRO"> SAN PEDRO</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SANTA+CLARITA"> SANTA CLARITA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SANTA+FE+SPRINGS"> SANTA FE SPRINGS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SANTA+MONICA"> SANTA MONICA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAUGUS"> SAUGUS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAWMILL+MOUNTAIN"> SAWMILL MOUNTAIN</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAWVILLE+MT"> SAWVILLE MT</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SEPULVEDA"> SEPULVEDA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SHADOW+HILLS"> SHADOW HILLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SHERMAN+OAKS"> SHERMAN OAKS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SHERWOOD+FOREST"> SHERWOOD FOREST</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SIERRA+MADRE"> SIERRA MADRE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SIGNAL+HILL"> SIGNAL HILL</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SIMI+VALLEY"> SIMI VALLEY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SITE+ADDRESS+CITY"> SITE ADDRESS CITY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SOUTH+EL+MONTE"> SOUTH EL MONTE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SOUTH+GATE"> SOUTH GATE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SOUTH+PASADENA"> SOUTH PASADENA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=STEVENSON+RANCH"> STEVENSON RANCH</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=STEVENSON+RNH"> STEVENSON RNH</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=STUDIO+CITY"> STUDIO CITY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SUN+VALLEY"> SUN VALLEY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SUN+VILLAGE"> SUN VILLAGE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SUNLAND"> SUNLAND</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SYLMAR"> SYLMAR</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=TARZANA"> TARZANA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=TEMPLE+CITY"> TEMPLE CITY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=THOUSAND+OAKS"> THOUSAND OAKS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=TOLUCA+LAKE"> TOLUCA LAKE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=TOPANGA"> TOPANGA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=TORRANCE"> TORRANCE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=TUJUNGA"> TUJUNGA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=UNIVERSAL+CITY"> UNIVERSAL CITY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=UPLAND"> UPLAND</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=VAL+VERDE"> VAL VERDE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=VALENCIA"> VALENCIA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=VALLEY+GLEN"> VALLEY GLEN</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=VALLEY+VILLAGE"> VALLEY VILLAGE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=VALLEY+VLG"> VALLEY VLG</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=VALYERMO"> VALYERMO</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=VAN+NUYS"> VAN NUYS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=VENICE"> VENICE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=VERDUGO+CITY"> VERDUGO CITY</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=VERNON"> VERNON</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=W+HOLLYWOOD"> W HOLLYWOOD</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WALNUT"> WALNUT</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WALNUT+PARK"> WALNUT PARK</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WEST+COVINA"> WEST COVINA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WEST+HILLS"> WEST HILLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WEST+HOLLYWOOD"> WEST HOLLYWOOD</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WESTLAKE+VILLAGE"> WESTLAKE VILLAGE</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WESTLAKE+VLG"> WESTLAKE VLG</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WHITTIER"> WHITTIER</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WILMINGTON"> WILMINGTON</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WINNETKA"> WINNETKA</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WOODLAND+HILLS"> WOODLAND HILLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WOODLAND+HLS"> WOODLAND HLS</option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=WRIGHTWOOD"> WRIGHTWOOD</option>

</select>	
	<span style="color:white;">  Select Pubfact: </span>
	<select id="select_fav" name="select_fav">
	<option>None </option>		  
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/?faver=faver"> Favorites </option> 
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/?faver=TUFF"> TUFF </option>  
	<option  class="button small green rounded" target="_blank" value="http://menloathertonrealty.com/datagrid/?faver=ded"> Ded</option>     
	<option class="button small green rounded" target="_blank"  value="http://menloathertonrealty.com/datagrid/">Tax Records</option>	
	</select>

	<script type="text/javascript">
	var urlmenus = document.getElementById( 'select_fav' );
	urlmenus.onchange = function() {
	open(this.options[ this.selectedIndex ].value,'_blank');	 
	};
	</script>


	   <script type="text/javascript">
var urlmenus = document.getElementById( 'menud2' );
urlmenus.onchange = function() {
open(this.options[ this.selectedIndex ].value,'moop','width=1920,height=1200' );	 
};
</script>
<script type="text/javascript">
var urlmenu = document.getElementById( 'menu20' );
urlmenu.onchange = function() {
if(this.options[ this.selectedIndex ].value=="Los-ang")
{
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=1000&idx-q-Counties<0>=SANTA+CRUZ+COUNTY",'myiiopo','width=1920,height=1200');
}
};
</script>
</ol>
</p>
</div>
</article>
<?php } ?>


<?php if(strpos($_SERVER['REQUEST_URI'],'ALAMEDA+COUNTY')!==FALSE)
{ ?>
<article id="tabs-plain" class="tabss">
<ul>
<a class="button small blue rounded"  href="#ALAMEDA"> ALAMEDA </a>
<a class="button small green rounded"  target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=1000&idx-q-Counties<0>=SANTA+CRUZ+COUNTY"> SANTACRUZ</a>
<a class="button small green rounded"  target="_blank" href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+MATEO+COUNTY"> SAN-MATEO </a>
<a class="button small green rounded" href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SANTA+CLARA+COUNTY" target="_blank"> SANTA-CLARA </a>
<a class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+FRANCISCO+COUNTY"> SAN-FRANCISCO </a> 
<a  class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=LOS+ANGELES+COUNTY">Los Angeles </a>    
<a target="_balnk"  class="button small green rounded "  href="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=Monterey+COUNTY">Monterey </a>
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=faver"> Favorites </a> 
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=TUFF"> TUFF </a>  
<a class="button small green rounded" target="_blank" href="http://menloathertonrealty.com/datagrid/?faver=ded"> Ded</a>   
<a class="button small green rounded" target="_blank"  href="http://menloathertonrealty.com/datagrid/">Tax Records</a>		</ul>
<div id="ALAMEDA">
<p>

<ol>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<span style="color:white;">Select County:</span>
<select name="menud2" id="menud2">
<option value="#"> None </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=1000&idx-q-Counties<0>=SANTA+CRUZ+COUNTY"> SANTACRUZ</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+MATEO+COUNTY"> SAN-MATEO </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SANTA+CLARA+COUNTY" > SANTA-CLARA </option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=SAN+FRANCISCO+COUNTY"> SAN-FRANCISCO </option>
<option  value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties<0>=ALAMEDA+COUNTY"> ALAMEDA </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=LOS+ANGELES+COUNTY">Los Angeles </a>    
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Counties%3C0%3E=Monterey+COUNTY">Monterey </option> 

</select>  	   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  	   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<span style="color:white;">Select City:</span>
<select name="menu3" id="menu3">
<option>None</option>
<option value="alameda">  ALL </option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=FREMONT">FRE</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HAYWARD">HAY</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=NEWARK">NWK</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CASTRO+VALLEY">CAS</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+LEANDRO">SLD</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+LORENZO">SLZ</option>
<option value="http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=UNION+CITY">UC</option>



</select>

<script type="text/javascript">
var urlmenus = document.getElementById( 'menud2' );
urlmenus.onchange = function() {
open(this.options[ this.selectedIndex ].value,'lkopoQ','width=1920,height=1200' );	 
};
</script><script type="text/javascript">
var urlmenu = document.getElementById( 'menu3' );
urlmenu.onchange = function() {
if(this.options[ this.selectedIndex ].value=="alameda")
{
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=FREMONT",'cxvxvmyavwdxsindowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=HAYWARD",'mvyawbvdsbvbindvbowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=NEWARK",'cvmvcyvcawdsindowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=CASTRO+VALLEY",'myawvvcvcvcdsindowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+LEANDRO",'myacccccwdsindowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=SAN+LORENZO",'myacvcvcwdsindowQ','width=1920,height=1200');
open("http://menloathertonrealty.com/idx/?idx-q-ListingStatuses=Active&idx-q-LotSqFtMin=10000&idx-q-PriceMin=1&idx-q-PriceMax=4000000&idx-q-Locations=UNION+CITY",'mfvcc','width=1920,height=1200');
}else
{
open(this.options[ this.selectedIndex ].value,'mjio','width=1920,height=1200' );
}
};
</script> </ol>
</p>
</div>
</article><?php } ?></div> 
<div class="button small blue rounded" style="float:left;" id="city_title"> 
    
    <?php

$str=$_SERVER['REQUEST_URI'];

if(stripos($str,"faver"))
{
echo "FAVORITES";
}
elseif(stripos($str,"FREMONT")!==FALSE)
{
echo "FREMONT";
}
elseif(stripos($str,"LOS+GATOS+MOUNTAINS")!==FALSE){echo "LOS GATOS MOUNTAINS";}
elseif(stripos($str,"LOS+ALTOS+HILLS")!==FALSE){ echo "LOS ALTOS HILLS"; }elseif(stripos($str,"HAYWARD")!==FALSE)
{
echo "HAYWARD";
}elseif(stripos($str,"NEWARK")!==FALSE)
{
echo "NEWARK";
}elseif(stripos($str,"CASTRO+VALLEY")!==FALSE)
{
echo "CASTRO VALLEY";
}elseif(stripos($str,"SAN+LEANDRO")!==FALSE)
{
echo "SAN LEANDRO";
}elseif(stripos($str,"SAN+LORENZO")!==FALSE)
{
echo "SAN LORENZO";
}elseif(stripos($str,"UNION+CITY")!==FALSE)
{
echo "UNION CITY";
}elseif(stripos($str,"SAN+FRANCISCO")!==FALSE)
{
echo "SAN FRANCISCO";
}elseif(stripos($str,"ATHERTON")!==FALSE)
{
echo "ATHERTON";
}elseif(stripos($str,"BELMONT")!==FALSE)
{
echo "BELMONT";
}

elseif(stripos($str,"FOSTER+CITY")!==FALSE)
{
echo "FOSTER CITY";
}
elseif(stripos($str,"EL+GRANADA")!==FALSE)
{
echo "EL GRANADA";
}
elseif(stripos($str,"EAST+PALO+ALTO")!==FALSE)
{
echo "EAST PALO ALTO";
}
elseif(stripos($str,"DALY+CITY")!==FALSE)
{
echo "DALY CITY";
}
elseif(stripos($str,"COLMA")!==FALSE)
{
echo "COLMA";
}

elseif(stripos($str,"BURLINGAME")!==FALSE)
{
echo "BURLINGAME";
}

elseif(stripos($str,"BRISBANE")!==FALSE)
{
echo "BRISBANE";
}

elseif(stripos($str,"HALF+MOON+BAY")!==FALSE)
{
echo "HALF MOON BAY";
}

elseif(stripos($str,"HILLSBOROUGH")!==FALSE)
{
echo "HILLSBOROUGH";
}

elseif(stripos($str,"LA+HONDA")!==FALSE)
{
echo "LA HONDA";
}

elseif(stripos($str,"LOMA+MAR")!==FALSE)
{
echo "LOMA MAR";
}
elseif(stripos($str,"MENLO+PARK")!==FALSE)
{
echo "MENLO PARK";
}

elseif(stripos($str,"MILLBRAE")!==FALSE)
{
echo "MILLBRAE";
}

elseif(stripos($str,"MONTARA")!==FALSE)
{
echo "MONTARA";
}

elseif(stripos($str,"MOSS+BEACH")!==FALSE)
{
echo "MOSS BEACH";
}

elseif(stripos($str,"PACIFICA")!==FALSE)
{
echo "PACIFICA";
}

elseif(stripos($str,"PESCADERO")!==FALSE)
{
echo "PESCADERO";
}

elseif(stripos($str,"PORTOLA+VALLEY")!==FALSE)
{
echo "PORTOLA VALLEY";
}

elseif(stripos($str,"REDWOOD+CITY")!==FALSE)
{
echo "REDWOOD+CITY";
}

elseif(stripos($str,"REDWOOD+SHORES")!==FALSE)
{
echo "REDWOOD SHORES";
}

elseif(stripos($str,"SAN+BRUNO")!==FALSE)
{
echo "SAN BRUNO";
}
elseif(stripos($str,"SAN+CARLOS")!==FALSE)
{
echo "SAN CARLOS";
}
elseif(stripos($str,"SAN+GREGORIO")!==FALSE){echo "SAN GREGORIO";}
elseif(stripos($str,"SAN+MATEO")!==FALSE){echo "SAN MATEO";}
elseif(stripos($str,"SUNNYVALE")!==FALSE){echo "SUNNYVALE";}
elseif(stripos($str,"SARATOGA")!==FALSE){echo "SARATOGA";}
elseif(stripos($str,"SANTA+CLARA")!==FALSE){echo "SANTA CLARA";}
elseif(stripos($str,"SAN+MARTIN")!==FALSE){echo "SAN MARTIN";}
elseif(stripos($str,"SAN+JOSE")!==FALSE){echo "SAN JOSE";}
elseif(stripos($str,"PALO+ALTO")!==FALSE){ echo "PALO ALTO"; }
elseif(stripos($str,"MOUNTAIN+VIEW")!==FALSE){ echo "MOUNTAIN VIEW"; }
elseif(stripos($str,"MORGAN+HILL")!==FALSE){ echo "MORGAN HILL"; }
elseif(stripos($str,"MILPITAS")!==FALSE){ echo "MILPITAS"; }
elseif(stripos($str,"LOS+ALTOS")!==FALSE){ echo "LOS ALTOS"; }
elseif(stripos($str,"LOS+GATOS")!==FALSE){ echo "LOS GATOS"; }
elseif(stripos($str,"GILROY")!==FALSE){echo "GILROY";}
elseif(stripos($str,"CUPERTINO")!==FALSE){echo "CUPERTINO";}
elseif(stripos($str,"CAMPBELL")!==FALSE){echo "CAMPBELL";}
elseif(stripos($str,"WOODSIDE")!==FALSE){echo "WOODSIDE";}
elseif(stripos($str,"SOUTH+SAN+FRANCISCO")!==FALSE){echo "SOUTH SAN FRANCISCO";}
elseif(stripos($str,"SANTA+CRUZ+COUNddTY")!==FALSE) {echo "SANTA CRUZ COUNTY"; }
elseif(stripos($str,"APTOS")!==FALSE) { echo "APTOS";} 
elseif(stripos($str,"CAPITOLA")!==FALSE) { echo "CAPITOLA"; }
elseif(stripos($str,"EAST+OF+HIWAY+17")!==FALSE) { echo "EAST OF HIWAY 17"; }
elseif(stripos($str,"EAST+SANTA+CRUZ+COUNTY")!==FALSE) { echo "EAST SANTA CRUZ COUNTY"; }
elseif(stripos($str,"LA+SELVA+BEACH")!==FALSE) { echo "LA SELVA BEACH";}
elseif(stripos($str,"LOS+GATOS+MTNS")!==FALSE) { echo "LOS GATOS MTNS";}
elseif(stripos($str,"RIO+DEL+MAR/SEASCAPE")!==FALSE) { echo "RIO DEL MAR/SEASCAPE";}
elseif(stripos($str,"SAN+LORENZO+VALLEY")!==FALSE) { echo "SAN LORENZO VALLEY";}
elseif(stripos($str,"SANTA+CRUZ")!==FALSE) { echo "SANTA CRUZ";}
elseif(stripos($str,"SCOTTS+VALLEY")!==FALSE) { echo "SCOTTS VALLEY";}
elseif(stripos($str,"SEACLIFF")!==FALSE) { echo "SEACLIFF";}
elseif(stripos($str,"SOQUEL")!==FALSE) { echo "SOQUEL"; }

elseif(stripos($str,"ALAMEDA+COUNddTY")!==FALSE) {echo "ALAMEDA COUNTY"; }

elseif(stripos($str,"SAN+MATEO+COUNddTY")!==FALSE) {echo "SAN MATEO COUNTY"; }

elseif(stripos($str,"SANTA+CLARA+COUNddTY")!==FALSE) {echo "SANTA CLARA COUNTY"; }

elseif(stripos($str,"SAN+FRANCISCO+COUNTddY")!==FALSE) {echo "SAN FRANCISCO COUNTY"; }

else
{
}
//End of Printing Name in Page of the current City or County

?> </div> 



<?php	}

	
function table_heading() {
?>

<script type="text/javascript" >
     jQuery.noConflict();
        jQuery(document).ready(function(){

jQuery("#delete_record").click(function() {
 var records=jQuery("#del_val").val();
 //alert(records);
 alert("Record Deleted Successfully");
jQuery.ajax({
	type: "POST",
	url: "http://menloathertonrealty.com/tuff/",
	data: { records_del: records, location: "'"+ records+"'" }
   })
  .done(function( msg ) {
    //alert( "Record Deleted Successfully" );
	//window.location = window.location.pathname;
});
 
 
});
function slideout() {
setTimeout(function () {
jQuery("#example1").slideUp("slow", function () {});
}, 200);
}
jQuery(".inlineEdit").bind("click", updateText);
var OrigText, NewText;
jQuery(document).on("click",".save", function () {
jQuery("#loading").fadeIn('slow');
NewText = jQuery(this).siblings("form").children(".edit").val();
var id = jQuery(this).parent().attr("id");

var data = 'id=' + id + '&text=' + NewText;
jQuery.post("<?php echo get_bloginfo('stylesheet_directory');?>/final.php", data, function (response) {
jQuery("#example1").html(response);
//alert(response);
jQuery("#example1").slideDown('slow');
slideout();
jQuery("#loading").fadeOut('slow');
});
jQuery(this).parent().html(NewText).removeClass("selected").bind("click", updateText);
});
jQuery(document).on("click",".revert", function () {
jQuery(this).parent().html(OrigText).removeClass("selected").bind("click", updateText);
});
function updateText() {
jQuery('li').removeClass("inlineEdit");	


OrigText = jQuery(this).html();
jQuery(this).addClass("selected").html('<form ><textarea class="edit">'+OrigText+'</textarea> </form><a href="#" class="save"><img src="http://menloathertonrealty.com/wp-content/themes/agentpress-two/images/save.png" border="0" width="48" height="15"/></a> <a href="#" class="revert"><img src="http://menloathertonrealty.com/wp-content/themes/agentpress-two/images/cancel.png" border="0" width="58" height="15"/></a>').unbind('click', updateText);
}
jQuery(".inlineEdits").bind("click", updateText);
var OrigText, NewText;
jQuery(document).on("click",".save", function () {
jQuery("#loading").fadeIn('slow');
NewText = jQuery(this).siblings("form").children(".edit").val();
var id = jQuery(this).parent().attr("id");
var data = 'ids=' + id + '&texts=' + NewText;
jQuery.post("<?php echo get_bloginfo('stylesheet_directory');?>/notes.php", data, function (response) {
jQuery("#example1").html(response);
//alert(response);
jQuery("#example1").slideDown('slow');
slideout();
jQuery("#loading").fadeOut('slow');
});
jQuery(this).parent().html(NewText).removeClass("selected").bind("click", updateText1);
});
jQuery(document).on("click",".revert", function () {
jQuery(this).parent().html(OrigText).removeClass("selected").bind("click", updateText1);
});
function updateText1() {
jQuery('li').removeClass("inlineEdits");
OrigText = jQuery(this).html();
jQuery(this).addClass("selected").html('<form ><textarea class="edit1">'+OrigText+'</textarea> </form><a href="#" class="save"><img src="http://menloathertonrealty.com/wp-content/themes/agentpress-two/images/save.png" border="0" width="48" height="15"/></a> <a href="#" class="revert"><img src="http://menloathertonrealty.com/wp-content/themes/agentpress-two/images/cancel.png" border="0" width="58" height="15"/></a>').unbind('click', updateText1);
}
var asInitVals = new Array();			
var oTable = jQuery('#example').dataTable({
'iDisplayLength': 100,
'bAutoWidth': false

});
jQuery('.dot').click(function(){
var vid=jQuery('#address').val();
//alert(vid);
jQuery.get("<?php echo get_bloginfo('stylesheet_directory');?>/final.php?address="+vid, function(data){
jQuery('#dialog-message').html(data);
jQuery( "#dialog-message" ).dialog({
modal: true,
buttons: {
Ok: function() {
jQuery( this ).dialog( "close" );
}
}
});
});
});
});
</script>

<script type="text/javascript">
function ne(uid,uii,chk) 
{
var jkp=uid;
chk = (chk==true ? "1" : "0");
var field = document.getElementById('newmail_'+uii).value;

var xmlhttp;
str="inids";
if (str.length==0)
{
document.getElementById("txtHint").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","http://menloathertonrealty.com/tuff/",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("newmailid="+field+"&newmailidYandNo="+chk);

}

function chkit(uid,uii,chk) {
var jkp=uid;
chk = (chk==true ? "1" : "0");
var field = document.getElementById('chks_'+jkp).value;
var cls  = document.getElementById('cl_'+jkp).value;
var mls = document.getElementById('mls_'+jkp).value;
var legal = document.getElementById('legal_'+jkp).value;
var ctyshortcut = document.getElementById('ctyshortcut_'+jkp).value;
var status = document.getElementById('status_'+jkp).value;
var lot = document.getElementById('lot_'+jkp).value;
var age = document.getElementById('age_'+jkp).value;
var dead = document.getElementById('dead_'+jkp).value;
var pdf = document.getElementById('pdf_'+jkp).value;
var notes = document.getElementById('notes_'+jkp).value;
var  zillow= document.getElementById('zillow_'+jkp).value;
var gmap = document.getElementById('gmap_'+jkp).value;
var fprice=document.getElementById('price_'+jkp).value;
var fhome=document.getElementById('home_'+jkp).value;
// var url = "http://menloathertonrealty.com/tuff/?faverid="+field+"&YandNo="+chk+"&cls="+cls+"&mls="+mls+"&legal="+legal+"&ctyshortcut="+ctyshortcut+"&status="+status+"&lot="+lot+"&age="+age+"&dead="+dead+"&pdf="+pdf+"&notes="+notes+"&zillow="+zillow+"&gmap="+gmap;
var url = "deadid="+field+"&YandNo="+chk+"&cls="+cls+"&mls="+mls+"&legal="+legal+"&ctyshortcut="+ctyshortcut+"&status="+status+"&lot="+lot+"&age="+age+"&dead="+dead+"&pdf="+pdf+"&notes="+notes+"&zillow="+zillow+"&gmap="+gmap+"&price="+fprice+"&home="+fhome;
//alert(url);
var xmlhttp;
str="inids";
if (str.length==0)
{
document.getElementById("txtHint").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","http://menloathertonrealty.com/tuff/",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("deadid="+field+"&YandNo="+chk+"&cls="+cls+"&mls="+mls+"&legal="+legal+"&ctyshortcut="+ctyshortcut+"&status="+status+"&lot="+lot+"&age="+age+"&dead="+dead+"&pdf="+pdf+"&notes="+notes+"&zillow="+zillow+"&gmap="+gmap+"&price="+fprice+"&home="+fhome);
}
</script>
<script type="text/javascript">
function tuf(uid,uii,chk) {
var jkp=uid;
chk = (chk==true ? "1" : "0");
var field = document.getElementById('tufs_'+uii).value;
var cls  = document.getElementById('cl_'+jkp).value;
var mls = document.getElementById('mls_'+jkp).value;
var legal = document.getElementById('legal_'+jkp).value;
var ctyshortcut = document.getElementById('ctyshortcut_'+jkp).value;
var status = document.getElementById('status_'+jkp).value;
var lot = document.getElementById('lot_'+jkp).value;
var age = document.getElementById('age_'+jkp).value;
var dead = document.getElementById('dead_'+jkp).value;
var pdf = document.getElementById('pdf_'+jkp).value;
var notes = document.getElementById('notes_'+jkp).value;
var  zillow= document.getElementById('zillow_'+jkp).value;
var gmap = document.getElementById('gmap_'+jkp).value;
var fprice=document.getElementById('price_'+jkp).value;
var fhome=document.getElementById('home_'+jkp).value;
// var url = "http://menloathertonrealty.com/tuff/?faverid="+field+"&YandNo="+chk+"&cls="+cls+"&mls="+mls+"&legal="+legal+"&ctyshortcut="+ctyshortcut+"&status="+status+"&lot="+lot+"&age="+age+"&dead="+dead+"&pdf="+pdf+"&notes="+notes+"&zillow="+zillow+"&gmap="+gmap;
var url = "deadid="+field+"&YandNo="+chk+"&cls="+cls+"&mls="+mls+"&legal="+legal+"&ctyshortcut="+ctyshortcut+"&status="+status+"&lot="+lot+"&age="+age+"&dead="+dead+"&pdf="+pdf+"&notes="+notes+"&zillow="+zillow+"&gmap="+gmap+"&price="+fprice+"&home="+fhome;
//alert(url);
var xmlhttp;
str="inids";
if (str.length==0)
{
document.getElementById("txtHint").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","http://menloathertonrealty.com/tuff/",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("tufid="+field+"&YndN="+chk+"&cls="+cls+"&mls="+mls+"&legal="+legal+"&ctyshortcut="+ctyshortcut+"&status="+status+"&lot="+lot+"&age="+age+"&dead="+dead+"&pdf="+pdf+"&notes="+notes+"&zillow="+zillow+"&gmap="+gmap+"&price="+fprice+"&home="+fhome);
}
function insert(insert) {

<!-- JavaScript and HTML codes by Quackit.com -->

promptMsg="Please enter APN(Parcel ID) for this property.";
apn_id = prompt(promptMsg, '');

var jkp=insert;	
var mls = document.getElementById('mlsss_'+jkp).value;
var stnum= document.getElementById('stnumss_'+jkp).value;
var stname= document.getElementById('stnamess_'+jkp).value;

var city = document.getElementById('cityss_'+jkp).value;

var status = document.getElementById('statusss_'+jkp).value;
var lot = document.getElementById('lotss_'+jkp).value;
var zillow= document.getElementById('zillowss_'+jkp).value;

var gmap = document.getElementById('gmapss_'+jkp).value;
var price=document.getElementById('pricess_'+jkp).value;
var home=document.getElementById('homess_'+jkp).value;

url="mls="+mls+"&stnum="+stnum+"&stname="+stname+
"&city="+city+"&status="+status+"&lot="+lot+
"&home="+home+"&price="+price+"&gmap="+gmap+
"&zillow="+zillow;


//alert(url);
var xmlhttp;
str="inids";
if (str.length==0)
{
document.getElementById("txtHint").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
alert("Record Successfully added");
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","http://menloathertonrealty.com/tuff/",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("addmls="+mls+"&addstnum="+stnum+"&stname="+stname+"&city="+city+"&status="+status+"&lot="+lot+"&home="+home+"&price="+price+"&gmap="+gmap+"&zillow="+zillow+"&apn_ids="+apn_id);
}
</script>
<script type="text/javascript">
function myfunction (myTD)
{
jQuery(".highlighted").removeClass("highlighted");
jQuery(myTD).addClass("highlighted");
}
</script>

<style>

#wpadminbar{ display:none; }
.highlighted { background:#ff99ff !important; color: teal; }
tr { cursor: pointer; }
</style>
<script type="text/javascript">

function chkitss(uid,uii,chk) {
var jkp=uid;
chk = (chk==true ? "1" : "0");
var field = document.getElementById('newmail_'+uii).value;
var xmlhttp;
str="inids";
if (str.length==0)
{
document.getElementById("txtHint").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","http://menloathertonrealty.com/tuff/",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("nemailid="+field+"&newmailidYandNo="+chk);
}

function faver(uid,uii,jkp,chk) {

chk = (chk==true ? "1" : "0");
var field = document.getElementById('favs_'+uii).value;

var cls  = document.getElementById('cl_'+jkp).value;

var mls = document.getElementById('mls_'+jkp).value;

var legal = document.getElementById('legal_'+jkp).value;

var ctyshortcut = document.getElementById('ctyshortcut_'+jkp).value;

var status = document.getElementById('status_'+jkp).value;
var lot = document.getElementById('lot_'+jkp).value;
var age = document.getElementById('age_'+jkp).value;
var dead = document.getElementById('dead_'+jkp).value;
var pdf = document.getElementById('pdf_'+jkp).value;
var notes = document.getElementById('notes_'+jkp).value;
var  zillow= document.getElementById('zillow_'+jkp).value;
var gmap = document.getElementById('gmap_'+jkp).value;
//alert("okk");
var fprice=document.getElementById('price_'+jkp).value;
//alert(fprice);
var fhome=document.getElementById('home_'+jkp).value;
//alert(fhome);

// var url = "http://menloathertonrealty.com/tuff/?faverid="+field+"&YandNo="+chk+"&cls="+cls+"&mls="+mls+"&legal="+legal+"&ctyshortcut="+ctyshortcut+"&status="+status+"&lot="+lot+"&age="+age+"&dead="+dead+"&pdf="+pdf+"&notes="+notes+"&zillow="+zillow+"&gmap="+gmap;
var url = "faverid="+field+"&YandNo="+chk+"&cls="+cls+"&mls="+mls+"&legal="+legal+"&ctyshortcut="+ctyshortcut+"&status="+status+"&lot="+lot+"&age="+age+"&dead="+dead+"&pdf="+pdf+"&notes="+notes+"&zillow="+zillow+"&gmap="+gmap+"&price="+fprice+"&home="+fhome;
//alert(url);
var xmlhttp;
str="inids";
if (str.length==0)
{
document.getElementById("txtHint").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
//alert("success");
//	alert(xmlhttp.responseText);
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","http://menloathertonrealty.com/tuff/",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("faverid="+field+"&YandNo="+chk+"&cls="+cls+"&mls="+mls+"&legal="+legal+"&ctyshortcut="+ctyshortcut+"&status="+status+"&lot="+lot+"&age="+age+"&dead="+dead+"&pdf="+pdf+"&notes="+notes+"&zillow="+zillow+"&gmap="+gmap+"&price="+fprice+"&home="+fhome);
}

</script>
<?php
if(!function_exists('file_get_html'))
{
include('one.php'); 
}
$insert=1;
$price="";
$ki=0;
$tu=0;
$fu=0;
$tot=0;
set_time_limit(0);
//error_reporting(0);
$html_content= file_get_html('http://menloathertonrealty.com'.$_SERVER['REQUEST_URI']);
$html=$html_content;
$y=0;
$jkp=0;
foreach($html->find('.dsidx-paging-control') as $total){
$paging=$total;
$_SESSION['paging']=$total;
$y++;
if($y==2)	 {
$ro=strip_tags($total);
$t=explode(" ",$ro);
$tot=$t[7];
$_SESSION['tot']=$tot;  
}	 //End IF condition

}  //End for loop?>

<?php  if(stripos($_SERVER['HTTP_USER_AGENT'],'Chrome')!==false){?> 			

<?php } 		
if(stripos($_SERVER['HTTP_USER_AGENT'],'Chrome')!==false && stripos($_SERVER['REQUEST_URI'],'idx-q-Locations') !==FALSE)			{ ?>
<?php		
}
$mystring ="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
$findme   = 'page-';
$pos = strpos($mystring, $findme);
$found="ok";
$found_page="ok";
if ($pos === false) {
$found="no";
?>
<script>
//alert("found==no");
</script>
<?php

}
else

{   
$found="found";
}

if($found=="no")
{

$tots=$_SESSION['tot'];
for($w=1;$w<=$tots;$w++)
{

if($w==2)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-2?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-2?".$k[1];

echo "<script>  
open(' $link','mfgfvbss','width=1920,height=1200'); </script>";
}

if($w==3)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-3?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-3?".$k[1];
echo "<script> 
open(' $link','mfgfvbfff','width=1920,height=1200'); </script>";

}

if($w==4)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-4?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-4?".$k[1];


echo "<script>open(' $link','moplikj','width=1920,height=1200'); </script>"; 


}

if($w==5)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-5?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-5?".$k[1];

// 
echo "<script>open(' $link','mghtyuiopl','width=1920,height=1200');</script>";  

}

if($w==6)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-6?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-6?".$k[1];

// 
echo "<script>open(' $link','mvccx','width=1920,height=1200');  </script>";

}

if($w==7)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-7?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-7?".$k[1];

// 
echo "<script>open(' $link','bvcxz','width=1920,height=1200');  </script>";


}     

if($w==8)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-8?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-8?".$k[1];

// 
echo "<script>open(' $link','yuioipl','width=1920,height=1200');  </script>";

}	

if($w==9)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-9?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-9?".$k[1];

// 
echo "<script>open(' $link','ewqa,'width=1920,height=1200');  </script>";

}

if($w==10)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-10?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-10?".$k[1];

// 
echo "<script>open(' $link','fghty','width=1920,height=1200');  </script>";


}    

if($w==11)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-11?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-11?".$k[1];

// 
echo "<script>open(' $link','myawdsindowQacx','width=1920,height=1200');  </script>";

}

if($w==12)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-12?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-12?".$k[1];

// 
echo "<script>open(' $link','ghjkiop','width=1920,height=1200');  </script>";

}

if($w==13)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-13?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-13?".$k[1];

// 
echo "<script>open(' $link','ff','width=1920,height=1200');  </script>";


}      

if($w==14)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-14?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-14?".$k[1];

// 
echo "<script>open(' $link','mgtydfd','width=1920,height=1200');  </script>";

}		

if($w==15)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-15?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-15?".$k[1];

// 
echo "<script>open(' $link','gtydf','width=1920,height=1200');  </script>";

}

if($w==16)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$links=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-16?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-16?".$k[1];

// 
echo "<script> open(' $link','muiopo','width=1920,height=1200'); </script>"; 


}

if($w==17)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-17?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-17?".$k[1];

// 
echo "<script>open(' $link','mgf,'width=1920,height=1200');  </script>";

}	

if($w==18)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-18?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-18?".$k[1];

// 
echo "<script>open(' $link','jkj','width=1920,height=1200');  </script>";

}	
if($w==19)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-19?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-19?".$k[1];

// 
echo "<script>open(' $link','fa','width=1920,height=1200');  </script>";

}

if($w==20)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-20?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-20?".$k[1];

echo "<script> open(' $link','dQ','width=1920,height=1200'); </script>";

}



}






//Open Automatic link when page not found Page- string
?>
<script  type="text/javascript">


function akss()
{

alert("Indianaa");
<?php

//error_reporting(0);
$tots=$_SESSION['tot'];
for($w=1;$w<=$tots;$w++)
{

if($w==113)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-1?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-1?".$k[1];
?>   
// alert('<?php echo $link;?>'); 
////alert('<?php echo $link;?>');
alert('<?php echo $link;?>');
open('<?php echo $link;?>','myawdsfgbvcxzindowQ','width=1920,height=1200'); 


<?php
}
if($w==2)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-2?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-2?".$k[1];
?>   
alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','mfgfvb','width=1920,height=1200'); 


<?php
}

if($w==3)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-3?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-3?".$k[1];
?>  
alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','myvfcxndowQ','width=1920,height=1200');  

<?php
}

if($w==4)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-4?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-4?".$k[1];
?> 
alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','moplikj','width=1920,height=1200');  
<?php

}

if($w==5)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-5?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-5?".$k[1];
?> 
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','mghtyuiopl','width=1920,height=1200');  
<?php
}

if($w==6)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-6?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-6?".$k[1];
?> 
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','mvccx','width=1920,height=1200');  
<?php
}
if($w==7)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-7?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-7?".$k[1];
?> 
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','bvcxz','width=1920,height=1200');  
<?php

}        
if($w==8)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-8?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-8?".$k[1];
?>
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','yuioipl','width=1920,height=1200');  
<?php
}		 
if($w==9)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-9?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-9?".$k[1];
?> 
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','ewqa,'width=1920,height=1200');  
<?php
}
if($w==10)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-10?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-10?".$k[1];
?> 
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','fghty','width=1920,height=1200');  
<?php

}        
if($w==11)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-11?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-11?".$k[1];
?>
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','myawdsindowQacx','width=1920,height=1200');  
<?php
}
if($w==12)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-12?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-12?".$k[1];
?> 
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','ghjkiop','width=1920,height=1200');  
<?php
}
if($w==13)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-13?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-13?".$k[1];
?> 
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','ff','width=1920,height=1200');  
<?php

}        
if($w==14)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-14?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-14?".$k[1];
?> 
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','mgtydfd','width=1920,height=1200');  
<?php
}		 
if($w==15)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-15?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-15?".$k[1];
?>
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','gtydf','width=1920,height=1200');  
<?php
}
if($w==16)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$links=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-16?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-16?".$k[1];
?> 
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','muiopo','width=1920,height=1200');  
<?php

}
if($w==17)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-17?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-17?".$k[1];
?> 
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','mgf,'width=1920,height=1200');  
<?php
}		 
if($w==18)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-18?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-18?".$k[1];
?> 
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','jkj','width=1920,height=1200');  
<?php
}		   if($w==19)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-19?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-19?".$k[1];
?> 
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','fa','width=1920,height=1200');  
<?php
}
if($w==20)		 {
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-20?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-20?".$k[1];
?> 
//alert('<?php echo $link;?>'); 
open('<?php echo $link;?>','dQ','width=1920,height=1200');  
<?php
}
}

?>

}
</script>
<?php
}
//End automatic link Open Clause
?>
<div id="pp">
<?php $paging=$_SESSION['paging']; 
$paging=str_replace('<div class="dsidx-paging-control">',"",$paging);
$paging=str_replace("</div>","",$paging);
$paging=str_replace("Previous","<img src='http://menloathertonrealty.com/wp-content/themes/agentpress-two/pre.png' height='20px'/>",$paging);
$paging=str_replace("Next","<img src='http://menloathertonrealty.com/wp-content/themes/agentpress-two/next.png' height='20px'/>",$paging);
echo $paging; ?>
&nbsp; &nbsp; &nbsp;
Go to Page:<select id="pg1" name="pg1">
<?php $linkk="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$mkk="$linkk";  
$kk=explode('?',$mkk);
?>

<?php
//<option id="alls" value="http://menloathertonrealty.com/idx/<?php echo $kk[1]>"> All </option>

for($w=1;$w<=$tot;$w++)
{
if($w==1)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-1?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-1?".$k[1];
?> <option value="<?php echo $link;?>"> 1 </option>
<?php

}

if($w==2)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-2?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-2?".$k[1];
?> <option value="<?php echo $link;?>"> 2 </option>
<?php
}

if($w==3)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-3?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-3?".$k[1];
?> <option value="<?php echo $link;?>"> 3 </option>
<?php
}
if($w==4)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-4?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-4?".$k[1];
?> <option value="<?php echo $link;?>"> 4 </option>
<?php

}

if($w==5)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-5?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-5?".$k[1];
?> <option value="<?php echo $link;?>"> 5 </option>
<?php
}

if($w==6)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-6?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-6?".$k[1];
?> <option value="<?php echo $link;?>"> 6 </option>
<?php
}
if($w==7)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-7?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-7?".$k[1];
?> <option value="<?php echo $link;?>"> 7 </option>
<?php

}

if($w==8)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-8?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-8?".$k[1];
?> <option value="<?php echo $link;?>"> 8 </option>
<?php
}

if($w==9)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-9?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-9?".$k[1];
?> <option value="<?php echo $link;?>"> 9 </option>
<?php
}
if($w==10)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-10?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-10?".$k[1];
?> <option value="<?php echo $link;?>"> 10 </option>
<?php

}

if($w==11)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-11?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-11?".$k[1];
?> <option value="<?php echo $link;?>"> 11 </option>
<?php
}

if($w==12)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-12?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-12?".$k[1];
?> <option value="<?php echo $link;?>"> 12 </option>
<?php
}
if($w==13)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-13?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-13?".$k[1];
?> <option value="<?php echo $link;?>"> 13 </option>
<?php

}

if($w==14)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-14?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-14?".$k[1];
?> <option value="<?php echo $link;?>"> 14 </option>
<?php
}

if($w==15)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-15?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-15?".$k[1];
?> <option value="<?php echo $link;?>"> 15 </option>
<?php
}
if($w==16)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$links=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-16?',$link);
$mk="$link";  
$k=explode('?',$mk);
$links="http://menloathertonrealty.com/idx/page-16?".$k[1];
?> <option value="<?php echo $links;?>"> 16 </option>
<?php

}

if($w==17)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-17?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-17?".$k[1];
?> <option value="<?php echo $link;?>"> 17 </option>
<?php
}

if($w==18)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-18?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-18?".$k[1];
?> <option value="<?php echo $link;?>"> 18</option>
<?php
}
if($w==19)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-19?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-19?".$k[1];
?> <option value="<?php echo $link;?>"> 19 </option>
<?php

}

if($w==20)
{
$link="http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$link=str_replace('http://menloathertonrealty.com/idx/?','http://menloathertonrealty.com/idx/page-20?',$link);
$mk="$link";  
$k=explode('?',$mk);
$link="http://menloathertonrealty.com/idx/page-20?".$k[1];
?> <option value="<?php echo $link;?>"> 20 </option>
<?php
}



}
?>
</select>
<script type="text/javascript">
var urlmenu = document.getElementById( 'pg1' );
urlmenu.onchange = function() {
//alert(this.options[ this.selectedIndex ].value);
open(this.options[ this.selectedIndex ].value,'tryui','width=1920,height=1200');

};
</script>
</div>

<?php

if(stripos($_SERVER['HTTP_USER_AGENT'],'Chrome')!==false && stripos($_SERVER['REQUEST_URI'],'idx-q-Locations') !==FALSE)

{?>

<?php
} 
else
{ ?>
<style>


#pp {
float: right !important;
margin-right: 204px !important;
margin-top: -42px !important;
color:white;
}

</style>
<?php
}

if(stripos($_SERVER['REQUEST_URI'],'idx-q-Locations') !==FALSE)
{ ?>
<style>
#pp {
float: right !important;
margin-right: 204px !important;
margin-top: -42px !important;
color:blue;
}

#dsidx .dsidx-paging-control {
color: blue;   
font-size: 12px;
margin-right: 51px;
margin-top: -60px !important;
}
</style>
<?php }	?>

<style>

table {
background-color: transparent;
border-collapse: collapse;
border-spacing: 0 !important;
font-family: verdana !important;
font-size: 11px !important;
max-width: 72%;
}

.content-sidebar #content-sidebar-wrap, .full-width-content #content-sidebar-wrap, .sidebar-content #content-sidebar-wrap {
width: 1376px;
}
td {
height: 25px;
overflow:hidden;
white-space: nowrap;
width: 10px;
}
#dsidx div:nth-child(6)
{display:none;
}
.dsidx-paging-control
{

}
#dsidx div:nth-child(12)
{

display:none;
}
#dsidx div:nth-child(5)
{
display:none;

}           	
.dsidx-paging-control {
border-top: 0 solid #999999;
clear: both;
margin-top: -9px !important;
padding: 1px 0 !important;
}

#inner {
background-color: #FFFFFF;
box-shadow: 0 1px 3px #000000;
margin: 0 auto;
overflow: hidden;
padding: 20px;
width: 1336px !important;
}
#dsidx ul.dsidx-tabs, body.dsidx ul.dsidx-tabs {
border-bottom: 1px solid #DEDEDE;
height: 17px !important;
margin: 0;
padding: 0 0 0 20px;
width: 12px !important;
}

.entry-content {
margin-left: 20px;
margin-top: 21px !important;
width: 937px !important;
}

#dsidx .dsidx-paging-control {
color: white;   
font-size: 12px;
margin-right: 51px;
margin-top: -60px !important;
}

#tabs-plain {
    background: none repeat scroll 0 0 #0C3443 !important;
    height: 29px !important;
    margin-bottom: 12px;
    width: 1157px;
}
article ul { 
display:none !important;  
}

#wrap {
    margin: -51px auto !important;
    overflow: hidden;
    width: 1361px;
}


#tabs-plain {
    background: none repeat scroll 0 0 #0C3443 !important;
    height: 37px !important;
    margin-bottom: 12px;
    width: 974px;
}


#pp {
    color: #FFFFFF;
    float: right !important;
    margin-right: 362px !important;
    margin-top: -42px !important;
}
</style>


<?php    if(strpos($_SERVER['REQUEST_URI'],'SANTA+CRUZ+ffCfffOUffffNTY')!==FALSE || strpos($_SERVER['REQUEST_URI'],'ALAMEDA+COUNTY')!==FALSE )
{
?>
<div id="txtHint"> </div>



<table border="1" width=200 style="white-space: nowrap !important;  margin-top:-2px !important";" id='example'>			<?php
}
else
{

if(stripos($_SERVER['HTTP_USER_AGENT'],'Chrome')!==false)
{
echo "<table id='example' border='2' >"; ?>


<style>




#wrap {
margin: 0 auto;
overflow: hidden;
width: 102% !important;
}

#inner{  
padding:35px !important; 

}



</style>
<?php

}
else {

?>
<table border="1" width=200 style="white-space: nowrap !important;  margin-top:-2px !important";" id='example'>			<?php

}

} 

?>

 <?php echo "<thead>";?>

<tr style='background-color:wheat;font-size:15px;'>

<th class="status">Status </th> 

<th class="cla"> CLA</th>
<th class="mls"> MLS </Th> 
<Th class="address"   STYLE="MAX-WIDTH:200PX;"> Address </th> 
<th class="city"> City </th> 	  
<th class="legal"  STYLE="MAX-WIDTH:300PX;"> Legal </th> 
<th class="apn"> APN </th> 
<th> All </th>
<th class="ded"> Ded </th>

<th class="pmap">PMap</th>
<th class="price"> Price </th> 
<th class="lot">Lot </th> 
<th class="sf"> SF </th> 
<th class="dom"> DOM </th> 
<th class="age"> Age </th> 
<th class="notes">Notes</th>
<th class="zillow"> Zillow </th>
<th class="gmap"> GMap </th>
<th class="tuf"> TUF </th>
<th class="faver">Fav</th>	
<th> Add </th>
<th> Check</th>
<th> Mail </th>
<th> Delete </th>
</tr>  
</thead>
<tbody>

<?php
$lots="";
$street_name="";
$s="in";
$validated="yes";
if(strpos($s,'in')!==FALSE){
$lots="true";
}
else{
$lots="false";
}
$year=""; $status="";
$cnt=0;
$rec=1;
foreach($html->find('ol') as $ol) {   
foreach($ol->find('li') as $li) { 
$rec++;   
$jkp++;
$length="";
foreach($li->find('.dsidx-address') as $div_as)	{
$adds=$div_as;
$sts=$div_as;
foreach($div_as->find('span') as $cty)	{
$Cts=$ctys;
}
$address=str_replace($Cts,'',$adds);
$pars= explode(",", $Cts);
$citys=$pars[0].$pars[1];
$cityones=$citys;
foreach($div_as->find('a') as $element)	{
$linkss=$element->href; 
$length=strlen($linkss);	 
$mainlinkss=$linkss;					  
}	

}// Address fielsd
if($length<1) {
}
else   { 
foreach($li->find('.dsidx-secondary-data-mls-number') as $tp)	{
$mls=str_replace('MLS','',$tp);  
}
foreach($li->find('.dsidx-price') as $divi)	{
$price=$divi;
}  
foreach($li->find('.dsidx-address') as $div_s)	{	
$street_nm="";
$spn="";
foreach($div_s->find('span') as $totals){
$spn=strip_tags($totals);
}	
$t=strip_tags($div_s);
$street_nm=str_replace("$spn",'',$t);
$street_nm=trim($street_nm);
$string = "$street_nm";
$split = explode(' ', $string);
unset($split[0]);
$tpw=implode(' ', $split);
$street_name=$tpw;

$add=$div_s;
$st=$div_s;
foreach($div_s->find('span') as $cty)	{
$Ct=$cty;
}
$address=str_replace($Ct,'',$add);
$par= explode(",", $Ct);
$city=$par[0].$par[1];
$cityone=$city;
foreach($div_s->find('a') as $element)	{
$link=$element->href;	 
$mainlink=$link;					  
}
foreach($li->find('div[class=dsidx-secondary-data-line dsidx-secondary-data-lot-size]') as $rt)	{
$i=0;
foreach($rt->find('span') as $tr)  	{
$i++;
if($i==1)
$Home=$tr;
if($i==2)
$Lot=$tr;
$Lo=$Lot;
$Lo=strip_tags($Lo);
$main=explode(',',$Lo);
$lo_str=$main[0].$main[1];
}
} //Closelotsize For each
$div_1=strip_tags($st);				
$str_var  = "$div_1";
$lastSpacePosition = strrpos($str_var," ");
$texts=substr($str_var,0,$lastSpacePosition);
$parts= explode(",", $texts);
$finals=$parts[0].$parts[1];
$finals=str_replace('dsidx-','',$finals);
$finals=str_replace('address">','',$finals);
$finals=trim($finals);
} //Close Address foreach
$city=str_replace(' CA','',$city);
$mcity=$city;
$str=strip_tags($mcity);
$one=$str;
$final=explode(' ',$str);
$first=ord($final[0]);
$f=chr($first);
$second=ord($final[1]);
$s=chr($second);
$str=strtoupper($str);
$valid="ok";
$validated="yes";
if(strcmp($str,"FREMONT")==0)
{
$citys="FRE";
}
elseif(strcmp($str,"HAYWARD")==0)
{
$citys="HAY";
}elseif(strcmp($str,"NEWARK")==0)
{
$citys="NWK";
}elseif(strcmp($str,"CASTRO VALLEY")==0)
{
$citys="CAS";
}elseif(strcmp($str,"SAN LEANDRO")==0)
{
$citys="SLD";
}elseif(strcmp($str,"SAN LORENZO")==0)
{
$citys="SLZ";
}elseif(strcmp($str,"UNION CITY")==0)
{
$citys="UC";
}elseif(strcmp($str,"SAN FRANCISCO")==0)
{
$citys="SF";
}elseif(strcmp($str,"ATHERTON")==0)
{
$citys="AT";
}elseif(strcmp($str,"BELMONT")==0)
{
$citys="BEL";
}

elseif(strcmp($str,"FOSTER CITY")==0)
{
$citys="FC";
}
elseif(strcmp($str,"EL GRANADA")==0)
{
$citys="ELG";
}
elseif(strcmp($str,"EAST PALO ALTO")==0)
{
$citys="EP";
}
elseif(strcmp($str,"DALY CITY")==0)
{
$citys="DC";
}
elseif(strcmp($str,"COLMA")==0)
{
$citys="COL";
}

elseif(strcmp($str,"BURLINGAME")==0)
{
$citys="BUR";
}

elseif(strcmp($str,"BRISBANE")==0)
{
$citys="BRI";
}

elseif(strcmp($str,"HALF MOON BAY")==0)
{
$citys="HMB";
}

elseif(strcmp($str,"HILLSBOROUGH")==0)
{
$citys="HIL";
}

elseif(strcmp($str,"LA HONDA")==0)
{
$citys="LH";
}

elseif(strcmp($str,"LOMA MAR")==0)
{
$citys="LM";
}
elseif(strcmp($str,"MENLO PARK")==0)
{
$citys="MP";
}

elseif(strcmp($str,"MILLBRAE")==0)
{
$citys="MIL";
}

elseif(strcmp($str,"MONTARA")==0)
{
$citys="MON";
}

elseif(strcmp($str,"MOSS BEACH")==0)
{
$citys="MOS";
}

elseif(strcmp($str,"PACIFICA")==0)
{
$citys="PAC";
}

elseif(strcmp($str,"PESCADERO")==0)
{
$citys="PES";
}

elseif(strcmp($str,"PORTOLA VALLEY")==0)
{
$citys="PV";
}

elseif(strcmp($str,"REDWOOD CITY")==0)
{
$citys="RC";
}

elseif(strcmp($str,"REDWOOD SHORES")==0)
{
$citys="RS";
}

elseif(strcmp($str,"SAN BRUNO")==0)
{
$citys="SB";
}
elseif(strcmp($str,"SAN CARLOS")==0)
{
$citys="SCL";
}
elseif(strcmp($str,"LOS ALTOS HILLS")==0){ $citys="LAH"; }

elseif(strcmp($str,"LOS GATOS MOUNTAINS")==0){ $citys="LGM"; }
elseif(strcmp($str,"SAN GREGORIO")==0){ $citys="SGR"; }
elseif(strcmp($str,"SAN MATEO")==0){ $citys="SM"; }
elseif(strcmp($str,"SUNNYVALE")==0){ $citys="SU"; }
elseif(strcmp($str,"SARATOGA")==0){ $citys="SA"; }
elseif(strcmp($str,"SANTA CLARA")==0){ $citys="SC"; }
elseif(strcmp($str,"SAN MARTIN")==0){ $citys="SM"; }
elseif(strcmp($str,"SAN JOSE")==0){ $citys="SJ"; }
elseif(strcmp($str,"PALO ALTO")==0){ $citys="PA"; }
elseif(strcmp($str,"MOUNTAIN VIEW")==0){ $citys="MV"; }
elseif(strcmp($str,"MORGAN HILL")==0){ $citys="MH"; }
elseif(strcmp($str,"MILPITAS")==0){ $citys="MI"; }

elseif(strcmp($str,"LOS ALTOS")==0){ $citys="LA"; }
elseif(strcmp($str,"LOS GATOS")==0){ $citys="LG"; }    
elseif(strcmp($str,"GILROY")==0){ $citys="GY"; }
elseif(strcmp($str,"CUPERTINO")==0){ $citys="CU"; }
elseif(strcmp($str,"CAMPBELL")==0){ $citys="CA"; }
elseif(strcmp($str,"WOODSIDE")==0){ $citys="WOD"; }
elseif(strcmp($str,"SOUTH SAN FRANCISCO")==0){ $citys="SSF"; }
elseif(stripos($str,"APTOS")!==FALSE) { $citys="APT";} 
elseif(stripos($str,"CAPITOLA")!==FALSE) { $citys= "CAP"; }
elseif(stripos($str,"EAST+OF+HIWAY+17")!==FALSE) {$citys= "EST"; }
elseif(stripos($str,"EAST+SANTA+CRUZ+COUNTY")!==FALSE) { $citys="SZE"; }
elseif(stripos($str,"LA+SELVA+BEACH")!==FALSE) { $citys="LSB";}
elseif(stripos($str,"LOS+GATOS+MTNS")!==FALSE) { $citys="LGM";}
elseif(stripos($str,"RIO+DEL+MAR/SEASCAPE")!==FALSE) { $citys="RIO";}
elseif(stripos($str,"SAN+LORENZO+VALLEY")!==FALSE) { $citys= "SLV";}
elseif(stripos($str,"SANTA+CRUZ")!==FALSE) { $citys="SZ";}
elseif(stripos($str,"SCOTTS+VALLEY")!==FALSE) { $citys="SV";}
elseif(stripos($str,"SEACLIFF")!==FALSE) { $citys="SCF";}
elseif(stripos($str,"SOQUEL")!==FALSE) { $citys= "SOQ"; }


else
{
$citys=$one;
$valid="no";
$validated="no";
}


if(strpos("$mainlink",$mss)!==FALSE)
{
$validated="no";
}
$mss.=" ".$mainlink;

echo $lots;
echo $validated;
die();

if($lots=="true" && $validated=="yes")  {

if($validated=="yes" && $lo_str>9999 || $lo_str<=10)
{		  


$string_builder=NULL;
$mlink=$mainlink;  
$z="$mlink";
$zs=explode("/",$z);
$zp=explode("-",$zs[2]);
$zmap=$zp[2];
$lastSpacePosition = strrpos($zmap, '_');
$test= substr($zmap, 0, $lastSpacePosition);
$final_string=str_replace('_','-',$test);
$final=$final_string."remove";
$zillow=str_replace('caremove','',$final);	
//echo $zillow;
$zs=explode('-',$zillow);
$st_num=$zs[0];
$k=0;
foreach($zs as $p)
{
if($p!="")
{
$k++;
if($k==1)
{

}else
{

$string_builder.= " ".$p;
}
}

}
$nothing=true;
if(stripos($string_builder,"SOUTH SAN FRANCISCO")!==FALSE||stripos($string_builder,"HALF MOON BAY")!==FALSE || stripos($string_builder,"LOS GATOS MOUNTAINS")!==FALSE || stripos($string_builder,"EAST PALO ALTO")!==FALSE ||  stripos($string_builder,"LOS ALTOS HILLS")!==FALSE)
{
$str = "$string_builder";
$words = explode( " ", $str );
array_splice( $words, -3 );
$st_name=implode( " ", $words );	
$nothing=false;
}
elseif(
stripos($string_builder,"San Jose")!==FALSE  || stripos($string_builder,"CASTRO VALLEY")!==FALSE||
stripos($string_builder,"SAN LEANDRO")!==FALSE || stripos($string_builder,"SAN LORENZO")!==FALSE ||
stripos($string_builder,"UNION CITY")!==FALSE || stripos($string_builder,"SAN FRANCISCO")!==FALSE ||
stripos($string_builder,"FOSTER CITY")!==FALSE ||  stripos($string_builder,"EL GRANADA")!==FALSE || 
stripos($string_builder,"DALY CITY")!==FALSE || stripos($string_builder,"LA HONDA")!==FALSE  || 
stripos($string_builder,"LOMA MAR")!==FALSE  || stripos($string_builder,"MENLO PARK")!==FALSE ||
stripos($string_builder,"SANTA CLARA")!==FALSE || stripos($string_builder,"MOSS BEACH")!==FALSE || 
stripos($string_builder,"PORTOLA VALLEY")!==FALSE || stripos($string_builder,"REDWOOD CITY")!==FALSE ||
stripos($string_builder,"REDWOOD SHORES")!==FALSE || stripos($string_builder,"SAN BRUNO")!==FALSE ||
stripos($string_builder,"SAN CARLOS")!==FALSE || stripos($string_builder,"SAN GREGORIO")!==FALSE ||
stripos($string_builder,"SAN MATEO")!==FALSE || stripos($string_builder,"SAN MARTIN")!==FALSE|| 
stripos($string_builder,"SAN JOSE")!==FALSE || stripos($string_builder,"PALO ALTO")!==FALSE  ||  
stripos($string_builder,"MOUNTAIN VIEW")!==FALSE || stripos($string_builder,"MORGAN HILL")!==FALSE || 
stripos($string_builder,"LOS ALTOS")!==FALSE ||   stripos($string_builder,"LOS GATOS")!==FALSE
)
{
$str = "$string_builder";
$words = explode( " ", $str );
array_splice( $words, -2);
$st_name=implode( " ", $words );
$nothing=false;

}
elseif( stripos($string_builder,"HILLSBOROUGH")!==FALSE|| stripos($string_builder,"COLMA")!==FALSE ||
stripos($string_builder,"BURLINGAME")!==FALSE || stripos($string_builder,"BRISBANE")!==FALSE || 
stripos($string_builder,"FREMONT")!==FALSE || stripos($string_builder,"NEWARK")!==FALSE || 
stripos($string_builder,"HAYWARD")!==FALSE ||  stripos($string_builder,"ATHERTON")!==FALSE ||
stripos($string_builder,"BELMONT")!==FALSE || stripos($string_builder,"MILLBRAE")!==FALSE ||
stripos($string_builder,"MONTARA")!==FALSE ||  stripos($string_builder,"PACIFICA")!==FALSE ||
stripos($string_builder,"PESCADERO")!==FALSE || stripos($string_builder,"MILPITAS")!==FALSE ||
stripos($string_builder,"SUNNYVALE")!==FALSE || stripos($string_builder,"SARATOGA")!==FALSE ||
stripos($string_builder,"GILROY")!==FALSE || stripos($string_builder,"CUPERTINO")!==FALSE ||
stripos($string_builder,"CAMPBELL")!==FALSE || stripos($string_builder,"WOODSIDE")!==FALSE
)
{

$str = "$string_builder";
$words = explode( " ", $str );
array_splice( $words, -1);
$st_name=implode( " ", $words );
$nothing=false;    
}
else { }
$st_name=ltrim($st_name);

/* 
$m="$mainlink";
$zs=explode("/",$m);
$zp=explode("-",$zs[2]);
$zmap=$zp[2];
$fn=str_replace("_"," ",$zmap);
//$st_name=str_replace(' wy',' way',$st_name);
$fn=str_replace(' av','Ave',$fn);	
$fn=str_replace(' bl','Blvd',$fn);	
$sql = "SELECT   * FROM PublicFactsData  WHERE  Site='$fn' LIMIT 1 "; */
//echo $sql."</br/>";


$check="low";
$we="notson";
$not_in_tbl="no";

$yy=0;
$stnames="";
if($yy==0) 
{
$stnames=$street_name; 
$st_name=$street_name;


$st_name=str_replace(' Av',' Ave',$st_name);
$st_name=str_replace(' Ave',' Ave',$st_name);
$st_name=str_replace(' Wy',' Way',$st_name);
$st_name=str_replace(' Ci',' Cir',$st_name);
$st_name=str_replace(' Hw',' Hwy',$st_name);  
$st_name=str_replace(' Bl',' Blvd',$st_name);
$st_name=str_replace(' Te',' Ter',$st_name);
//$st_name=str_replace(' Hollow',' Holw',$st_name);
$st_name=str_replace(' Py',' Pkwy',$st_name);
$st_name=str_replace('Heintz','Heintz Ct',$st_name);
$st_name=str_replace(' Tl',' Trl',$st_name); 

/* if($st_num=="815")
$st_name=str_replace('Alta Vista','Alta Vis',$st_name);  					


if($st_name=="N Cabrillo Hwy")
{

$st_name="cabrillo Hwy N";
}

if($st_num=="17500")
{
$st_name=str_replace("S Cabrillo Hwy","Cabrillo Hwy S",$st_name);  					

}
if($st_name=='skyline Blvd' && $st_num=='18400')
{
$st_num="1840";
}

if($st_name=="Lombardy Way" && $st_num=="622")
{
$st_num="622";
$st_name="Lombardy Wy";
}
if($st_num=="2")
{
//$st_name=str_replace("S Cabrillo Hwy","Cabrillo Hwy S",$st_name);  					
$st_num="20";

}

if($st_name=='Vallemar St' && $st_num=='2010')
{
$st_name="Vallemar";
} */

$sql = "SELECT   * FROM PublicFactsData  WHERE  StreetName='$st_name' AND StreetNumber='$st_num' LIMIT 1";
$retval=mysql_query($sql);

} 
//echo  "The Query is: $sql ";

//echo  "The Query is: <b> <span style='color:blue; font-size:15px;'> $sql  </span> </b>"."         and result is found as : ". mysql_num_rows($retval)." <br/>";
while($row=mysql_fetch_array($retval))
{

//if($row['TUF']!='1' && $row['favorites']!='1'  && $row['Dead']!='1')

if($row['TUF']!='1' && $row['Dead']!='1')
{

$rss=1;		
$lastSpacePosition = strrpos($row['Site']," ");
$new=substr($row['Site'],0,$lastSpacePosition);
if($rss==1)
{
$link=strip_tags($address).strip_tags($city);
$link=strip_tags($address).strip_tags($city);

if(strpos($row['LandUse'],'SINGLE') !==FALSE)
{
$cl="SFR";
}
elseif(strpos($row['LandUse'],'MUL') !==FALSE)
{
$cl="MULR";
}
elseif(strpos($row['LandUse'],'RES') !==FALSE)
{
$cl="RES";
}
elseif(strpos($row['LandUse'],'TOWNHOUSE') !==FALSE)
{
$cl="TWN";
}
else
{
$cl="";
}
if($row['Dead']==1)
{
$r=true;
}
else
{
$r=false;
}
if($row['TUF']==1)
{
$tuf=true;
}
else
{
$tuf=false;
}
if($row['favorites']==1)
{
$fav=true;
}
else
{
$fav=false;
}
echo " <tr onclick='myfunction(this)'>";

if(strpos($_SERVER['REQUEST_URI'],'idx-q-ListingStatuses=Active')!==FALSE)
{
echo "	<td> Active </td> ";
?>
<input type="hidden" id="status_<?php echo $jkp;?>" value="<?php echo"Active" ;?>"> 

<?php
}
elseif(strpos($_SERVER['REQUEST_URI'],'idx-q-ListingStatuses=sold')!==FALSE)
{
echo "	<td> Sold  </td> ";
}

else
{
echo "	<td>  $statuss </td> ";
}        
echo "  <td> $cl   </td><td>";
?>
<input type="hidden" id="cl_<?php echo $jkp;?>" value="<?php echo"$cl" ;?>"> 
<a href='http://menloathertonrealty.com<?php echo $mainlink;?>' target='_blank'> <?php echo $mls;?>
</a>
<input type="hidden" id="mls_<?php echo $jkp;?>" value="<?php echo "http://menloathertonrealty.com$mainlink" ;?>"> 
<?php echo "  </td>";
?> 
<?php echo "<td> ". $st_num ." ".$stnames."</td>"; ?>


</td>
<?php
$city=str_replace(' CA','',$city);
$mcity=$city;
$str=strip_tags($mcity);
$one=$str;
$final=explode(' ',$str);
$first=ord($final[0]);
$f=chr($first);
$second=ord($final[1]);
$s=chr($second);
$str=strtoupper($str);
if(strcmp($str,"FREMONT")==0)
{
$citys="FRE"; 
$path="";
}
elseif(strcmp($str,"HAYWARD")==0)
{
$citys="HAY";

}elseif(strcmp($str,"NEWARK")==0)
{
$citys="NWK";
}elseif(strcmp($str,"CASTRO VALLEY")==0)
{
$citys="CAS";
}elseif(strcmp($str,"SAN LEANDRO")==0)
{
$citys="SLD";
}elseif(strcmp($str,"SAN LORENZO")==0)
{
$citys="SLZ";
}elseif(strcmp($str,"UNION CITY")==0)
{
$citys="UC";
}elseif(strcmp($str,"SAN FRANCISCO")==0)
{
$citys="SF";
}elseif(strcmp($str,"ATHERTON")==0)
{
$citys="AT";
}elseif(strcmp($str,"BELMONT")==0)
{
$citys="BEL";
}            elseif(strcmp($str,"FOSTER CITY")==0)
{
$citys="FC";
}
elseif(strcmp($str,"EL GRANADA")==0)
{
$citys="ELG";
}
elseif(strcmp($str,"EAST PALO ALTO")==0)
{
$citys="EP";
}
elseif(strcmp($str,"DALY CITY")==0)
{
$citys="DC";
}
elseif(strcmp($str,"COLMA")==0)
{
$citys="COL";
}

elseif(strcmp($str,"BURLINGAME")==0)
{
$citys="BUR";
}

elseif(strcmp($str,"BRISBANE")==0)
{
$citys="BRI";
}

elseif(strcmp($str,"HALF MOON BAY")==0)
{
$citys="HMB";
}

elseif(strcmp($str,"HILLSBOROUGH")==0)
{
$citys="HIL";
}

elseif(strcmp($str,"LA HONDA")==0)
{
$citys="LH";
}

elseif(strcmp($str,"LOMA MAR")==0)
{
$citys="LM";
}
elseif(strcmp($str,"MENLO PARK")==0)
{
$citys="MP";
}

elseif(strcmp($str,"MILLBRAE")==0)
{
$citys="MIL";
}

elseif(strcmp($str,"MONTARA")==0)
{
$citys="MON";
}

elseif(strcmp($str,"MOSS BEACH")==0)
{
$citys="MOS";
}

elseif(strcmp($str,"PACIFICA")==0)
{
$citys="PAC";
}

elseif(strcmp($str,"PESCADERO")==0)
{
$citys="PES";
}

elseif(strcmp($str,"PORTOLA VALLEY")==0)
{
$citys="PV";
}

elseif(strcmp($str,"REDWOOD CITY")==0)
{
$citys="RC";
}

elseif(strcmp($str,"REDWOOD SHORES")==0)
{
$citys="RS";
}

elseif(strcmp($str,"SAN BRUNO")==0)
{
$citys="SB";
}
elseif(strcmp($str,"SAN CARLOS")==0)
{
$citys="SCL";
}
elseif(strcmp($str,"SAN GREGORIO")==0){ $citys="SGR"; }
elseif(strcmp($str,"SAN MATEO")==0){ $citys="SM"; }
elseif(strcmp($str,"SUNNYVALE")==0){ $citys="SU"; }
elseif(strcmp($str,"SARATOGA")==0){ $citys="SA"; }
elseif(strcmp($str,"SANTA CLARA")==0){ $citys="SC"; }
elseif(strcmp($str,"SAN MARTIN")==0){ $citys="SM"; }
elseif(strcmp($str,"SAN JOSE")==0){ $citys="SJ"; }
elseif(strcmp($str,"PALO ALTO")==0){ $citys="PA"; }
elseif(strcmp($str,"MOUNTAIN VIEW")==0){ $citys="MV"; }
elseif(strcmp($str,"MORGAN HILL")==0){ $citys="MH"; }
elseif(strcmp($str,"MILPITAS")==0){ $citys="MI"; }
elseif(strcmp($str,"LOS ALTOS HILLS")==0){ $citys="LAH"; }
elseif(strcmp($str,"LOS ALTOS")==0){ $citys="LA"; }
elseif(strcmp($str,"LOS GATOS MOUNTAINS")==0){ $citys="LGM"; }
elseif(strcmp($str,"LOS GATOS")==0){ $citys="LG"; }
elseif(strcmp($str,"GILROY")==0){ $citys="GY"; }
elseif(strcmp($str,"CUPERTINO")==0){ $citys="CU"; }
elseif(strcmp($str,"CAMPBELL")==0){ $citys="CA"; }
elseif(strcmp($str,"WOODSIDE")==0){ $citys="WOD"; }
elseif(strcmp($str,"SOUTH SAN FRANCISCO")==0){ $citys="SSF"; }
elseif(strcmp($str,"APTOS")==0) { $citys="APT";} 
elseif(strcmp($str,"CAPITOLA")==0) { $citys= "CAP"; }
elseif(strcmp($str,"EAST+OF+HIWAY+17")==0) {$citys= "EST"; }
elseif(strcmp($str,"EAST+SANTA+CRUZ+COUNTY")==0) { $citys="SZE"; }
elseif(strcmp($str,"LA+SELVA+BEACH")==0) { $citys="LSB";}
elseif(strcmp($str,"LOS+GATOS+MTNS")==0) { $citys="LGM";}
elseif(strcmp($str,"RIO+DEL+MAR/SEASCAPE")==0) { $citys="RIO";}
elseif(strcmp($str,"SAN+LORENZO+VALLEY")==0) { $citys= "SLV";}
elseif(strcmp($str,"SANTA+CRUZ")==0) { $citys="SZ";}
elseif(strcmp($str,"SCOTTS+VALLEY")==0) { $citys="SV";}
elseif(strcmp($str,"SEACLIFF")==0) { $citys="SCF";}
elseif(strcmp($str,"SOQUEL")==0) { $citys= "SOQ"; }

else
{
$citys=$one;
}
?>
<input type="hidden" id="ctyshortcut_<?php echo $jkp;?>" value="<?php echo"$citys" ;?>"> 
<?php
$parts=$row['Parcel'];
$part=explode("-",$parts);
settype($part[0], "string");
settype($part[1], "string");
settype($part[2], "string");
$y="20".date('y');
$age=$y-$row['YearBuilt'];
if($row['YearBuilt']==""|| $row['YearBuilt']==NULL)
{
$age="N/A";
}
?> <td>  <?php echo $citys;?> </td> <?php	
$legal=$row['Legal'];?>
<input type="hidden" id="legal_<?php echo $jkp;?>" value="<?php echo"$legal" ;?>"> 
<?php
$rest = substr($legal, 0, 25); 	$a="<td class=' inlineEdit'  style='font-size:10px;' id='".$row['Parcel']."' >".$rest."</td>";
echo "<td class=' inlineEdit' id='".$row['Parcel']."'>".$rest." </td>";



if(strcmp($str,"FREMONT")==0)
{

$citys="FRE";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/Alameda/$code.pdf";
}
elseif(strcmp($str,"HAYWARD")==0)
{
$citys="HAY";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/Alameda/$code.pdf";
}elseif(strcmp($str,"NEWARK")==0)
{
$citys="NWK";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/Alameda/$code.pdf";
}elseif(strcmp($str,"CASTRO VALLEY")==0)
{
$citys="CAS";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/Alameda/$code.pdf";
}elseif(strcmp($str,"SAN LEANDRO")==0)
{
$citys="SLD";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/Alameda/$code.pdf";
}elseif(strcmp($str,"SAN LORENZO")==0)
{
$citys="SLZ";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/Alameda/$code.pdf";
}elseif(strcmp($str,"UNION CITY")==0)
{
$citys="UC";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/Alameda/$code.pdf";
}
elseif(strcmp($str,"SAN FRANCISCO")==0)
{
$citys="SF";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanFrancisco/$code.pdf";
}



elseif(strcmp($str,"ATHERTON")==0)
{
$citys="AT";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}elseif(strcmp($str,"BELMONT")==0)
{
$citys="BEL";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	
}
else
{
$code=substr($apn,0,6);		}	

$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";
}
elseif(strcmp($str,"MONTE SERENO")==0)
{
$citys="BEL";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);       }
else
{

$code=substr($apn,0,6);	

}	$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";

}

elseif(strcmp($str,"FOSTER CITY")==0)
{
$citys="FC";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}	$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}
elseif(strcmp($str,"EL GRANADA")==0)
{
$citys="ELG";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}
elseif(strcmp($str,"EAST PALO ALTO")==0)
{
$citys="EP";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}
elseif(strcmp($str,"DALY CITY")==0)
{
$citys="DC";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}
elseif(strcmp($str,"COLMA")==0)
{
$citys="COL";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];        if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	
}
else{
$code=substr($apn,0,6);	
}	
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";
}

elseif(strcmp($str,"BURLINGAME")==0)
{
$citys="BUR";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}	$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}

elseif(strcmp($str,"BRISBANE")==0)
{
$citys="BRI";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}	$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}

elseif(strcmp($str,"HALF MOON BAY")==0)
{
$citys="HMB";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}

elseif(strcmp($str,"HILLSBOROUGH")==0)
{
$citys="HIL";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}	$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}

elseif(strcmp($str,"LA HONDA")==0)
{
$citys="LH";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}

elseif(strcmp($str,"LOMA MAR")==0)
{
$citys="LM";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}
elseif(strcmp($str,"MENLO PARK")==0)
{
$citys="MP";

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}	$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";
}

elseif(strcmp($str,"MILLBRAE")==0)
{
$citys="MIL";

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";
}

elseif(strcmp($str,"MONTARA")==0)
{
$citys="MON";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}

elseif(strcmp($str,"MOSS BEACH")==0)
{
$citys="MOS";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}

elseif(strcmp($str,"PACIFICA")==0)
{
$citys="PAC";

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";
}

elseif(strcmp($str,"PESCADERO")==0)
{
$citys="PES";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}
elseif(strcmp($str,"PORTOLA VALLEY")==0)
{
$citys="PV";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";
}

elseif(strcmp($str,"REDWOOD CITY")==0)
{
$citys="RC";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	
}
else
{

$code=substr($apn,0,6);	

}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";
}

elseif(strcmp($str,"REDWOOD SHORES")==0)
{
$citys="RS";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}

elseif(strcmp($str,"SAN BRUNO")==0)
{
$citys="SB";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
$code=substr($apn,1,5);

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);   }
else
{ $code=substr($apn,0,6);
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}
elseif(strcmp($str,"SAN CARLOS")==0)
{
$citys="SCL";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";
}
elseif(strcmp($str,"SAN GREGORIO")==0){ $citys="SGR";  

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";

}
elseif(strcmp($str,"SAN MATEO")==0){ $citys="SM"; 
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);
}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";
}
elseif(strcmp($str,"SUNNYVALE")==0){ $citys="SU";

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";
}
elseif(strcmp($str,"SARATOGA")==0){ $citys="SA";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";

}
elseif(strcmp($str,"SANTA CLARA")==0){ $citys="SC";         $city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";

}
elseif(strcmp($str,"SAN MARTIN")==0){ $citys="SM";  
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";

}
elseif(strcmp($str,"SAN JOSE")==0){ $citys="SJ"; 
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";

}
elseif(strcmp($str,"PALO ALTO")==0){ $citys="PA"; 

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);
}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";
}
elseif(strcmp($str,"MOUNTAIN VIEW")==0){ $citys="MV";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);
}
else
{
$code=substr($apn,0,6);	

}	$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";
}
elseif(strcmp($str,"MORGAN HILL")==0){ $citys="MH";   
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);
}
else
{
$code=substr($apn,0,6);	

}	$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";


}
elseif(strcmp($str,"MILPITAS")==0){ $citys="MI";  

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);
}
else
{
$code=substr($apn,0,6);	

}	$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";


}
elseif(strcmp($str,"LOS ALTOS")==0){ $citys="LA";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	
}
else
{
$code=substr($apn,0,6);	
}	$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf"; }
elseif(strcmp($str,"LOS ALTOS HILLS")==0){ $citys="LAH"; 
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];
if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}	$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";
}
elseif(strcmp($str,"LOS GATOS")==0){ $citys="LG";

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	
}
else
{

$code=substr($apn,0,6);	

}	$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";

}
elseif(strcmp($str,"LOS GATOS MOUNTAINS")==0){ $citys="LGM";   
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";
}
elseif(strcmp($str,"GILROY")==0){ $citys="GY"; 
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";


}
elseif(strcmp($str,"CUPERTINO")==0){ $citys="CU";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	        }
else
{

$code=substr($apn,0,6);	

}	$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf"; }
elseif(strcmp($str,"CAMPBELL")==0){ $citys="CA";                $city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	
}
else
{
$code=substr($apn,0,6);	
}	
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaClara/$code.pdf";
}
elseif(strcmp($str,"WOODSIDE")==0){ $citys="WOD";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";	
}
elseif(strcmp($str,"SOUTH SAN FRANCISCO")==0){

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SanMateo/$code.pdf";
}
elseif(strcmp($str,"APTOS")==0) { $citys="APT";


$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaCruz/$code.pdf";






} 
elseif(strcmp($str,"CAPITOLA")==0) { $citys= "CAP"; 

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaCruz/$code.pdf";








}
elseif(strcmp($str,"EAST+OF+HIWAY+17")==0) {$citys= "EST"; 

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaCruz/$code.pdf";


}
elseif(strcmp($str,"EAST+SANTA+CRUZ+COUNTY")==0) { $citys="SZE";

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaCruz/$code.pdf";

}
elseif(strcmp($str,"LA+SELVA+BEACH")==0) { $citys="LSB";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaCruz/$code.pdf";



}
elseif(strcmp($str,"LOS+GATOS+MTNS")==0) { $citys="LGM";

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaCruz/$code.pdf";

}
elseif(strcmp($str,"RIO+DEL+MAR/SEASCAPE")==0) { $citys="RIO";
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaCruz/$code.pdf";

}
elseif(strcmp($str,"SAN+LORENZO+VALLEY")==0) { $citys= "SLV";

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaCruz/$code.pdf";

}
elseif(strcmp($str,"SANTA+CRUZ")==0) { $citys="SZ";

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaCruz/$code.pdf";

}
elseif(strcmp($str,"SCOTTS+VALLEY")==0) { $citys="SV";

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaCruz/$code.pdf";


}
elseif(strcmp($str,"SEACLIFF")==0) { $citys="SCF";

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaCruz/$code.pdf";


}
elseif(strcmp($str,"SOQUEL")==0) { $citys= "SOQ";

$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
$apn=$row['Parcel'];

if(substr($apn,0,1)=="0")
{
$code=substr($apn,1,5);	

}
else
{
$code=substr($apn,0,6);	
}
$path="http://menlo-athertonrealty.com/propscan/MAPS/SantaCruz/$code.pdf";


}else
{  $path="#"; }


?>


<td> <span  style="color:blue;" onClick="open('<?php echo "$path";?>','mywindow','width=1920,height=1200')" >   <?php echo $row['Parcel'];?>   </span> </td>
<td> <a  class="button small green rounded"  OnClick="window.open('<?php echo "http://www.menloathertonrealty.com/ded/?add=".$row['Parcel'];?>')" > All</a> </td>


<?php

if($r==1)
{ ?>
<td> &nbsp;
<input name="chk" checked="checked" type="checkbox" id="chks_<?php echo $jkp;?>" value="<?php echo $part[0]."-".$part[1]."-".$part[2]; ?>" onclick="chkit(<?php echo $jkp; ?>,<?php echo $jkp;?>,this.checked);" />   </td>
<input type="hidden" id="dead_<?php echo $jkp;?>" value="<?php echo"checked" ;?>"> 
<?php
}
else
{ ?>
<td> &nbsp;  <input name="chk" type="checkbox" id="chks_<?php echo $jkp;?>" value="<?php echo $part[0]."-".$part[1]."-".$part[2]; ?>" onclick="chkit(<?php echo $jkp; ?>,<?php echo $jkp;?>,this.checked);" /> </td>
<input type="hidden" id="dead_<?php echo $jkp;?>" value="<?php echo"unchecked" ;?>"> 
<?php  }  
?>
<input type="hidden" id="price_<?php echo $jkp;?>" value="<?php echo strip_tags($price); ;?>"> 
<td> 

<?php 
$thi=false;

if($path=="#") {    ?>

<span class="button small green rounded">N/A </span>  </td> 	 

<?php } else { 




$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$path);
// don't download content
curl_setopt($ch, CURLOPT_NOBODY, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
if(curl_exec($ch)!==FALSE)
{ ?>
<span  class="button small blue rounded"  onClick="open('<?php echo "$path";?>','mywindow','width=1920,height=1200')" >   <img src="http://menloathertonrealty.com/wp-content/themes/agentpress-two/images/pdf_icon.gif"> </span>  </td> 	 

<?php 
}
else
{ ?>
<span class="button small green rounded">N/A </span>  </td> 	

<?php }
$thi=true;

?>


<?php } ?>
<input type="hidden" id="pdf_<?php echo $jkp;?>" value="<?php echo"$path" ;?>"> 
<?php
echo "<td>".$price."</td>";?>
<td>

<input type="hidden" id="lot_<?php echo $jkp;?>" value="<?php echo"$Lot" ;?>"> 
<?php $Lot=strip_tags($Lot);

$main=explode(',',$Lot);
echo $Lo;?>
</td> 
<input type="hidden" id="home_<?php echo $jkp;?>" value="<?php echo strip_tags($Home);?>"> 

<?php echo "
<td>  $Home </td>
<td id='resul'> </td>
<td id='result'> $age  </td>";
?>
<input type="hidden" id="age_<?php echo $jkp;?>" value="<?php echo"$age" ;?>"> 
<?php
$parts=$row['Parcel'];
$part=explode("-",$parts);
settype($part[0], "string");
settype($part[1], "string");
settype($part[2], "string");
$ki++; 
$tu++;
$fu++;
$deads=$row['Dead'];

?>



<?php $link=strip_tags($address).strip_tags($city);	$z="$mainlink";
$zs=explode("/",$z);
$zp=explode("-",$zs[2]);
$zmap=$zp[2];
$lastSpacePosition = strrpos($zmap, '_');
$test= substr($zmap, 0, $lastSpacePosition);
$final_string=str_replace('_','-',$test);
$final=$final_string."remove";
$zillow="-".str_replace('caremove','CA_rb',$final);

$nt="";
if($row['notes']=="" || $row['notes']==NULL)
{
$nt="&nbsp;";
}
else
{
$nt=$row['Parcel'];

}
$id=$row['Parcel']
?>


<input type="hidden" id="notes_<?php echo $jkp;?>" value="<?php echo $row['notes'] ;?>"> 


<td>
<span class="button small green rounded" OnClick="window.open('<?php echo "http://menloathertonrealty.com/wp-content/themes/agentpress-two/nots.php?add=$id";?>','mywindow','width=490,height=200')" > Notes </span>  </td> 	 

<script>
function f()
{

//alert("Hello");

}
</script>
<td>  <a    class="button small green rounded" href='http://www.zillow.com/homes/<?php echo $zillow;?>' target='_blank'> Zillow</a>  </td>
<input type="hidden" id="zillow_<?php echo $jkp;?>" value="<?php echo "http://www.zillow.com/homes/$zillow;"?>"> 
<input type="hidden" id="gmap_<?php echo $jkp;?>" value="<?php echo "http://maps.google.com/?q=$link California";?>"> 

<td> <a class="button small green rounded" href='http://maps.google.com/?q=<?php echo $link." California";?>' target='_blank'>  Map</a>  </td>
<?php
if($tuf==1)
{ ?>
<td> &nbsp;
<input name="chk" checked="checked" type="checkbox" id="tufs_<?php echo $jkp;?>" value="<?php echo $part[0]."-".$part[1]."-".$part[2]; ?>" onclick="tuf(<?php echo $jkp; ?>,<?php echo $jkp;?>,this.checked);" />   </td>
<input type="hidden" id="tuf_<?php echo $jkp;?>" value="<?php echo"checked" ;?>"> 
<?php
}
else
{ ?>
<td> &nbsp;  <input name="chk" type="checkbox" id="tufs_<?php echo $jkp;?>" value="<?php echo $part[0]."-".$part[1]."-".$part[2]; ?>" onclick="tuf(<?php echo $jkp; ?>,<?php echo $jkp;?>,this.checked);" /> </td>
<input type="hidden" id="tuf_<?php echo $jkp;?>" value="<?php echo"unchecked" ;?>"> 
<?php  }


?>       <?php
if($fav==1)
{ ?>

<td> &nbsp;  <input name="chkfav" checked="checked" type="checkbox" id="favs_<?php echo $fu;?>" value="<?php echo $part[0]."-".$part[1]."-".$part[2]; ?>" onclick="faver(<?php echo $part[0]; ?>,<?php echo $tu;?>,<?php echo $jkp;?>,this.checked);" />   </td>

<?php
}
else
{ ?>
<td> &nbsp; <input name="chkfav" type="checkbox" id="favs_<?php echo $fu;?>" value="<?php echo $part[0]."-".$part[1]."-".$part[2]; ?>" onclick="faver(<?php echo $part[0]; ?>,<?php echo $tu;?>,<?php echo $jkp;?>,this.checked);" /> </td>
<?php
}	
if($thi==true)
{
?>

<script>
//fav(<?php echo $jkp;?>,<?php echo $fu;?>,<?php echo $tu; ?>);
function fav(a,b,c)
{
//  alert(a+" "+b+" "+c);  
var fcheck;
var tufcheck;
var deadchk;
//It is used for to check whether the check box is checked or not
if (document.getElementById('favs_'+b).checked) {
fcheck="1";
//alert(" fav checked");
}
else		{
fcheck="0";
//alert(" fav  not  checked");

}

var jkp=a;
var uii=b;
var field = document.getElementById('favs_'+uii).value;
//alert(field);
var cls  = document.getElementById('cl_'+jkp).value;
var mls = document.getElementById('mls_'+jkp).value;
var legal = document.getElementById('legal_'+jkp).value;
var ctyshortcut = document.getElementById('ctyshortcut_'+jkp).value;
var status = document.getElementById('status_'+jkp).value;
var lot = document.getElementById('lot_'+jkp).value;
var age = document.getElementById('age_'+jkp).value;
var dead = document.getElementById('dead_'+jkp).value;
var pdf = document.getElementById('pdf_'+jkp).value;
var notes = document.getElementById('notes_'+jkp).value;
var  zillow= document.getElementById('zillow_'+jkp).value;
var gmap = document.getElementById('gmap_'+jkp).value;
var fprice=document.getElementById('price_'+jkp).value;
var fhome=document.getElementById('home_'+jkp).value;
// var url = "http://menloathertonrealty.com/tuff/?faverid="+field+"&YandNo="+chk+"&cls="+cls+"&mls="+mls+"&legal="+legal+"&ctyshortcut="+ctyshortcut+"&status="+status+"&lot="+lot+"&age="+age+"&dead="+dead+"&pdf="+pdf+"&notes="+notes+"&zillow="+zillow+"&gmap="+gmap;
var url = "parcel="+field+"&faverid="+fcheck+"&cls="+cls+"&mls="+mls+"&legal="+legal+"&ctyshortcut="+ctyshortcut+"&status="+status+"&lot="+lot+"&age="+age+"&dead="+dead+"&pdf="+pdf+"&notes="+notes+"&zillow="+zillow+"&gmap="+gmap+"&price="+fprice+"&home="+fhome;
//alert(url);
var xmlhttp;
str="inids";
if (str.length==0)
{
document.getElementById("txtHint").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
//alert("success");
//alert(xmlhttp.responseText);
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","http://menloathertonrealty.com/tuff/",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("parcel_apn="+field+"&fvid="+fcheck+"&cls="+cls+"&mls="+mls+"&legal="+legal+"&ctyshortcut="+ctyshortcut+"&status="+status+"&lot="+lot+"&age="+age+"&dead="+dead+"&pdf="+pdf+"&notes="+notes+"&zillow="+zillow+"&gmap="+gmap+"&price="+fprice+"&home="+fhome);

}

</script>
<?php } ?>
<td> N/A </td>
<td> N/A </td>
<td>   <input name="newmail"  type="checkbox" id="newmail_<?php echo $fu;?>" value="<?php echo $part[0]."-".$part[1]."-".$part[2]; ?>" onclick="ne(<?php echo $tu;?>,<?php echo $jkp;?>,this.checked);" />   </td>
<td>   <span id="delete_record" value="<?php echo "$st_name"."~"."$st_num";?>" class="button small green rounded"> Delete </span> <input type="hidden" value="<?php echo "$st_name"."~"."$st_num"."~".$row['CityName'];?>" name="del_val" id="del_val">
</tr>


<?
}
}
$not_in_tbl="yes";

} 



if($not_in_tbl=="no"  && $validated="yes")
{

$insert++;
echo "<tr onclick='myfunction(this)'>";

if(strpos($_SERVER['REQUEST_URI'],'idx-q-ListingStatuses=Active&')!==FALSE)
{
echo "	<td id='resul'>  Active  </td> ";
?>
<input type="hidden" value="Active" id="statusss_<?php echo $insert;?>"/>
<?php
}
elseif(strpos($_SERVER['REQUEST_URI'],'idx-q-ListingStatuses=sold')!==FALSE)
{
echo "	<td> Sold   </td>   ";
?>
<input type="hidden" value="Active" id="statusss_<?php echo $insert;?>"/>
<?php
}
else
{

echo "	<td id='resul'>  </td> ";

}

echo "  <td>  N/A </td> ";?>

<td> <a href='http://menloathertonrealty.com<?php echo $link;?>' target='_blank'> <?php echo $mls; ?> </a>  </td>
<input type="hidden"  id="mlsss_<?php echo $insert;?>" value="<?php echo strip_tags($mls); ?>"/>
<td>   <?php echo strip_tags($address);?> </td>

<?php  $st_no=strip_tags($address);
$st_no=trim($st_no); 
$st=explode(" ",$st_no);
$s_num=$st[0];
$st_name=str_replace($st[0],'',$st_no);


?>
<input type="hidden"  id="stnumss_<?php echo $insert;?>" value="<?php echo $st_num;  ?>" />
<input type="hidden"  id="stnamess_<?php echo $insert;?>" value="<?php echo $st_name; ?>" />

<?php
$city=str_replace(' CA','',$city);
$mcity=$city;
$str=strip_tags($mcity);
$one=$str;
$final=explode(' ',$str);
$first=ord($final[0]);
$f=chr($first);
$second=ord($final[1]);
$s=chr($second);
$str=strtoupper($str);



if(strcmp($str,"FREMONT")==0)
{
$citys="FRE";
}
elseif(strcmp($str,"HAYWARD")==0)
{
$citys="HAY";
}elseif(strcmp($str,"NEWARK")==0)
{
$citys="NWK";
}elseif(strcmp($str,"CASTRO VALLEY")==0)
{
$citys="CAS";
}elseif(strcmp($str,"SAN LEANDRO")==0)
{
$citys="SLD";
}elseif(strcmp($str,"SAN LORENZO")==0)
{
$citys="SLZ";
}elseif(strcmp($str,"UNION CITY")==0)
{
$citys="UC";
}elseif(strcmp($str,"SAN FRANCISCO")==0)
{
$citys="SF";
}elseif(strcmp($str,"ATHERTON")==0)
{
$citys="AT";
}elseif(strcmp($str,"BELMONT")==0)
{
$citys="BEL";
}            elseif(strcmp($str,"FOSTER CITY")==0)
{
$citys="FC";
}
elseif(strcmp($str,"EL GRANADA")==0)
{
$citys="ELG";
}
elseif(strcmp($str,"EAST PALO ALTO")==0)
{
$citys="EP";
}
elseif(strcmp($str,"DALY CITY")==0)
{
$citys="DC";
}
elseif(strcmp($str,"COLMA")==0)
{
$citys="COL";
}

elseif(strcmp($str,"BURLINGAME")==0)
{
$citys="BUR";
}

elseif(strcmp($str,"BRISBANE")==0)
{
$citys="BRI";
}

elseif(strcmp($str,"HALF MOON BAY")==0)
{
$citys="HMB";
}

elseif(strcmp($str,"HILLSBOROUGH")==0)
{
$citys="HIL";
}

elseif(strcmp($str,"LA HONDA")==0)
{
$citys="LH";
}

elseif(strcmp($str,"LOMA MAR")==0)
{
$citys="LM";
}
elseif(strcmp($str,"MENLO PARK")==0)
{
$citys="MP";
}

elseif(strcmp($str,"MILLBRAE")==0)
{
$citys="MIL";
}

elseif(strcmp($str,"MONTARA")==0)
{
$citys="MON";
}

elseif(strcmp($str,"MOSS BEACH")==0)
{
$citys="MOS";
}

elseif(strcmp($str,"PACIFICA")==0)
{
$citys="PAC";
}

elseif(strcmp($str,"PESCADERO")==0)
{
$citys="PES";
}

elseif(strcmp($str,"PORTOLA VALLEY")==0)
{
$citys="PV";
}

elseif(strcmp($str,"REDWOOD CITY")==0)
{
$citys="RC";
}

elseif(strcmp($str,"REDWOOD SHORES")==0)
{
$citys="RS";
}

elseif(strcmp($str,"SAN BRUNO")==0)
{
$citys="SB";
}
elseif(strcmp($str,"SAN CARLOS")==0)
{
$citys="SCL";
}
elseif(strcmp($str,"SAN GREGORIO")==0){ $citys="SGR"; }
elseif(strcmp($str,"SAN MATEO")==0){ $citys="SM"; }
elseif(strcmp($str,"SUNNYVALE")==0){ $citys="SU"; }
elseif(strcmp($str,"SARATOGA")==0){ $citys="SA"; }
elseif(strcmp($str,"SANTA CLARA")==0){ $citys="SC"; }
elseif(strcmp($str,"SAN MARTIN")==0){ $citys="SM"; }
elseif(strcmp($str,"SAN JOSE")==0){ $citys="SJ"; }
elseif(strcmp($str,"PALO ALTO")==0){ $citys="PA"; }
elseif(strcmp($str,"MOUNTAIN VIEW")==0){ $citys="MV"; }
elseif(strcmp($str,"MORGAN HILL")==0){ $citys="MH"; }
elseif(strcmp($str,"MILPITAS")==0){ $citys="MI"; }
elseif(strcmp($str,"LOS ALTOS")==0){ $citys="LA"; }
elseif(strcmp($str,"LOS ALTOS HILLS")==0){ $citys="LAH"; }
elseif(strcmp($str,"LOS GATOS")==0){ $citys="LG"; }
elseif(strcmp($str,"LOS GATOS MOUNTAINS")==0){ $citys="LGM"; }
elseif(strcmp($str,"GILROY")==0){ $citys="GY"; }
elseif(strcmp($str,"CUPERTINO")==0){ $citys="CU"; }
elseif(strcmp($str,"CAMPBELL")==0){ $citys="CA"; }
elseif(strcmp($str,"WOODSIDE")==0){ $citys="WOD"; }
elseif(strcmp($str,"SOUTH SAN FRANCISCO")==0){ $citys="SSF"; }
elseif(strcmp($str,"APTOS")==0) { $citys="APT";} 
elseif(strcmp($str,"CAPITOLA")==0) { $citys= "CAP"; }
elseif(strcmp($str,"EAST+OF+HIWAY+17")==0) {$citys= "EST"; }
elseif(strcmp($str,"EAST+SANTA+CRUZ+COUNTY")==0) { $citys="SZE"; }
elseif(strcmp($str,"LA+SELVA+BEACH")==0) { $citys="LSB";}
elseif(strcmp($str,"LOS+GATOS+MTNS")==0) { $citys="LGM";}
elseif(strcmp($str,"RIO+DEL+MAR/SEASCAPE")==0) { $citys="RIO";}
elseif(strcmp($str,"SAN+LORENZO+VALLEY")==0) { $citys= "SLV";}
elseif(strcmp($str,"SANTA+CRUZ")==0) { $citys="SZ";}
elseif(strcmp($str,"SCOTTS+VALLEY")==0) { $citys="SV";}
elseif(strcmp($str,"SEACLIFF")==0) { $citys="SCF";}
elseif(strcmp($str,"SOQUEL")==0) { $citys= "SOQ"; }
else
{
$citys=$one;
}



?>

<td>  <?php echo $citys;?> </td> 






<input type="hidden"  id="cityss_<?php echo $insert;?>" Value="<?php echo $citys;?>" /><?php
echo "<td>  N/A  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  </td>";
echo "<td> N/A  </td>";
echo "<td> N/A  </td>";
echo "<td> N/A </td>";	
echo "<td> N/A </td>";
echo "<td> ".$price."  </td>";
?>
<input type="hidden"  id="pricess_<?php echo $insert;?>" value="<?php echo strip_tags($price);?>"/>

<?php

?> <td><?php $Lot=strip_tags($Lot);
$main=explode(',',$Lot);
echo $Lo;?>
</td> 
<input type="hidden"  id="lotss_<?php echo $insert;?>"  value="<?php echo $Lo; ?>"/>
<?php
echo "
<td>  $Home  </td> ";
?>

<input type="hidden"  id="homess_<?php echo $insert;?>"  value="<?php echo strip_tags($Home); ?>"/>

<td id='result'>  </td>
<td id='results'> </td> 
<td> N/A   </td>
<?php
$city_string=str_replace(' CA','',$cityone);
$last=strrpos($city_string," ");
$text=substr($city_string,0,$last);
?>  <?PHP
$link=strip_tags($address).strip_tags($city);	
$z="$mainlink";
$zs=explode("/",$z);
$zp=explode("-",$zs[2]);
$zmap=$zp[2];
$lastSpacePosition = strrpos($zmap, '_');
$test= substr($zmap, 0, $lastSpacePosition);
$final_string=str_replace('_','-',$test);
$final=$final_string."remove";
$zillow="-".str_replace('caremove','CA_rb',$final);		?>

<td> <a    class="button small green rounded" href='http://www.zillow.com/homes/<?php echo $zillow;?>' target='_blank'> Zillow</a>  </td>
<input type="hidden"  id="zillowss_<?php echo $insert;?>"  value="http://www.zillow.com/homes/<?php echo $zillow;?>"/>

<td> <a class="button small green rounded" href='http://maps.google.com/?q=<?php echo $link." California";?>' target='_blank'>  Map</a>  </td>
<input type="hidden"  id="gmapss_<?php echo $insert;?>"  value="http://maps.google.com/?q=<?php echo $link." California";?>"/>

<td> N/A </td>

<td> N/A </td>


<td> <span class="button small green rounded" onclick="insert(<?php echo $insert;?>);" >Add</span></td>    

<?php

$str=$citys;
if(strcmp($str,"FRE")==0)
{
$citys="FREMONT";
}
elseif(strcmp($str,"HAY")==0)
{
$citys="HAYWARD";
}elseif(strcmp($str,"NWK")==0)
{
$citys="NEWARK";
}elseif(strcmp($str,"CAS")==0)
{
$citys="CASTRO VALLEY";
}elseif(strcmp($str,"SLD")==0)
{
$citys="SAN LEANDRO";
}elseif(strcmp($str,"SLZ")==0)
{
$citys="SAN LORENZO";
}elseif(strcmp($str,"UC")==0)
{
$citys="UNION CITY";
}elseif(strcmp($str,"SF")==0)
{
$citys="SAN FRANCISCO";
}elseif(strcmp($str,"AT")==0)
{
$citys="ATHERTON";
}elseif(strcmp($str,"BEL")==0)
{
$citys="BELMONT";
}            elseif(strcmp($str,"FC")==0)
{
$citys="FOSTER CITY";
}
elseif(strcmp($str,"ELG")==0)
{
$citys="EL GRANADA";
}
elseif(strcmp($str,"EP")==0)
{
$citys="EAST PALO ALTO";
}
elseif(strcmp($str,"DC")==0)
{
$citys="DALY CITY";
}
elseif(strcmp($str,"COL")==0)
{
$citys="COLMA";
}

elseif(strcmp($str,"BUR")==0)
{
$citys="BURLINGAME";
}

elseif(strcmp($str,"BRI")==0)
{
$citys="BRISBANE";
}

elseif(strcmp($str,"HMB")==0)
{
$citys="HALF MOON BAY";
}

elseif(strcmp($str,"HIL")==0)
{
$citys="HILLSBOROUGH";
}

elseif(strcmp($str,"LH")==0)
{
$citys="LA HONDA";
}

elseif(strcmp($str,"LM")==0)
{
$citys="LOMA MAR";
}
elseif(strcmp($str,"MP")==0)
{
$citys="MENLO PARK";
}

elseif(strcmp($str,"MIL")==0)
{
$citys="MILLBRAE";
}

elseif(strcmp($str,"MON")==0)
{
$citys="MONTARA";
}

elseif(strcmp($str,"MOS")==0)
{
$citys="MOSS BEACH";
}

elseif(strcmp($str,"PAC")==0)
{
$citys="PACIFICA";
}

elseif(strcmp($str,"PES")==0)
{
$citys="PESCADERO";
}

elseif(strcmp($str,"PV")==0)
{
$citys="PORTOLA VALLEY";
}

elseif(strcmp($str,"RC")==0)
{
$citys="REDWOOD CITY";
}

elseif(strcmp($str,"RS")==0)
{
$citys="REDWOOD SHORES";
}

elseif(strcmp($str,"SB")==0)
{
$citys="SAN BRUNO";
}
elseif(strcmp($str,"SCL")==0)
{
$citys="SAN CARLOS";
}
elseif(strcmp($str,"SGR")==0){ $citys="SGRSAN GREGORIO"; }
elseif(strcmp($str,"SM")==0){ $citys="SMSAN MATEO"; }
elseif(strcmp($str,"SU")==0){ $citys="SUNNYVALE"; }
elseif(strcmp($str,"SA")==0){ $citys="SARATOGA"; }
elseif(strcmp($str,"SC")==0){ $citys="SANTA CLARA"; }
elseif(strcmp($str,"SM")==0){ $citys="SAN MARTIN"; }
elseif(strcmp($str,"SJ")==0){ $citys="SAN JOSE"; }
elseif(strcmp($str,"PA")==0){ $citys="PALO ALTO"; }
elseif(strcmp($str,"MV")==0){ $citys="MOUNTAIN VIEW"; }
elseif(strcmp($str,"MH")==0){ $citys="MORGAN HILL"; }
elseif(strcmp($str,"MI")==0){ $citys="MILPITAS"; }
elseif(strcmp($str,"LA")==0){ $citys="LOS ALTOS"; }
elseif(strcmp($str,"LAH")==0){ $citys="LOS ALTOS HILLS"; }
elseif(strcmp($str,"LG")==0){ $citys="LOS GATOS"; }
elseif(strcmp($str,"LGM")==0){ $citys="LOS GATOS MOUNTAINS"; }
elseif(strcmp($str,"GY")==0){ $citys="GILROY"; }
elseif(strcmp($str,"CU")==0){ $citys="CUPERTINO"; }
elseif(strcmp($str,"CA")==0){ $citys="CAMPBELL"; }
elseif(strcmp($str,"WOD")==0){ $citys="WOODSIDE"; }
elseif(strcmp($str,"SSF")==0){ $citys="SOUTH SAN FRANCISCO"; }
elseif(strcmp($str,"APT")==0) { $citys="APTOS";} 
elseif(strcmp($str,"CAP")==0) { $citys= "CAPITOLA"; }
elseif(strcmp($str,"EST")==0) {$citys= "EAST OF HIWAY 17"; }
elseif(strcmp($str,"SZE")==0) { $citys="EAST SANTA CRUZ COUNTY"; }
elseif(strcmp($str,"LSB")==0) { $citys="LA SELVA BEACH";}
elseif(strcmp($str,"LGM")==0) { $citys="LOS GATOS MTNS";}
elseif(strcmp($str,"RIO")==0) { $citys="RIO DEL MAR/SEASCAPE";}
elseif(strcmp($str,"SLV")==0) { $citys= "SAN LORENZO VALLEY";}
elseif(strcmp($str,"SZ")==0) { $citys="SANTA CRUZ";}
elseif(strcmp($str,"SV")==0) { $citys="SCOTTS VALLEY";}
elseif(strcmp($str,"SCF")==0) { $citys="SEACLIFF";}
elseif(strcmp($str,"SOQ")==0) { $citys= "SOQUEL"; }
else
{
$citys="";
}
?>
<td> <a href="http://menloathertonrealty.com/property_check/?st_num=<?php echo $st_num."-".$st_name."-".$citys; ?>" class="button small green rounded" target="_blank">Check</a></td> 
<td> N/A </td>
<td> N/A </td>

  </tr> 
<?php  
$citys="";
      }  
}
}
elseif($lots=="false"){

}  
elseif($citys!=$one && $filter=="sssssnotfiltersssssssssssssssss"){  }
else { }
}//end else tag
} //End Li tag
} //End foeach ol tagecho "</tbody> </table> ";

} //End before post content function
function agentpress_homse_loop_helper() {

if ( is_active_sidebar( 'slider' ) || is_active_sidebar( 'property-search' ) ) {

echo '<div class="featured-top">';

echo '<div class="slider">';
dynamic_sidebar( 'slider' );
echo '</div><!-- end .slider -->';

echo '<div class="property-quick-search">';
dynamic_sidebar( 'property-search' );
echo '</div><!-- end .property-quick-search -->';

echo '</div><!-- end .featured-top -->';	

}

if ( is_active_sidebar( 'welcome' ) ) {
echo '<div class="welcome">';
genesis_structural_wrap( 'welcome' );
dynamic_sidebar( 'welcome' );
genesis_structural_wrap( 'welcome', 'close');
echo '</div><!-- end .welcome -->';
}

if ( is_active_sidebar( 'properties' ) ) {
echo '<div class="properties">';
dynamic_sidebar( 'properties' );
echo '</div><!-- end .properties -->';
}		

if ( is_active_sidebar( 'communities' ) ) {
echo '<div class="communities">';
echo '<h4>' . __( 'Communities', 'agentpress' ) . '</h4>';
dynamic_sidebar( 'communities' );
echo '</div><!-- end .communities -->';
}

if ( is_active_sidebar( 'featured-bottom-left' ) || is_active_sidebar( 'featured-bottom-right' ) ) {

echo '<div class="featured-bottom">';

echo '<div class="featured-bottom-left">';
dynamic_sidebar( 'featured-bottom-left' );
echo '</div><!-- end .featured-bottom-left -->';

echo '<div class="featured-bottom-right">';
dynamic_sidebar( 'featured-bottom-right' );
echo '</div><!-- end .featured-bottom-right -->';

echo '</div><!-- end .featured-bottom -->';	

}
}	 
genesis();  
}
else
{ 
genesis();
}
?>
