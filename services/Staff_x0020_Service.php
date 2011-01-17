<?php
class Staff_x0020_Service extends SoapClient {

  private static $classmap = array(
                                    'GetStaff' => 'GetStaff',
                                    'GetStaffRequest' => 'GetStaffRequest',
                                    'MBRequest' => 'MBRequest',
                                    'SourceCredentials' => 'SourceCredentials',
                                    'UserCredentials' => 'UserCredentials',
                                    'XMLDetailLevel' => 'XMLDetailLevel',
                                    'StaffCredentials' => 'StaffCredentials',
                                    'StaffFilter' => 'StaffFilter',
                                    'GetStaffResponse' => 'GetStaffResponse',
                                    'GetStaffResult' => 'GetStaffResult',
                                    'MBResult' => 'MBResult',
                                    'StatusCode' => 'StatusCode',
                                    'Staff' => 'Staff',
                                    'MBObject' => 'MBObject',
                                    'Site' => 'Site',
                                    'Resource' => 'Resource',
                                    'ActionCode' => 'ActionCode',
                                    'ClientService' => 'ClientService',
                                    'Program' => 'Program',
                                    'ScheduleType' => 'ScheduleType',
                                    'ClientIndexValue' => 'ClientIndexValue',
                                    'ClientIndex' => 'ClientIndex',
                                    'Client' => 'Client',
                                    'ClientCreditCard' => 'ClientCreditCard',
                                    'Location' => 'Location',
                                    'SessionType' => 'SessionType',
                                    'ScheduleItem' => 'ScheduleItem',
                                    'Appointment' => 'Appointment',
                                    'AppointmentStatus' => 'AppointmentStatus',
                                    'Unavailability' => 'Unavailability',
                                    'Availability' => 'Availability',
                                    'GetStaffPermissions' => 'GetStaffPermissions',
                                    'GetStaffPermissionsRequest' => 'GetStaffPermissionsRequest',
                                    'GetStaffPermissionsResponse' => 'GetStaffPermissionsResponse',
                                    'GetStaffPermissionsResult' => 'GetStaffPermissionsResult',
                                    'Permission' => 'Permission',
                                   );

  public function Staff_x0020_Service($wsdl = "http://clients.mindbodyonline.com/api/0_5/StaffService.asmx?WSDL", $options = array()) {
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
   * Gets a list of staff members. 
   *
   * @param GetStaff $parameters
   * @return GetStaffResponse
   */
  public function GetStaff(GetStaff $parameters) {
    return $this->__soapCall('GetStaff', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of staff permissions based on the given staff member. 
   *
   * @param GetStaffPermissions $parameters
   * @return GetStaffPermissionsResponse
   */
  public function GetStaffPermissions(GetStaffPermissions $parameters) {
    return $this->__soapCall('GetStaffPermissions', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

}
?>