<?php
class Class_x0020_Service extends SoapClient {

  private static $classmap = array(
                                    'getClass' => 'getClass',
                                    'getClassResponse' => 'getClassResponse',
                                    'Result_Class' => 'Result_Class',
                                    'Result' => 'Result',
                                    'Option' => 'Option',
                                    'ErrorCode' => 'ErrorCode',
                                    'Class' => 'Class',
                                    'TypeGroup' => 'TypeGroup',
                                    'ScheduleType' => 'ScheduleType',
                                    'ClassLevel' => 'ClassLevel',
                                    'VisitType' => 'VisitType',
                                    'Resource' => 'Resource',
                                    'Studio' => 'Studio',
                                    'Location' => 'Location',
                                    'Trainer' => 'Trainer',
                                    'getClassWithClientInfo' => 'getClassWithClientInfo',
                                    'getClassWithClientInfoResponse' => 'getClassWithClientInfoResponse',
                                    'Result_ClassesWithClientInfo' => 'Result_ClassesWithClientInfo',
                                    'ClassWithClientInfo' => 'ClassWithClientInfo',
                                    'SeriesInfo' => 'SeriesInfo',
                                    'SeriesType' => 'SeriesType',
                                    'ClassVisitStatusDetail' => 'ClassVisitStatusDetail',
                                    'getClasses' => 'getClasses',
                                    'getClassesResponse' => 'getClassesResponse',
                                    'Result_Classes' => 'Result_Classes',
                                    'getEnrollment' => 'getEnrollment',
                                    'getEnrollmentResponse' => 'getEnrollmentResponse',
                                    'Result_Enrollments' => 'Result_Enrollments',
                                    'Enrollment' => 'Enrollment',
                                    'ClassSchedule' => 'ClassSchedule',
                                    'Course' => 'Course',
                                    'getEnrollments' => 'getEnrollments',
                                    'getEnrollmentsResponse' => 'getEnrollmentsResponse',
                                    'getClassesWithClientInfoByCardID' => 'getClassesWithClientInfoByCardID',
                                    'getClassesWithClientInfoByCardIDResponse' => 'getClassesWithClientInfoByCardIDResponse',
                                    'getPrograms' => 'getPrograms',
                                    'getProgramsResponse' => 'getProgramsResponse',
                                    'Result_TypeGroups' => 'Result_TypeGroups',
                                    'getSessionTypes' => 'getSessionTypes',
                                    'getSessionTypesResponse' => 'getSessionTypesResponse',
                                    'Result_VisitTypes' => 'Result_VisitTypes',
                                    'Hotword' => 'Hotword',
                                    'Hotwords' => 'Hotwords',
                                   );

  public function Class_x0020_Service($wsdl = "http://clients.mindbodyonline.com/api/0_4/ClassService.asmx?WSDL", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    foreach($options['classmap'] as $key => $value) if(file_exists("../structures/{$value}.php")) include_once("../structures/{$value}.php");
    parent::__construct($wsdl, $options);
  }

  /**
   * Gets a specific class based on the ClassID and the ClassDate. 
   *
   * @param getClass $parameters
   * @return getClassResponse
   */
  public function getClass(getClass $parameters) {
    return $this->__soapCall('getClass', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a specific class with payment information for the specified client. 
   *
   * @param getClassWithClientInfo $parameters
   * @return getClassWithClientInfoResponse
   */
  public function getClassWithClientInfo(getClassWithClientInfo $parameters) {
    return $this->__soapCall('getClassWithClientInfo', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of classes based on a date range. Studio ID wild card compatible. 
   *
   * @param getClasses $parameters
   * @return getClassesResponse
   */
  public function getClasses(getClasses $parameters) {
    return $this->__soapCall('getClasses', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets an enrollment schedule (uniquely identified by ClassID). 
   *
   * @param getEnrollment $parameters
   * @return getEnrollmentResponse
   */
  public function getEnrollment(getEnrollment $parameters) {
    return $this->__soapCall('getEnrollment', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of available enrollment schedules. A LocationID of 0 will not filter the results 
   * by Location. A TrainerID of 0 will not filter the results by Trainer. A TypeGroupID of 
   * 0 will not filter the results by TypeGroupID. 
   *
   * @param getEnrollments $parameters
   * @return getEnrollmentsResponse
   */
  public function getEnrollments(getEnrollments $parameters) {
    return $this->__soapCall('getEnrollments', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieves all class records for the specified client.  Retrieves records for past and 
   * future classes based on submitted criteria (DaysOfClasesFuture / DaysOfClassesPast) in 
   * relation to current date.  Class records are returned in a Result_ClassesWithClientInfo 
   * data type which also contains error codes and/or messages in relation to retreiving the 
   * class records.  Studio ID wild card compatible. 
   *
   * @param getClassesWithClientInfoByCardID $parameters
   * @return getClassesWithClientInfoByCardIDResponse
   */
  public function getClassesWithClientInfoByCardID(getClassesWithClientInfoByCardID $parameters) {
    return $this->__soapCall('getClassesWithClientInfoByCardID', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of available programs (typegroups). 
   *
   * @param getPrograms $parameters
   * @return getProgramsResponse
   */
  public function getPrograms(getPrograms $parameters) {
    return $this->__soapCall('getPrograms', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of available session types (visit types). 
   *
   * @param getSessionTypes $parameters
   * @return getSessionTypesResponse
   */
  public function getSessionTypes(getSessionTypes $parameters) {
    return $this->__soapCall('getSessionTypes', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

}
?>
