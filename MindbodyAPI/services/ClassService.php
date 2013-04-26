<?php
namespace MindbodyAPI\services;
use MindbodyAPI\structures;
class ClassService extends \MindbodyAPI\MindbodyClient {
	public static $classmap = array(
		'GetClasses' => 'MindbodyAPI\structures\GetClasses',
		'GetClassesRequest' => 'MindbodyAPI\structures\GetClassesRequest',
		'MBRequest' => 'MindbodyAPI\structures\MBRequest',
		'SourceCredentials' => 'MindbodyAPI\structures\SourceCredentials',
		'UserCredentials' => 'MindbodyAPI\structures\UserCredentials',
		'XMLDetailLevel' => 'MindbodyAPI\structures\XMLDetailLevel',
		'GetClassesResponse' => 'MindbodyAPI\structures\GetClassesResponse',
		'GetClassesResult' => 'MindbodyAPI\structures\GetClassesResult',
		'MBResult' => 'MindbodyAPI\structures\MBResult',
		'StatusCode' => 'MindbodyAPI\structures\StatusCode',
		'Class' => 'MindbodyAPI\structures\MindbodyClass',
		'MBObject' => 'MindbodyAPI\structures\MBObject',
		'Site' => 'MindbodyAPI\structures\Site',
		'ClassDescription' => 'MindbodyAPI\structures\ClassDescription',
		'Level' => 'MindbodyAPI\structures\Level',
		'ActionCode' => 'MindbodyAPI\structures\ActionCode',
		'Program' => 'MindbodyAPI\structures\Program',
		'ScheduleType' => 'MindbodyAPI\structures\ScheduleType',
		'SessionType' => 'MindbodyAPI\structures\SessionType',
		'Resource' => 'MindbodyAPI\structures\Resource',
		'ClientService' => 'MindbodyAPI\structures\ClientService',
		'Rep' => 'MindbodyAPI\structures\Rep',
		'Staff' => 'MindbodyAPI\structures\Staff',
		'Appointment' => 'MindbodyAPI\structures\Appointment',
		'ScheduleItem' => 'MindbodyAPI\structures\ScheduleItem',
		'Unavailability' => 'MindbodyAPI\structures\Unavailability',
		'Availability' => 'MindbodyAPI\structures\Availability',
		'Location' => 'MindbodyAPI\structures\Location',
		'AppointmentStatus' => 'MindbodyAPI\structures\AppointmentStatus',
		'Client' => 'MindbodyAPI\structures\Client',
		'ClientIndex' => 'MindbodyAPI\structures\ClientIndex',
		'ClientIndexValue' => 'MindbodyAPI\structures\ClientIndexValue',
		'ClientCreditCard' => 'MindbodyAPI\structures\ClientCreditCard',
		'ClientRelationship' => 'MindbodyAPI\structures\ClientRelationship',
		'Relationship' => 'MindbodyAPI\structures\Relationship',
		'CustomClientField' => 'MindbodyAPI\structures\CustomClientField',
		'Visit' => 'MindbodyAPI\structures\Visit',
		'UpdateClientVisits' => 'MindbodyAPI\structures\UpdateClientVisits',
		'UpdateClientVisitsRequest' => 'MindbodyAPI\structures\UpdateClientVisitsRequest',
		'UpdateClientVisitsResponse' => 'MindbodyAPI\structures\UpdateClientVisitsResponse',
		'UpdateClientVisitsResult' => 'MindbodyAPI\structures\UpdateClientVisitsResult',
		'GetClassVisits' => 'MindbodyAPI\structures\GetClassVisits',
		'GetClassVisitsRequest' => 'MindbodyAPI\structures\GetClassVisitsRequest',
		'GetClassVisitsResponse' => 'MindbodyAPI\structures\GetClassVisitsResponse',
		'GetClassVisitsResult' => 'MindbodyAPI\structures\GetClassVisitsResult',
		'GetClassDescriptions' => 'MindbodyAPI\structures\GetClassDescriptions',
		'GetClassDescriptionsRequest' => 'MindbodyAPI\structures\GetClassDescriptionsRequest',
		'GetClassDescriptionsResponse' => 'MindbodyAPI\structures\GetClassDescriptionsResponse',
		'GetClassDescriptionsResult' => 'MindbodyAPI\structures\GetClassDescriptionsResult',
		'GetEnrollments' => 'MindbodyAPI\structures\GetEnrollments',
		'GetEnrollmentsRequest' => 'MindbodyAPI\structures\GetEnrollmentsRequest',
		'GetEnrollmentsResponse' => 'MindbodyAPI\structures\GetEnrollmentsResponse',
		'GetEnrollmentsResult' => 'MindbodyAPI\structures\GetEnrollmentsResult',
		'ClassSchedule' => 'MindbodyAPI\structures\ClassSchedule',
		'Course' => 'MindbodyAPI\structures\Course',
		'GetClassSchedules' => 'MindbodyAPI\structures\GetClassSchedules',
		'GetClassSchedulesRequest' => 'MindbodyAPI\structures\GetClassSchedulesRequest',
		'GetClassSchedulesResponse' => 'MindbodyAPI\structures\GetClassSchedulesResponse',
		'GetClassSchedulesResult' => 'MindbodyAPI\structures\GetClassSchedulesResult',
		'AddClientsToClasses' => 'MindbodyAPI\structures\AddClientsToClasses',
		'AddClientsToClassesRequest' => 'MindbodyAPI\structures\AddClientsToClassesRequest',
		'AddClientsToClassesResponse' => 'MindbodyAPI\structures\AddClientsToClassesResponse',
		'AddClientsToClassesResult' => 'MindbodyAPI\structures\AddClientsToClassesResult',
		'RemoveClientsFromClasses' => 'MindbodyAPI\structures\RemoveClientsFromClasses',
		'RemoveClientsFromClassesRequest' => 'MindbodyAPI\structures\RemoveClientsFromClassesRequest',
		'RemoveClientsFromClassesResponse' => 'MindbodyAPI\structures\RemoveClientsFromClassesResponse',
		'RemoveClientsFromClassesResult' => 'MindbodyAPI\structures\RemoveClientsFromClassesResult',
		'AddClientsToEnrollments' => 'MindbodyAPI\structures\AddClientsToEnrollments',
		'AddClientsToEnrollmentsRequest' => 'MindbodyAPI\structures\AddClientsToEnrollmentsRequest',
		'AddClientsToEnrollmentsResponse' => 'MindbodyAPI\structures\AddClientsToEnrollmentsResponse',
		'AddClientsToEnrollmentsResult' => 'MindbodyAPI\structures\AddClientsToEnrollmentsResult',
		'RemoveFromWaitlist' => 'MindbodyAPI\structures\RemoveFromWaitlist',
		'RemoveFromWaitlistRequest' => 'MindbodyAPI\structures\RemoveFromWaitlistRequest',
		'RemoveFromWaitlistResponse' => 'MindbodyAPI\structures\RemoveFromWaitlistResponse',
		'RemoveFromWaitlistResult' => 'MindbodyAPI\structures\RemoveFromWaitlistResult',
		'GetSemesters' => 'MindbodyAPI\structures\GetSemesters',
		'GetSemestersRequest' => 'MindbodyAPI\structures\GetSemestersRequest',
		'GetSemestersResponse' => 'MindbodyAPI\structures\GetSemestersResponse',
		'GetSemestersResult' => 'MindbodyAPI\structures\GetSemestersResult',
		'Semester' => 'MindbodyAPI\structures\Semester',
		'GetCourses' => 'MindbodyAPI\structures\GetCourses',
		'GetCoursesRequest' => 'MindbodyAPI\structures\GetCoursesRequest',
		'GetCoursesResponse' => 'MindbodyAPI\structures\GetCoursesResponse',
		'GetCoursesResult' => 'MindbodyAPI\structures\GetCoursesResult',
		'GetWaitlistEntries' => 'MindbodyAPI\structures\GetWaitlistEntries',
		'GetWaitlistEntriesRequest' => 'MindbodyAPI\structures\GetWaitlistEntriesRequest',
		'GetWaitlistEntriesResponse' => 'MindbodyAPI\structures\GetWaitlistEntriesResponse',
		'GetWaitlistEntriesResult' => 'MindbodyAPI\structures\GetWaitlistEntriesResult',
		'WaitlistEntry' => 'MindbodyAPI\structures\WaitlistEntry',
	);
	public function __construct($wsdl = "https://api.mindbodyonline.com/0_5/ClassService.asmx?WSDL", $options = array()) {
		foreach (self::$classmap as $key => $value) {
			if (!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		if (!ini_get('user_agent')) ini_set('user_agent', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.19) Gecko/20110707 Firefox/3.6.19');
		parent::__construct($wsdl, $options);
	}
	/**
	 * Gets a list of classes.
	 *
	 * @param GetClasses $parameters
	 * @return GetClassesResponse
	 */
	public function GetClasses(structures\GetClasses $parameters) {
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
	public function UpdateClientVisits(structures\UpdateClientVisits $parameters) {
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
	public function GetClassVisits(structures\GetClassVisits $parameters) {
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
	public function GetClassDescriptions(structures\GetClassDescriptions $parameters) {
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
	public function GetEnrollments(structures\GetEnrollments $parameters) {
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
	public function GetClassSchedules(structures\GetClassSchedules $parameters) {
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
	public function AddClientsToClasses(structures\AddClientsToClasses $parameters) {
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
	public function RemoveClientsFromClasses(structures\RemoveClientsFromClasses $parameters) {
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
	public function AddClientsToEnrollments(structures\AddClientsToEnrollments $parameters) {
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
	public function RemoveFromWaitlist(structures\RemoveFromWaitlist $parameters) {
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
	public function GetSemesters(structures\GetSemesters $parameters) {
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
	public function GetCourses(structures\GetCourses $parameters) {
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
	public function GetWaitlistEntries(structures\GetWaitlistEntries $parameters) {
		return $this->__soapCall('GetWaitlistEntries', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
}
?>