<?php
class Appointment_Service extends SoapClient {

  private static $classmap = array(
                                    'GetStaffAppointments' => 'GetStaffAppointments',
                                    'GetStaffAppointmentsRequest' => 'GetStaffAppointmentsRequest',
                                    'MBRequest' => 'MBRequest',
                                    'SourceCredentials' => 'SourceCredentials',
                                    'UserCredentials' => 'UserCredentials',
                                    'XMLDetailLevel' => 'XMLDetailLevel',
                                    'StaffCredentials' => 'StaffCredentials',
                                    'GetStaffAppointmentsResponse' => 'GetStaffAppointmentsResponse',
                                    'GetStaffAppointmentsResult' => 'GetStaffAppointmentsResult',
                                    'MBResult' => 'MBResult',
                                    'StatusCode' => 'StatusCode',
                                    'Appointment' => 'Appointment',
                                    'ScheduleItem' => 'ScheduleItem',
                                    'MBObject' => 'MBObject',
                                    'Site' => 'Site',
                                    'Resource' => 'Resource',
                                    'ActionCode' => 'ActionCode',
                                    'ClientService' => 'ClientService',
                                    'Program' => 'Program',
                                    'ScheduleType' => 'ScheduleType',
                                    'ClientRelationship' => 'ClientRelationship',
                                    'Client' => 'Client',
                                    'ClientIndex' => 'ClientIndex',
                                    'ClientIndexValue' => 'ClientIndexValue',
                                    'ClientCreditCard' => 'ClientCreditCard',
                                    'CustomClientField' => 'CustomClientField',
                                    'Location' => 'Location',
                                    'Relationship' => 'Relationship',
                                    'SessionType' => 'SessionType',
                                    'Staff' => 'Staff',
                                    'Unavailability' => 'Unavailability',
                                    'Availability' => 'Availability',
                                    'AppointmentStatus' => 'AppointmentStatus',
                                    'AddOrUpdateAppointments' => 'AddOrUpdateAppointments',
                                    'AddOrUpdateAppointmentsRequest' => 'AddOrUpdateAppointmentsRequest',
                                    'AddOrUpdateAppointmentsResponse' => 'AddOrUpdateAppointmentsResponse',
                                    'AddOrUpdateAppointmentsResult' => 'AddOrUpdateAppointmentsResult',
                                    'GetBookableItems' => 'GetBookableItems',
                                    'GetBookableItemsRequest' => 'GetBookableItemsRequest',
                                    'GetBookableItemsResponse' => 'GetBookableItemsResponse',
                                    'GetBookableItemsResult' => 'GetBookableItemsResult',
                                    'GetScheduleItems' => 'GetScheduleItems',
                                    'GetScheduleItemsRequest' => 'GetScheduleItemsRequest',
                                    'GetScheduleItemsResponse' => 'GetScheduleItemsResponse',
                                    'GetScheduleItemsResult' => 'GetScheduleItemsResult',
                                    'AddOrUpdateAvailabilities' => 'AddOrUpdateAvailabilities',
                                    'AddOrUpdateAvailabilitiesRequest' => 'AddOrUpdateAvailabilitiesRequest',
                                    'DayOfWeek' => 'DayOfWeek',
                                    'AvailabilityDisplay' => 'AvailabilityDisplay',
                                    'AddOrUpdateAvailabilitiesResponse' => 'AddOrUpdateAvailabilitiesResponse',
                                    'AddOrUpdateAvailabilitiesResult' => 'AddOrUpdateAvailabilitiesResult',
                                    'GetActiveSessionTimes' => 'GetActiveSessionTimes',
                                    'GetActiveSessionTimesRequest' => 'GetActiveSessionTimesRequest',
                                    'GetActiveSessionTimesResponse' => 'GetActiveSessionTimesResponse',
                                    'GetActiveSessionTimesResult' => 'GetActiveSessionTimesResult',
                                    'GetAppointmentOptions' => 'GetAppointmentOptions',
                                    'GetAppointmentOptionsRequest' => 'GetAppointmentOptionsRequest',
                                    'GetAppointmentOptionsResponse' => 'GetAppointmentOptionsResponse',
                                    'GetAppointmentOptionsResult' => 'GetAppointmentOptionsResult',
                                    'Option' => 'Option',
                                   );

  public function Appointment_Service($wsdl = "http://clients.mindbodyonline.com/api/0_5/AppointmentService.asmx?WSDL", $options = array()) {
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
   * Gets a list of appointments that a given staff memeber is instructing. 
   *
   * @param GetStaffAppointments $parameters
   * @return GetStaffAppointmentsResponse
   */
  public function GetStaffAppointments(GetStaffAppointments $parameters) {
    return $this->__soapCall('GetStaffAppointments', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Adds or updates a list of appointments. 
   *
   * @param AddOrUpdateAppointments $parameters
   * @return AddOrUpdateAppointmentsResponse
   */
  public function AddOrUpdateAppointments(AddOrUpdateAppointments $parameters) {
    return $this->__soapCall('AddOrUpdateAppointments', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of bookable items. 
   *
   * @param GetBookableItems $parameters
   * @return GetBookableItemsResponse
   */
  public function GetBookableItems(GetBookableItems $parameters) {
    return $this->__soapCall('GetBookableItems', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of scheduled items (appointments, availabilities, and unavailabilities). 
   *
   * @param GetScheduleItems $parameters
   * @return GetScheduleItemsResponse
   */
  public function GetScheduleItems(GetScheduleItems $parameters) {
    return $this->__soapCall('GetScheduleItems', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Adds or updates a list of availabilities. 
   *
   * @param AddOrUpdateAvailabilities $parameters
   * @return AddOrUpdateAvailabilitiesResponse
   */
  public function AddOrUpdateAvailabilities(AddOrUpdateAvailabilities $parameters) {
    return $this->__soapCall('AddOrUpdateAvailabilities', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of times that are active for a given program ID. 
   *
   * @param GetActiveSessionTimes $parameters
   * @return GetActiveSessionTimesResponse
   */
  public function GetActiveSessionTimes(GetActiveSessionTimes $parameters) {
    return $this->__soapCall('GetActiveSessionTimes', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list appointment options. 
   *
   * @param GetAppointmentOptions $parameters
   * @return GetAppointmentOptionsResponse
   */
  public function GetAppointmentOptions(GetAppointmentOptions $parameters) {
    return $this->__soapCall('GetAppointmentOptions', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

}
class_alias("Appointment_Service", "Appointment_x0020_Service");
?>