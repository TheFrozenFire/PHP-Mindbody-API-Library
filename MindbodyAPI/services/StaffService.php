<?php
namespace MindbodyAPI\services;
use MindbodyAPI\structures;
class StaffService extends \MindbodyAPI\MindbodyClient {
	const WSDL_FILE = "https://api.mindbodyonline.com/0_5/StaffService.asmx?WSDL";
	private $classmap = array(
		'GetStaff' => 'MindbodyAPI\structures\GetStaff',
		'GetStaffRequest' => 'MindbodyAPI\structures\GetStaffRequest',
		'MBRequest' => 'MindbodyAPI\structures\MBRequest',
		'SourceCredentials' => 'MindbodyAPI\structures\SourceCredentials',
		'UserCredentials' => 'MindbodyAPI\structures\UserCredentials',
		'XMLDetailLevel' => 'MindbodyAPI\structures\XMLDetailLevel',
		'StaffCredentials' => 'MindbodyAPI\structures\StaffCredentials',
		'StaffFilter' => 'MindbodyAPI\structures\StaffFilter',
		'GetStaffResponse' => 'MindbodyAPI\structures\GetStaffResponse',
		'GetStaffResult' => 'MindbodyAPI\structures\GetStaffResult',
		'MBResult' => 'MindbodyAPI\structures\MBResult',
		'StatusCode' => 'MindbodyAPI\structures\StatusCode',
		'Staff' => 'MindbodyAPI\structures\Staff',
		'MBObject' => 'MindbodyAPI\structures\MBObject',
		'Site' => 'MindbodyAPI\structures\Site',
		'Resource' => 'MindbodyAPI\structures\Resource',
		'ActionCode' => 'MindbodyAPI\structures\ActionCode',
		'ClientService' => 'MindbodyAPI\structures\ClientService',
		'Program' => 'MindbodyAPI\structures\Program',
		'ScheduleType' => 'MindbodyAPI\structures\ScheduleType',
		'Rep' => 'MindbodyAPI\structures\Rep',
		'ClientRelationship' => 'MindbodyAPI\structures\ClientRelationship',
		'Client' => 'MindbodyAPI\structures\Client',
		'ClientIndex' => 'MindbodyAPI\structures\ClientIndex',
		'ClientIndexValue' => 'MindbodyAPI\structures\ClientIndexValue',
		'ClientCreditCard' => 'MindbodyAPI\structures\ClientCreditCard',
		'CustomClientField' => 'MindbodyAPI\structures\CustomClientField',
		'Location' => 'MindbodyAPI\structures\Location',
		'Relationship' => 'MindbodyAPI\structures\Relationship',
		'SessionType' => 'MindbodyAPI\structures\SessionType',
		'ScheduleItem' => 'MindbodyAPI\structures\ScheduleItem',
		'Appointment' => 'MindbodyAPI\structures\Appointment',
		'AppointmentStatus' => 'MindbodyAPI\structures\AppointmentStatus',
		'Unavailability' => 'MindbodyAPI\structures\Unavailability',
		'Availability' => 'MindbodyAPI\structures\Availability',
		'ProviderIDUpdate' => 'MindbodyAPI\structures\ProviderIDUpdate',
		'GetStaffPermissions' => 'MindbodyAPI\structures\GetStaffPermissions',
		'GetStaffPermissionsRequest' => 'MindbodyAPI\structures\GetStaffPermissionsRequest',
		'GetStaffPermissionsResponse' => 'MindbodyAPI\structures\GetStaffPermissionsResponse',
		'GetStaffPermissionsResult' => 'MindbodyAPI\structures\GetStaffPermissionsResult',
		'Permission' => 'MindbodyAPI\structures\Permission',
		'AddOrUpdateStaff' => 'MindbodyAPI\structures\AddOrUpdateStaff',
		'AddOrUpdateStaffRequest' => 'MindbodyAPI\structures\AddOrUpdateStaffRequest',
		'AddOrUpdateStaffResponse' => 'MindbodyAPI\structures\AddOrUpdateStaffResponse',
		'AddOrUpdateStaffResult' => 'MindbodyAPI\structures\AddOrUpdateStaffResult',
		'GetStaffImgURL' => 'MindbodyAPI\structures\GetStaffImgURL',
		'GetStaffImgURLRequest' => 'MindbodyAPI\structures\GetStaffImgURLRequest',
		'GetStaffImgURLResponse' => 'MindbodyAPI\structures\GetStaffImgURLResponse',
		'GetStaffImgURLResult' => 'MindbodyAPI\structures\GetStaffImgURLResult',
		'ValidateStaffLogin' => 'MindbodyAPI\structures\ValidateStaffLogin',
		'ValidateLoginRequest' => 'MindbodyAPI\structures\ValidateLoginRequest',
		'ValidateStaffLoginResponse' => 'MindbodyAPI\structures\ValidateStaffLoginResponse',
		'ValidateLoginResult' => 'MindbodyAPI\structures\ValidateLoginResult',
	);
	public function __construct($wsdl = null, $options = array()) {
		foreach ($this->classmap as $key => $value) {
			if (!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		if (isset($options['headers'])) {
			$this->__setSoapHeaders($options['headers']);
		}
		parent::__construct($wsdl ? : self::WSDL_FILE, $options);
	}
	/**
	 * Gets a list of staff members.
	 *
	 * @param GetStaff $parameters
	 * @return GetStaffResponse
	 */
	public function GetStaff(structures\GetStaff $parameters) {
		return $this->__soapCall('GetStaff', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of staff permissions based on the given staff member.
	 *
	 * @param GetStaffPermissions $parameters
	 * @return GetStaffPermissionsResponse
	 */
	public function GetStaffPermissions(structures\GetStaffPermissions $parameters) {
		return $this->__soapCall('GetStaffPermissions', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Add or update staff.
	 *
	 * @param AddOrUpdateStaff $parameters
	 * @return AddOrUpdateStaffResponse
	 */
	public function AddOrUpdateStaff(structures\AddOrUpdateStaff $parameters) {
		return $this->__soapCall('AddOrUpdateStaff', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a staff member's image URL if it exists.
	 *
	 * @param GetStaffImgURL $parameters
	 * @return GetStaffImgURLResponse
	 */
	public function GetStaffImgURL(structures\GetStaffImgURL $parameters) {
		return $this->__soapCall('GetStaffImgURL', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Validates a username and password. This method returns the staff on success.
	 *
	 * @param ValidateStaffLogin $parameters
	 * @return ValidateStaffLoginResponse
	 */
	public function ValidateStaffLogin(structures\ValidateStaffLogin $parameters) {
		return $this->__soapCall('ValidateStaffLogin', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
}
?>