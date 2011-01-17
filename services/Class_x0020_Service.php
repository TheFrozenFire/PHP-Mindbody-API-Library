<?php
class Class_x0020_Service extends SoapClient {

  private static $classmap = array(
                                    'GetClasses' => 'GetClasses',
                                    'GetClassesRequest' => 'GetClassesRequest',
                                    'MBRequest' => 'MBRequest',
                                    'SourceCredentials' => 'SourceCredentials',
                                    'UserCredentials' => 'UserCredentials',
                                    'XMLDetailLevel' => 'XMLDetailLevel',
                                    'GetClassesResponse' => 'GetClassesResponse',
                                    'GetClassesResult' => 'GetClassesResult',
                                    'MBResult' => 'MBResult',
                                    'StatusCode' => 'StatusCode',
                                    'Class' => 'Class',
                                    'MBObject' => 'MBObject',
                                    'Site' => 'Site',
                                    'Resource' => 'Resource',
                                    'ActionCode' => 'ActionCode',
                                    'ScheduleItem' => 'ScheduleItem',
                                    'Appointment' => 'Appointment',
                                    'AppointmentStatus' => 'AppointmentStatus',
                                    'Program' => 'Program',
                                    'ScheduleType' => 'ScheduleType',
                                    'SessionType' => 'SessionType',
                                    'Location' => 'Location',
                                    'Staff' => 'Staff',
                                    'Unavailability' => 'Unavailability',
                                    'Availability' => 'Availability',
                                    'Client' => 'Client',
                                    'ClientIndex' => 'ClientIndex',
                                    'ClientIndexValue' => 'ClientIndexValue',
                                    'ClientCreditCard' => 'ClientCreditCard',
                                    'ClientService' => 'ClientService',
                                    'ClassDescription' => 'ClassDescription',
                                    'Visit' => 'Visit',
                                    'GetClassVisits' => 'GetClassVisits',
                                    'GetClassVisitsRequest' => 'GetClassVisitsRequest',
                                    'GetClassVisitsResponse' => 'GetClassVisitsResponse',
                                    'GetClassVisitsResult' => 'GetClassVisitsResult',
                                    'GetClassDescriptions' => 'GetClassDescriptions',
                                    'GetClassDescriptionsRequest' => 'GetClassDescriptionsRequest',
                                    'GetClassDescriptionsResponse' => 'GetClassDescriptionsResponse',
                                    'GetClassDescriptionsResult' => 'GetClassDescriptionsResult',
                                    'GetEnrollments' => 'GetEnrollments',
                                    'GetEnrollmentsRequest' => 'GetEnrollmentsRequest',
                                    'GetEnrollmentsResponse' => 'GetEnrollmentsResponse',
                                    'GetEnrollmentsResult' => 'GetEnrollmentsResult',
                                    'AddClientsToClasses' => 'AddClientsToClasses',
                                    'AddClientsToClassesRequest' => 'AddClientsToClassesRequest',
                                    'AddClientsToClassesResponse' => 'AddClientsToClassesResponse',
                                    'AddClientsToClassesResult' => 'AddClientsToClassesResult',
                                   );

  public function Class_x0020_Service($wsdl = "http://clients.mindbodyonline.com/api/0_5/ClassService.asmx?WSDL", $options = array()) {
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
   * Gets a list of classes. 
   *
   * @param GetClasses $parameters
   * @return GetClassesResponse
   */
  public function GetClasses(GetClasses $parameters) {
    return $this->__soapCall('GetClasses', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a class with a list of clients. 
   *
   * @param GetClassVisits $parameters
   * @return GetClassVisitsResponse
   */
  public function GetClassVisits(GetClassVisits $parameters) {
    return $this->__soapCall('GetClassVisits', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of class descriptions. 
   *
   * @param GetClassDescriptions $parameters
   * @return GetClassDescriptionsResponse
   */
  public function GetClassDescriptions(GetClassDescriptions $parameters) {
    return $this->__soapCall('GetClassDescriptions', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of enrollments. 
   *
   * @param GetEnrollments $parameters
   * @return GetEnrollmentsResponse
   */
  public function GetEnrollments(GetEnrollments $parameters) {
    return $this->__soapCall('GetEnrollments', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Adds clients to classes (signup). 
   *
   * @param AddClientsToClasses $parameters
   * @return AddClientsToClassesResponse
   */
  public function AddClientsToClasses(AddClientsToClasses $parameters) {
    return $this->__soapCall('AddClientsToClasses', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

}
?>