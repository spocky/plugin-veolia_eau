<?php
/**
 *
 */

require_once './veolia_eauMockJeedom.class.php';
require_once '../core/class/veolia_eau_process.class.php' ;


// Unit tests //
//class veoliaTest extends PHPUnit_Framework_TestCase {
  //public function test_secure_touch(){
  //    $this->assertNull(veolia_eau::secure_touch("sdetgFSFD"));
  //    $this->assertEquals(1,file_exists( "sdetgFSFD" ));
      //log::add('veolia_eau', 'debug', 'PHPUnit_Framework_TestCase');

  //}
  //public function test_getConso(){
  //  $this->assertNull(veolia_eau::getConso2(TRUE));
//  }
//}
$instanceVeolia = new veolia_eau;
$instanceVeolia->setConfiguration('last',"2018-03-01");
$instanceVeolia->setConfiguration('mock_date',"2018-03-07");
$instanceVeolia->setConfiguration('mock_file',"veolia_sudest_data/veolia_html_3March.htm");
$instanceVeolia->displayConfig();
$instanceVeolia->getConso(2);

// Test avec l access au site Veolia - Penser a MAJ les ID/password
//$instanceVeolia->setConfiguration('login',"xx");
//$instanceVeolia->setConfiguration('password',"xx");
//$instanceVeolia->getConso(1);
//$instanceVeolia->displayConfig();



/**
 *
 */
?>
