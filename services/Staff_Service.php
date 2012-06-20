<?php
class Staff_Service extends SoapClient {

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
                                    'Rep' => 'Rep',
                                    'ClientRelationship' => 'ClientRelationship',
                                    'Client' => 'Client',
                                    'ClientIndex' => 'ClientIndex',
                                    'ClientIndexValue' => 'ClientIndexValue',
                                    'ClientCreditCard' => 'ClientCreditCard',
                                    'CustomClientField' => 'CustomClientField',
                                    'Location' => 'Location',
                                    'Relationship' => 'Relationship',
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
                                    'AddOrUpdateStaff' => 'AddOrUpdateStaff',
                                    'AddOrUpdateStaffRequest' => 'AddOrUpdateStaffRequest',
                                    'AddOrUpdateStaffResponse' => 'AddOrUpdateStaffResponse',
                                    'AddOrUpdateStaffResult' => 'AddOrUpdateStaffResult',
                                   );

  public function Staff_Service($wsdl = "https://api.mindbodyonline.com/0_5/StaffService.asmx?WSDL", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    if(!ini_get('user_agent')) ini_set('user_agent', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.19) Gecko/20110707 Firefox/3.6.19');
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

  /**
   * Add or update staff. 
   *
   * @param AddOrUpdateStaff $parameters
   * @return AddOrUpdateStaffResponse
   */
  public function AddOrUpdateStaff(AddOrUpdateStaff $parameters) {
    return $this->__soapCall('AddOrUpdateStaff', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

}
class_alias("Staff_Service", "Staff_x0020_Service");
?>