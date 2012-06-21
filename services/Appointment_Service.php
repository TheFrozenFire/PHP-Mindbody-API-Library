<?php
namespace MindbodyAPI;
class Appointment_Service extends \SoapClient {

  private static $classmap = array(
                                    'GetStaffAppointments' => 'MindbodyAPI\structures\GetStaffAppointments',
                                    'GetStaffAppointmentsRequest' => 'MindbodyAPI\structures\GetStaffAppointmentsRequest',
                                    'MBRequest' => 'MindbodyAPI\structures\MBRequest',
                                    'SourceCredentials' => 'MindbodyAPI\structures\SourceCredentials',
                                    'UserCredentials' => 'MindbodyAPI\structures\UserCredentials',
                                    'XMLDetailLevel' => 'MindbodyAPI\structures\XMLDetailLevel',
                                    'StaffCredentials' => 'MindbodyAPI\structures\StaffCredentials',
                                    'GetStaffAppointmentsResponse' => 'MindbodyAPI\structures\GetStaffAppointmentsResponse',
                                    'GetStaffAppointmentsResult' => 'MindbodyAPI\structures\GetStaffAppointmentsResult',
                                    'MBResult' => 'MindbodyAPI\structures\MBResult',
                                    'StatusCode' => 'MindbodyAPI\structures\StatusCode',
                                    'Appointment' => 'MindbodyAPI\structures\Appointment',
                                    'ScheduleItem' => 'MindbodyAPI\structures\ScheduleItem',
                                    'MBObject' => 'MindbodyAPI\structures\MBObject',
                                    'Site' => 'MindbodyAPI\structures\Site',
                                    'Resource' => 'MindbodyAPI\structures\Resource',
                                    'ActionCode' => 'MindbodyAPI\structures\ActionCode',
                                    'ClientService' => 'MindbodyAPI\structures\ClientService',
                                    'Program' => 'MindbodyAPI\structures\Program',
                                    'ScheduleType' => 'MindbodyAPI\structures\ScheduleType',
                                    'Rep' => 'MindbodyAPI\structures\Rep',
                                    'Staff' => 'MindbodyAPI\structures\Staff',
                                    'Unavailability' => 'MindbodyAPI\structures\Unavailability',
                                    'Availability' => 'MindbodyAPI\structures\Availability',
                                    'SessionType' => 'MindbodyAPI\structures\SessionType',
                                    'Location' => 'MindbodyAPI\structures\Location',
                                    'ClientRelationship' => 'MindbodyAPI\structures\ClientRelationship',
                                    'Client' => 'MindbodyAPI\structures\Client',
                                    'ClientIndex' => 'MindbodyAPI\structures\ClientIndex',
                                    'ClientIndexValue' => 'MindbodyAPI\structures\ClientIndexValue',
                                    'ClientCreditCard' => 'MindbodyAPI\structures\ClientCreditCard',
                                    'CustomClientField' => 'MindbodyAPI\structures\CustomClientField',
                                    'Relationship' => 'MindbodyAPI\structures\Relationship',
                                    'AppointmentStatus' => 'MindbodyAPI\structures\AppointmentStatus',
                                    'AddOrUpdateAppointments' => 'MindbodyAPI\structures\AddOrUpdateAppointments',
                                    'AddOrUpdateAppointmentsRequest' => 'MindbodyAPI\structures\AddOrUpdateAppointmentsRequest',
                                    'AddOrUpdateAppointmentsResponse' => 'MindbodyAPI\structures\AddOrUpdateAppointmentsResponse',
                                    'AddOrUpdateAppointmentsResult' => 'MindbodyAPI\structures\AddOrUpdateAppointmentsResult',
                                    'GetBookableItems' => 'MindbodyAPI\structures\GetBookableItems',
                                    'GetBookableItemsRequest' => 'MindbodyAPI\structures\GetBookableItemsRequest',
                                    'GetBookableItemsResponse' => 'MindbodyAPI\structures\GetBookableItemsResponse',
                                    'GetBookableItemsResult' => 'MindbodyAPI\structures\GetBookableItemsResult',
                                    'GetScheduleItems' => 'MindbodyAPI\structures\GetScheduleItems',
                                    'GetScheduleItemsRequest' => 'MindbodyAPI\structures\GetScheduleItemsRequest',
                                    'GetScheduleItemsResponse' => 'MindbodyAPI\structures\GetScheduleItemsResponse',
                                    'GetScheduleItemsResult' => 'MindbodyAPI\structures\GetScheduleItemsResult',
                                    'AddOrUpdateAvailabilities' => 'MindbodyAPI\structures\AddOrUpdateAvailabilities',
                                    'AddOrUpdateAvailabilitiesRequest' => 'MindbodyAPI\structures\AddOrUpdateAvailabilitiesRequest',
                                    'DayOfWeek' => 'MindbodyAPI\structures\DayOfWeek',
                                    'AvailabilityDisplay' => 'MindbodyAPI\structures\AvailabilityDisplay',
                                    'AddOrUpdateAvailabilitiesResponse' => 'MindbodyAPI\structures\AddOrUpdateAvailabilitiesResponse',
                                    'AddOrUpdateAvailabilitiesResult' => 'MindbodyAPI\structures\AddOrUpdateAvailabilitiesResult',
                                    'GetActiveSessionTimes' => 'MindbodyAPI\structures\GetActiveSessionTimes',
                                    'GetActiveSessionTimesRequest' => 'MindbodyAPI\structures\GetActiveSessionTimesRequest',
                                    'GetActiveSessionTimesResponse' => 'MindbodyAPI\structures\GetActiveSessionTimesResponse',
                                    'GetActiveSessionTimesResult' => 'MindbodyAPI\structures\GetActiveSessionTimesResult',
                                    'GetAppointmentOptions' => 'MindbodyAPI\structures\GetAppointmentOptions',
                                    'GetAppointmentOptionsRequest' => 'MindbodyAPI\structures\GetAppointmentOptionsRequest',
                                    'GetAppointmentOptionsResponse' => 'MindbodyAPI\structures\GetAppointmentOptionsResponse',
                                    'GetAppointmentOptionsResult' => 'MindbodyAPI\structures\GetAppointmentOptionsResult',
                                    'Option' => 'MindbodyAPI\structures\Option',
                                   );

  public function Appointment_Service($wsdl = "https://api.mindbodyonline.com/0_5/AppointmentService.asmx?WSDL", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    if(!ini_get('user_agent')) ini_set('user_agent', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.19) Gecko/20110707 Firefox/3.6.19');
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
?>