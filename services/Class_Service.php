<?php
class Class_Service extends SoapClient {
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
		'Class' => 'Mindbody_Class',
		'MBObject' => 'MBObject',
		'Site' => 'Site',
		'ClassDescription' => 'ClassDescription',
		'Level' => 'Level',
		'ActionCode' => 'ActionCode',
		'Program' => 'Program',
		'ScheduleType' => 'ScheduleType',
		'SessionType' => 'SessionType',
		'Resource' => 'Resource',
		'ClientService' => 'ClientService',
		'Rep' => 'Rep',
		'Staff' => 'Staff',
		'Appointment' => 'Appointment',
		'ScheduleItem' => 'ScheduleItem',
		'Availability' => 'Availability',
		'Location' => 'Location',
		'Unavailability' => 'Unavailability',
		'AppointmentStatus' => 'AppointmentStatus',
		'Client' => 'Client',
		'ClientIndex' => 'ClientIndex',
		'ClientIndexValue' => 'ClientIndexValue',
		'ClientCreditCard' => 'ClientCreditCard',
		'ClientRelationship' => 'ClientRelationship',
		'Relationship' => 'Relationship',
		'CustomClientField' => 'CustomClientField',
		'Visit' => 'Visit',
		'UpdateClientVisits' => 'UpdateClientVisits',
		'UpdateClientVisitsRequest' => 'UpdateClientVisitsRequest',
		'UpdateClientVisitsResponse' => 'UpdateClientVisitsResponse',
		'UpdateClientVisitsResult' => 'UpdateClientVisitsResult',
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
		'ClassSchedule' => 'ClassSchedule',
		'Course' => 'Course',
		'GetClassSchedules' => 'GetClassSchedules',
		'GetClassSchedulesRequest' => 'GetClassSchedulesRequest',
		'GetClassSchedulesResponse' => 'GetClassSchedulesResponse',
		'GetClassSchedulesResult' => 'GetClassSchedulesResult',
		'AddClientsToClasses' => 'AddClientsToClasses',
		'AddClientsToClassesRequest' => 'AddClientsToClassesRequest',
		'AddClientsToClassesResponse' => 'AddClientsToClassesResponse',
		'AddClientsToClassesResult' => 'AddClientsToClassesResult',
		'RemoveClientsFromClasses' => 'RemoveClientsFromClasses',
		'RemoveClientsFromClassesRequest' => 'RemoveClientsFromClassesRequest',
		'RemoveClientsFromClassesResponse' => 'RemoveClientsFromClassesResponse',
		'RemoveClientsFromClassesResult' => 'RemoveClientsFromClassesResult',
		'AddClientsToEnrollments' => 'AddClientsToEnrollments',
		'AddClientsToEnrollmentsRequest' => 'AddClientsToEnrollmentsRequest',
		'AddClientsToEnrollmentsResponse' => 'AddClientsToEnrollmentsResponse',
		'AddClientsToEnrollmentsResult' => 'AddClientsToEnrollmentsResult',
		'RemoveFromWaitlist' => 'RemoveFromWaitlist',
		'RemoveFromWaitlistRequest' => 'RemoveFromWaitlistRequest',
		'RemoveFromWaitlistResponse' => 'RemoveFromWaitlistResponse',
		'RemoveFromWaitlistResult' => 'RemoveFromWaitlistResult',
		'GetSemesters' => 'GetSemesters',
		'GetSemestersRequest' => 'GetSemestersRequest',
		'GetSemestersResponse' => 'GetSemestersResponse',
		'GetSemestersResult' => 'GetSemestersResult',
		'Semester' => 'Semester',
		'GetCourses' => 'GetCourses',
		'GetCoursesRequest' => 'GetCoursesRequest',
		'GetCoursesResponse' => 'GetCoursesResponse',
		'GetCoursesResult' => 'GetCoursesResult',
		'GetWaitlistEntries' => 'GetWaitlistEntries',
		'GetWaitlistEntriesRequest' => 'GetWaitlistEntriesRequest',
		'GetWaitlistEntriesResponse' => 'GetWaitlistEntriesResponse',
		'GetWaitlistEntriesResult' => 'GetWaitlistEntriesResult',
		'WaitlistEntry' => 'WaitlistEntry',
	);
	public function Class_Service($wsdl = "https://api.mindbodyonline.com/0_5/ClassService.asmx?WSDL", $options = array()) {
		foreach (self::$classmap as $key => $value) {
			if (!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		if (!ini_get('user_agent')) ini_set('user_agent', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.19) Gecko/20110707 Firefox/3.6.19');
		$directory = dirname(__FILE__) . DIRECTORY_SEPARATOR;
		foreach ($options['classmap'] as $key => $value) if (file_exists('{$directory}../structures/{$value}.php')) include_once ('{$directory}../structures/{$value}.php');
		parent::__construct($wsdl, $options);
	}
	/**
	 * Gets a list of classes.
	 *
	 * @param GetClasses $parameters
	 * @return GetClassesResponse
	 */
	public function GetClasses(GetClasses $parameters) {
		return $this->__soapCall('GetClasses', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Update a list of visits.
	 *
	 * @param UpdateClientVisits $parameters
	 * @return UpdateClientVisitsResponse
	 */
	public function UpdateClientVisits(UpdateClientVisits $parameters) {
		return $this->__soapCall('UpdateClientVisits', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a class with a list of clients.
	 *
	 * @param GetClassVisits $parameters
	 * @return GetClassVisitsResponse
	 */
	public function GetClassVisits(GetClassVisits $parameters) {
		return $this->__soapCall('GetClassVisits', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of class descriptions.
	 *
	 * @param GetClassDescriptions $parameters
	 * @return GetClassDescriptionsResponse
	 */
	public function GetClassDescriptions(GetClassDescriptions $parameters) {
		return $this->__soapCall('GetClassDescriptions', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of enrollments.
	 *
	 * @param GetEnrollments $parameters
	 * @return GetEnrollmentsResponse
	 */
	public function GetEnrollments(GetEnrollments $parameters) {
		return $this->__soapCall('GetEnrollments', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of class schedules.
	 *
	 * @param GetClassSchedules $parameters
	 * @return GetClassSchedulesResponse
	 */
	public function GetClassSchedules(GetClassSchedules $parameters) {
		return $this->__soapCall('GetClassSchedules', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Adds clients to classes (signup).
	 *
	 * @param AddClientsToClasses $parameters
	 * @return AddClientsToClassesResponse
	 */
	public function AddClientsToClasses(AddClientsToClasses $parameters) {
		return $this->__soapCall('AddClientsToClasses', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Removes clients from classes.
	 *
	 * @param RemoveClientsFromClasses $parameters
	 * @return RemoveClientsFromClassesResponse
	 */
	public function RemoveClientsFromClasses(RemoveClientsFromClasses $parameters) {
		return $this->__soapCall('RemoveClientsFromClasses', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Adds clients to enrollments (signup).
	 *
	 * @param AddClientsToEnrollments $parameters
	 * @return AddClientsToEnrollmentsResponse
	 */
	public function AddClientsToEnrollments(AddClientsToEnrollments $parameters) {
		return $this->__soapCall('AddClientsToEnrollments', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Removes client from enrollment waitlist
	 *
	 * @param RemoveFromWaitlist $parameters
	 * @return RemoveFromWaitlistResponse
	 */
	public function RemoveFromWaitlist(RemoveFromWaitlist $parameters) {
		return $this->__soapCall('RemoveFromWaitlist', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of semesters.
	 *
	 * @param GetSemesters $parameters
	 * @return GetSemestersResponse
	 */
	public function GetSemesters(GetSemesters $parameters) {
		return $this->__soapCall('GetSemesters', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of courses.
	 *
	 * @param GetCourses $parameters
	 * @return GetCoursesResponse
	 */
	public function GetCourses(GetCourses $parameters) {
		return $this->__soapCall('GetCourses', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Get waitlist entries.
	 *
	 * @param GetWaitlistEntries $parameters
	 * @return GetWaitlistEntriesResponse
	 */
	public function GetWaitlistEntries(GetWaitlistEntries $parameters) {
		return $this->__soapCall('GetWaitlistEntries', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
}
class_alias("Class_Service", "Class_x0020_Service");
?>
