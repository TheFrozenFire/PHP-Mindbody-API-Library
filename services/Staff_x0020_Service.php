<?php
class Staff_x0020_Service extends SoapClient {

  private static $classmap = array(
                                    'getStaffList' => 'getStaffList',
                                    'Tertiary' => 'Tertiary',
                                    'getStaffListResponse' => 'getStaffListResponse',
                                    'Result_StaffList' => 'Result_StaffList',
                                    'Result' => 'Result',
                                    'Option' => 'Option',
                                    'ErrorCode' => 'ErrorCode',
                                    'Trainer' => 'Trainer',
                                    'Hotword' => 'Hotword',
                                    'Hotwords' => 'Hotwords',
                                   );

  public function Staff_x0020_Service($wsdl = "http://clients.mindbodyonline.com/api/0_4/StaffService.asmx?WSDL", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    $directory = dirname(__FILE__).DIRECTORY_SEPARATOR;
	foreach($options['classmap'] as $key => $value) if(file_exists("{$directory}../structures/{$value}.php")) include_once("{$directory}../structures/{$value}.php");
    parent::__construct($wsdl, $options);
  }

  /**
   * Returns a list of staff based on given parameterized options. All options must have a 
   * value of True, False, or Dont_Care. For IsSalesRep and IsMale, the tertiary logic is straightforward:<br 
   * /><br />All Males (IsMale = True)<br />All Females (IsMale = False)<br />All Males and 
   * Females (IsMale = Dont_Care)<br /><br />The logic used by for class and appoinment instructors 
   * is special, and follows the following truth table:<br /><table><tr><td>IsClass</td><td>IsAppt</td><td>&nbsp;</td></tr><tr><td>T</td><td>T</td><td>All 
   * Instructors (Class inclusiveOR Appt)</td></tr><tr><td>T</td><td>F</td><td>Class Instructors 
   * (ONLY)</td></tr><tr><td>T</td><td>DC</td><td>Class Instructors (May also be appt instructors)</td></tr><tr><td>F</td><td>T</td><td>Appt 
   * Instructors (ONLY)</td></tr><tr><td>F</td><td>F</td><td>Non-Instructors (Staff that do 
   * not instruct classes or appts)</td></tr><tr><td>F</td><td>DC</td><td>Non-Class Instructors 
   * (Staff that do not instruct classes)</td></tr><tr><td>DC</td><td>T</td><td>Appt Instructors 
   * (May also be class instructors)</td></tr><tr><td>DC</td><td>F</td><td>Non-Appt Instructors 
   * (Staff that do not instruct appts)</td></tr><tr><td>DC</td><td>DC</td><td>All Staff</td></tr></table> 
   * 
   *
   * @param getStaffList $parameters
   * @return getStaffListResponse
   */
  public function getStaffList(getStaffList $parameters) {
    return $this->__soapCall('getStaffList', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

}
?>